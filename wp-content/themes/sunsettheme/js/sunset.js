jQuery(document).ready(function($){
  //custom sunset scripts



/*Init funciones*/
  revealPosts ();

  /* Variables */
  var carousel = '.sunset-carousel-thumb';
  var last_scroll = 0;

  /* Funciones de caruosel bootstrap*/
  sunset_get_bs_thumbs(carousel);


  $(carousel).on('slid.bs.carousel', function(){
    sunset_get_bs_thumbs(carousel);
  });

  function sunset_get_bs_thumbs( carousel ){

    $(carousel).each(function() {

      var nextThumb =  $(this).find('.item.active').find('.next-image-preview').data('image');
      var prevThumb =  $(this).find('.item.active').find('.prev-image-preview').data('image');
      $(this).find('.carousel-control.right').find('.thumbnail-container').css({'background-image' : 'url('+nextThumb+')'});
      $(this).find('.carousel-control.left').find('.thumbnail-container').css({'background-image' : 'url('+prevThumb+')'});
    });

  }

  /*
  Funciones de ajax
  */
  $(document).on('click', '.sunset-load-more:not(.loading)', function() {

    var that = $(this);
    var page = that.data('page');
    var ajaxurl = that.data('url');
    var newPage = page+1;
    var prev = that.data('prev');

    if (typeof prev === 'undefined') {
        prev = 0;
    }

    that.addClass('loading').find('.text').slideUp(320);
    that.find('.sunset-icon').addClass('spin');

    $.ajax({
      url : ajaxurl,
      type : 'post',
      data : {
        page : page,
        action : 'sunset_load_more'
      },
      error : function ( response ) {
        console.log(response);
      },
      success : function (response){

          setTimeout(function (){

        that.data('page',newPage);
        $('.sunset-posts-container').append(response);

          that.removeClass('loading').find('.text').slideDown(320);
          that.find('.sunset-icon').removeClass('spin');

          revealPosts();

        }, 1000);

      }
    });

  });

/* Funciones de Scroll*/
  $(window).scroll(function() {

    var scroll = $(window).scrollTop();

    if ( Math.abs(scroll - last_scroll) > $(window).height()*0.1 ) {
        last_scroll = scroll;

        $('.page-limit').each(function(index) {
            if (isVisible( $(this) ) ) {

                history.replaceState(null, null, $(this).attr("data-page") );
                return (false);

            }

        });

    }

  });


  /*
        funciones de ayuda
   */

  function revealPosts (){

    var posts = $('article:not(.reveal)');
    var i = 0;

    setInterval(function(){

        if (i >= posts.lenght) return false;

          var el = posts[i];
          $(el).addClass('reveal').find('.sunset-carousel-thumb').carousel();

          i++

    },200);

  }

  function isVisible( element) {

      var scroll_pos = $(window).scrollTop();
      var window_height = $(window).height();
      var el_top = $(element).offset().top;
      var el_height = $(element).height();
      var el_bottom = el_top + el_height;

      return ( (el_bottom - el_height*0.25 > scroll_pos ) && (el_top < (scroll_pos+0.5*window_height ) ) );

  }

});
