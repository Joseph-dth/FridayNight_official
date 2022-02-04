$(document).ready(function() {
    
    /*Mobile-nav*/
    /*
    $('.js--nav-icon').click(function(){
          var nav = $('.js--main-nav');
          var iocn =$('.js--nav-icon');

          nav.slideToggle(200);
          if (icon.hasClass('mobile-navi')){
              icon.hide(0);
          }
          else{
              icon.addNameitem('menu-outline');
              icon.removeName('close-outline');
          }

    })
    */
   
   const navSlide = () => {
       const burger = document.querySelector('.burger');
       const nav = document.querySelector ('.nav-links');
       const navLinks = document.querySelectorAll('.nav-links li');

       burger.addEventListener('click', () => {
           nav.classList.toggle('nav-active');


           navLinks.forEach((link, index)=> {
            if(link.style.animation){
                link.style.animation = '';
            }
            else{
                link.style.animation = `navLinkFade 0.5s ease forwards ${index / 7 +0.4}s`;
    
            }
        });
        burger.classList.toggle('toggle');

       });

       
   }

   
    $('.checkedselector').on('change', 'input[type="radio"].toggle', function () {
        if (this.checked) {
            $('input[name="' + this.name + '"].checked').removeClass('checked');
            $(this).addClass('checked');
            $('.toggle-container').addClass('force-update').removeClass('force-update');
        }
    });
    $('.checkedselector input[type="radio"].toggle:checked').addClass('checked');

    
    $('.collapsible').click(function() {
        var coll = $('.collapsible');
        var cont = $('.content');
        var icon = $('.icon');
        
        cont.slideToggle(200);
        
        if (icon.hasClass('fa-angle-double-down')){
              icon.addClass('fa-angle-double-up');
              icon.removeClass('fa-angle-double-down');
        }
          else{
              icon.addClass('fa-angle-double-down');
              icon.removeClass('fa-angle-double-up');
        }
    })
    $('.collapsible-1').click(function() {
        var coll = $('.collapsible-1');
        var cont = $('.content-1');
        var icon = $('.icon-1');

        
        cont.slideToggle(200);
        if (icon.hasClass('fa-angle-double-down')){
              icon.addClass('fa-angle-double-up');
              icon.removeClass('fa-angle-double-down');
        }
          else{
              icon.addClass('fa-angle-double-down');
              icon.removeClass('fa-angle-double-up');
        }
    })
    $('.collapsible-2').click(function() {
        var coll = $('.collapsible-2');
        var cont = $('.content-2');
        var icon = $('.icon-2');

        
        cont.slideToggle(200);
        if (icon.hasClass('fa-angle-double-down')){
              icon.addClass('fa-angle-double-up');
              icon.removeClass('fa-angle-double-down');
        }
          else{
              icon.addClass('fa-angle-double-down');
              icon.removeClass('fa-angle-double-up');
        }
    })
    $('.collapsible-3').click(function() {
        var coll = $('.collapsible-3');
        var cont = $('.content-3');
        var icon = $('.icon-3');

        
        cont.slideToggle(200);
        if (icon.hasClass('fa-angle-double-down')){
              icon.addClass('fa-angle-double-up');
              icon.removeClass('fa-angle-double-down');
        }
          else{
              icon.addClass('fa-angle-double-down');
              icon.removeClass('fa-angle-double-up');
        }
    })
    navSlide();

});