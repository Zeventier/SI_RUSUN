let navbar = document.querySelector('.header .navbar');
let navbarportal = document.querySelector('.header .navbar-portal');

document.querySelector('#menu-btn').onclick = () =>{
   navbar.classList.toggle('active');
};

document.querySelector('#menu-btn').onclick = () =>{
    navbarportal.classList.toggle('active');
};

var swiper = new Swiper(".home-slider", {
   loop:true,
   grabCursor:true,
   navigation: {
     nextEl: ".swiper-button-next",
     prevEl: ".swiper-button-prev",
   },
});