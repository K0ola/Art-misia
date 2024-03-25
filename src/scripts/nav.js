const burgerMenu = document.querySelector(".burger-menu");
const navLinks = document.querySelector(".nav-links");
const burgerIcon = document.querySelector(".burger-icon"); 

burgerMenu.addEventListener('click',()=>{
    navLinks.classList.toggle("mobile-menu");

        if (navLinks.classList.contains("mobile-menu")) {

            burgerIcon.src = "./src/assets/icons/cross.svg";
            burgerIcon.style.width = "75%";
        } else {

            burgerIcon.src = "./src/assets/icons/burgermenu.svg";
            burgerIcon.style.width = "100%";
        }
});

// Fermeture du menu mobile au clic sur un lien
const navItems = document.querySelectorAll(".nav-links a");

navItems.forEach(item => {
    item.addEventListener('click', () => {
        if (navLinks.classList.contains("mobile-menu")) {
            navLinks.classList.remove("mobile-menu");
            burgerIcon.src = "./src/assets/icons/burgermenu.svg";
            burgerIcon.style.width = "100%";
        }
    });
});