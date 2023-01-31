document.addEventListener("DOMContentLoaded", function () {
  var button = document.querySelector(".hamburger-menu");
  var sidebar = document.querySelector(".sidebar");
  var menu = document.querySelector(".sidebar nav");
  // rest of your code here
  button.onclick = function () {
    sidebar.classList.toggle("visible");
    menu.classList.toggle("visible");
    console.log("clicked");
  };
  const hamburger = document.querySelector(".hamburger-menu");
hamburger.addEventListener("click", () => {
  hamburger.classList.toggle("change");
});
});

var currentDate = new Date();
var date = currentDate.getDate();
var month = currentDate.getMonth() + 1; // January is 0
var year = currentDate.getFullYear();

onload = function () {
  document.querySelector(".current-date").innerHTML =
    month + "." + date + "." + year;
};
