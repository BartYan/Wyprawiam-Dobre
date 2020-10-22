//hamburger and overlay variables
let hamburger = document.querySelector('.nav_hamburger');
let overlayMenu = document.getElementById("overlay_menu");
let active = false;

//hamburger animate
const open = () => {
  hamburger.classList.toggle('nav_hamburger-open');
}

//Hamburger overlay show functions
const overlay = () => {

  if (active === false) {
    overlayMenu.style.display = "block";
    active = true;
  } else {
    overlayMenu.style.display = "none";
    active = false;
  }
};

hamburger.addEventListener("click", () => {    
  overlay();
  open();    
});
