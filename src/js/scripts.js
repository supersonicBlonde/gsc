/*

@package gsc


*/


jQuery(document).ready(function($){

  $('.mh').matchHeight();

  $('.logos-slider').slick({
    infinite: false,
    slidesToShow: 8, 
    slidesToScroll: 8,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 5,
          slidesToScroll: 5, 
        }
      }, 
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 3
        }
      }, 
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2
        }
      }
      // You can unslick at a given breakpoint now by adding:
      // settings: "unslick"
      // instead of a settings object
    ]
  });

  $('#stories-list').slick({
    dots: true,
    arrows: false,
    infinite: true,
    slidesToShow: 3,
    slidesToScroll: 3,
    responsive: [
      /* {
        breakpoint: 1024,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 3,
          infinite: true,
          dots: true
        }
      }, */
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2
        }
      },
      {
        breakpoint: 480,
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

  $('#team-slider').slick({
    dots: false,
    arrows: true,
    infinite: true,
    slidesToShow: 4,
    slidesToScroll: 4
  });

  $('#story-slider').slick({
    centerMode: true,
    centerPadding: '60px',
    slidesToShow: 3,
    responsive: [
      {
        breakpoint: 768,
        settings: {
          arrows: false,
          centerMode: true,
          centerPadding: '40px',
          slidesToShow: 3
        }
      },
      {
        breakpoint: 480,
        settings: {
          arrows: false,
          centerMode: true,
          centerPadding: '40px',
          slidesToShow: 1
        }
      }
    ]
  });

    
	$('#search-faq').on('submit' , function(e) {
    e.preventDefault();
		$.post($("#search-faq").data('url'), $("#search-faq").serialize())
			.done(function(response) {
			//console.log(response);
			$('#results').html(response.data);
		}) 
		.fail(function(error) {
			console.log("error post ajax");
		})
	})

  function counterUp(el) {
    jQuery('.counter').each(function () {
      jQuery(this).prop('Counter',0).animate({
          Counter: jQuery(this).text()
      }, {
          duration: 4000,
          easing: 'swing',
          step: function (now) {
              jQuery(this).text(Math.ceil(now));
          }
      });
  });
  }
  
  const el = document.querySelector( '.counter' );
  if(el) {
  new Waypoint( {
      element: el,
      handler: function() { 
          counterUp( el ) 
          this.destroy()
      },
      offset: 'bottom-in-view',
  } )
  }
});

document.addEventListener('DOMContentLoaded', function(e) {

 /*  let dropdown = document.querySelector('.dropdown');
  let menu_link = dropdown.querySelector('a');

  menu_link.addEventListener("touchstart", function(e) {
    if (menu_link !== e.target) {console.log(e.target)}
    e.preventDefault();
    let child = dropdown.querySelector('.dropdown-menu');
    if(child.style.display == 'block') {
      child.style.display = "none";
    }
    else {
      child.style.display = "block";
    }
  }); */
  
  const solution = document.querySelector('.solution-menu');
  const submenu = document.getElementById('submenu');
  const nav = document.getElementById('master-header');
  const nodrop = document.querySelectorAll('.nodrop');
  
  function hideDropdown() {
    submenu.classList.add("transition");
    submenu.classList.remove("reveal");
  }

  
  solution.addEventListener('mouseenter' , function() {
    submenu.classList.add("reveal");
    submenu.classList.add("transition");
  });
  nav.addEventListener('mouseleave' , hideDropdown);
  nodrop.forEach(element => 
    element.addEventListener('mouseenter' , hideDropdown)
  );



});