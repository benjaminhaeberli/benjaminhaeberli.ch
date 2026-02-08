import ScrollReveal from "scrollreveal";
import kirbyjs from "./kirbyjs";
import initCardDetails from "./card-detail";

console.log(
  "ℹ️ This website uses JavaScript to anonymously analyse user traffic using Plausible (https://plausible.io/)"
);
console.log("🇨🇭 Developed by Benjamin Haeberli (https://benjaminhaeberli.ch)");

// ScrollReveal().reveal(".to-reveal", {
//   duration: 800,
//   interval: 50,
//   origin: "top",
//   distance: "48px",
// });

// window.document.addEventListener("DOMContentLoaded", function () {
//   window.document.body.addEventListener("click", function (event) {
//     if (event.target.matches("button[data-code-id]")) {
//       kirbyjs.copyCodeBlock(event.target);
//     }
//   });
// });

document.addEventListener("DOMContentLoaded", function () {
  initCardDetails();
});
