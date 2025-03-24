import './bootstrap';

import Alpine from 'alpinejs';

window.Alpine = Alpine;

document.addEventListener("DOMContentLoaded", function() {
    let navbar = document.querySelector(".navbar");
    window.addEventListener("scroll", function() {
        if (window.scrollY > 50) {
            navbar.classList.add("bg-secondary");
        } else {
            navbar.classList.remove("bg-secondary");
        }
    });
});


document.addEventListener("DOMContentLoaded", function () {
    console.log("Profile page loaded!");
});
