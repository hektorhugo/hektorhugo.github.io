/*-----------------------------------------------------------------------------------
/*
/* Script for Resume
/*
-----------------------------------------------------------------------------------*/
function soloNumeros(e){
  var key = window.Event ? e.which : e.keyCode
  return ((key >= 48 && key <= 57) || (key==8))
  }
  
function soloLetras(e){
       key = e.keyCode || e.which;
       tecla = String.fromCharCode(key).toLowerCase();
       letras = " áéíóúabcdefghijklmnñopqrstuvwxyz";
       especiales = "8-37-39-46";

       tecla_especial = false
       for(var i in especiales){
            if(key == especiales[i]){
                tecla_especial = true;
                break;
            }
        }

        if(letras.indexOf(tecla)==-1 && !tecla_especial){
            return false;
        }
    }
/*----------------------------------------------------*/
/* Preloader
------------------------------------------------------ */

  $(window).load(function(){

    $('.loader').fadeOut();    
    $('#preloader').delay(350).fadeOut('slow');    
    $('body').delay(350);   

    });


 jQuery(document).ready(function($) {

/*----------------------------------------------------*/
/* Initializing jQuery Nice Scroll
------------------------------------------------------ */

    $("html").niceScroll({
      cursorcolor:"#11abb0", // Set cursor color
      cursorwidth: "8", // Sety cursor width
      cursorborder: "" // Set cursor border color, default left none
    });


/*----------------------------------------------------*/
/* FitText Settings
------------------------------------------------------ */

    setTimeout(function() {
	   $('h1.responsive-headline').fitText(1, { minFontSize: '28px', maxFontSize: '72px' });
	 }, 100);


/*----------------------------------------------------*/
/* Smooth Scrolling
------------------------------------------------------ */

   $('.smoothscroll').on('click',function (e) {
	    e.preventDefault();

	    var target = this.hash,
	    $target = $(target);

	    $('html, body').stop().animate({
	        'scrollTop': $target.offset().top
	    }, 800, 'swing', function () {
	        window.location.hash = target;
	    });

	});


/*----------------------------------------------------*/
/* Appear Animation
------------------------------------------------------*/
  new WOW().init();

/*----------------------------------------------------*/
/* Parallax for Header Content
------------------------------------------------------*/
$(window).scroll(function(e){
  parallax();
});


function parallax() {
  var scrollPosition = $(window).scrollTop();
  $('.banner').css('margin-top', (0 - (scrollPosition * .8)) + 'px');
}

/*----------------------------------------------------*/
/* Highlight the current section in the navigation bar
------------------------------------------------------*/

	var sections = $("section");
	var navigation_links = $("#m-nav a");

	sections.waypoint({

      handler: function(event, direction) {

		   var active_section;

			active_section = $(this);
			if (direction === "up") active_section = active_section.prev();

			var active_link = $('#m-nav a[href="#' + active_section.attr("id") + '"]');

         navigation_links.parent().removeClass("current");
			active_link.parent().addClass("current");

		},
		offset: '35%'

	});


/*----------------------------------------------------*/
/*	Make sure that #header-background-image height is
/* equal to the browser height.
------------------------------------------------------ */

   $('header').css({ 'height': $(window).height() });
   $(window).on('resize', function() {

        $('header').css({ 'height': $(window).height() });
        $('body').css({ 'width': $(window).width() })
   });


/*----------------------------------------------------*/
/*  On scroll blur header
------------------------------------------------------*/
   (function() {
      $(window).scroll(function() {
        var oVal;
        oVal = $(window).scrollTop() / 100;
        return $(".header-overlay").css("opacity", oVal);
        });

      }).call(this);



/*----------------------------------------------------*/
/*	Fade In/Out Primary Navigation
------------------------------------------------------*/

   $(window).on('scroll', function() {

		var h = $('header').height();
		var y = $(window).scrollTop();
      var nav = $('#m-nav');

	   if ( (y > h*.20) && (y < h) && ($(window).outerWidth() > 768 ) ) {
	      nav.fadeOut('fast');
	   }
      else {
         if (y < h*.20) {
            nav.removeClass('opaque').fadeIn('fast');
         }
         else {
            nav.addClass('opaque').fadeIn('fast');
         }
      }

	});


/*----------------------------------------------------*/
/*	Modal Popup
------------------------------------------------------*/

    $('.item-wrap a').magnificPopup({

       type:'inline',
       fixedContentPos: false,
       removalDelay: 200,
       showCloseBtn: false,
       mainClass: 'mfp-fade'

    });

    $(document).on('click', '.popup-modal-dismiss', function (e) {
    		e.preventDefault();
    		$.magnificPopup.close();
    });


/*----------------------------------------------------*/
/*  Owl Carousel
/*----------------------------------------------------*/


    $(document).ready(function() {
     
    $("#testimonial-slides").owlCarousel({
     
    navigation : false, // Show next and prev buttons
    slideSpeed : 300,
    paginationSpeed : 400,
    singleItem:true
     
    // "singleItem:true" is a shortcut for:
    // items : 1,
    // itemsDesktop : false,
    // itemsDesktopSmall : false,
    // itemsTablet: false,
    // itemsMobile : false
     
    });
     
    });


/*----------------------------------------------------*/
/*  Google Map
------------------------------------------------------*/

    // main directions
      map = new GMaps({
        el: '#map', lat: 23.790223, lng: 90.414036, zoom: 13, zoomControl : true, 
        zoomControlOpt: { style : 'SMALL', position: 'TOP_LEFT' }, panControl : false, scrollwheel: false
      });
    // add address markers
    map.addMarker({ lat: 23.790223, lng: 90.414036, title: 'BD InfoSys',
      infoWindow: { content: '<p>Building # 2, Plot # 111, Road # 35, Gulshan - 2, Dhaka</p>' } });

/*----------------------------------------------------*/
/*	contact form
------------------------------------------------------*/

   $('form#contactForm button.submit').click(function() {

      $('#image-loader').fadeIn();
      var contactName = $('#contactForm #contactName').val();
      if(contactName == null || contactName ==0 || /^\s+$/.test(contactName)){
        alert("Por favor, ingrese el nombre del contacto");
         $('#image-loader').fadeOut();
         $('#message-warning').html("Error en el nombre del contacto");
        $('#message-warning').fadeIn();
        setTimeout(function() {
          document.getElementById("contactName").focus();
      }, 10);
          document.getElementById("contactName").focus();
      return false;
      }
      var contactEmail = $('#contactForm #contactEmail').val();
      if(contactEmail == null || contactEmail ==0 || /^\s+$/.test(contactEmail)){
        alert("Por favor, ingrese el correo del contacto");
         $('#image-loader').fadeOut();
         $('#message-warning').html("Error en el correo del contacto");
        $('#message-warning').fadeIn();
        setTimeout(function() {
          document.getElementById("contactEmail").focus();
      }, 10);
          document.getElementById("contactEmail").focus();
      return false;
      }
      var contactEmail = $('#contactForm #contactEmail').val();
      var correo= /^[^@\s]+@[^@\.\s]+(\.[^@\.\s]+)+$/;
      if (!(correo.test(contactEmail))) {
      alert('Por favor, ingrese un correo v\u00e1lido');
       $('#image-loader').fadeOut();
       $('#message-warning').html("Error correo no valido");
       $('#message-warning').fadeIn();
      setTimeout(function() {
        document.getElementById("contactEmail").focus();
      }, 10);
        document.getElementById("contactEmail").focus();
      return false;
      } 
      var contactSubject = $('#contactForm #contactSubject').val();
      if(contactSubject == null || contactSubject ==0 || /^\s+$/.test(contactSubject)){
        alert("Por favor, ingrese el asunto");
         $('#image-loader').fadeOut();
         $('#message-warning').html("Error en el asunto");
         $('#message-warning').fadeIn();
        setTimeout(function() {
          document.getElementById("contactSubject").focus();
      }, 10);
          document.getElementById("contactSubject").focus();
      return false;
      }
      var contactMessage = $('#contactForm #contactMessage').val();
      if(contactMessage == null || contactMessage ==0 || /^\s+$/.test(contactMessage)){
        alert("Por favor, ingrese el Mensaje");
         $('#image-loader').fadeOut();
         $('#message-warning').html("Error en el Mensaje");
         $('#message-warning').fadeIn();
        setTimeout(function() {
          document.getElementById("contactMessage").focus();
      }, 10);
          document.getElementById("contactMessage").focus();
      return false;
      }
      var captcha = $('#contactForm #captcha').val();
      if(captcha == null || captcha ==0 || /^\s+$/.test(captcha)){
        alert("Por favor, ingrese el captcha");
         $('#image-loader').fadeOut();
         $('#message-warning').html("Por favor, ingrese el captcha");
         $('#message-warning').fadeIn();
        setTimeout(function() {
          document.getElementById("captcha").focus();
      }, 10);
          document.getElementById("captcha").focus();
      return false;
      }
      
      var contactName = $('#contactForm #contactName').val();
      var contactEmail = $('#contactForm #contactEmail').val();
      var contactSubject = $('#contactForm #contactSubject').val();
      var contactMessage = $('#contactForm #contactMessage').val();
      var captcha = $('#contactForm #captcha').val();
      
      var data = 'contactName=' + contactName + '&contactEmail=' + contactEmail +
               '&contactSubject=' + contactSubject + '&contactMessage=' + contactMessage+ '&captcha=' + captcha;

      $.ajax({

	      type: "POST",
	      url: "inc/sendEmail.php",
	      data: data,
	      success: function(msg) {

            // Message was sent
            if (msg == 'OK') {
               $('#image-loader').fadeOut();
               $('#message-warning').hide();
               $('#contactForm').fadeOut();
               $('#message-success').fadeIn();   
            }
            // There was an error
            else {
               $('#image-loader').fadeOut();
               $('#message-warning').html(msg);
	            $('#message-warning').fadeIn();
            }

	      }

      });
      return false;
   });


});








