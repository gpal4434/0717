<script>
$(document).ready(function(){
  listController.setPageNavi($("#paging"));
  $(".faqtab").on("click",function(){
      var category = $(this).attr("category");
      location.href="/main/faq?category="+category;
  });
  $('.faqA').on('click', function(){
    if($(this).hasClass('on')){
      $(this).next('.faqB').slideUp();
      $(this).removeClass('on');
    }else{
      $(this).next('.faqB').slideDown();
      $(this).addClass('on');
    }
  });
});

var listController = {
  setPageNavi : function(paging_id){
    var option = paging_id.text().replace(/^\s+|\s+$/g,"").split("/");
    paging_id.text("");
    //console.log(option);
    var pageParam = {//scale, setscale, set, page,total_cnt
        scale : option[0],
        setscale : option[1],
        set : option[2],
        page : option[3],
        total_cnt : option[4]
    };
    paging_id.html(setPaging.init(pageParam));
    var pageEventParam = {
        basePath : '/main/',
        page : 'faq'
    };
    setPaging.setEvent(pageEventParam);
  }
};
</script>
<div id="china_faq">
    <div class="faq_ma">
        <h1 class="faq_txt">FAQ</h1>
        <h3 class="faq_txt2 web">가장 궁금해 하시는 질문들을 모아 놓았습니다.</h3>
    </div>
</div>

<div id="faq_list" class="list">
  <div class="search">
    <input type="text" placeholder="검색어를 입력하세요.">
    <button type="button" name="button">검색</button>
  </div>
  <div id="faq_tab" class="web">
    <!-- (D) 기본으로 "전체"에 actived가 들어가있게 해주세요. -->
    <div class="faqtab <?=$params['category']=='ALL'?'actived':''?>" category='ALL'>전체</div>
    <div class="faqtab <?=$params['category']=='A'?'actived':''?>" category='A'>결제/환불/변경</div>
    <div class="faqtab <?=$params['category']=='B'?'actived':''?>" category='B'>가입질문</div>
    <div class="faqtab <?=$params['category']=='C'?'actived':''?>" category='C'>운영장애</div>
    <div class="faqtab <?=$params['category']=='D'?'actived':''?>" category='D'>화상중국어</div>
  </div>
</div>

<div class="faq_listxt">
<?php
    for($i=0;$i<count($list);$i++){
?>
    <div id="faq_qum1" class='faqA'>
        <div class="qum_img">
            <img src="/images/lets_china/faq/faq_q.png" alt="">
        </div>
        <!-- (D)아래 title 영역은 title이 있을때만 보여주세요. -->
        <p class="qus1_tx1"><?=$list[$i]['title']?></p>
        <div class="qus_img2">
            <img src="/images/lets_china/faq/faq_down.png" alt="">
        </div>
    </div>
    <div class="faqB clear">
        <div class="qus_img">
            <img src="/images/lets_china/faq/faq_a.png" alt="">
        </div>
        <!-- (D) 콘텐츠영역에 빈 <p>가 많이 생기는데, 왜 그러는거죠? ex) <p>&nbsp;</p> -->
        <div class="qus_cont">
          <p class="qus1_stx1">
            <?= stripcslashes($list[$i]['contents'])?>
          </p>
        </div>
    </div>
<?php
    }
?>
</div>

<div class="row se_list" id="paging">
<?php echo $paging['scale']."/".$paging['setscale']."/".$paging['currset']."/".$paging['currpage']."/".$paging['totalcount'] ?>
</div>
<footer id="mainFooterContact" class="web">
  <!-- <div class="check">
    <a href="#">사업자정보확인</a>
  </div> -->
  <div class="info_box">
    <div class="infos">
      <div class="info_wrap clear">
        <div class="title mobile">
          렛츠고차이나 고객센터
        </div>
        <div class="tel">
          1644-0590
        </div>
        <div class="info web">
          <p>이용시간 평일 09:30 ~ 18:30</p>
          <p>점심시간 12:30 ~ 13:30</p>
        </div>
        <div class="info mobile">
          <p>이용시간 평일 09:30 ~ 18:30 / 점심시간 12:30 ~ 13:30</p>
        </div>
      </div>
      <div class="desc">
        <div class="link_tab">
          <ul class="clear">
            <li><a href="/main/company_info">회사소개</a></li>
            <li><a href="http://www.letsgoreading.com/letsgoreading/terms">표준약관</a></li>
            <li><a href="http://www.letsgoreading.com/letsgoreading/privacy_policy">개인정보취급방침</a></li>
            <li><a href="/main/faq">FAQ</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="right clear">
      <div class="sns">
        <ul class="clear">
          <li class="nc"><a href="https://cafe.naver.com/bigcatworld" target="_blank"></a></li>
          <li class="yt"><a href="https://www.youtube.com/channel/UCTllY15v_IsHNm3Thty6vCQ" target="_blank"></a></li>
          <li class="fb"><a href="https://www.facebook.com/soonsooedu/?fref=ts" target="_blank"></a></li>
          <li class="is"><a href="https://www.instagram.com/lets.go.reading/" target="_blank"></a></li>
        </ul>
      </div>
      <div class="family_box web">
        <button type="button" name="button">패밀리 사이트</button>
        <div class="sub">
          <ul>
            <li><a href="https://www.letsgoreading.com/" target="_blank">렛츠고 리딩</a></li>
            <li><a href="http://pororoenglish.co.kr/" target="_blank">뽀로로잉글리시</a></li>
            <li><a href="http://www.readingmagic.co.kr/" target="_blank">리딩 매직</a></li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="footer_desc">
    <div class="inner">
      <div class="top clear">
        <div class="logo web">
          <h2></h2>
        </div>
        <div class="txt">
          <p class="web">(주)순수교육 ｜ 대표이사 : 구근회 ｜ 서울특별시 강남구 논현동 80-1 신한빌딩 5층 ｜ Tel : 1811-8981 ｜ Fax : 02-575-5647 ｜ 통신판매번호 : 2015-서울서초-475<br /> 사업자등록번호 : 724-87-00034 ｜ 개인정보책임관리자 : soonsooedu@soonsooedu.com</p>
          <p class="mobile">(주)순수교육 ｜ 대표이사 : 구근회<br />
            서울특별시 강남구 논현동 80-1 신한빌딩 5층<br />
            Tel : 1811-8981 ｜ Fax : 02-575-5647<br />
            통신판매번호 : 2015-서울서초-475 ｜ 사업자등록번호 : 724-87-00034 <br />
            개인정보책임관리자 : soonsooedu@soonsooedu.com</p>
        </div>
      </div>
      <div class="bottom web">
        <ul class="clear">
          <li>
            <div class="img">
              <img src="/images/account/ft_img1.png" alt="특허청">
            </div>
            <span>특허 제 10-2020-094503호<br />
               외국어 수면 학습시스템 슬리핑잉글리시 특허 출원</span>
          </li>
          <li>
            <div class="img">
              <img src="/images/account/ft_img1.png" alt="특허청">
            </div>
            <span>특허 제 10-2065032호<br />
               레벨테스트를 통한 맞춤형 외국어 독서방법 특허 등록</span>
          </li>
          <li>
            <div class="img">
              <img src="/images/account/ft_img1.png" alt="특허청">
            </div>
            <span>특허 제 10-0020583호<br />
               온라인 자기주도학습코칭방법 특허 등록</span>
          </li>
          <li>
            <div class="img">
              <img src="/images/account/ft_img2.png" alt="동아일보">
            </div>
            <span>한국의 소비자대상<br />
               소비자평가 초등영어브랜드</span>
          </li>
          <li>
            <div class="img">
              <img src="/images/account/ft_img3.png" alt="머니투데이">
            </div>
            <span>영어교육 브랜드 대상<br />
               우수 콘텐츠 인증기업</span>
          </li>
          <li>
            <div class="img">
              <img src="/images/account/ft_img4.png" alt="한국경제신문">
            </div>
            <span>온라인교육 대상<br />
               우수 콘텐츠 인증기업</span>
          </li>
          <li>
            <div class="img">
              <img src="/images/account/ft_img5.png" alt="메인비즈">
            </div>
            <span>경영혁신형 중소기업<br />
               우수사례기업 선정</span>
          </li>
          <li>
            <div class="img">
              <img src="/images/account/ft_img6.png" alt="한국콘텐츠진흥원">
            </div>
            <span>문화콘텐츠 기업<br />
               보증대상 선정</span>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <div class="copyright">
    <span>COPYRIGHT 2020 SOONSOOEDU CO.,LTD.ALL RIGHTS RESERVED.</span>
  </div>
</footer>
