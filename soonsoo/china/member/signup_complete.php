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
  <div id="signup" class="account complete">
      <div class="back_btn mobile">
        <button type="button" name="button"></button>
      </div>
      <div class="inner">
        <div class="logo web">
          <img src="/images/account/logo.png" alt="렛츠고차이나" onclick="location.href='/main'">
        </div>
        <div class="step web">
          <ul class="clear">
            <li>약관동의</li>
            <li>개인정보 입력</li>
            <li class="on">가입완료</li>
          </ul>
        </div>
        <div class="title mobile">
          <img src="/images/account/m_title3.png" alt="가입완료">
        </div>
        <div class="comp_cont clear">
          <span class="img"></span>
        <?php 
          if($code > 200){
        ?>
            <span class="txt" >회원가입 완료<br>
                <span class="warn" style=""><?=$message?></span>        
            </span>
        <?php
          }else{
        ?>
            <span class="txt"><?=$message?></span>
        <?php
          }
        ?>
        </div>
        <div class="submit_btns">
          <ul class="clear">
            <li>
              <button type="button" name="button" class="gray" onclick="location.href='/main'">홈으로</button>
            </li>
            <li>
              <button type="button" name="button" class="red" onclick="location.href='/member/login'">로그인</button>
            </li>
          </ul>
        </div>
        <div class="notice">
          <dl class="clear">
            <dt>잠깐, 지금 렛츠고차이나 회원이 되면?</dt>
            <dd>렛츠고차이나 <span>콘텐츠 할인권</span> 즉시 발급</dd>
            <dd>홈페이지에서 진행되는 다양한 <span>이벤트 & 특별 사은품</span> 참여가능</dd>
          </dl>
        </div>
      </div>
    </div>
</body>
</html>
