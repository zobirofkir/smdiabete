const countdown = () => {
    const countdownElement = document.getElementById("countdown");
    if (!countdownElement) return;

    const endDate = new Date("2025-05-29T00:00:00");
    const now = new Date();

    const timeDifference = endDate - now;

    if (timeDifference > 0) {
        const days = Math.floor(timeDifference / (1000 * 60 * 60 * 24));
        const hours = Math.floor((timeDifference % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        const minutes = Math.floor((timeDifference % (1000 * 60 * 60)) / (1000 * 60));
        const seconds = Math.floor((timeDifference % (1000 * 60)) / 1000);

        const daysEl = document.getElementById("days");
        const hoursEl = document.getElementById("hours");
        const minutesEl = document.getElementById("minutes");
        const secondsEl = document.getElementById("seconds");

        if (daysEl) daysEl.textContent = String(days).padStart(2, "0");
        if (hoursEl) hoursEl.textContent = String(hours).padStart(2, "0");
        if (minutesEl) minutesEl.textContent = String(minutes).padStart(2, "0");
        if (secondsEl) secondsEl.textContent = String(seconds).padStart(2, "0");
    } else {
        countdownElement.innerHTML = "<p class='text-3xl md:text-5xl font-bold'>L'événement a commencé !</p>";
    }
};

if (document.getElementById("countdown")) {
    setInterval(countdown, 1000);
    countdown();
}
