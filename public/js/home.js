document.addEventListener("DOMContentLoaded", () => {
    const navbar = document.querySelector(".navbar-ats");
    const toggle = document.querySelector(".nav-toggle");

    if (toggle && navbar) {
        toggle.addEventListener("click", () => {
            const isOpen = navbar.classList.toggle("is-open");
            toggle.setAttribute("aria-expanded", String(isOpen));
        });
    }

    document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
        anchor.addEventListener("click", (event) => {
            const targetId = anchor.getAttribute("href");
            if (!targetId || targetId === "#") {
                return;
            }

            const target = document.querySelector(targetId);
            if (!target) {
                return;
            }

            event.preventDefault();
            target.scrollIntoView({ behavior: "smooth", block: "start" });

            if (navbar?.classList.contains("is-open")) {
                navbar.classList.remove("is-open");
                toggle?.setAttribute("aria-expanded", "false");
            }
        });
    });

    const revealItems = document.querySelectorAll("[data-reveal]");
    if ("IntersectionObserver" in window) {
        const observer = new IntersectionObserver(
            (entries) => {
                entries.forEach((entry) => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add("is-visible");
                        observer.unobserve(entry.target);
                    }
                });
            },
            { threshold: 0.12 }
        );

        revealItems.forEach((item) => observer.observe(item));
    } else {
        revealItems.forEach((item) => item.classList.add("is-visible"));
    }
});
