
$(function() {

    "use strict";

    var wind = $(window);



    // scrollIt
    $.scrollIt({
      upKey: 38,                // key code to navigate to the next section
      downKey: 40,              // key code to navigate to the previous section
      easing: 'swing',          // the easing function for animation
      scrollTime: 600,          // how long (in ms) the animation takes
      activeClass: 'active',    // class given to the active nav element
      onPageChange: null,       // function(pageIndex) that is called when page is changed
      topOffset: -80            // offste (in px) for fixed top navigation
    });



    // navbar scrolling background
    wind.on("scroll",function () {

        var bodyScroll = wind.scrollTop(),
            navbar = $(".navbar"),
            logo = $(".navbar .logo> img");

        if(bodyScroll > 100){

            navbar.addClass("nav-scroll");
            logo.attr('src', 'img/logo-dark.png');

        }else{

            navbar.removeClass("nav-scroll");
            logo.attr('src', 'img/logo-light.png');
        }
    });


    // close navbar-collapse when a  clicked
    $(".navbar-nav a").on('click', function () {
        $(".navbar-collapse").removeClass("show");
    });




    // sections background image from data background
    var pageSection = $(".bg-img, section");
    pageSection.each(function(indx){
        
        if ($(this).attr("data-background")){
            $(this).css("background-image", "url(" + $(this).data("background") + ")");
        }
    });


    // === owl-carousel === //

    // Testimonials owlCarousel
    $('.carousel-single .owl-carousel').owlCarousel({
        items:1,
        loop:true,
        margin: 0,
        mouseDrag:false,
        autoplay:true,
        smartSpeed:500,
        dots: false,
        nav: true,
        navText: ['<i class="fas fa-chevron-left"></i>','<i class="fas fa-chevron-right"></i>']
    });

    // Clients owlCarousel
    $('.clients .owl-carousel').owlCarousel({
        loop:true,
        margin: 60,
        mouseDrag:true,
        dots: false,
        responsiveClass:true,
        responsive:{
            0:{
                items:2,
                autoplay:true,
            },
            600:{
                items:3,
                autoplay:true,
            },
            1000:{
                items:6,
                autoplay:false,
            }
        }
    });

    // === End owl-carousel === //


    // magnificPopup
    $('.gallery').magnificPopup({
        delegate: '.popimg',
        type: 'image',
        gallery: {
            enabled: true
        }
    });

    // YouTubePopUp
    $("a.vid").YouTubePopUp();



    // accordion
    $(".accordion").on("click",".title", function () {

        $(this).next().slideDown();

        $(".accordion-info").not($(this).next()).slideUp();

    });

    $(".accordion").on("click",".item", function () {

        $(this).addClass("active").siblings().removeClass("active");

    });

    // Botón para ir arriba
    $('.ir-arriba').click(function(){
		$('body, html').animate({
			scrollTop: '0px'
		},300 );
	});

	$(window).scroll(function(){
		if ($(this).scrollTop() > 0){
			$('.ir-arriba').slideDown(300);
		} else {
			$('.ir-arriba').slideUp(300);
		};
	});

   
});


// === window When Loading === //

$(window).on("load",function (){

    var wind = $(window);

    // Preloader
    $(".loading").fadeOut(500);


    // stellar
    wind.stellar();


    // isotope
    $('.gallery').isotope({
      // options
      itemSelector: '.items'
    });

    var $gallery = $('.gallery').isotope({
      // options
    });

    // filter items on button click
    $('.filtering').on( 'click', 'span', function() {

        var filterValue = $(this).attr('data-filter');

        $gallery.isotope({ filter: filterValue });

    });

    $('.filtering').on( 'click', 'span', function() {

        $(this).addClass('active').siblings().removeClass('active');

    });



});


// Slider 
$(document).ready(function() {

    var owl = $('.header .owl-carousel');


    // Slider owlCarousel
    $('.slider .owl-carousel').owlCarousel({
        items: 1,
        loop:true,
        margin: 0,
        autoplay:true,
        smartSpeed:500
    });

    // Slider owlCarousel
    $('.slider-fade .owl-carousel').owlCarousel({
        items: 1,
        loop:true,
        margin: 0,
        autoplay:true,
        smartSpeed:500,
        animateOut: 'fadeOut'
    });

    owl.on('changed.owl.carousel', function(event) {
        var item = event.item.index - 2;     // Position of the current item
        $('h4').removeClass('animated fadeInLeft');
        $('h1').removeClass('animated fadeInRight');
        $('p').removeClass('animated fadeInUp');
        $('.butn').removeClass('animated zoomIn');
        $('.owl-item').not('.cloned').eq(item).find('h4').addClass('animated fadeInLeft');
        $('.owl-item').not('.cloned').eq(item).find('h1').addClass('animated fadeInRight');
        $('.owl-item').not('.cloned').eq(item).find('p').addClass('animated fadeInUp');
        $('.owl-item').not('.cloned').eq(item).find('.butn').addClass('animated zoomIn');
    });

});





 /*------Formulario de contacto----*/

    // Destraba el validador
    $("#nombre").keyup(function() {
        $("#nombre").removeClass("borde_alerta").addClass("borde_normal");
    });
    $("#email").keyup(function() {
        $("#email").removeClass("borde_alerta").addClass("borde_normal");
    });

    // Acciones del formulario de consultas
    $("#boton_formulario").click(function(event){
       
        // Previene el envío accidental del formulario
        event.preventDefault();
        event.stopPropagation();

        // Declaración de variables
        let nombre = $("#nombre").val();
        let email = $("#email").val();
        let mensaje = $("#mensaje").val();

        var validate = true;
        
        if(email.indexOf('@', 0) == -1 || email.indexOf('.', 0) == -1) {
            $.notify("Debe ingresar un email válido", "error");
            $("#email").removeClass("borde_normal").addClass("borde_alerta");
            $("#email").focus();
            validate = false;
        };

        if (nombre.length < 2) {
            $.notify("Debe completar el nombre y debe tener 3 o más caracteres", "error");
            $("#nombre").removeClass("borde_normal").addClass("borde_alerta");
            $("#nombre").focus();
            validate = false;
        };


        if(validate) {

            // Variables para pasarle al procesador del formulario procesa_formulario.php
            var parametros = {
                "nombre": nombre,
                "email": email,
                "mensaje": mensaje
            };

            // Llamada Ajax
            // Esto es lo que llama al formulario

            $.ajax({
                type: 'POST',
                dataType:'JSON',
                url: 'procesa_formulario.php',
                data: parametros,
                success:function(data){
                    $.notify("Formulario enviado con éxito.", "success");
                    $("#nombre").val("");
                    $("#email").val("");
                    $("#mensaje").val("");
                },
                error: function (xhr, ajaxOptions, thrownError) {
                    $.notify("Existió un error en el envío del mail", "error");
                }
            });


        };

       

    });

    /*------Formulario de contacto Fin----*/
