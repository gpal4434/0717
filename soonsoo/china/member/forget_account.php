<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" href="/images/favicon.ico">
  <title>렛츠고 차이나</title>
  <meta name=”keywords” content = "렛츠고차이나, 렛츠고리딩, 순수교육, 구근회, 렛츠고스피킹, 슬리핑잉글리쉬, 영어교육, 중국어교육, 유아교육, 중국어배우기, 어린이중국어, 레츠고차이나, letsgochina">
  <meta name = “description” content = "순수교육 렛츠고차이나는 기초부터 쉽게 동화책으로 스토리학습을 하고 게임하듯 재밌게 배울 수 있는 중국어 교육입니다. 국내최초 한자쓰기 훈련을 통해 HSK를 대비할 수 있고, 일대일 전문 맞춤 코칭으로 성취감과 자신감을 높여줍니다.">
  <meta property="og:title" content="렛츠고차이나" />
  <meta property="og:description" content="기초부터 쉽고 재미있게 동화책 스토리학습과 국내 최초 한자쓰기로 HSK에 대비할 수 있는 렛츠고차이나!">
  <meta property="og:image" content="http://china.bigcat.co.kr/images/lets_go_china_og_img.png">
  <link rel="stylesheet" type="text/css" href="/assets/css/slick.css">
  <link rel="stylesheet" type="text/css" href="/assets/css/slick-theme.css">
  <link rel="stylesheet" type="text/css" href="/assets/css/jquery.bxslider.min.css">
  <link rel="stylesheet" href="/assets/css/reset.css">
  <link rel="stylesheet" href="/assets/css/style.css">
  <link rel="stylesheet" href="/assets/css/china/licensee.css">
  <link rel="stylesheet" href="/assets/css/china/letsgo_china.css">
  <link rel="stylesheet" href="/assets/css/china/account.css">
  <link rel="stylesheet" href="/assets/css/china/customer_center.css">
  <link rel="stylesheet" href="/assets/css/china/china_info.css">
  <link rel="stylesheet" href="/assets/css/common.css">
  <link rel="stylesheet" href="/assets/css/media.css">
  <script src="/assets/js/jquery-1.12.4.min.js"></script>
  <script src="/assets/js/jquery-1.7.2.min.js"></script>
  <script type="text/javascript" src="/assets/js/jplayer/jquery.jplayer.min.js"></script>
  <script src="/assets/js/slick.min.js" charset="utf-8"></script>
  <script src="/assets/js/jquery.bxslider.min.js" charset="utf-8"></script>
  <script src="/assets/js/progressbar.js"></script>
  <script src="/js/paging.controller.js"></script>
  <script src="/assets/js/common.js"></script>
  <script type="text/javascript" src="/assets/js/js.cookie.js"></script>
</head>

<!-- (D) 아이디찾기는 .box.id 비밀번호찾기는 .box.pw 입니다.
         기본값은 아이디찾기 페이지로 퍼블되어있고, 비밀번호찾기 타고 들어왔을 때는 .box.id가 hide되어야 합니다.
-->
<body>
<div id="forget_account" class="account">
  <div class="back_btn mobile">
    <button type="button" name="button"></button>
  </div>
  <div class="inner">
    <div class="logo web">
      <img src="/images/account/logo.png" alt="렛츠고차이나" onclick="location.href='/main'">
    </div>
    <div class="title mobile">
      <span>아이디 / 비밀번호 찾기</span>
    </div>
    <div class="tab">
      <ul class="clear">
        <!-- (D) 탭클릭시 li에 on이 붙으면 탭 활성화 -->
        <li class="on" id="id_li">아이디 찾기</li>
        <li id="pw_li">비밀번호 찾기</li>
      </ul>
    </div>
    <div class="box id">
      <!-- 아이디찾기찾기 -->
      <form name="id_search_form" id="id_search_form">
        <div class="forget_input" id="forget_input">
          <input type="text" id="id_name" name="id_name" class="input_box" placeholder="학생이름 입력">
          <input type="tel" class="input_box" name="id_phone" id="id_phone" placeholder="보호자 핸드폰번호 입력('-'빼고 입력)">
        </div>
      </form>
      <!-- 아이디찾기찾기 -->

      <!-- (D) 아이디찾기 완료 -->
      <div class="forget_view" id="forget_view_id" style="display: none">
        <p class="small">회원님의 아이디가 확인되었습니다.</p>
        <p class="big">아이디 :
          <span id="forget_value_id"></span>
        </p>
      </div>
      <!-- 아이디찾기 완료 -->
      <button type="button" name="button" class="submit" id="id_b">확인</button>
    </div>
    <div class="box pw">
      <!-- 비밀번호 찾기 -->
      <form name="pw_search_form" id="pw_search_form">
        <div class="forget_input">
         <input type="text" class="input_box" name="pw_id" id="pw_id" placeholder="학생아이디 입력">
         <input type="tel" class="input_box" name="pw_phone" id="pw_phone" placeholder="보호자 핸드폰번호 입력('-'빼고 입력)">
        </div>
      </form>
      <!-- //비밀번호 찾기 -->

      <!-- 비밀번호찾기 완료 -->
      <!-- <div class="forget_view pw" id="forget_view_pw"  style="display: none">
        <p><span id="user_name"></span>님 의 핸드폰번호
          <span id="view_email">010-1234-5678</span>로<br />
          임시 비밀번호를 발송하였습니다.
        </p>
      </div> -->
      <div class="forget_view" id="forget_view_pw" style="display: none">
        <p class="big">임시 비밀번호 :
          <span id="forget_value_pw"></span>
        </p>
        <p class="small">마이페이지에서 비밀번호를 바꿔주세요.</p>
      </div>
      <!-- //비밀번호찾기 완료 -->
      <button type="button" name="button" class="submit" id="pw_b">확인</button>
    </div>
  </div>
</div>

<script>
var type = "<?=$type?>";

$(document).ready(function(){
  if(type == "id"){
    $('.box.id').show();
    $('.box.pw').hide();
    $("#id_li").siblings().removeClass('on');
    $("#id_li").addClass('on');
  }else{
    $('.box.id').hide();
    $('.box.pw').show();
    $("#pw_li").siblings().removeClass('on');
    $("#pw_li").addClass('on');
  }

  $('.tab li').click(function(){
    if(!$(this).hasClass('on')){
      $(this).siblings().removeClass('on');
      $(this).addClass('on');
    }

    var index = $(this).index();
    switch (index) {
      case 0:
        $('.box.id').show();
        $('.box.pw').hide();
        break;
      case 1:
        $('.box.id').hide();
        $('.box.pw').show();
        break;
    }
  });

   $("#id_b").click(function () {
       if($("#forget_value_id").text() == ""){
            if (!$('#id_name').val()) {
                alert('이름을 입력하세요');
                $('#name').focus();
                return false;
            }

            if (!$('#id_phone').val()) {
                alert('전화번호를 입력하세요');
                $('#email').focus();
                return false;
            }

            jQuery.ajax({
                url: '/member/find_id',
                data: $('#id_search_form').serialize(),
                type: 'POST',
                timeout: 10000,
                dataType: 'json',
                success: function (data) {
                    if (data.result) {
                        $("#forget_value_id").text(data.find_id);
                        $("#forget_view_id").show();
                        $("#id_b").text("로그인");
                    } else  {
                        alert(data.message);
                    }
                },
                error: function (xhr, status, error) {
                    console.log(xhr, status, error);
                    alert("네트워크 오류!! 다시 선택하여 주세요!!");
                    return false;
                }
            });
        }else{
            location.href="/member/login";
        }
    });

    $("#pw_b").click(function () {
        if($("#forget_value_pw").text() == ""){
            if (!$('#pw_id').val()) {
                alert('ID를 입력하세요');
                $('#id').focus();
                return false;
            }

            if (!$('#pw_phone').val()) {
                alert('전화번호를 입력하세요');
                $('#email').focus();
                return false;
            }

            jQuery.ajax({
                url: '/member/find_pw',
                data: $('#pw_search_form').serialize(),
                type: 'POST',
                timeout: 10000,
                dataType: 'json',
                success: function (data) {
                    if (data.result) {
                        $("#forget_value_pw").text(data.user_pw);
                        $("#forget_view_pw").show();
                        $("#pw_b").text("로그인");
                    } else  {
                        alert(data.message);
                    }
                },
                error: function (xhr, status, error) {
                    console.log(xhr, status, error);
                    alert("네트워크 오류!! 다시 선택하여 주세요!!");
                    return false;
                }
            });
        }else{
            location.href="/member/login";
        }
    });
});
</script>
</body>
</html>
