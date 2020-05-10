let container = document.getElementsByClassName("recipe_overlay");

//Convert HTML collection to array
let recipeElementsArray = [].slice.call(container);

//forEach element with recipe_overlay class
recipeElementsArray.forEach(element => {

  //Swipe Left / Right
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

    if (diffX >= 0) {

      e.target.classList.add('recipe_overlay-mobile', 'recipe_title-mobile');
      //or whichever class name you'd like

    } else {
      e.target.classList.remove('recipe_overlay-mobile', 'recipe_title-mobile');
    }

    initialX = null;
    e.preventDefault();
  }

  element.addEventListener("touchstart", startTouch, false);
  element.addEventListener("touchmove", moveTouch, false);
});