function toggleForm() {
    const formSection = document.getElementById('formSection');

    if (formSection.classList.contains('hidden')) {
        formSection.classList.remove('hidden');
        formSection.style.transition = 'max-height 0.7s ease-in-out';
        formSection.style.maxHeight = formSection.scrollHeight + "px";
    } else {
        formSection.style.maxHeight = '0';
        setTimeout(() => {
            formSection.classList.add('hidden');
        }, 700);
    }
}
