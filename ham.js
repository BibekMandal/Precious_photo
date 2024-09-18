const hamburgerMenu = document.querySelector('.hamburger-menu');
const navLinks = document.querySelector('.nav-links'); // Updated to select a single element

hamburgerMenu.addEventListener('click', () => {
    navLinks.classList.toggle('active');
});
