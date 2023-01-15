$(document).ready(function(){

    $(".toggle-menu").click(function(){
        $(this).toggleClass("open-menu");
        $(".header ul.menu").slideToggle();
    });

    $(".banner-slider").owlCarousel({
        autoplay:true,
        items:1,
        loop:true,
        dots:true,
        animateIn: 'fadeIn', // add this
        animateOut: 'fadeOut' // and this
    });



});

$(window).scroll(function () {
    var sc = $(window).scrollTop()
    if (sc > 0) {
        $(".header").addClass("with-annimate");
    } else {
        $(".header").removeClass("with-annimate");
    }
});
$(window).on("scroll",function(e){
    var scrollTop = $(window).scrollTop();
    if(scrollTop > 100){
        $(".up-arrow").show();
    } else {
        $(".up-arrow").hide();
    }
});
$(document).on('click','.up-arrow',function(e){
  var scrollTop = $(window).scrollTop();
  $("html, body").animate({ scrollTop: 0 }, "slow");
  return false;
});