/*
This code has been sourced from        
https://www.w3schools.com/howto/howto_js_slideshow_gallery.asp
and adapted with Jumbotron from Bootstrap
and used for the slideshow gallery on the main page          
*/

var img_slideIndex = 1;
img_showSlides(img_slideIndex);

// Next/previous controls
function img_plusSlides(n) {
    img_showSlides(img_slideIndex += n);
}

// Thumbnail image controls
function img_currentSlide(n) {
    img_showSlides(img_slideIndex = n);
}

function img_showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("img-mySlides");
  var dots = document.getElementsByClassName("img-demo");
  var captionText = document.getElementById("img-caption");
  if (n > slides.length) {img_slideIndex = 1}
  if (n < 1) {img_slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[img_slideIndex-1].style.display = "block";
  dots[img_slideIndex-1].className += " active";
  captionText.innerHTML = dots[img_slideIndex-1].alt;
}
/* End of code from https://www.w3schools.com/howto/howto_js_slideshow_gallery.asp */

/* this function was created to google the skills on the skills and work experience page */
function badgeClick(q){  
  window.open("http://www.google.com/search?q="+q, '_blank');  
}

/* this function was created to control the show and hide of the tab's collapse effect on the work experience page */
function showHideTab(){
  document.getElementById("trazzo").classList.remove("show");
  document.getElementById("vantec").classList.remove("show");
  document.getElementById("minfin").classList.remove("show");
  document.getElementById("archila").classList.remove("show");
  document.getElementById("c27").classList.remove("show");
}
