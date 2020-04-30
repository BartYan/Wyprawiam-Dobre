const navbar = document.getElementById("navbar");
const section = document.getElementById("section");
let sticky = section.offsetTop;

window.onscroll = () => scrollFunction();

function scrollFunction() {
  if (document.documentElement.scrollTop == 0) {
    navbar.style = "display: block; transition: all 1s;";
    // navbar.style = true;
    logo.style.display = "none";
  } else if (window.pageYOffset >= sticky) {
    navbar.style.display = "block"
    logo.style.display = "block";
  } else if (window.pageYOffset >= sticky) {
    navbar.style.display = "block"
    logo.style.display = "block";
  } else {
    navbar.style.display = "none";
  }
}
