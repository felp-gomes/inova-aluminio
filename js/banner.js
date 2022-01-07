/* 
 Created on : 09/10/2017, 10:55:51
 Author     : Samuel Porto
 */
$(function () {

    var stop = false;
    var count = 0;
    $(".banner_navigator li").on("click", function () {
        var banner = $(this).attr("data-banner");
        $(".banner_container").stop().fadeOut();
        $(".banner_navigator li").removeClass("active");
        $(".banner_navigator").find("li").eq(banner).addClass("active");
        $(".banner_container").eq(banner).stop().fadeIn();
        stop = true;
    });


    //Navegação pelos botoes
    $(".banner_next").on("click", function () {
        var posicao = $(".banner_navigator li.active").next().attr('data-banner');
        if (posicao === undefined || posicao > 2) {
            posicao = 0;
            $(".banner_container").stop().fadeOut();
            $(".banner_navigator li").removeClass("active");
            $(".banner_navigator").find("li").eq(posicao).addClass("active");
            $(".banner_container").eq(posicao).stop().fadeIn();
        } else {
            $(".banner_container").stop().fadeOut();
            $(".banner_navigator li").removeClass("active");
            $(".banner_navigator").find("li").eq(posicao).addClass("active");
            $(".banner_container").eq(posicao).stop().fadeIn();
        }
        stop = true;

    });
    
    $(".banner_prev").on("click", function () {
        var posicao = $(".banner_navigator li.active").prev().attr('data-banner');

        if (posicao === undefined) {
            posicao = 2;
            $(".banner_container").stop().fadeOut();
            $(".banner_navigator li").removeClass("active");
            $(".banner_navigator").find("li").eq(posicao).addClass("active");
            $(".banner_container").eq(posicao).stop().fadeIn();
        } else {
            $(".banner_container").stop().fadeOut();
            $(".banner_navigator li").removeClass("active");
            $(".banner_navigator").find("li").eq(posicao).addClass("active");
            $(".banner_container").eq(posicao).stop().fadeIn();
        }
        stop = true;

    });


    setInterval(function () {
        if (stop === false) {
            if (count > 2) {
                count = 0;
            }
            $(".banner_container").stop().fadeOut();
            $(".banner_navigator li").removeClass("active");
            $(".banner_navigator").find("li").eq(count).addClass("active");
            $(".banner_container").eq(count).stop().fadeIn();
            count++;
        } else {
            setTimeout(function () {
                stop = false;
            }, 10000);
        }
    }, 4000);


});


