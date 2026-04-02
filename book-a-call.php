<?php
$bookCallSettings = array_merge([
    'section_classes' => 'bac-section ptb-100 position-relative z-1',
    'section_id' => null,
    'background_image' => 'assets/image/websitedevlopment/contact-bg.webp',
    'image_src' => 'assets/image/websitedevlopment/contact-man.webp',
    'image_alt' => 'Book a call illustration',
    'image_classes' => 'img-fluid bac-image position-absolute pe-none z-n1 d-none d-lg-block',
    'eyebrow' => 'Contact Us',
    'title' => 'Need a Project Discussion?',
    'phone_label' => 'Call Us at:',
    'phone_number' => '+91 8080 80 3374',
    'benefits_title' => 'Your Benefits:',
    'benefit_box_classes' => 'bac-benefits dp-r-10 p-3 rounded-4 border',
    'row_classes' => 'row justify-content-between g-4',
    'left_col_classes' => 'col-lg-6 col-xl-5',
    'right_col_classes' => 'col-lg-6 col-xl-5',
    'card_shell_classes' => 'bac-card-shell bg-white shadow-sm px-4 py-5 rounded-3',
    'benefits' => [
        'Custom Solutions',
        'Expert Advice',
        'Quick Delivery',
        'Affordable Pricing',
        'Modern Tools',
        '24/7 Support',
        'SEO Friendly Structure',
        'Mobile Responsive Design',
        'Fast Loading Performance',
        'Conversion Focused',
    ],
], isset($bookCallSettings) && is_array($bookCallSettings) ? $bookCallSettings : []);

$bookCallStatus = null;
if (session_status() === PHP_SESSION_ACTIVE) {
    $bookCallStatus = $_SESSION['book_call_status'] ?? null;
    unset($_SESSION['book_call_status']);
}

if (!defined('BOOK_A_CALL_COMPONENT_STYLES')) {
    define('BOOK_A_CALL_COMPONENT_STYLES', true);
    ?>
<style>
.bac-status-alert {
    max-width: 1180px;
    margin: 24px auto 0;
    padding: 14px 18px;
    border-radius: 14px;
    font-size: 15px;
    line-height: 1.5;
}

.bac-status-alert.success {
    background: #eaf8ef;
    border: 1px solid #b8e2c3;
    color: #146c2e;
}
a:hover, .btn-link:hover {
    color: #000000;
    text-decoration: none;
}
.bac-status-alert.error {
    background: #fff1f1;
    border: 1px solid #f0b9b9;
    color: #9c1d1d;
}

.bac-section {
    background-repeat: no-repeat;
    background-position: center;
    background-size: cover;
}

.bac-image {
    bottom: 0;
    left: 50%;
    transform: translateX(-50%);
    max-height: 92%;
}

.bac-card-shell {
    width: 100%;
    max-width: 430px;
    margin-left: auto;
    margin-right: auto;
    position: relative;
    inset: auto;
}

.bac-card-shell .eep-calendar-card {
    width: 100%;
}

.bac-card-shell .eep-calendar-head {
    margin-bottom: 12px;
}

.bac-card-shell .eep-calendar-title-row {
    display: inline-flex;
    align-items: center;
    gap: 10px;
    flex-wrap: nowrap;
}

.bac-card-shell .eep-calendar-title {
    margin: 0;
    font-size: 24px;
    white-space: nowrap;
}

.bac-card-shell .eep-calendar-sub {
    font-size: 13px;
}

.bac-card-shell .eep-calendar-box {
    padding: 12px;
}

.bac-card-shell .eep-month-label {
    font-size: 16px;
}

.bac-card-shell .eep-calendar-week {
    gap: 4px;
    font-size: 10px;
}

.bac-card-shell .eep-calendar-grid {
    gap: 4px;
}

.bac-card-shell .eep-calendar-empty,
.bac-card-shell .eep-calendar-day {
    height: 34px;
}

.bac-card-shell .eep-calendar-day {
    font-size: 12px;
}

.bac-card-shell .eep-calendar-info {
    grid-template-columns: 1fr 1fr;
    gap: 8px;
    margin-top: 12px;
}

.bac-card-shell .eep-selected-date,
.bac-card-shell .eep-time-trigger {
    padding: 10px 11px;
    border-radius: 13px;
    font-size: 13px;
}

.bac-card-shell .eep-pill-icon {
    width: 30px;
    height: 30px;
    border-radius: 9px;
}

.bac-card-shell .eep-selected-date-text,
.bac-card-shell .eep-time-text {
    font-size: 12px;
}

.bac-card-shell .eep-time-grid {
    grid-template-columns: repeat(2, minmax(0, 1fr));
}

.bac-card-shell .eep-time-option {
    padding: 8px 7px;
    font-size: 11px;
}

.bac-card-shell .eep-calendar-actions {
    grid-template-columns: 1fr;
    margin-top: 10px;
}

.bac-card-shell .eep-btn-green {
    justify-content: center;
    padding: 12px 12px;
    font-size: 13px;
    border-radius: 13px;
}

.bac-benefits {
    background: rgba(255, 255, 255, 0.25);
}

.bac-book-modal {
    position: fixed;
    inset: 0;
    z-index: 9999;
    display: none;
    align-items: center;
    justify-content: center;
    padding: 20px;
    background: rgba(7, 15, 43, 0.72);
}

.bac-book-modal.show {
    display: flex;
}

.bac-book-modal-dialog {
    width: 100%;
    max-width: 520px;
    background: #ffffff;
    border-radius: 24px;
    box-shadow: 0 24px 80px rgba(15, 23, 42, 0.24);
    overflow: hidden;
}

.bac-book-modal-head {
    display: flex;
    align-items: flex-start;
    justify-content: space-between;
    gap: 16px;
    padding: 24px 24px 12px;
}

.bac-book-modal-head h3 {
    margin: 0 0 6px;
    font-size: 28px;
    line-height: 1.2;
    color: #101828;
}

.bac-book-modal-head p {
    margin: 0;
    color: #475467;
}

.bac-book-close {
    border: 0;
    width: 40px;
    height: 40px;
    border-radius: 999px;
    background: #f3f4f6;
    color: #111827;
    font-size: 28px;
    line-height: 1;
}

.bac-book-form {
    padding: 0 24px 24px;
}

.bac-book-summary {
    padding: 14px 16px;
    margin-bottom: 18px;
    border-radius: 16px;
    background: #f5f9ff;
    border: 1px solid #dbe7ff;
    color: #12315f;
    font-size: 14px;
}

.bac-book-field {
    margin-bottom: 16px;
}

.bac-book-field label {
    display: block;
    margin-bottom: 8px;
    font-size: 14px;
    font-weight: 600;
    color: #111827;
}

.bac-book-field input,
.bac-book-field textarea {
    width: 100%;
    border: 1px solid #d0d5dd;
    border-radius: 14px;
    padding: 0 16px;
    font-size: 15px;
    color: #101828;
    outline: none;
    font-family: inherit;
}

.bac-book-field input {
    height: 50px;
}

.bac-book-field textarea {
    min-height: 110px;
    padding: 14px 16px;
    resize: vertical;
}

.bac-book-field input:focus,
.bac-book-field textarea:focus {
    border-color: #16a34a;
    box-shadow: 0 0 0 4px rgba(22, 163, 74, 0.12);
}

.bac-book-submit {
    width: 100%;
    border: 0;
    border-radius: 14px;
    background: linear-gradient(135deg, #16a34a, #15803d);
    color: #ffffff;
    font-size: 16px;
    font-weight: 700;
    padding: 14px 18px;
}

.bac-calendar-day[disabled],
.bac-time-option[disabled] {
    opacity: 0.35;
    cursor: not-allowed;
    pointer-events: none;
}

@media (max-width: 1199px) {
    .bac-card-shell {
        max-width: 390px;
    }
}

@media (max-width: 991px) {
    .bac-image {
        display: none !important;
    }
}

@media (max-width: 576px) {
    .bac-card-shell {
        max-width: 100%;
    }
    .bac-section {
    background-repeat: no-repeat;
    background-position: right;
    background-size: cover;
}

    .bac-card-shell .eep-calendar-title {
        font-size: 22px;
        white-space: normal;
    }

    .bac-card-shell .eep-calendar-title-row {
        flex-wrap: wrap;
    }

    .bac-card-shell .eep-calendar-info {
        grid-template-columns: 1fr;
    }

    .bac-book-modal-dialog {
        border-radius: 18px;
    }

    .bac-book-modal-head {
        padding: 20px 20px 12px;
    }

    .bac-book-modal-head h3 {
        font-size: 22px;
    }

    .bac-book-form {
        padding: 0 20px 20px;
    }
}
</style>
<?php
}
?>

<?php if ($bookCallStatus): ?>
<div class="bac-status-alert <?php echo htmlspecialchars($bookCallStatus['type']); ?>">
    <?php echo htmlspecialchars($bookCallStatus['message']); ?>
</div>
<?php endif; ?>

<section
    class="<?php echo htmlspecialchars($bookCallSettings['section_classes']); ?>"
    <?php if (!empty($bookCallSettings['section_id'])): ?>id="<?php echo htmlspecialchars($bookCallSettings['section_id']); ?>"<?php endif; ?>
    style="background-image: url('<?php echo htmlspecialchars($bookCallSettings['background_image']); ?>');">
    <img src="<?php echo htmlspecialchars($bookCallSettings['image_src']); ?>"
        alt="<?php echo htmlspecialchars($bookCallSettings['image_alt']); ?>"
        class="<?php echo htmlspecialchars($bookCallSettings['image_classes']); ?>">
    <div class="container">
        <div class="<?php echo htmlspecialchars($bookCallSettings['row_classes']); ?>">
            <div class="<?php echo htmlspecialchars($bookCallSettings['left_col_classes']); ?>">
                <div class="d-inline-block py-1 rounded-pill border mb-3">
                    <p class="ma-warning-text fw-bold mb-0"><?php echo htmlspecialchars($bookCallSettings['eyebrow']); ?></p>
                </div>
                <h2 class="ail-title text-white fs-48 fw-600 mb-4"><?php echo htmlspecialchars($bookCallSettings['title']); ?></h2>
                <p class="text-white fs-24 fw-medium mb-5">
                    <?php echo htmlspecialchars($bookCallSettings['phone_label']); ?>
                    <?php echo htmlspecialchars($bookCallSettings['phone_number']); ?>
                </p>
                <h6 class="text-white fs-20 fw-medium mb-2"><?php echo htmlspecialchars($bookCallSettings['benefits_title']); ?></h6>
                <div class="<?php echo htmlspecialchars($bookCallSettings['benefit_box_classes']); ?>">
                    <ul class="list-unstyled d-flex flex-wrap list-two-col mb-0">
                        <?php foreach ($bookCallSettings['benefits'] as $benefit): ?>
                        <li class="py-1 text-white"><i class="far fa-check-circle me-2 text-primary"></i><?php echo htmlspecialchars($benefit); ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
            <div class="<?php echo htmlspecialchars($bookCallSettings['right_col_classes']); ?>">
                <div class="<?php echo htmlspecialchars($bookCallSettings['card_shell_classes']); ?>">
                    <div class="eep-calendar-card">
                        <div class="eep-calendar-head">
                            <div>
                                <div class="eep-calendar-title-row">
                                    <div class="eep-calendar-icon">
                                        <i class="fa-solid fa-calendar-days"></i>
                                    </div>
                                    <h2 class="eep-calendar-title">Book A Call With Us</h2>
                                </div>
                                <p class="eep-calendar-sub pt-2">
                                    Pick a date and time to connect with one of our expert team members
                                </p>
                            </div>
                        </div>

                        <div class="eep-calendar-box">
                            <div class="eep-calendar-nav">
                                <button id="prevMonth" class="eep-cal-btn" type="button">&#8249;</button>
                                <div id="monthLabel" class="eep-month-label">March 2026</div>
                                <button id="nextMonth" class="eep-cal-btn" type="button">&#8250;</button>
                            </div>

                            <div class="eep-calendar-week">
                                <span>Sun</span>
                                <span>Mon</span>
                                <span>Tue</span>
                                <span>Wed</span>
                                <span>Thu</span>
                                <span>Fri</span>
                                <span>Sat</span>
                            </div>

                            <div id="calendarGrid" class="eep-calendar-grid"></div>
                        </div>

                        <div class="eep-calendar-info">
                            <div id="selectedDatePill" class="eep-selected-date">
                                <span class="eep-pill-icon">
                                    <i class="fa-solid fa-calendar-check"></i>
                                </span>
                                <span id="selectedDateText" class="eep-selected-date-text">Select date</span>
                            </div>

                            <div class="eep-time-picker-wrap">
                                <button id="timeTrigger" class="eep-time-trigger disabled" type="button">
                                    <span class="eep-pill-icon">
                                        <i class="fa-solid fa-clock"></i>
                                    </span>
                                    <span id="selectedTimeText" class="eep-time-text">Select Time</span>
                                    <i class="fa-solid fa-chevron-down"></i>
                                </button>

                                <div id="timeDropdown" class="eep-time-dropdown">
                                    <div id="timeGrid" class="eep-time-grid"></div>
                                </div>
                            </div>
                        </div>

                        <div class="eep-calendar-actions text-center">
                            <a href="#book-call" class="eep-btn-green" id="bookCallBtn">
                                <i class="fa-solid fa-calendar-plus"></i>
                                Book A Call With Us
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="bac-book-modal" id="bookCallModal" aria-hidden="true">
    <div class="bac-book-modal-dialog">
        <div class="bac-book-modal-head">
            <div>
                <h3>Schedule Your Call</h3>
                <p>Fill your details and we will confirm your booked slot.</p>
            </div>
            <button type="button" class="bac-book-close" id="bookCallClose" aria-label="Close">&times;</button>
        </div>

        <form class="bac-book-form" action="book-call-handler.php" method="post">
            <div class="bac-book-summary">
                <strong>Date:</strong> <span id="modalSelectedDate">Not selected</span><br>
                <strong>Time:</strong> <span id="modalSelectedTime">Not selected</span>
            </div>

            <input type="hidden" name="booking_date" id="bookingDateInput">
            <input type="hidden" name="booking_time" id="bookingTimeInput">

            <div class="bac-book-field">
                <label for="bookCallName">Name</label>
                <input type="text" id="bookCallName" name="name" placeholder="Enter your name" required>
            </div>

            <div class="bac-book-field">
                <label for="bookCallEmail">Email</label>
                <input type="email" id="bookCallEmail" name="email" placeholder="Enter your email" required>
            </div>

            <div class="bac-book-field">
                <label for="bookCallPhone">Number</label>
                <input type="tel" id="bookCallPhone" name="phone" placeholder="Enter your number" required>
            </div>

            <div class="bac-book-field">
                <label for="bookCallAgenda">Meeting Agenda</label>
                <textarea id="bookCallAgenda" name="meeting_agenda" placeholder="Enter your meeting agenda" rows="4" required></textarea>
            </div>

            <button type="submit" class="bac-book-submit">Submit Booking</button>
        </form>
    </div>
</div>

<?php
if (!defined('BOOK_A_CALL_COMPONENT_SCRIPT')) {
    define('BOOK_A_CALL_COMPONENT_SCRIPT', true);
    ?>
<script>
(function() {
    const monthLabel = document.getElementById("monthLabel");
    const calendarGrid = document.getElementById("calendarGrid");
    const selectedDateText = document.getElementById("selectedDateText");
    const selectedTimeText = document.getElementById("selectedTimeText");
    const prevMonth = document.getElementById("prevMonth");
    const nextMonth = document.getElementById("nextMonth");
    const timeTrigger = document.getElementById("timeTrigger");
    const timeDropdown = document.getElementById("timeDropdown");
    const timeGrid = document.getElementById("timeGrid");
    const bookCallBtn = document.getElementById("bookCallBtn");
    const bookCallModal = document.getElementById("bookCallModal");
    const bookCallClose = document.getElementById("bookCallClose");
    const modalSelectedDate = document.getElementById("modalSelectedDate");
    const modalSelectedTime = document.getElementById("modalSelectedTime");
    const bookingDateInput = document.getElementById("bookingDateInput");
    const bookingTimeInput = document.getElementById("bookingTimeInput");

    if (
        !monthLabel || !calendarGrid || !selectedDateText || !selectedTimeText ||
        !prevMonth || !nextMonth || !timeTrigger || !timeDropdown || !timeGrid ||
        !bookCallBtn || !bookCallModal || !bookCallClose || !modalSelectedDate ||
        !modalSelectedTime || !bookingDateInput || !bookingTimeInput
    ) {
        return;
    }

    const now = new Date();
    const today = new Date(now.getFullYear(), now.getMonth(), now.getDate());
    let viewYear = now.getFullYear();
    let viewMonth = now.getMonth();
    let selectedDate = null;
    let selectedTime = null;
    let bookedSlots = [];

    function normalizeDate(date) {
        return new Date(date.getFullYear(), date.getMonth(), date.getDate());
    }

    function sameDay(a, b) {
        return (
            a &&
            b &&
            a.getDate() === b.getDate() &&
            a.getMonth() === b.getMonth() &&
            a.getFullYear() === b.getFullYear()
        );
    }

    function formatDate(date) {
        return date.toLocaleDateString("en-US", {
            weekday: "short",
            day: "numeric",
            month: "short",
            year: "numeric",
        });
    }

    function formatTime24(value) {
        return value;
    }

    function getDateKey(date) {
        const year = date.getFullYear();
        const month = String(date.getMonth() + 1).padStart(2, "0");
        const day = String(date.getDate()).padStart(2, "0");
        return `${year}-${month}-${day}`;
    }

    function openModal() {
        bookCallModal.classList.add("show");
        bookCallModal.setAttribute("aria-hidden", "false");
        document.body.style.overflow = "hidden";
    }

    function closeModal() {
        bookCallModal.classList.remove("show");
        bookCallModal.setAttribute("aria-hidden", "true");
        document.body.style.overflow = "";
    }

    function updateBookingSummary() {
        modalSelectedDate.textContent = selectedDate ? formatDate(selectedDate) : "Not selected";
        modalSelectedTime.textContent = selectedTime ? formatTime24(selectedTime) : "Not selected";
        bookingDateInput.value = selectedDate ? getDateKey(selectedDate) : "";
        bookingTimeInput.value = selectedTime || "";
    }

    async function fetchBookedSlots(dateKey) {
        bookedSlots = [];

        try {
            const response = await fetch(`get-booked-slots.php?date=${encodeURIComponent(dateKey)}`, {
                headers: {
                    "X-Requested-With": "XMLHttpRequest"
                }
            });
            const data = await response.json();

            if (data && data.success && Array.isArray(data.slots)) {
                bookedSlots = data.slots;
            }
        } catch (error) {
            bookedSlots = [];
        }
    }

    function renderTimeSlots() {
        timeGrid.innerHTML = "";

        const selectedIsToday = selectedDate && sameDay(selectedDate, today);
        const currentHour = now.getHours();
        const currentMinute = now.getMinutes();

        for (let hour = 0; hour < 24; hour++) {
            const option = document.createElement("button");
            const hourValue = String(hour).padStart(2, "0");
            const timeValue = `${hourValue}:00`;
            const isPastTime = selectedIsToday && (hour < currentHour || (hour === currentHour && currentMinute > 0));
            const isBooked = bookedSlots.includes(timeValue);

            option.type = "button";
            option.className = "eep-time-option";
            option.textContent = isBooked ? `${timeValue} - Already Booked` : timeValue;

            if (selectedTime === timeValue) {
                option.classList.add("active");
            }

            if (isPastTime || isBooked) {
                option.disabled = true;
            }

            option.addEventListener("click", () => {
                if (option.disabled) {
                    return;
                }

                selectedTime = timeValue;
                selectedTimeText.textContent = formatTime24(selectedTime);
                timeDropdown.classList.remove("show");
                updateBookingSummary();
                renderTimeSlots();
            });

            timeGrid.appendChild(option);
        }
    }

    function renderCalendar() {
        const firstDay = new Date(viewYear, viewMonth, 1);
        const lastDate = new Date(viewYear, viewMonth + 1, 0).getDate();
        const startDay = firstDay.getDay();

        monthLabel.textContent = firstDay.toLocaleDateString("en-US", {
            month: "long",
            year: "numeric",
        });

        calendarGrid.innerHTML = "";

        for (let i = 0; i < startDay; i++) {
            const empty = document.createElement("div");
            empty.className = "eep-calendar-empty";
            calendarGrid.appendChild(empty);
        }

        for (let day = 1; day <= lastDate; day++) {
            const btn = document.createElement("button");
            const thisDate = new Date(viewYear, viewMonth, day);
            const normalizedDate = normalizeDate(thisDate);
            const isToday = sameDay(thisDate, today);
            const isSelected = sameDay(thisDate, selectedDate);
            const isPastDate = normalizedDate < today;
            const isSunday = thisDate.getDay() === 0;

            btn.textContent = day;
            btn.type = "button";
            btn.className = "eep-calendar-day";

            if (isToday) btn.classList.add("eep-is-today");
            if (isSelected) btn.classList.add("eep-is-selected");
            if (isPastDate || isSunday) btn.disabled = true;

            btn.addEventListener("click", async () => {
                if (isPastDate || isSunday) {
                    return;
                }

                selectedDate = thisDate;
                selectedDateText.textContent = formatDate(thisDate);

                timeTrigger.classList.remove("disabled");
                timeDropdown.classList.remove("show");

                selectedTime = null;
                selectedTimeText.textContent = "Select Time";
                await fetchBookedSlots(getDateKey(thisDate));
                updateBookingSummary();
                renderTimeSlots();
                renderCalendar();
            });

            calendarGrid.appendChild(btn);
        }
    }

    prevMonth.addEventListener("click", () => {
        const previousMonth = new Date(viewYear, viewMonth - 1, 1);
        if (previousMonth < new Date(today.getFullYear(), today.getMonth(), 1)) {
            return;
        }

        viewMonth--;
        if (viewMonth < 0) {
            viewMonth = 11;
            viewYear--;
        }
        renderCalendar();
    });

    nextMonth.addEventListener("click", () => {
        viewMonth++;
        if (viewMonth > 11) {
            viewMonth = 0;
            viewYear++;
        }
        renderCalendar();
    });

    timeTrigger.addEventListener("click", () => {
        if (!selectedDate) return;
        renderTimeSlots();
        timeDropdown.classList.toggle("show");
    });

    document.addEventListener("click", (e) => {
        if (!timeTrigger.contains(e.target) && !timeDropdown.contains(e.target)) {
            timeDropdown.classList.remove("show");
        }
    });

    bookCallBtn.addEventListener("click", function(e) {
        e.preventDefault();

        if (!selectedDate || !selectedTime) {
            alert("Please select a date and time first.");
            return;
        }

        if (bookedSlots.includes(selectedTime)) {
            alert("This time slot is already booked. Please select another time.");
            selectedTime = null;
            selectedTimeText.textContent = "Select Time";
            updateBookingSummary();
            renderTimeSlots();
            return;
        }

        updateBookingSummary();
        openModal();
    });

    bookCallClose.addEventListener("click", closeModal);
    bookCallModal.addEventListener("click", (e) => {
        if (e.target === bookCallModal) {
            closeModal();
        }
    });

    document.addEventListener("keydown", (e) => {
        if (e.key === "Escape" && bookCallModal.classList.contains("show")) {
            closeModal();
        }
    });

    updateBookingSummary();
    renderTimeSlots();
    renderCalendar();
})();
</script>
<?php
}
?>
