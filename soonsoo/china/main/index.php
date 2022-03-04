<script>
  $(document).ready(function(){
    if(!Cookies.get("none_popup_display")){
        $('#modal').show();
    }
    //footer
    $('#mainFooterContact .check').on('click', function(){
      if($(this).parent().hasClass('show')){
        $(this).parent().removeClass('show');
        $('.check a').html('사업자정보확인');
      }else{
        $(this).parent().addClass('show');
        $('.check a').html('닫기');
      }
    });

    //popup
    $("#one_close").click(function(){
       $("#modal").hide();
    });
    $("#oneday_close").click(function(){
       Cookies.set("none_popup_display", true,{expires: 1});
       $("#modal").hide();
    });
  });
</script>
<!-- 2020 소비자대상 팝업 -->
 <div id="modal">
  <div class="popup p2007">
    <button type="button" name="button" onclick="window.open('https://pf.kakao.com/_cHEmK/chat')"></button>
      <img src="/images/cs_popup.jpg" alt="2020 소비자대상" class="web">
      <img src="/images/cs_popup_m.jpg" alt="2020 소비자대상" class="mobile">
    <div class="pos top clear">
      <button class="one_close" id="one_close"></button>
    </div>
    <div class="pos bottom clear">
      <button class="oneday_close" id="oneday_close">하루 동안 열지 않기</button>
    </div>
  </div>
</div>
<!-- //2020 소비자대상 팝업 -->
<div id="main_section">
  <div class="cont clear">
    <div class="cont01">
      <img src="/images/lets_china/main_img/m_bao.png" alt="바오캐릭터" class="mobile">
      <div class="banner_txt web">
        <p>중문학과 교수추천! 서울공자아카데미 협약!</p>
      </div>
      <div class="china_txt">
          <p class="china_txt1 animated fadeInUp"> CHINESE </p>
          <p class="china_txt2 animated fadeInUp"> 서울공자아카데미 인정!</p>
          <div class="link_txt">
            <ul class="web">
              <li class="clear">
                <div class="shape">WHY</div>
                <a href="/main/curriculum_why">한글알면 중국어가 술술~</a>
              </li>
              <li class="clear">
                <div class="shape">HOW</div>
                <a href="/main/curriculum_how">HSK3급 달성! 커리큘럼안에 쏙!</a>
              </li>
              <li class="clear">
                <div class="shape">WHAT</div>
                <a href="/main/curriculum_what">초등학생 눈높이에 딱! 맞춘 컨텐츠!</a>
              </li>
            </ul>
            <ul class="mobile">
              <li class="clear">
                <div class="shape" onclick="location.href='/main/curriculum_why'">WHY</div>
              </li>
              <li class="clear">
                <div class="shape" onclick="location.href='/main/curriculum_how'">HOW</div>
              </li>
              <li class="clear">
                <div class="shape" onclick="location.href='/main/curriculum_what'">WHAT</div>
              </li>
            </ul>
          </div>
      </div>
    </div>
    <div class="cont02">
      <img src="/images/lets_china/main_img/m_ted.png" alt="테드캐릭터" class="mobile">
      <div class="award_box web">
        <img src="/images/china/main/award_box.png" alt="특허증">
      </div>
      <div class="partner_txt">
         <p class="partner_txt1 animated fadeInUp"> LAB </p>
         <p class="partner_txt2 animated fadeInUp"> 소비자가 뽑은 신뢰 브랜드 <span class="partner_txt3">- 한국경제신문</span> </p>
         <div class="link_txt web">
           <ul>
             <li><a href="/main/company_info">우수 콘텐츠 인증기업 1위 - 머니투데이</a></li>
             <li><a href="/main/company_info">스토리 기반 G러닝 프로그램 인증</a></li>
             <li><a href="/main/company_info">풍부한 코칭관리 노하우</a></li>
           </ul>
         </div>
         <div class="link_txt mobile">
           <ul>
             <li class="clear">
               <div class="shape">콘텐츠</div>
             </li>
             <li class="clear">
               <div class="shape">G러닝</div>
             </li>
             <li class="clear">
               <div class="shape">코칭</div>
             </li>
           </ul>
         </div>
       </div>
    </div>
    <div class="bao web">
        <img src="/images/lets_china/main_img/ch_bao.png" alt="바오캐릭터">
    </div>
     <!-- <div class="ted web">
        <img src="/images/lets_china/main_img/ch_ted.png" alt="테디 캐릭터">
    </div> -->
    <div class="ben web" onclick="location.href='/main/experience'">
        <img src="/images/lets_china/main_img/main_proposal.png" alt="7일 무료체험">
    </div>
  </div>
</div>
<div class="award_box mobile">
  <img src="/images/china/main/award_box_m.png" alt="특허증">
</div>
<footer id="mainFooterContact" class="main">
  <div class="check web">
    <a href="#">사업자정보확인</a>
  </div>
  <div class="info_box">
    <div class="infos">
      <div class="info_wrap clear">
        <div class="ch">
          <img src="/images/common/footer_ch.png" alt="순수교육" class="web" onclick="window.open('http://pf.kakao.com/_cHEmK')">
          <img src="/images/common/footer_ch_m.png" alt="순수교육" class="mobile" onclick="window.open('http://pf.kakao.com/_cHEmK')">
        </div>
        <div class="info web">
          <p><span>이용시간</span> 평일 09:00 ~ 16:30</p>
          <p><span>점심시간</span> 11:30 ~ 12:30</p>
          <p><span>토, 일, 공휴일 휴무</span></p>
        </div>
        <div class="info mobile">
          <p>이용시간 평일 09:00 ~ 16:30 / 점심시간 11:30 ~ 12:30</p>
          <p>토, 일, 공휴일 휴무</p>
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
          <li class="nb"><a href="https://blog.naver.com/colbigworld" target="_blank"></a></li>
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
            <li><a href="http://letsgophonics.com/" target="_blank">렛츠고파닉스</a></li>
            <li><a href="http://www.sleepingenglish.co.kr/" target="_blank">슬리핑잉글리시</a></li>
            <li><a href="http://www.googongsy.com/" target="_blank">구공시</a></li>
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
          <p class="web">(주)순수교육 ｜ 대표이사 : 구근회 ｜ 서울특별시 강남구 논현동 80-1 신한빌딩 5층 ｜ Tel :1644-0590 ｜ Fax : 02-575-5647 ｜ 통신판매번호 : 2015-서울서초-475<br /> 사업자등록번호 : 724-87-00034 ｜ 개인정보책임관리자 : soonsooedu@soonsooedu.com</p>
          <p class="mobile">(주)순수교육 ｜ 대표이사 : 구근회<br />
            서울특별시 강남구 논현동 80-1 신한빌딩 5층<br />
            Tel :1644-0590 ｜ Fax : 02-575-5647<br />
            통신판매번호 : 2015-서울서초-475 ｜ 사업자등록번호 : 724-87-00034 <br />
            개인정보책임관리자 : soonsooedu@soonsooedu.com</p>
        </div>
      </div>
      <div class="bottom">
        <ul class="clear rolling_slide">
          <li>
            <div class="img patent">
              <img src="/images/account/ft_img1.png" alt="특허청">
            </div>
            <span>특허출원2021-0141151호<br />
               게임기반 영어독서<br />엑티브게임 영어독서학습 특허출원</span>
          </li>
          <li>
            <div class="img patent">
              <img src="/images/account/ft_img1.png" alt="특허청">
            </div>
            <span>특허 제 10-0020583호<br />
               온라인 자기주도학습<br />코칭방법 특허 등록</span>
          </li>
          <li>
            <div class="img patent">
              <img src="/images/account/ft_img1.png" alt="특허청">
            </div>
            <span>특허 제 10-2065032호<br />
               레벨테스트를 통한 맞춤형<br />외국어 독서방법 특허 등록</span>
          </li>
          <li>
            <div class="img patent">
              <img src="/images/account/ft_img1.png" alt="특허청">
            </div>
            <span>특허 제 10-22340896호<br />
               학습보상게임 시스템<br />온라인교육 동기부여 특허 등록</span>
          </li>
          <li>
            <div class="img patent">
              <img src="/images/account/ft_img1.png" alt="특허청">
            </div>
            <span>특허 제 10-2217990호<br />
               외국어 수면 학습시스템<br /> 슬리핑잉글리시 특허 등록</span>
          </li>
          <li>
            <div class="img">
              <img src="/images/account/ft_img7.png" alt="중앙일보">
            </div>
            <span>초등영어 브랜드 대상<br />
               소비자추천 1위 브랜드</span>
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
              <img src="/images/account/ft_img6.png" alt="한국콘텐츠진흥원" style="width: 55%;">
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
