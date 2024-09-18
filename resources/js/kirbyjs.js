const kirbyjs = {
  async copyCodeBlock(button) {
    const id = button.getAttribute("data-code-id");
    const codeElement = document.getElementById("code-" + id);

    if (!codeElement) {
      console.error("Code element not found for id: " + id);
      return;
    }

    const code = codeElement.textContent;

    if (!navigator.clipboard) {
      console.error("Clipboard API not supported.");
      return;
    }

    try {
      await navigator.clipboard.writeText(code);

      const copyIcon = button.querySelector("[data-icon=copy-icon]");
      const copiedIcon = button.querySelector("[data-icon=copied-icon]");

      copyIcon.classList.add("hidden");
      copiedIcon.classList.remove("hidden");

      setTimeout(() => {
        copyIcon.classList.remove("hidden");
        copiedIcon.classList.add("hidden");
      }, 1000);
    } catch (err) {
      console.error("Error copying code: " + err);
    }
  },
};
export default kirbyjs;
