const header = document.querySelector("[data-header]");
const nav = document.querySelector("[data-nav]");
const menuToggle = document.querySelector("[data-menu-toggle]");
const revealItems = document.querySelectorAll(".reveal");

function updateHeader() {
  header.classList.toggle("is-scrolled", window.scrollY > 24);
}

updateHeader();
window.addEventListener("scroll", updateHeader, { passive: true });

menuToggle.addEventListener("click", () => {
  const isOpen = nav.classList.toggle("is-open");
  menuToggle.classList.toggle("is-open", isOpen);
  header.classList.toggle("menu-open", isOpen);
  menuToggle.setAttribute("aria-expanded", String(isOpen));
});

nav.querySelectorAll("a").forEach((link) => {
  link.addEventListener("click", () => {
    nav.classList.remove("is-open");
    menuToggle.classList.remove("is-open");
    header.classList.remove("menu-open");
    menuToggle.setAttribute("aria-expanded", "false");
  });
});

const observer = new IntersectionObserver(
  (entries) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        entry.target.classList.add("is-visible");
        observer.unobserve(entry.target);
      }
    });
  },
  {
    threshold: 0.16,
    rootMargin: "0px 0px -70px 0px",
  }
);

revealItems.forEach((item) => observer.observe(item));

document.querySelectorAll(".tab").forEach((tab) => {
  tab.addEventListener("click", () => {
    document.querySelectorAll(".tab").forEach((item) => item.classList.remove("active"));
    tab.classList.add("active");
  });
});

const testimonialSlider = document.querySelector("[data-testimonial-slider]");

if (testimonialSlider) {
  const track = testimonialSlider.querySelector("[data-testimonial-track]");
  const prev = testimonialSlider.querySelector("[data-testimonial-prev]");
  const next = testimonialSlider.querySelector("[data-testimonial-next]");
  const cards = track.querySelectorAll(".testimonial-card");
  let currentIndex = 0;
  let dragStartX = 0;
  let isDragging = false;

  function visibleCount() {
    return window.matchMedia("(max-width: 920px)").matches ? 1 : 3;
  }

  function updateTestimonials() {
    const maxIndex = Math.max(cards.length - visibleCount(), 0);
    currentIndex = Math.min(currentIndex, maxIndex);
    const cardWidth = cards[0].getBoundingClientRect().width;
    const gap = parseFloat(getComputedStyle(track).columnGap) || 0;
    track.style.transform = `translateX(-${currentIndex * (cardWidth + gap)}px)`;
  }

  next.addEventListener("click", () => {
    const maxIndex = Math.max(cards.length - visibleCount(), 0);
    currentIndex = currentIndex >= maxIndex ? 0 : currentIndex + 1;
    updateTestimonials();
  });

  prev.addEventListener("click", () => {
    const maxIndex = Math.max(cards.length - visibleCount(), 0);
    currentIndex = currentIndex <= 0 ? maxIndex : currentIndex - 1;
    updateTestimonials();
  });

  function pointerX(event) {
    return event.touches ? event.touches[0].clientX : event.clientX;
  }

  function startDrag(event) {
    isDragging = true;
    dragStartX = pointerX(event);
    testimonialSlider.classList.add("is-dragging");
  }

  function endDrag(event) {
    if (!isDragging) return;
    const dragDistance = pointerX(event) - dragStartX;
    const maxIndex = Math.max(cards.length - visibleCount(), 0);

    if (Math.abs(dragDistance) > 50) {
      if (dragDistance < 0) {
        currentIndex = currentIndex >= maxIndex ? 0 : currentIndex + 1;
      } else {
        currentIndex = currentIndex <= 0 ? maxIndex : currentIndex - 1;
      }
      updateTestimonials();
    }

    isDragging = false;
    testimonialSlider.classList.remove("is-dragging");
  }

  testimonialSlider.addEventListener("mousedown", startDrag);
  testimonialSlider.addEventListener("mouseup", endDrag);
  testimonialSlider.addEventListener("mouseleave", endDrag);
  testimonialSlider.addEventListener("touchstart", startDrag, { passive: true });
  testimonialSlider.addEventListener("touchend", endDrag);

  window.addEventListener("resize", updateTestimonials, { passive: true });
  updateTestimonials();
}
