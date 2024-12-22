function toggleText() {
    const mobileText = document.getElementById('mobile-text');
    const mobileList = document.getElementById('mobile-list');
    const button = document.getElementById('read-more-btn');

    if (mobileText.style.maxHeight === "0px") {
        mobileText.style.maxHeight = mobileText.scrollHeight + "px";
        mobileList.style.maxHeight = mobileList.scrollHeight + "px";
        button.textContent = "Lire moins";
    } else {
        mobileText.style.maxHeight = "0px";
        mobileList.style.maxHeight = "0px";
        button.textContent = "Lire la suite";
    }
}
