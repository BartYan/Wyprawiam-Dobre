let currentItem = 0;
let items;
let container = document.getElementsByClassName("recipe");

// convert HTML collection to array
let recipeElementsArray = [].slice.call(container);


//forEach element with recipe class
recipeElementsArray.forEach(function (element) {

  function setup() {
    items = document.getElementsByClassName("recipe_overlay");
  }
  setup();

  element.addEventListener("touchstart", startTouch, false);
  element.addEventListener("touchmove", moveTouch, false);

  // Swipe Left / Right
  let initialX = null;

  function startTouch(e) {
    initialX = e.touches[0].clientX;
  }

  function moveTouch(e) {
    if (initialX === null) {
      return;
    }

    let currentX = e.touches[0].clientX;
    let diffX = initialX - currentX;

    if (diffX > 0) {
      nextItem();
    } else {
      previousItem();
    }

    initialX = null;

    e.preventDefault();
  }

  function nextItem() {
    let itemsArray = [].slice.call(items);
    itemsArray.forEach(function (element) {
      element.classList.add('recipe_overlay-mobile');
    });
  }
  //currentItem++;


  function previousItem() {
    if (currentItem >= 0) {
      //currentItem--; ---- if  (currentItem < 0)

      let item = items[currentItem];

      item.classList.remove('recipe_overlay-mobile');
    }
  }

});





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