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
<body>
<div id="login" class="account">
  <div class="back_btn mobile">
    <button type="button" name="button" onclick="location.href=document.referrer; return false;"></button>
  </div>
  <div class="inner">
    <div class="logo">
      <img src="/images/account/logo.png" alt="렛츠고차이나" onclick="location.href='/main'">
    </div>
    <form name="loginForm" id="loginForm">
        <div class="box">
          <h3>순수교육에서 제공하는 다양한 서비스로<br>아이들에게 배우는 즐거움을 선물하세요!</h3>
          <input type="text" name="login_id" placeholder="아이디" class="input_box">
          <input type="password" name="password" placeholder="비밀번호" class="input_box">
          <div id="china_chk">
            <input type="checkbox" id="chk">
            <label for="chk">로그인 상태 유지</label>
          </div>
          <button type="button" name="button" class="submit" id="login_b">로그인</button>
          <div class="link clear">
            <!-- 적용 후 url 연결 확인 -->
            <a href="/member/signup_agree">회원가입</a>
            <div class="forget">
              <a href="/member/forget_account?type=id">아이디 찾기</a>
              <a href="/member/forget_account?type=pw">비밀번호 찾기</a>
            </div>
          </div>
        </div>
    </form>
  </div>
  <div class="notice">
    <dl>
      <dt>잠깐, 지금 렛츠고차이나 회원이 되면?</dt>
      <dd>렛츠고차이나 <span>콘텐츠 할인권</span> 즉시 발급</dd>
      <dd>홈페이지에서 진행되는 다양한 <span>이벤트 & 특별 사은품</span> 참여가능</dd>
    </dl>
  </div>
</div>
<script>

    $(document).ready(function () {

        $('#loginForm').keydown(function (e) {
            var key = e.which;
            if (key == 13) {
                // As ASCII code for ENTER key is "13"
                $("#login_b").trigger("click");
            }
        });

        $("#login_b").click(function () {

            if (!jQuery('input[name="login_id"]').val()) {
                alert('아이디를 입력하세요');
                jQuery('input[name="login_id"]').focus();
                return false;
            }

            if (!jQuery('input[name="password"]').val()) {
                alert('비밀번호를 입력하세요');
                jQuery('input[name="password"]').focus();
                return false;
            }

            jQuery.ajax({
                url: '/member/set_login',
                data: jQuery("form[name='loginForm']").serialize(),
                type: 'POST',
                timeout: 10000,
                dataType: 'json',
                success: function (data) {
                    if (data.result == '200') {
                        window.location.href = '/';
                    } else if (data.result == '201') {
                        //window.location.href = '/member/join_agree2';
                        window.location.href = '/';
                    } else {
                        alert(data.message);
                    }
                },
                error: function (xhr, status, error) {
                    console.log(xhr, status, error);
                    alert("네트워크 오류!! 다시 선택하여 주세요!!");
                    return false;
                }
            });
        });

    });

</script>
</body>
</html>
