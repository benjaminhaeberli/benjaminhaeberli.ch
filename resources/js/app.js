import ScrollReveal from "scrollreveal";

console.log(
  "ℹ️ This website uses JavaScript to anonymously analyse user traffic using Plausible (https://plausible.io/)"
);
console.log("🇨🇭 Developed by Benjamin Haeberli (https://benjaminhaeberli.ch)");

ScrollReveal().reveal(".to-reveal", {
  duration: 650,
  interval: 200,
  origin: "left",
  distance: "48px",
});
