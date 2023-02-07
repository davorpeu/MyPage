// Function to set the header and footer content
function setHeaderFooterContent() {
  // Get the header and footer elements
  var header = document.querySelector("header");
  var footer = document.querySelector("footer");
  let pageName = window.location.pathname;

 
  header.innerHTML = ` 
  <nav>
  <ul class="header">
  `+ (pageName == "/index.html" ? "" : `<li><a href="index.html">Naslovna</a></li>
  <li class="divider"></li>`) +` 
    <li><a href="myTown.html">Moj Grad</a></li>
    <li class="divider"></li>
    <li><a href="aboutMe.html">O Meni</a></li>
    <li class="divider"></li>
    <li><a href="gallery.html">Galerija</a></li>
    <li class="divider"></li>
    <li><a href="contact.php">Kontakt</a></li>
  </ul>
</nav>
<div class="hamburger-menu">
  <div class="bar"></div>
  <div class="bar"></div>
  <div class="bar"></div>
</div>
<div class="sidebar">
  <nav>
    <ul>
    `+ (pageName == "/index.html" ? "" : `<li><a href="index.html">Naslovna</a></li>
  `) +`
      <li><a href="myTown.html">Moj Grad</a></li>
      <li><a href="aboutMe.html">O Meni</a></li>
      <li><a href="gallery.html">Galerija</a></li>
      <li><a href="contact.php">Kontakt</a></li>
    </ul>
  </nav>
</div>
  `;

  footer.innerHTML = `
  <p>
  MOJA STRANICA. All Rights Reserved &copy;
  <span class="current-date"></span>
</p>
  `;
}

document.addEventListener("DOMContentLoaded", function () {
  setHeaderFooterContent();

  var button = document.querySelector(".hamburger-menu");
  var sidebar = document.querySelector(".sidebar");
  var menu = document.querySelector(".sidebar nav");
  // rest of your code here

  button.onclick = function () {
    sidebar.classList.toggle("visible");
    menu.classList.toggle("visible");
    
  };

  const hamburger = document.querySelector(".hamburger-menu");
  hamburger.addEventListener("click", () => {
    hamburger.classList.toggle("change");
  });

});

var currentDate = new Date();
var date = currentDate.getDate();
var year = currentDate.getFullYear();
function getCroatianMonthName(monthNum) {
  const monthNames = [
    "siječanj",
    "veljača",
    "ožujak",
    "travanj",
    "svibanj",
    "lipanj",
    "srpanj",
    "kolovoz",
    "rujan",
    "listopad",
    "studeni",
    "prosinac"
  ];

  return monthNames[monthNum];
}

// Example usage:
const today = new Date();
const croatianMonth = getCroatianMonthName(today.getMonth());
onload = function () {
  document.querySelector(".current-date").innerHTML =
     date + "." + croatianMonth + "." + year;
};
