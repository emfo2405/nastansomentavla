let menuButton = document.getElementById('menuButton');
let menuLinks = document.getElementById('menuLinks');

function menuToggle() {
    if (menuLinks.style.display === "block") {
        menuLinks.style.display = "none"
    } else {
        menuLinks.style.display = "block"
    }
}

menuButton.addEventListener("click", menuToggle);