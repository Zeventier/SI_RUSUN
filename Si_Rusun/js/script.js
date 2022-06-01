let navbar = document.querySelector('.header .navbar');
   if (document.querySelector('#menu-btn') != null ){
      document.querySelector('#menu-btn').onclick = () =>{
         navbar.classList.toggle('active');
   };
}

let navbarportal = document.querySelector('.header .navbar-portal');
   if (document.querySelector('#portal-btn') != null ){
   document.querySelector('#portal-btn').onclick = () => {
      navbarportal.classList.toggle('active')
   };
}