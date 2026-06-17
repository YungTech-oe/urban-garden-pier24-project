
// Nav scroll
window.addEventListener("scroll", () => {
    document
        .getElementById("mainNav")
        .classList.toggle("scrolled", window.scrollY > 80);
});

// Drawer
function openDrawer() {
    document.getElementById("mobileDrawer").classList.add("open");
    document.getElementById("drawerOverlay").classList.add("open");
    document.getElementById("hamburgerBtn").classList.add("open");
    document.body.style.overflow = "hidden";
}
function closeDrawer() {
    document.getElementById("mobileDrawer").classList.remove("open");
    document.getElementById("drawerOverlay").classList.remove("open");
    document.getElementById("hamburgerBtn").classList.remove("open");
    document.body.style.overflow = "";
}
document.getElementById("hamburgerBtn").addEventListener("click", () => {
    document.getElementById("mobileDrawer").classList.contains("open")
        ? closeDrawer()
        : openDrawer();
});

// Venue tab selector
function selectVenue(btn, venue) {
    document
        .querySelectorAll(".venue-tab")
        .forEach((t) => t.classList.remove("active"));
    btn.classList.add("active");
    document.getElementById("selectedVenue").value = venue;
}

// Guest stepper
let guests = 20;
function adjustGuests(delta) {
    guests = Math.max(1, Math.min(450, guests + delta));
    document.getElementById("guestCount").textContent = guests;
}

// FAQ accordion
function toggleFaq(item) {
    const isOpen = item.classList.contains("open");
    document
        .querySelectorAll(".faq-item.open")
        .forEach((i) => i.classList.remove("open"));
    if (!isOpen) item.classList.add("open");
}

// Form submit
function submitForm() {
    const required = [
        "firstName",
        "lastName",
        "email",
        "eventType",
        "eventDate",
    ];
    let valid = true;
    required.forEach((id) => {
        const el = document.getElementById(id);
        if (!el.value.trim()) {
            el.style.borderColor = "#c0392b";
            el.addEventListener("input", () => (el.style.borderColor = ""), {
                once: true,
            });
            valid = false;
        }
    });
    if (!valid) {
        const first = required.find(
            (id) => !document.getElementById(id).value.trim(),
        );
        document.getElementById(first).focus();
        return;
    }
    document.getElementById("contactForm").style.display = "none";
    document.getElementById("formSuccess").classList.add("show");
    window.scrollTo({
        top: document.getElementById("enquiry").offsetTop - 80,
        behavior: "smooth",
    });
}

function resetForm() {
    document.getElementById("contactForm").style.display = "block";
    document.getElementById("formSuccess").classList.remove("show");
    document
        .getElementById("contactForm")
        .querySelectorAll("input, select, textarea")
        .forEach((el) => {
            if (el.type !== "hidden") el.value = "";
        });
    guests = 20;
    document.getElementById("guestCount").textContent = 20;
}

// Set min date to today
const dateInput = document.getElementById("eventDate");
const today = new Date().toISOString().split("T")[0];
dateInput.setAttribute("min", today);
