function toggleText() {
    const mobileText = document.getElementById('mobile-text');
    const mobileList = document.getElementById('mobile-list');
    const button = document.getElementById('read-more-btn');

    mobileText.classList.toggle('max-h-0');
    mobileText.classList.toggle('max-h-screen');
    mobileList.classList.toggle('max-h-0');
    mobileList.classList.toggle('max-h-screen');

    if (mobileText.classList.contains('max-h-0')) {
        button.textContent = "Lire la suite";
    } else {
        button.textContent = "Lire moins";
    }
}
