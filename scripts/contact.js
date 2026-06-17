// ═══════════════════════════════════════════════════════════════════
//  URBAN GARDEN & PIER24 — contact.js
// ═══════════════════════════════════════════════════════════════════


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

// Guest stepper
let guests = 20;

function adjustGuests(delta) {
    guests = Math.max(1, Math.min(450, guests + delta));
    document.getElementById("guestCount").value = guests;
}

function syncGuestsFromInput(el) {
    const val = parseInt(el.value, 10);
    if (!isNaN(val)) guests = Math.max(1, Math.min(450, val));
}

function clampGuestsOnBlur(el) {
    const val = parseInt(el.value, 10);
    guests = isNaN(val) || val < 1 ? 1 : val > 450 ? 450 : val;
    el.value = guests;
}

// FAQ accordion
function toggleFaq(item) {
    const isOpen = item.classList.contains("open");
    document
        .querySelectorAll(".faq-item.open")
        .forEach((i) => i.classList.remove("open"));
    if (!isOpen) item.classList.add("open");
}

// ── Set min date to today ──
const dateInput = document.getElementById('eventDate');
if (dateInput) {
    const today = new Date().toISOString().split('T')[0];
    dateInput.setAttribute('min', today);
}

// ── Generate unique enquiry reference ──
function generateRef() {
    const now = new Date();
    const yy = now.getFullYear().toString().slice(-2);
    const mm = String(now.getMonth() + 1).padStart(2, '0');
    const dd = String(now.getDate()).padStart(2, '0');
    const rand = Math.floor(1000 + Math.random() * 9000);
    return `UGP-${yy}${mm}${dd}-${rand}`;
}

// ── Toggle submit button loading state ──
function setLoading(on) {
    const btn = document.getElementById('submitBtn');
    const text = document.getElementById('submitBtnText');
    const loader = document.getElementById('submitBtnLoader');
    btn.disabled = on;
    text.style.display = on ? 'none' : 'inline';
    loader.style.display = on ? 'inline' : 'none';
}

// ═══════════════════════════════════════════════════════════════════
//  SUBMIT — POSTs to send_booking.php which runs PHPMailer
// ═══════════════════════════════════════════════════════════════════
async function submitForm() {

    // 1. Validate required fields
    const required = ['firstName', 'lastName', 'email', 'eventType', 'eventDate'];
    let valid = true;

    required.forEach(id => {
        const el = document.getElementById(id);
        if (!el || !el.value.trim()) {
            if (el) {
                el.style.borderColor = '#c0392b';
                el.addEventListener('input', () => el.style.borderColor = '', { once: true });
            }
            valid = false;
        }
    });

    if (!valid) {
        const first = required.find(id => {
            const el = document.getElementById(id);
            return !el || !el.value.trim();
        });
        if (first) document.getElementById(first).focus();
        return;
    }

    // 2. Collect form data
    const firstName = document.getElementById('firstName').value.trim();
    const lastName = document.getElementById('lastName').value.trim();
    const email = document.getElementById('email').value.trim();
    const phone = (document.getElementById('phone')?.value.trim()) || 'Not provided';
    const eventType = document.getElementById('eventType').value;
    const eventDate = document.getElementById('eventDate').value;
    const source = (document.getElementById('source')?.value) || 'Not specified';
    const message = (document.getElementById('message')?.value.trim()) || '';
    const venue = document.getElementById('eventVenue').value;
    const dateStatus = document.getElementById('dateStatus').value; // always "pending"
    const enquiryRef = generateRef();

    // Collect checked extras (if the extras section is visible)
    const extraBoxes = document.querySelectorAll('.extra-item input[type="checkbox"]:checked');
    const extras = extraBoxes.length
        ? Array.from(extraBoxes).map(cb => cb.value).join(', ')
        : 'None selected';

    // 3. Show loading
    setLoading(true);
    document.getElementById('submitError').style.display = 'none';

    // 4. Build payload for send_booking.php
    const payload = new FormData();
    payload.append('firstName', firstName);
    payload.append('lastName', lastName);
    payload.append('email', email);
    payload.append('phone', phone);
    payload.append('eventType', eventType);
    payload.append('eventDate', eventDate);
    payload.append('guests', guests);
    payload.append('eventVenue', venue);
    payload.append('extras', extras);
    payload.append('message', message);
    payload.append('source', source);
    payload.append('dateStatus', dateStatus);
    payload.append('enquiryRef', enquiryRef);

    try {
        // 5. POST to PHP mailer handler
        const res = await fetch('../include/send_booking.php', { method: 'POST', body: payload });
        const data = await res.json();

        if (data.success) {
            // 6. Show success
            setLoading(false);
            document.getElementById('confirmEmail').textContent = email;
            document.getElementById('enquiryRef').textContent = enquiryRef;
            document.getElementById('contactForm').style.display = 'none';
            document.getElementById('formSuccess').classList.add('show');
            window.scrollTo({
                top: document.getElementById('enquiry').offsetTop - 80,
                behavior: 'smooth'
            });
        } else {
            throw new Error(data.message || 'Server error');
        }

    } catch (err) {
        setLoading(false);
        console.error('Submission error:', err);
        document.getElementById('submitError').style.display = 'block';
    }
}


// ── Reset form ──
function resetForm() {
    document.getElementById('contactForm').style.display = 'block';
    document.getElementById('formSuccess').classList.remove('show');
    document.getElementById('contactForm')
        .querySelectorAll('input, select, textarea')
        .forEach(el => { if (el.type !== 'hidden') el.value = ''; });
    guests = 20;
    document.getElementById('guestCount').textContent = 20;
    document.getElementById('submitError').style.display = 'none';
    setLoading(false);
}
