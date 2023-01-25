const menu = document.querySelector("#menu")
const navigation = document.querySelector(".navigation")

menu.addEventListener('click',() => { 
    navigation.classList.toggle('show-menu')
    console.log("clicked")
 })
 ///////////////////////////  TESTIMONIAL ///////////////////////////////////
 //////////////////////////   FAQ CONTAINER ////////////////////////
 const faq = document.querySelectorAll('#faq')
 faq.forEach(
    (question) => { question.addEventListener('click',() => { 
        question.classList.toggle('question-clicked')
      }) }
 )

 /////dashboard script/////////
$(document).ready(function () {

  $("#sidebar").mCustomScrollbar({
       theme: "minimal"
  });

  $('#sidebarCollapse').on('click', function () {
      // open or close navbar
      $('#sidebar').toggleClass('active');
      // close dropdowns
      $('.collapse.in').toggleClass('in');
      // and also adjust aria-expanded attributes we use for the open/closed arrows
      // in our CSS
      $('a[aria-expanded=true]').attr('aria-expanded', 'false');
  });

});