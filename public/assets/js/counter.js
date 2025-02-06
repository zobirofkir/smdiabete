const countdown = () => {
    const endDate = new Date("2025-05-17T00:00:00");
    const now = new Date();

    const timeDifference = endDate - now;

    if (timeDifference > 0) {
        const days = Math.floor(timeDifference / (1000 * 60 * 60 * 24));
        const hours = Math.floor((timeDifference % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        const minutes = Math.floor((timeDifference % (1000 * 60 * 60)) / (1000 * 60));
        const seconds = Math.floor((timeDifference % (1000 * 60)) / 1000);

        document.getElementById("days").textContent = String(days).padStart(2, "0");
        document.getElementById("hours").textContent = String(hours).padStart(2, "0");
        document.getElementById("minutes").textContent = String(minutes).padStart(2, "0");
        document.getElementById("seconds").textContent = String(seconds).padStart(2, "0");
    } else {
        document.getElementById("countdown").innerHTML = "<p class='text-3xl md:text-5xl font-bold'>L'événement a commencé !</p>";
    }
};

setInterval(countdown, 1000);
countdown();
