/**
 * Card Detail Popup
 *
 * Desktop: show on hover, hide on mouseleave
 * Mobile: show/hide on click with overlay
 */

const MOBILE_BREAKPOINT = 768;

let overlay = null;
let activeWrapper = null;
let hoverTimeout = null;

function createOverlay() {
  overlay = document.createElement("div");
  overlay.classList.add("card-detail-overlay");
  document.body.appendChild(overlay);

  overlay.addEventListener("click", () => {
    closeActive();
  });
}

function isMobile() {
  return window.innerWidth < MOBILE_BREAKPOINT;
}

function openPopup(wrapper) {
  if (activeWrapper && activeWrapper !== wrapper) {
    closeActive();
  }

  activeWrapper = wrapper;
  wrapper.classList.add("is-active");

  if (isMobile() && overlay) {
    overlay.classList.add("is-active");
  }
}

function closeActive() {
  if (activeWrapper) {
    activeWrapper.classList.remove("is-active");
    activeWrapper = null;
  }

  if (overlay) {
    overlay.classList.remove("is-active");
  }
}

function initCardDetails() {
  createOverlay();

  const wrappers = document.querySelectorAll(".card-detail-wrapper");

  wrappers.forEach((wrapper) => {
    const trigger = wrapper.querySelector("[data-card-detail]");
    if (!trigger) return;

    // Click handler (mobile + fallback)
    trigger.addEventListener("click", (e) => {
      e.preventDefault();
      e.stopPropagation();

      if (activeWrapper === wrapper) {
        closeActive();
      } else {
        openPopup(wrapper);
      }
    });

    // Desktop hover
    wrapper.addEventListener("mouseenter", () => {
      if (isMobile()) return;
      clearTimeout(hoverTimeout);
      openPopup(wrapper);
    });

    wrapper.addEventListener("mouseleave", () => {
      if (isMobile()) return;
      hoverTimeout = setTimeout(() => {
        if (activeWrapper === wrapper) {
          closeActive();
        }
      }, 200);
    });
  });

  // Close on Escape
  document.addEventListener("keydown", (e) => {
    if (e.key === "Escape") {
      closeActive();
    }
  });
}

export default initCardDetails;
