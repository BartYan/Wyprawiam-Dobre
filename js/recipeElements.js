var currentItem = 0;
var items;
var container = document.querySelector(".recipe");

function setup() {
  items = document.querySelectorAll(".recipe_overlay");

  for (var i = 0; i < items.length; i++) {
    var item = items[i]; //do usunuiecia
    item.style.zIndex = 1000 - i; //do usuniecia
  }
}
setup();

container.addEventListener("keydown", navigateCarousel, false);
container.addEventListener("touchstart", startTouch, false);
container.addEventListener("touchmove", moveTouch, false);

// Keyboard
function navigateCarousel(e) {
  var key = e.keyCode;
  if (key === 37) {
    previousItem();
  } else if (key === 39) {
    nextItem();
  }
}

// Swipe Left / Right
var initialX = null;

function startTouch(e) {
  initialX = e.touches[0].clientX;
}

function moveTouch(e) {
  if (initialX === null) {
    return;
  }

  var currentX = e.touches[0].clientX;
  var diffX = initialX - currentX;

  if (diffX > 0) {
    nextItem();
  } else {
    previousItem();
  }

  initialX = null;

  e.preventDefault();
}

function previousItem() {
  if (currentItem > 0) {
    currentItem--;

    var item = items[currentItem];

    item.classList.remove('recipe_overlay-mobile');

  } else {
    currentItem = 0;
  }
}

function nextItem() {
  if (currentItem < items.length - 1) {
    var item = items[currentItem];

    item.classList.add('recipe_overlay-mobile');


    currentItem++;
  } else {
    currentItem = items.length - 1;
  }
}

//do usunięcia
function getRotation() {
  return Math.round(-3 + Math.random() * 7);
}






//CODE DOWN BELOW
//RECIPE OVERLAY SWIPE LEFT AND GO BACK TO RIGHT WHEN FINGER OFF

//const recipeElements = document.getElementsByClassName('recipe');
// const contentElements = document.getElementsByClassName('recipe_content');

// convert HTML collection to array
// const recipeElementsArray = [].slice.call(recipeElements);
//const contentElementsArray = [].slice.call(contentElements);

// recipeElementsArray.forEach(function (element) {

// add hover style
//  element.addEventListener('touchmove', function (e) {
//    e.target.classList.add('recipe_overlay-mobile'); // or whichever class name you'd like 
//    e.target.classList.add('recipe_title-mobile');
//  });

// remove hover style on end
//   element.addEventListener('touchend', function (e) {
//  e.target.classList.remove('recipe_overlay-mobile'); // or whichever class name you'd like
//  e.target.classList.remove('recipe_title-mobile');
// });
//  });