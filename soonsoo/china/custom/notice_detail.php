<script>
    jQuery(document).ready(function(){
        jQuery('.listBtn').on("click",function(){
            location.href=document.referrer; return false;
        });
    });
</script>

<div id="noticeDetail">
  <div id="gongzi_sangsa" class="web">
      <div class="sangsa_img">
          <p class="gong_txt3">공지사항</p>
          <p class="gong_txt4">렛츠고 차이나 고객센터에서 알려드립니다.</p>
          <div class="sangsa_ben">
              <img src="/images/lets_china/gongzi/gongzi_ben.png" alt="">
          </div>
      </div>
  </div>
  <div class="return mobile">
    <p>공지사항</p>
    <button type="button" name="button" class="listBtn"></button>
  </div>
  <div id="sangsa_list">
      <div class="sangsa_txt">
          <p class="sangsa_txt2">
              <?=$info['title']?>
          </p>
          <p class="sangsa_txt3">
              <?=$info['reg_date']?>
          </p>
      </div>

      <div class="sangsa_txt4" style="height:auto !important">
          <p class="sangsa_txt5">
              <?=stripslashes($info['contents'])?></p>
      </div>

      <div class="sangsa_bar">
      </div>

      <div id="sangsa_return" class="web">
          <div class="return_txt listBtn"> 목 록 </div>
      </div>
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
</div>
