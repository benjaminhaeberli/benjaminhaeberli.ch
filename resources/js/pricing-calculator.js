/**
 * Pricing Calculator — Framer vs Sur-mesure
 * Vanilla JS, zero dependencies
 */

// ─── Pricing Data (CHF, Framer USD ~= CHF) ─────────────────

const PRICING = {
  framer: {
    plans: {
      basic: { monthly: 10, pages: 30, collections: 1 },
      pro: { monthly: 30, pages: 150, collections: 10 },
      scale: { monthly: 100, pages: 300, collections: 20 },
    },
    localePerMonth: 20,
    commerce: {
      plugin: 24, // Framer Commerce Elite (annual)
      shopify: 39, // Shopify Basic
    },
    setup: {
      simple: 500,
      medium: 1000,
      complex: 1500,
    },
  },
  kirby: {
    base: 2000,
    blog: 500,
    ecommerce: { small: 1000, medium: 1250, large: 1500 },
    perLanguage: 500,
    hostingPerMonth: 15,
    pageMultiplier: {
      "1-10": 1,
      "10-30": 1,
      "30-100": 1.3,
      "100+": 1.6,
    },
  },
};

const STEP_KEYS = [
  "siteType",
  "pageCount",
  "languages",
  "ecommerce",
  "updateFrequency",
  "budget",
];

// ─── State ──────────────────────────────────────────────────

let state = {
  currentStep: 1,
  answers: {},
  resultId: null,
};

let autoAdvanceTimer;

// ─── DOM References ─────────────────────────────────────────

let calculator, dots, steps, navPrev, navNext, navSubmit, navContainer;

// ─── Formatting ─────────────────────────────────────────────

function formatCHF(amount) {
  return (
    new Intl.NumberFormat("de-CH", {
      minimumFractionDigits: 0,
      maximumFractionDigits: 0,
    }).format(Math.round(amount)) + " CHF"
  );
}

// Inline SVG gradient + icons (Lucide)
const SVG_GRADIENT_DEFS = `<svg width="0" height="0" style="position:absolute"><defs><linearGradient id="calc-grad" x1="0%" y1="0%" x2="100%" y2="0%"><stop offset="0%" stop-color="rgb(236,72,153)"/><stop offset="100%" stop-color="rgb(234,179,8)"/></linearGradient></defs></svg>`;

const ICON_TRENDING_DOWN = `<svg class="inline-block align-middle ml-1 size-3.5" viewBox="0 0 24 24" fill="none" stroke="url(#calc-grad)" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="22 17 13.5 8.5 8.5 13.5 2 7"/><polyline points="16 17 22 17 22 11"/></svg>`;

const ICON_GRID = `<svg class="size-5 shrink-0" viewBox="0 0 24 24" fill="none" stroke="url(#calc-grad)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="18" height="18" x="3" y="3" rx="2"/><path d="M3 9h18"/><path d="M3 15h18"/><path d="M9 3v18"/><path d="M15 3v18"/></svg>`;

const ICON_SHELL = `<svg class="size-5 shrink-0" viewBox="0 0 24 24" fill="none" stroke="url(#calc-grad)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14 11a2 2 0 1 1-4 0 4 4 0 0 1 8 0 6 6 0 0 1-12 0 8 8 0 0 1 16 0 10 10 0 0 1-20 0c0-5.523 4.477-10 10-10"/></svg>`;

const ICON_LIGHTBULB = `<svg class="size-5 shrink-0" viewBox="0 0 24 24" fill="none" stroke="url(#calc-grad)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M15 14c.2-1 .7-1.7 1.5-2.5 1-.9 1.5-2.2 1.5-3.5A6 6 0 0 0 6 8c0 1 .2 2.2 1.5 3.5.7.7 1.3 1.5 1.5 2.5"/><path d="M9 18h6"/><path d="M10 22h4"/></svg>`;

// ─── Step Navigation ────────────────────────────────────────

function goToStep(target) {
  steps.forEach((s) => s.classList.remove("is-active"));

  const stepEl = calculator.querySelector(`[data-step="${target}"]`);
  if (stepEl) {
    stepEl.classList.add("is-active");
    state.currentStep = target;
    updateProgress();
    updateNav();
  }
}

function nextStep() {
  if (state.currentStep < 6) {
    goToStep(state.currentStep + 1);
  }
}

function prevStep() {
  if (state.currentStep > 1) {
    goToStep(state.currentStep - 1);
  }
}

function updateProgress() {
  dots.forEach((dot) => {
    const n = parseInt(dot.dataset.goto);
    dot.classList.toggle("is-active", n === state.currentStep);
    dot.classList.toggle("is-completed", n < state.currentStep);
  });
}

function updateNav() {
  const isFirst = state.currentStep === 1;
  const isLast = state.currentStep === 6;
  const isResults = state.currentStep === "results";
  const key = STEP_KEYS[state.currentStep - 1];
  const hasAnswer = key ? state.answers[key] != null : false;

  // Budget (step 6) is optional
  const canProceed = hasAnswer || isLast;

  navPrev.classList.toggle("invisible", isFirst || isResults);
  navNext.classList.toggle("hidden", isLast || isResults);
  navNext.disabled = !canProceed;
  navSubmit.classList.toggle("hidden", !isLast);
}

// ─── Option Selection ───────────────────────────────────────

function handleOptionClick(e) {
  const option = e.target.closest(".calculator-option");
  if (!option) return;

  const stepEl = option.closest(".calculator-step");
  const stepNum = parseInt(stepEl.dataset.step);
  const key = STEP_KEYS[stepNum - 1];

  // Deselect siblings, select this one
  stepEl
    .querySelectorAll(".calculator-option")
    .forEach((o) => o.classList.remove("is-selected"));
  option.classList.add("is-selected");

  state.answers[key] = option.dataset.value;
  updateNav();

  // Auto-advance after visual feedback
  clearTimeout(autoAdvanceTimer);
  autoAdvanceTimer = setTimeout(() => {
    if (stepNum < 6) {
      nextStep();
    } else {
      showResults();
    }
  }, 350);
}

// ─── Calculations ───────────────────────────────────────────

function getLanguageCount(answer) {
  const map = { none: 1, 2: 2, "3-5": 4, "5+": 6 };
  return map[answer] || 1;
}

function determineFramerPlan(answers) {
  const pages = answers.pageCount;
  const langs = getLanguageCount(answers.languages);
  const ecom = answers.ecommerce;

  if (pages === "100+" || langs > 10 || ecom === "large") return "scale";
  if (pages === "30-100" || langs > 2 || (ecom && ecom !== "none"))
    return "pro";
  if (
    answers.siteType === "blog" ||
    answers.siteType === "ecommerce" ||
    answers.siteType === "mixte"
  )
    return "pro";
  return "basic";
}

function determineSetupComplexity(answers) {
  const langs = getLanguageCount(answers.languages);
  const ecom = answers.ecommerce;
  const pages = answers.pageCount;

  if ((ecom && ecom !== "none") || langs >= 4 || pages === "100+")
    return "complex";
  if (
    answers.siteType === "blog" ||
    answers.siteType === "mixte" ||
    langs === 2 ||
    pages === "30-100"
  )
    return "medium";
  return "simple";
}

function calculateFramerCosts(answers) {
  const plan = determineFramerPlan(answers);
  const complexity = determineSetupComplexity(answers);
  const langs = getLanguageCount(answers.languages);
  const extraLocales = Math.max(0, langs - 1);

  const setup = PRICING.framer.setup[complexity];
  let monthly = PRICING.framer.plans[plan].monthly;
  monthly += extraLocales * PRICING.framer.localePerMonth;

  if (answers.ecommerce && answers.ecommerce !== "none") {
    monthly += PRICING.framer.commerce.plugin + PRICING.framer.commerce.shopify;
  }

  return { setup, monthly, plan, extraLocales };
}

function calculateKirbyCosts(answers) {
  let setup = PRICING.kirby.base;

  if (answers.siteType === "blog" || answers.siteType === "mixte") {
    setup += PRICING.kirby.blog;
  }

  if (answers.ecommerce && answers.ecommerce !== "none") {
    setup +=
      PRICING.kirby.ecommerce[answers.ecommerce] ||
      PRICING.kirby.ecommerce.medium;
  }

  const extraLangs = Math.max(0, getLanguageCount(answers.languages) - 1);
  setup += extraLangs * PRICING.kirby.perLanguage;

  const multiplier = PRICING.kirby.pageMultiplier[answers.pageCount] || 1;
  setup = Math.round(setup * multiplier);

  const monthly = PRICING.kirby.hostingPerMonth;

  return { setup, monthly };
}

function calculateProjection(framer, kirby) {
  return [1, 2, 3].map((y) => ({
    year: y,
    framer: framer.setup + framer.monthly * 12 * y,
    kirby: kirby.setup + kirby.monthly * 12 * y,
  }));
}

function generateRecommendation(answers, framer, kirby, projection) {
  const total3yFramer = projection[2].framer;
  const total3yKirby = projection[2].kirby;
  const diff = total3yFramer - total3yKirby;
  const ratio = total3yFramer / total3yKirby;

  // E-commerce or heavy multilingual → sur-mesure
  if (answers.ecommerce === "large" || answers.ecommerce === "medium") {
    return {
      winner: "kirby",
      title: "Sur-mesure",
      text: "Pour un projet e-commerce, une solution sur-mesure offre plus de flexibilité, de meilleures performances et aucune commission sur vos ventes.",
    };
  }

  if (getLanguageCount(answers.languages) >= 4) {
    return {
      winner: "kirby",
      title: "Sur-mesure",
      text: "Le multilingue est coûteux sur Framer (20 CHF/langue/mois). Sur 3 ans, une solution sur-mesure est nettement plus économique pour les sites multilingues.",
    };
  }

  // Strong cost advantage sur-mesure
  if (ratio > 1.3) {
    return {
      winner: "kirby",
      title: "Sur-mesure",
      text: `Sur 3 ans, la solution sur-mesure vous fait économiser ${formatCHF(diff)}. L'investissement initial est plus élevé mais l'absence d'abonnements coûteux compense rapidement.`,
    };
  }

  // Simple site → Framer
  if (
    answers.siteType === "vitrine" &&
    answers.pageCount === "1-10" &&
    (!answers.ecommerce || answers.ecommerce === "none") &&
    (!answers.languages || answers.languages === "none")
  ) {
    return {
      winner: "framer",
      title: "Framer",
      text: "Pour un site vitrine simple, Framer est une solution rapide et économique. Mise en ligne rapide et vous pouvez modifier le contenu facilement.",
    };
  }

  // Strong cost advantage Framer
  if (ratio < 0.77) {
    return {
      winner: "framer",
      title: "Framer",
      text: `Sur 3 ans, Framer revient ${formatCHF(Math.abs(diff))} moins cher qu'une solution sur-mesure, tout en offrant une mise en place plus rapide.`,
    };
  }

  // Close call
  let text =
    "L'écart de coût est faible sur 3 ans. Framer offre une mise en place plus rapide, tandis que le sur-mesure offre plus de contrôle et aucune dépendance à un abonnement.";

  if (
    answers.updateFrequency === "daily" ||
    answers.updateFrequency === "weekly"
  ) {
    text +=
      " Votre fréquence de mises à jour élevée plaide en faveur de Framer pour son interface d'édition intuitive.";
  }

  return {
    winner: "both",
    title: "Les deux solutions",
    text,
  };
}

// ─── Budget Warning ─────────────────────────────────────────

function getBudgetCeiling(answer) {
  const map = {
    "under-2k": 2000,
    "2k-5k": 5000,
    "5k-10k": 10000,
    "10k+": Infinity,
  };
  return map[answer] || null;
}

function generateBudgetWarning(answers, framer, kirby) {
  if (!answers.budget) return null;

  const ceiling = getBudgetCeiling(answers.budget);
  if (ceiling === null || ceiling === Infinity) return null;

  // Compare budget to the cheapest setup cost
  const cheapestSetup = Math.min(framer.setup, kirby.setup);

  if (cheapestSetup > ceiling) {
    return `Les estimations démarrent à ${formatCHF(cheapestSetup)} pour la mise en place, ce qui dépasse votre budget de ${formatCHF(ceiling)}. Un échange permettrait d'identifier ensemble les fonctionnalités prioritaires et d'adapter le projet à votre enveloppe.`;
  }

  // Check if only the more expensive option exceeds
  const mostExpensiveSetup = Math.max(framer.setup, kirby.setup);
  if (mostExpensiveSetup > ceiling && cheapestSetup <= ceiling) {
    return `L'une des deux options dépasse votre budget initial. Discutons-en pour trouver la solution la mieux adaptée à vos priorités et votre enveloppe.`;
  }

  return null;
}

// ─── Render Results ─────────────────────────────────────────

function showResults() {
  const framer = calculateFramerCosts(state.answers);
  const kirby = calculateKirbyCosts(state.answers);
  const projection = calculateProjection(framer, kirby);
  const recommendation = generateRecommendation(
    state.answers,
    framer,
    kirby,
    projection
  );

  renderResults(framer, kirby, projection, recommendation);
  goToStep("results");

  navContainer.classList.add("hidden");

  // Save results and get share URL
  saveResults(state.answers, framer, kirby, projection, recommendation);

  // Plausible analytics
  if (typeof plausible !== "undefined") {
    plausible("Calculator", {
      props: { plan: framer.plan, result: recommendation.winner },
    });
  }
}

async function saveResults(answers, framer, kirby, projection, recommendation) {
  try {
    const res = await fetch("/calculateur/save", {
      method: "POST",
      headers: { "Content-Type": "application/json" },
      body: JSON.stringify({
        answers,
        results: { framer, kirby, projection, recommendation },
      }),
    });
    const data = await res.json();
    if (data.id) {
      state.resultId = data.id;
      const url =
        window.location.origin + window.location.pathname + "?r=" + data.id;
      const input = calculator.querySelector("#share-url");
      if (input) input.value = url;
    }
  } catch (e) {
    // Share is nice-to-have, don't break on failure
  }
}

function renderResults(framer, kirby, projection, recommendation) {
  const resultsEl = calculator.querySelector('[data-step="results"]');
  const planLabels = { basic: "Basic", pro: "Pro", scale: "Scale" };
  const ctaUrl =
    calculator.dataset.ctaUrl ||
    "https://calendly.com/benjaminhaeberli/visioconference";
  const contactUrl =
    calculator.dataset.contactUrl || "https://tally.so/r/n08Eey";

  // Framer plan details
  let framerDetails = `Plan Framer ${planLabels[framer.plan]}`;
  if (framer.extraLocales > 0) {
    framerDetails += ` + ${framer.extraLocales} locale${framer.extraLocales > 1 ? "s" : ""}`;
  }
  if (state.answers.ecommerce && state.answers.ecommerce !== "none") {
    framerDetails += " + e-commerce (Shopify)";
  }

  // Budget warning
  const budgetWarning = generateBudgetWarning(state.answers, framer, kirby);

  // Projection rows
  const projectionRows = projection
    .map((p) => {
      const framerCheaper = p.framer < p.kirby;
      const kirbyCheaper = p.kirby < p.framer;
      return `
      <tr class="border-b border-neutral-50/5">
        <td class="py-2.5 px-4 text-left font-medium">${p.year} an${p.year > 1 ? "s" : ""}</td>
        <td class="py-2.5 px-4 text-right${framerCheaper ? " font-bold" : ""}">${formatCHF(p.framer)}${framerCheaper ? ICON_TRENDING_DOWN : ""}</td>
        <td class="py-2.5 px-4 text-right${kirbyCheaper ? " font-bold" : ""}">${formatCHF(p.kirby)}${kirbyCheaper ? ICON_TRENDING_DOWN : ""}</td>
      </tr>`;
    })
    .join("");

  resultsEl.innerHTML = `
    ${SVG_GRADIENT_DEFS}
    <h2 class="text-xl font-bold text-center sm:text-2xl">Votre comparatif personnalisé</h2>

    ${budgetWarning ? `<div class="p-5 rounded-xl border border-pink-500/30 bg-pink-500/5 text-sm leading-relaxed">${budgetWarning}</div>` : ""}

    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
      <div class="rounded-xl border border-neutral-50/10 overflow-hidden">
        <div class="flex items-center gap-3 px-5 py-4">
          ${ICON_GRID}
          <div class="flex flex-col gap-0.5">
            <span class="text-lg font-bold">Framer</span>
            <span class="text-sm text-neutral-300">Configuré par mes soins</span>
          </div>
        </div>
        <div class="flex flex-col gap-3 p-5">
          <div class="flex justify-between items-baseline">
            <span class="text-neutral-400">Mise en place</span>
            <span class="font-bold">${formatCHF(framer.setup)}</span>
          </div>
          <div class="flex justify-between items-baseline">
            <span class="text-neutral-400">Abonnement mensuel</span>
            <span class="font-bold">${formatCHF(framer.monthly)}/mois</span>
          </div>
          <p class="pt-2 border-t border-neutral-50/5 text-sm text-neutral-400">${framerDetails}</p>
        </div>
      </div>

      <div class="rounded-xl border border-neutral-50/10 overflow-hidden">
        <div class="flex items-center gap-3 px-5 py-4">
          ${ICON_SHELL}
          <div class="flex flex-col gap-0.5">
            <span class="text-lg font-bold">Sur-mesure</span>
            <span class="text-sm text-neutral-300">Développement dédié</span>
          </div>
        </div>
        <div class="flex flex-col gap-3 p-5">
          <div class="flex justify-between items-baseline">
            <span class="text-neutral-400">Développement</span>
            <span class="font-bold">${formatCHF(kirby.setup)}</span>
          </div>
          <div class="flex justify-between items-baseline">
            <span class="text-neutral-400">Hébergement mensuel</span>
            <span class="font-bold">${formatCHF(kirby.monthly)}/mois</span>
          </div>
          <p class="pt-2 border-t border-neutral-50/5 text-sm text-neutral-400">PHP/Kirby + hébergement Infomaniak</p>
        </div>
      </div>
    </div>

    <div class="flex flex-col gap-3 pt-2">
      <h3 class="text-lg font-bold">Projection sur 3 ans</h3>
      <table class="w-full text-sm">
        <thead>
          <tr>
            <th class="pb-2.5 px-4 text-left border-b border-neutral-50/15 text-neutral-400 font-semibold"></th>
            <th class="pb-2.5 px-4 text-right border-b border-neutral-50/15 text-neutral-400 font-semibold">Framer</th>
            <th class="pb-2.5 px-4 text-right border-b border-neutral-50/15 text-neutral-400 font-semibold">Sur-mesure</th>
          </tr>
        </thead>
        <tbody>${projectionRows}</tbody>
      </table>
    </div>

    <div class="flex flex-col gap-2 p-5 rounded-xl border border-neutral-50/10 bg-neutral-600/5">
      <h3 class="flex items-center gap-2 text-lg font-bold">
        ${ICON_LIGHTBULB}
        <span>Recommandation\u00a0: ${recommendation.title}</span>
      </h3>
      <p class="text-neutral-300">${recommendation.text}</p>
    </div>

    <div class="flex flex-wrap justify-center text-sm gap-x-6 gap-y-4 sm:text-base pt-2">
      <a href="${ctaUrl}" target="_blank"
         class="flex items-center px-4 py-2 font-bold rounded bg-linear-to-r from-pink-500/70 to-yellow-500/70 hover:from-pink-500/50 hover:to-yellow-500/50">
        Discutons de votre projet
      </a>
      <a href="${contactUrl}" target="_blank"
         class="flex items-center px-4 py-2 font-bold border-2 rounded border-neutral-50 hover:bg-neutral-100 hover:border-neutral-100 hover:text-neutral-800">
        Me contacter
      </a>
    </div>

    <div class="flex items-center gap-2 pt-4 max-w-md mx-auto w-full">
      <span class="text-sm text-neutral-400 shrink-0">Partager\u00a0:</span>
      <input id="share-url" type="text" value="${state.resultId ? window.location.origin + window.location.pathname + "?r=" + state.resultId : "Génération du lien..."}" readonly
             class="flex-1 min-w-0 px-3 py-2 rounded-lg bg-neutral-600/5 border border-neutral-50/10 text-sm text-neutral-300 cursor-text" />
      <button id="copy-url" class="px-3 py-2 rounded-lg border border-neutral-50/10 bg-neutral-600/5 hocus:bg-neutral-600/15 text-sm font-semibold transition-colors shrink-0">
        Copier
      </button>
    </div>

    <button id="calc-restart" class="text-sm text-neutral-400 hover:text-neutral-200 mx-auto pt-2">
      Recommencer le questionnaire
    </button>
  `;

  // Copy URL handler
  resultsEl.querySelector("#copy-url").addEventListener("click", () => {
    const input = resultsEl.querySelector("#share-url");
    navigator.clipboard.writeText(input.value).then(() => {
      const btn = resultsEl.querySelector("#copy-url");
      btn.textContent = "Copié !";
      setTimeout(() => (btn.textContent = "Copier"), 2000);
    });
  });

  // Restart handler
  resultsEl.querySelector("#calc-restart").addEventListener("click", restart);
}

function restart() {
  state.answers = {};
  state.resultId = null;
  state.currentStep = 1;
  calculator
    .querySelectorAll(".calculator-option")
    .forEach((o) => o.classList.remove("is-selected"));
  navContainer.classList.remove("hidden");
  // Clean URL param
  const url = new URL(window.location);
  url.searchParams.delete("r");
  history.replaceState(null, "", url);
  goToStep(1);
}

// ─── Init ───────────────────────────────────────────────────

// ─── Load shared result from URL ────────────────────────────

async function loadResultFromUrl() {
  const id = new URLSearchParams(window.location.search).get("r");
  if (!id) return;

  try {
    const res = await fetch("/calculateur/r/" + encodeURIComponent(id));
    if (!res.ok) return;
    const data = await res.json();

    state.answers = data.answers;
    state.resultId = id;

    renderResults(
      data.results.framer,
      data.results.kirby,
      data.results.projection,
      data.results.recommendation
    );
    goToStep("results");
    navContainer.classList.add("hidden");
  } catch (e) {
    // Invalid link — show questionnaire normally
  }
}

// ─── Init ───────────────────────────────────────────────────

export default function initPricingCalculator() {
  calculator = document.getElementById("calculator");
  if (!calculator) return;

  dots = calculator.querySelectorAll(".calculator-dot");
  steps = calculator.querySelectorAll(".calculator-step");
  navPrev = document.getElementById("calc-prev");
  navNext = document.getElementById("calc-next");
  navSubmit = document.getElementById("calc-submit");
  navContainer = document.getElementById("calculator-nav");

  // Option clicks (event delegation)
  calculator.addEventListener("click", handleOptionClick);

  // Navigation
  navPrev.addEventListener("click", prevStep);
  navNext.addEventListener("click", nextStep);
  navSubmit.addEventListener("click", showResults);

  // Progress dots — click to go back to completed steps
  dots.forEach((dot) => {
    dot.addEventListener("click", () => {
      const target = parseInt(dot.dataset.goto);
      if (target < state.currentStep) goToStep(target);
    });
  });

  updateProgress();
  updateNav();

  // Load shared result if URL has ?r= param
  loadResultFromUrl();
}
