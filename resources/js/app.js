import './bootstrap';

// Swiper JS 
var swiper = new Swiper(".mySwiper", {
    cssMode: true,
    loop: true,
    autoplay: {
        delay: 5000,
    },
    navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
    },
    pagination: {
    el: ".swiper-pagination",
    },
    mousewheel: true,
    keyboard: true,
});

// navigation action onscroll
window.onscroll = function() {scrollFunction()};
let navigation = document.getElementById("navigation");
let sticky = navigation.offsetTop;

function scrollFunction() {
  if (window.scrollY > sticky) {
      navigation.classList.add('transparent-header');
      if (
        document.body.scrollTop > 20 ||
        document.documentElement.scrollTop > 20
      ) {
        mybutton.classList.remove("hidden");
      } else {
        mybutton.classList.add("hidden");
      }
  } else {
    navigation.classList.remove('transparent-header');
  }
}

// Get the button
const mybutton = document.getElementById("btn-back-to-top");

// When the user scrolls down 20px from the top of the document, show the button

const backToTop = () => {
  window.scrollTo({ top: 0, behavior: "smooth" });
};

// When the user clicks on the button, scroll to the top of the document
mybutton.addEventListener("click", backToTop);

window.addEventListener("scroll", scrollFunction);


