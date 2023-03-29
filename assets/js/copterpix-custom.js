//var para = document.querySelector(".copterpix-menu-btn");

$(window).scroll(function() {
    //addStickyClass();
    changeLogoOnScroll();
    
});

function changeLogoOnScroll(){
    var image = document.getElementById("company-logo");
    var nameindex = image.src.indexOf('images');    
    if (document.documentElement.scrollTop > 100){        
        image.src = image.src.substring(0, nameindex) + 'images/smalllcirclelogo.svg';        
    } else {
        image.src = image.src.substring(0, nameindex) + 'images/logo_white.svg'; 
    }           
}


//function addStickyClass() {
//    var height = $(window).scrollTop();        
//    var logourl = $('.navbar-brand img').attr("src");
//    //split by slashes:
//    var url_paths = logourl.indexOf('images');
//    var current_img = logourl.substring(url_paths+7, logourl.length);
//    
//    if(height  > 100 && current_img === 'logo_white.svg') {        
//        $('.navbar-brand img').fadeOut(400, function() {            
//            $('.navbar-brand img').attr('src', logourl.substring(0, url_paths) + 'images/smalllcirclelogo.svg');  
//        })
//        .fadeIn(400);
//        //$('.navbar-brand img').attr('src', logourl.substring(0, url_paths) + 'images/smalllcirclelogo.svg');
//    } 
//    if (height <= 100 && current_img === 'smalllcirclelogo.svg'){
//        $('.navbar-brand img').fadeOut(400, function() {            
//            $('.navbar-brand img').attr('src', logourl.substring(0, url_paths) +'images/logo_white.svg');
//        })
//        .fadeIn(400);        
//    }
//}


// Add the sticky class to the header when you reach its scroll position. Remove "sticky" when you leave the scroll position


// toggle class on click
//para.addEventListener("click", function () {
//  var element = document.getElementById("copterpix-sidebar");
//  element.classList.toggle("open");
//});

// home-page-slider
jQuery(document).ready(function () {    
    //addStickyClass();    
    /* NAVBAR HOVER */
    if (window.innerWidth > 992) {

        document.querySelectorAll('.navbar .nav-item').forEach(function(everyitem){

            everyitem.addEventListener('mouseover', function(e){

                let el_link = this.querySelector('a[data-bs-toggle]');
                
                if(el_link != null){
                    let nextEl = el_link.nextElementSibling;
                    el_link.classList.add('show');
                    nextEl.classList.add('show');
                    el_link.setAttribute('aria-expended', true);
                }

            });
            everyitem.addEventListener('mouseleave', function(e){
                let el_link = this.querySelector('a[data-bs-toggle]');

                if(el_link != null){
                    let nextEl = el_link.nextElementSibling;
                    el_link.classList.remove('show');
                    nextEl.classList.remove('show');
                    el_link.setAttribute('aria-expended', false);
                }


            });
        });
    }
    // end if innerWidth

    /***END OF NAVBAR HOVER ***/
  $('.products-slider').slick({
  dots: true,
  infinite: true,
  speed: 300,
  slidesToShow: 2,
  slidesToScroll: 1,  
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 2,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: true,
        arrows: false
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        dots: true,
          arrows: false
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});
  $('.solutions-step-1').slick({
      infinite: true,
      dots: true,
      centerMode: true,
      responsive: [
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 3,
            infinite: true,
            dots: true
          }
        },
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
    $('.examples-slider').slick({
      dots: true,
  infinite: true,
  speed: 300,
  slidesToShow: 1,
  adaptiveHeight: true 
    });    
    //Adjust the start point of blogs page right after the fixed header:    
    $('.site-blog-single').css('margin-top', $('.navbar').height()+40);
    $('.site-blog-archive').css('margin-top', $('.navbar').height()+40);

    
    $('.clients-row').slick({
      dots: true,
      infinite: true,              
      autoplaySpeed: 2000,
      slidesToShow: 4,
      slidesToScroll: 4,
      touchThreshold: 1000,
      autoplay: true,
      responsive: [
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 3,
            infinite: true,
            dots: true
          }
        },
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
});
