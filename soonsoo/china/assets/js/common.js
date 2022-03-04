$(document).ready(function(){
  //회사소개 - 더보기
  $(".btn_more a").click(function(){
      $(this).hide();
     $(".moreDesc").slideDown(500);
     return false;
 });

  //푸터 패밀리사이트
     $('.family_box').mouseover(function(){
       $(this).addClass('on');
     });
     $('.family_box .sub').mouseleave(function(){
       $(this).parent().removeClass('on');
     });
     $('.family_box').mouseleave(function(){
       $(this).removeClass('on');
     });


   //rolling slide
   $(".rolling_slide").slick({
     autoplay: true,
     autoplaySpeed: 1000,
     infinite: true,
     slidesToShow: 9,
     slidesToScroll: 1,
     arrows: false,
     swipeToSlide: true,
     waitForAnimate: false,
     pauseOnHover: false,
     pauseOnFocus: false,
     responsive: [
      {
        breakpoint: 780,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 3
        }
      }
    ]
   });

  //팝업 닫기
  $('.popup .close').click(function(){
    $(this).parent().parent().hide();
  });

  //회원가입 - 추가정보입력
  $('#signup.toggle #inputForm.add_info .title').click(function(){
    $(this).parent().toggleClass('show');
  });



  //회사소개 - 모바일 슬라이더
  $('.bxslider').bxSlider({
    auto: true,
    mode: 'fade',
    pager: true,
    speed: 500,
    easing: 'ease-in-out'
  });

  //비디오 팝업 닫기
  $('#video_detail').click(function(){
    $(this).hide();
    stopVideo();
  });

   //회원가입 이용약관 전문보기
  $('#signup_agree.account button.detail').on("click", function(){
    $(this).parent().parent().parent().next().slideToggle();
    $(this).parent().toggleClass('on');
  });
});
//팝업 열기
function openPwModify(){
  $('#pw_modify').show();
}
function openUnsubscribe(){
  $('#unsubscribe').show();
}
function openPostalCode(){
  postal_init();
  $("#search_first").show();
  $('#postal_code').show();
}
function openValidId(){
  $('#validID').show();
}
function whatVideo(){
    $('#video_detail').show();
}
