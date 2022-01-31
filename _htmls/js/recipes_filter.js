//Hide "JavaScript disabled" error message when JavaScript loads
document.getElementById("recipes_filters-message").style.display = "none";

//Store a function that loops through .process-step element and shows it
//The filterSelection() function looks for the CSS class named in the parameter, here variable "c"
function filterSelection(c) {
  var thumbnails = document.getElementsByClassName("recipe_column");
  if (c == "all") c = "";
  // Add the "filter--show" class (display:block) to the filtered thumbnails, and remove the "filter--show" class from the elements that are not selected
  for (var i = 0; i < thumbnails.length; i++) {
    removeFilter(thumbnails[i], "filter--show");
    if (thumbnails[i].className.indexOf(c) > -1) addFilter(thumbnails[i], "filter--show");
  }
}

// Store a function that shows filtered elements
function addFilter(element, name) {
  //Used in filterSelection() as addFilter(thumbnails[i], "filter--show")
  //Then element is document.getElementsByClassName("recipe_column")[i]
  //Then name is CSS class .filter--show in the above example; filterSelection("filter_breakfast") would find all breakfast elements
  //Saves an array listing all the CSS classes an element has (since CSS classes are listed w/spaces in between in HTML)
  var arr1 = element.className.split(" ");
  //Saves an array of number of elements with the .filter--show class as instances of how many times .filter--show occurs
  var arr2 = name.split(" ");
  //Loops as many times as there are instances of .filter--show
  for (var i = 0; i < arr2.length; i++) {
    // .indexOF() searches for the occurence of .filter--show in arr2; result of -1 means there are 0 occurrences
    //If the list of CSS classes includes 0 occurrences of .filter--show, then add .filter--show to that element
    if (arr1.indexOf(arr2[i]) == -1) {
      element.className += " " + arr2[i];
    }
  }
}

// Store a function that hides elements that are not selected
function removeFilter(element, name) {
  var arr1 = element.className.split(" ");
  var arr2 = name.split(" ");
  for (var i = 0; i < arr2.length; i++) {
    // As long as the CSS class list has ANY occurrences of .filter--show...
    while (arr1.indexOf(arr2[i]) > -1) {
      // ...remove the latest occurrence of .filter--show in the CSS class list (removes 1 at a time)
      arr1.splice(arr1.indexOf(arr2[i]), 1);
    }
  }
  // Re-join the ammended CSS class list back to the HTML element
  element.className = arr1.join(" ");
}

//On page load, show all thumbnails
filterSelection("all");

// Highlight the filter currently active
var recipe_filterContainer = document.getElementById("recipes_filters");
var recipes_filters = recipe_filterContainer.getElementsByClassName("recipe_filter");
// For as many filter buttons are found within the parent container...
for (var i = 0; i < recipes_filters.length; i++) {
  //Listen for a mouse click on each
  recipes_filters[i].addEventListener("click", function() {
    //If one registers a click then remove the CSS class .tag--active from the old button and give it instead to the new button that registered the click
    var current = document.getElementsByClassName("tag--active");
    current[0].className = current[0].className.replace(" tag--active", "");
    this.className += " tag--active";
  });
}

//Run a query function when a button is clicked
document.getElementById('filter_all').addEventListener("click", function() {
  filterSelection("all");
}, false);
document.getElementById('filter_breakfast').addEventListener("click", function() {
  filterSelection("tag-breakfast");
}, false);
document.getElementById('filter_dinner').addEventListener("click", function() {
  filterSelection("tag-main", "tag-soup", "tag-salad");
}, false);
document.getElementById('filter_starter').addEventListener("click", function() {
  filterSelection("tag-starter");
}, false);
document.getElementById('filter_soup').addEventListener("click", function() {
  filterSelection("tag-soup");
}, false);
document.getElementById('filter_main').addEventListener("click", function() {
  filterSelection("tag-main");
}, false);
document.getElementById('filter_desser').addEventListener("click", function() {
  filterSelection("tag-desser");
}, false);
document.getElementById('filter_salad').addEventListener("click", function() {
  filterSelection("tag-salad");
}, false);
document.getElementById('filter_supper').addEventListener("click", function() {
  filterSelection("tag-supper");
}, false);
document.getElementById('filter_wege').addEventListener("click", function() {
  filterSelection("tag-wege");
}, false);
document.getElementById('filter_vegan').addEventListener("click", function() {
  filterSelection("tag-vegan");
}, false);