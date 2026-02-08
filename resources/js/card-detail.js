/**
 * Card Detail Popup
 *
 * Desktop: hover shows popup, mouseleave hides it.
 *          Click "pins" the popup — it stays open until you click again.
 * Mobile:  click toggles popup with overlay.
 */

const MOBILE_BREAKPOINT = 768;

let overlay = null;
let activeWrapper = null;
let pinnedWrapper = null;
let hoverTimeout = null;

function createOverlay() {
  overlay = document.createElement("div");
  overlay.classList.add("card-detail-overlay");
  document.body.appendChild(overlay);

  overlay.addEventListener("click", () => {
    unpinAndClose();
  });
}

function isMobile() {
  return window.innerWidth < MOBILE_BREAKPOINT;
}

function showPopup(wrapper) {
  if (activeWrapper && activeWrapper !== wrapper) {
    activeWrapper.classList.remove("is-active");
  }

  activeWrapper = wrapper;
  wrapper.classList.add("is-active");

  if (isMobile() && overlay) {
    overlay.classList.add("is-active");
  }
}

function hidePopup(wrapper) {
  wrapper.classList.remove("is-active");
  if (activeWrapper === wrapper) {
    activeWrapper = null;
  }
}

function pinPopup(wrapper) {
  if (pinnedWrapper && pinnedWrapper !== wrapper) {
    pinnedWrapper.classList.remove("is-pinned", "is-active");
  }

  pinnedWrapper = wrapper;
  wrapper.classList.add("is-pinned", "is-active");

  if (isMobile() && overlay) {
    overlay.classList.add("is-active");
  }
}

function unpinAndClose() {
  if (pinnedWrapper) {
    pinnedWrapper.classList.remove("is-pinned", "is-active");
    pinnedWrapper = null;
  }
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

    // Click = pin/unpin
    trigger.addEventListener("click", (e) => {
      e.preventDefault();
      e.stopPropagation();

      if (pinnedWrapper === wrapper) {
        // Already pinned → unpin and close
        unpinAndClose();
      } else {
        // Pin this one
        pinPopup(wrapper);
      }
    });

    // Desktop hover (only if not pinned)
    wrapper.addEventListener("mouseenter", () => {
      if (isMobile()) return;
      clearTimeout(hoverTimeout);

      if (pinnedWrapper) return; // Don't override a pinned popup
      showPopup(wrapper);
    });

    wrapper.addEventListener("mouseleave", () => {
      if (isMobile()) return;

      if (pinnedWrapper === wrapper) return; // Pinned — don't close
      hoverTimeout = setTimeout(() => {
        if (activeWrapper === wrapper && pinnedWrapper !== wrapper) {
          hidePopup(wrapper);
        }
      }, 150);
    });
  });

  // Close on Escape
  document.addEventListener("keydown", (e) => {
    if (e.key === "Escape") {
      unpinAndClose();
    }
  });

  // Close pinned popup on click outside (except on popup links)
  document.addEventListener("click", (e) => {
    if (!pinnedWrapper) return;

    const popup = pinnedWrapper.querySelector(".card-detail-popup");
    const trigger = pinnedWrapper.querySelector("[data-card-detail]");

    // Don't close if clicking the trigger card (handled by its own listener)
    if (trigger && trigger.contains(e.target)) return;

    // Don't close if clicking inside the popup (allow link clicks etc.)
    if (popup && popup.contains(e.target)) return;

    unpinAndClose();
  });
}

export default initCardDetails;
