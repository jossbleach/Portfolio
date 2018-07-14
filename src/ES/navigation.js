let overlay = document.getElementById("toggledMenu");
let isOpen = 0;
let toggleButton = document.getElementById("navMenu");
function toggleMenu() {
    if(isOpen == 0){
        overlay.classList.remove("hidden");
        overlay.classList.add("showing");
        isOpen = 1;
        navMenu.innerHTML = "CLOSE";
    }else{
        overlay.classList.add("hidden");
        overlay.classList.remove("showing");
        isOpen = 0;
        navMenu.innerHTML = "MENU";
    }
}