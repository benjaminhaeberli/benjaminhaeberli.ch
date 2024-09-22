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

      const copyElements = button.querySelectorAll("[data-code=copy]");
      const copiedElements = button.querySelectorAll("[data-code=copied]");

      copyElements.forEach((i) => i.classList.add("hidden"));
      copiedElements.forEach((i) => i.classList.remove("hidden"));

      setTimeout(() => {
        copyElements.forEach((i) => i.classList.remove("hidden"));
        copiedElements.forEach((i) => i.classList.add("hidden"));
      }, 1000);
    } catch (err) {
      console.error("Error copying code: " + err);
    }
  },
};
export default kirbyjs;
