$(document).ready(function () {

    //강사진 이미지 토글
    $(".teac_1").click(function () {
        $(".info_1").slideToggle("slow");
    });

    $(".teac_2").click(function () {
        $(".info_2").slideToggle("slow");
    });

    $(".teac_3").click(function () {
        $(".info_3").slideToggle("slow");
    });

    $(".teac_4").click(function () {
        $(".info_4").slideToggle("slow");
    });

    $(".lit_btn img").hover(function () {
        $(".literacy").fadeIn("slow");
    });

    $(".literacy").mouseleave(function () {
        $(".literacy").fadeOut("slow");
    });


    //라이브 그래프 말풍선
    $('.live_g_num .g_1').hover(
            function () {
                $('.live_t_num .t_1').addClass("active");
            },
            function () {
                $('.live_t_num .t_1').removeClass("active");
            });

    $('.live_g_num .g_2').hover(
            function () {
                $('.live_t_num .t_2').addClass("active");
            },
            function () {
                $('.live_t_num .t_2').removeClass("active");
            });

    $('.live_g_num .g_3').hover(
            function () {
                $('.live_t_num .t_3').addClass("active");
            },
            function () {
                $('.live_t_num .t_3').removeClass("active");
            });

    $('.live_g_num .g_4').hover(
            function () {
                $('.live_t_num .t_4').addClass("active");
            },
            function () {
                $('.live_t_num .t_4').removeClass("active");
            });

    $('.live_g_num .g_5').hover(
            function () {
                $('.live_t_num .t_5').addClass("active");
            },
            function () {
                $('.live_t_num .t_5').removeClass("active");
            });

    $('.live_g_num .g_6').hover(
            function () {
                $('.live_t_num .t_6').addClass("active");
            },
            function () {
                $('.live_t_num .t_6').removeClass("active");
            });

    $('.live_g_num .g_7').hover(
            function () {
                $('.live_t_num .t_7').addClass("active");
            },
            function () {
                $('.live_t_num .t_7').removeClass("active");
            });

    $('.live_02_w .lit_btn').mouseover(function () {
        $('.live_02_w .literacy').slideToggle("slow");
    });

    $('.live_02_w .literacy').mouseleave(function () {
        $('.live_02_w .literacy').slideToggle("slow");
    });


    //빅캣영어 슬라이드
    $(".single-item-1").slick({
        dots: true,
        horizontal: true,
        centerMode: false,
        slidesToShow: 4,
        autoplay: true,
        slidesToScroll: 4
    });

    $(".single-item-2").slick({
        dots: true,
        horizontal: true,
        centerMode: false,
        slidesToShow: 1,
        autoplay: true,
        slidesToScroll: 1
    });

    $(".single-item-3").slick({
        dots: true,
        horizontal: true,
        centerMode: false,
        slidesToShow: 3,
        autoplay: true,
        slidesToScroll: 3
    });

    $(".single-item-4").slick({
        dots: true,
        horizontal: true,
        centerMode: false,
        slidesToShow: 1,
        autoplay: true,
        slidesToScroll: 1
    });

    //빅캣영어 랜딩 텍스트 이미지 변경
    //  $("#e_box1").hover(function () {
    //    $(this).attr("src", "/images/english/new/180711_b_english_6_on.png");
    //}, function () {
    //   $(this).attr("src", "/images/english/new/180711_b_english_6_off.png");
    //});
    //$("#e_box2").hover(function () {
    //   $(this).attr("src", "/images/english/new/180711_b_english_7_on.png");
    //}, function () {
    //  $(this).attr("src", "/images/english/new/180711_b_english_7_off.png");
    //});
    //$("#e_box3").hover(function () {
    //   $(this).attr("src", "/images/english/new/180711_b_english_8_on.png");
    //}, function () {
    //   $(this).attr("src", "/images/english/new/180711_b_english_8_off.png");
    //});
    //$("#e_box4").hover(function () {
    //   $(this).attr("src", "/images/english/new/180711_b_english_9_on.png");
    //}, function () {
    //   $(this).attr("src", "/images/english/new/180711_b_english_9_off.png");
    // });
    //$("#e_box5").hover(function () {
    //   $(this).attr("src", "/images/english/new/180711_b_english_10_on.png");
    //}, function () {
    //   $(this).attr("src", "/images/english/new/180711_b_english_10_off.png");
    //});
    //$("#t_box").hover(function () {
    //  $(this).attr("src", "/images/english/new/english_04_t_on.png");
    //}, function () {
    //   $(this).attr("src", "/images/english/new/english_04_t_off.png");
    //});


    $(".desc_toggle ul li").hover(function () {
        $("img", this).attr("src", $("img", this).attr("src").replace("off.png", "on.png"));
    }, function () {
        $("img", this).attr("src", $("img", this).attr("src").replace("on.png", "off.png"));
    });


    $(".teacher_box").hover(function () {
        $("img", this).attr("src", $("img", this).attr("src").replace("off.png", "on.png"));
    }, function () {
        $("img", this).attr("src", $("img", this).attr("src").replace("on.png", "off.png"));
    });

});