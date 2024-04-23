const navlinks = document.querySelector('.nav-links')
const menuBtn = document.querySelector('.menu-btn')

menuBtn.addEventListener('click', () => {
    navlinks.classList.toggle('mobile-menu')
})