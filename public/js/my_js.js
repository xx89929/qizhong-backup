//
//var windowTop=50;
//$(window).scroll(function() {
//    var scrolls = $(this).scrollTop();
//    if(scrolls>=windowTop && scrolls >50){ //向下 隐藏
//        $(".navbar-fixed-top").removeClass("headroom-show");
//        $(".navbar-fixed-top").addClass("headroom-hidden");
//        windowTop = scrolls;
//    }else{ //向上 显示
//        $(".navbar-fixed-top").removeClass("headroom-hidden");
//        $(".navbar-fixed-top").addClass("headroom-show");
//        windowTop = scrolls;
//    }
//});

$(document).ready(function(){
    var myElement = document.querySelector(".navbar-fixed-top");

    var headroom = new Headroom(myElement, {
        "tolerance": 5,
        "offset": 205,
        "classes": {
            "initial": "headroom",
            "pinned": "headroom-show",
            "unpinned": "headroom-hidden"
        }
    });

    headroom.init();
    console.log(headroom);
});





$(function() {
    $("img.lazy").lazyload({
        threshold : 1000,
    });
});

//$(document).ready(function(){
//    var nav_section = $('.nav-alls >li');
//    nav_section.on('mouseover',function(){
//        nav_section.removeClass('active');
//        $(this).addClass('active');
//    })
//})
