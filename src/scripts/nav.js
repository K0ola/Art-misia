function toggleMenu() {
    var menu = document.querySelector('nav > ul');
    menu.style.display = menu.style.display === 'none' ? 'flex' : 'none';
}

// const burgerMenu = document.querySelector(".burger-menu")
// const navLinks = document.querySelector(".nav-links")

// burgerMenu.addEventListener('click',()=>{
// navLinks.classList.toggle("mobile-menu")
// })
// document.addEventListener('DOMContentLoaded', (event) => {
//     const burgerMenu = document.querySelector(".burger-menu");
//     const navLinks = document.querySelector(".nav-links");

//     burgerMenu.addEventListener('click',()=>{
//         navLinks.classList.toggle("mobile-menu");
//     });
// });