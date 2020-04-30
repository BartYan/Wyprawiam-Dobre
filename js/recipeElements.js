const recipeElements = document.getElementsByClassName('recipe');
    // const contentElements = document.getElementsByClassName('recipe_content');

    // convert HTML collection to array
    const recipeElementsArray = [].slice.call(recipeElements);
    //const contentElementsArray = [].slice.call(contentElements);

    recipeElementsArray.forEach(function (element) {

      // add hover style
      element.addEventListener('touchmove', function (e) {
        e.target.classList.add('recipe_overlay-mobile'); // or whichever class name you'd like 
        e.target.classList.add('recipe_title-mobile');
      });

      // remove hover style on end
      element.addEventListener('touchend', function (e) {
        e.target.classList.remove('recipe_overlay-mobile'); // or whichever class name you'd like
        e.target.classList.remove('recipe_title-mobile');
      });
    });