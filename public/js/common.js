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

$(document).ready(function(){
    $("#top_btn").click(function(){if(scroll=="off") return;$("html,body").animate({scrollTop: 0}, 600);});
    $(".wx_ewm_small").hover(function(){
        $(".wx_ewm_big").show();
    },function(){
        $(".wx_ewm_big").hide();
    })
});