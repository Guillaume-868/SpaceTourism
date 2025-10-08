import './bootstrap';
// Simple toggle pour le menu mobile
document.querySelector('#btnMenu').addEventListener('click', function() {
    console.log("Essai");
    const menu = document.querySelector('#mobileMenu');
    console.log(menu);
    menu.classList.toggle('hidden');
    // document.querySelector('#btnMenu').classList.add('hidden');

});

document.addEventListener("DOMContentLoaded", function() {
        const closeBtn = document.getElementById("closeMenuBtn");
        const mobileMenu = document.getElementById("mobileMenu");

        closeBtn.addEventListener("click", () => {
            mobileMenu.classList.add("hidden");
        });
    });


