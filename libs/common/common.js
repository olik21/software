$(function() {

  // MANSORY

    $('#masonry-grid').masonry({
      columnWidth: '.grid-item',
      itemSelector: '.grid-item',
    });

    $("#grid-filter button").click(function() {
        var group = $(this).data('category');
        var group_class = "." + group;
        $('button.mixitup-control-active').removeClass('mixitup-control-active')
        $(this).addClass('mixitup-control-active')
        if(group == "*"){
            $(".grid-item").show();
          $('#masonry-grid').masonry('layout');
           }
          else if(group != "") {
            $(".grid-item").hide();
            $(group_class).show();
            $('#masonry-grid').masonry('layout');
          } else {
            $(".grid-item").show();
            $('#masonry-grid').masonry('layout');
          }
    });

  // SELECTIZE CUSTOM SELECT PLUGIN

  $('.selectize').selectize({
    create: true,
    sortField: 'text'
});

  // MAGNIFIC POPUP

  $('.btn-modal').magnificPopup({
    type:'inline',
    midClick: true // Allow opening popup on middle mouse click. Always set it to true if you don't provide alternative source in href.
  });

	// ADAPTIVE MENU

	$('.hamburger').click(function() {
      $(this).toggleClass('is-active');
      $('.main-nav').toggleClass('open-menu', function() {
          if ($(this).css('display') === 'none') {
              $(this).removeAttr('style');
          }
      });
  });

	// SCROLL TO ANCHOR

	$('.btn--scroll').click(function(e) { // без мерцания
    e.preventDefault();
    $('html, body').animate({
        scrollTop: $('#expertise').position().top
    }, 500);
});

	//SLICK SLIDER

	$('.s-review-slider').slick({
		arrows: false, 
		draggable: false,
	});

  $('.s-case-slider').slick({
    arrows: false, 
    dots: true,
  });

  $('.s-staff-slider').slick({
    arrows: false, 
    dots: true,
    slidesToShow: 2,
    slidesToScroll: 1,
    responsive: [
    {
      breakpoint: 992,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1,
      }
    },
    {
      breakpoint: 700,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
  });

	$('.s-blog-slider').slick({
		arrows: false, 
		draggable: false,
		slidesToShow: 3,
		slidesToScroll: 1,
		responsive: [
    {
      breakpoint: 992,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2,
        infinite: true,
      }
    },
    {
      breakpoint: 700,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
	});

	// SLICK NAV

	$('.review__prev').click(function(){
	  $('.s-review-slider').slick('slickPrev');
	})
	$('.review__next').click(function(){
	  $('.s-review-slider').slick('slickNext');
	})

	$('.blog__prev').click(function(){
	  $('.s-blog-slider').slick('slickPrev');
	})
	$('.blog__next').click(function(){
	  $('.s-blog-slider').slick('slickNext');
	})

	// ACCORDION JQUERY

	$('.s-hiring-accordion > li:eq(0) a').addClass('active').next().slideDown();

    $('.s-hiring-accordion a').click(function(j) {
        var dropDown = $(this).closest('li').find('.drop');

        $(this).closest('.s-hiring-accordion').find('.drop').not(dropDown).slideUp();

        if ($(this).hasClass('active')) {
            $(this).removeClass('active');
        } else {
            $(this).closest('.s-hiring-accordion').find('a.active').removeClass('active');
            $(this).addClass('active');
        }

        dropDown.stop(false, true).slideToggle();

        j.preventDefault();
    });

});
