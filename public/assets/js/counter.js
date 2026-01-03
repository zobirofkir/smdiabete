// Countdown from today (now) until next March 26 (current year or next year if passed).
const getNextMarch26 = () => {
    const now = new Date();
    const year = now.getFullYear();
    // Month is 0-indexed: 2 => March
    let target = new Date(year, 2, 26, 0, 0, 0, 0);
    if (now > target) {
        target = new Date(year + 1, 2, 26, 0, 0, 0, 0);
    }
    return target;
};

let endDate = getNextMarch26();

const updateElement = (id, value, pad = 2) => {
    const element = document.getElementById(id);
    if (!element) return;
    element.textContent = String(value).padStart(pad, '0');
};

let countdownInterval = null;

const countdown = () => {
    const now = new Date();
    const timeDifference = endDate - now;

    if (timeDifference > 0) {
        const days = Math.floor(timeDifference / (1000 * 60 * 60 * 24));
        const hours = Math.floor((timeDifference % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        const minutes = Math.floor((timeDifference % (1000 * 60 * 60)) / (1000 * 60));
        const seconds = Math.floor((timeDifference % (1000 * 60)) / 1000);

        // days may be larger than 2 digits; pad to 3 for nicer alignment
        updateElement('days', days, 3);
        updateElement('hours', hours, 2);
        updateElement('minutes', minutes, 2);
        updateElement('seconds', seconds, 2);
    } else {
        // Event started: update UI and stop the interval
        const countdownEl = document.getElementById('countdown');
        if (countdownEl) {
            countdownEl.innerHTML = "<div class='col-span-4 text-center'><p class='text-2xl lg:text-4xl font-bold text-yellow-300'>L'événement a commencé !</p></div>";
        }
        stopCountdown();
    }
};

const startCountdown = () => {
    // avoid creating multiple intervals
    if (countdownInterval) return;
    // re-evaluate target in case system time changed while page was hidden
    endDate = getNextMarch26();
    countdown();
    countdownInterval = setInterval(countdown, 1000);
};

const stopCountdown = () => {
    if (countdownInterval) {
        clearInterval(countdownInterval);
        countdownInterval = null;
    }
};

// Start when DOM is ready. If already ready, start immediately.
if (document.readyState === 'loading') {
    document.addEventListener('DOMContentLoaded', startCountdown);
} else {
    startCountdown();
}

// When tab becomes hidden, stop the interval to save resources. When visible again, restart (if not already running).
document.addEventListener('visibilitychange', () => {
    if (document.hidden) {
        stopCountdown();
    } else {
        // update end date and start if needed
        endDate = getNextMarch26();
        startCountdown();
    }
});

// Also make sure we clear the interval when the page is unloaded
window.addEventListener('pagehide', () => {
    stopCountdown();
});
