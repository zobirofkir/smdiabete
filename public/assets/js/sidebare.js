const menuToggle = document.getElementById('menu-toggle');
const closeMenu = document.getElementById('close-menu');
const menu = document.getElementById('menu');

menuToggle.addEventListener('click', () => {
  menu.classList.remove('translate-x-full');
});

closeMenu.addEventListener('click', () => {
  menu.classList.add('translate-x-full');
});
