const toggleBtn = document.getElementById('toggle-btn');
const toggleContent = document.getElementById('toggle-content');

toggleBtn.addEventListener('click', () => {
    toggleContent.classList.toggle('dropdowninscription-h');
    toggleContent.classList.toggle('dropdowninscription-screen');
});
