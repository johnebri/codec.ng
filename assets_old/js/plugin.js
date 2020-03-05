
$(document).ready(function() {

 // Courses Spinner
  $(".nav-tabs").on("click", "a", function() {
    //show elements
    $(".loader").show();
    $(".tab-pane .container-fluid").hide();
    //wait and hide elements
    setTimeout(function() {
      $(".loader").hide();
      $(".tab-pane .container-fluid").show();
    }, 1400);
  });


  //Dropdown Toggle
  $(".toggle-1").click(function(){

   //show and hide elements
   $('.dropdown-1').toggle();
   $('.dropdown-2').hide();
   $('.dropdown-3').hide();

   $(this).find('.fa-angle-down').toggle();
   $(this).find('.fa-angle-up').toggle();

   $('.toggle-2').find('.fa-angle-down').show();
   $('.toggle-2').find('.fa-angle-up').hide();
   $('.toggle-3').find('.fa-angle-down').show();
   $('.toggle-3').find('.fa-angle-up').hide();
 
  });

   //Dropdown Toggle
  $(".toggle-2").click(function(){
   //show and hide elements
   $('.dropdown-2').toggle();
   $('.dropdown-1').hide();
   $('.dropdown-3').hide();

   $(this).find('.fa-angle-down').toggle();
   $(this).find('.fa-angle-up').toggle();

   $('.toggle-1').find('.fa-angle-down').show();
   $('.toggle-1').find('.fa-angle-up').hide();
   $('.toggle-3').find('.fa-angle-down').show();
   $('.toggle-3').find('.fa-angle-up').hide();
 
  })

   //Dropdown Toggle
  $(".toggle-3").click(function(){
   //show and hide elements
   $('.dropdown-3').toggle();
   $('.dropdown-1').hide();
   $('.dropdown-2').hide();

   $(this).find('.fa-angle-down').toggle();
   $(this).find('.fa-angle-up').toggle();

   $('.toggle-1').find('.fa-angle-down').show();
   $('.toggle-1').find('.fa-angle-up').hide();
   $('.toggle-2').find('.fa-angle-down').show();
   $('.toggle-2').find('.fa-angle-up').hide();
 
  })

   //open sidebar
   $('.fa-bars').click(function () {
  
    //hide menu and show icon
    $('.fa-bars').css('display', 'none');
    $('.fa-times').css('display', 'block');
  
    $('.toggle').animate({
     'left': '0'
    }).css('visibility', 'visible');
  
   });
  
   //close sidebar
   $('.fa-times').click(function () {
  
    //hide menu and show icon
    $('.fa-bars').css('display', 'block');
    $('.fa-times').css('display', 'none');
  
    $('.toggle').animate({
     'left': '-450px'
    });
  
   });

   //drop down search bar
   $('.mobile .fa-search').click(function(){
    $('.search-container').toggle(function(){
     $('.search-container').animate();
    });
   })

   //toggle language selection
   $('.auth .language').click(function(){
    //show and hide element
     $('.language__globe').toggle();
   })
  

  //Slick Slider
   $('.slider').slick({
   infinite: true,
   slideToShow: 1,
   slideToScroll: 1,
   autoplay: true
   });

   //Counter Up
    $('.counter').counterUp();
   
    //User dropdown menu
   $("#user_image").click(()=>{
     $(".user_menu").slideToggle(500);
     $("#user .fa-caret-up").slideToggle(200);
   })
});
