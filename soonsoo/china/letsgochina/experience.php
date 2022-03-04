<script>
  function fnMove(){
     var offset = $("#sugang_s").offset();
     $('html, body').animate({scrollTop : offset.top-130}, 500);
  }
</script>
<div id="experience">
  <div id="register_main">
      <div class="register_m">
          <div class="register_img">
              <img src="/images/lets_china/experience/seven.png" alt="7일무료체험">
          </div>
          <div class="register_txt">
              <p class="register_txt1">렛츠고 차이나</p>
              <p class="register_txt2">수강권</p>
          </div>

          <div class="register_one web">
              <a href="#" onclick="fnMove();">체험신청 바로가기</a>
          </div>

          <div class="register_bao web">
              <img src="/images/lets_china/experience/sugang_bao.png" alt="바오캐릭터">
          </div>
          <div class="register_bao mobile">
              <img src="/images/lets_china/experience/m_sugang_bao.png" alt="바오캐릭터">
          </div>
      </div>
  </div>
  <div class="register_one mobile">
      <a href="#" onclick="fnMove();">체험신청 바로가기</a>
  </div>
  <div class="register_section">
      <p class="re_sctxt">중문학과 교수도 인정한 <span class="re_sctxt1">학습 시스템</span></p>
      <p class="re_sctxt2">학습분석 솔루션회사가 공동 개발한 AI 시스템을 탑재한 최첨단 학습 시스템입니다.</p>
      <img src="/images/lets_china/experience/month_step.png" alt="" class="re_img web">
      <img src="/images/lets_china/experience/m_month_step.png" alt="" class="re_img mobile">
  </div>

  <div id="re_section2">
      <div class="section_2">
          <img src="/images/lets_china/experience/ak.png" alt="" class="ak_img">
          <p class="txt1 web">렛츠고 차이나</p>
          <p class="txt1 web">서울공자아카데미</p>
          <p class="txt1 mobile">렛츠고 차이나 & 서울공자아카데미</p>
          <p class="txt2 web"> 서울공자아카데미는 순수교육과 공동사업하는 기업입니다.</p>
          <p class="txt2 mobile"> 서울공자아카데미는 순수교육과 공동사업하는<br />HSK한국사무국 주관사 기업입니다.</p>
      </div>
  </div>

  <div class="re_solution">
      <p class="solution"> 우리아이 무대를 위한 <span class="solution2">핵심 솔루션</span></p>
      <p class="solution3 web"> 학습분석 솔루션회사가 공동 개발한 AI 시스템을 탑재한 최첨단 학슴 시스템입니다.</p>
      <p class="solution3 mobile"> 학습분석 솔루션회사가 공동 개발한 AI 시스템을<br />탑재한 최첨단 학슴 시스템입니다.</p>
      <img src="/images/lets_china/experience/solution.png" alt="" class="solution4 web">
      <img src="/images/lets_china/experience/m_solution.png" alt="" class="solution4 mobile">
  </div>

  <div id="sugang_china">
      <div class="sugang_chi">
        <div class="z10">
          <p class="sugang_chit"> 차이나는 차이나  <span class="sugang_chit2">드림 수강권</span></p>
          <p class="sugang_chit3"> 하루 30명만 7일체험권 증정</p>


          <p class="sub_sugang2">오늘가격 </p>
          <p class="sub_sugang3">월 <span class="sub_sugang4">69,000</span><span class="sub_sugang5">원</span></p>

          <div class="sub_sugang6">
            <p class="sub_sugang7">내일 가격 : <span class="sub_sugang8">99,000</span><span class="sub_sugang9">원</span></p>
          </div>
          <div class="sub_sugang10">
            <img src="/images/lets_china/experience/count_one2.png" alt="">
          </div>
          <div class="sub_sugang11">
            <img src="/images/lets_china/experience/count.png" alt="">
            <div class="count_num clear">
              <span class="blue" id="count_1"></span>
              <span class="orange" id="count_2"></span>
            </div>
          </div>
        </div>
        <div class="sub_sugang">
          <div class="rotate_bg"></div>
          <span class="rotate"></span>
        </div>
      </div>
  </div>

  <div id="sugang_s">
      <div class="sugang_ss">
          <p class="sugang_ss1 web"> 세상에서 제일 쉬운 중국어 <span class="sugang_ss2">7일체험</span><span class="sugang_ss3"> 신청 </span></p>
          <p class="sugang_ss1 mobile"> 세상에서 제일 쉬운 중국어<br /><span class="sugang_ss2">7일체험</span><span class="sugang_ss3"> 신청 </span></p>
      </div>
      <div id="inputForm">
        <form method="post" name="counselForm" id="counselForm">
          <fieldset>
            <legend>7일체험 신청하기</legend>
            <table>
              <caption>7일체험 신청서</caption>
              <colgroup>
                <col style="width:25%">
                <col style="width:75%">
              </colgroup>
              <tbody>
                <tr>
                  <th class="star">신청자명</th>
                  <td>
                    <input type="text" name="applicant_name">
                  </td>
                </tr>
                <tr>
                  <th class="star">휴대폰 번호</th>
                  <td>
                    <input type="tel" name="phone" placeholder="-없이 입력">
                  </td>
                </tr>
                <tr>
                  <th class="star">자녀명</th>
                  <td>
                    <input type="text" name="student_name">
                  </td>
                </tr>
                <tr>
                  <th class="star">자녀 나이</th>
                  <td>
                    <input type="number" name="student_age">
                  </td>
                </tr>
              </tbody>
            </table>
          </fieldset>
      </div>
  </div>

  <div class="sin_txt">
    <div class="agree_box">
      <input type="checkbox" name="agree" id="agree_chk" checked>
      <label for="agree_chk">모든 약관에 동의합니다. (전체동의)</label>
    </div>
    <div class="agree_txt">
      <ul>
        <li>무료체험 이용약관(필수), 개인정보 수집 및 동의(필수), 마케팅 활용 동의
(선택)에 대해 모두 동의합니다.</li>
        <li>전체동의는 필수 및 선택정보에 대한 동의도 포함되어 있으며, 개별적으로
동의를 선택하실 수 있습니다. </li>
        <li>선택 항목은 동의를 거부하시는 경우에도 서비스의 이용은 가능하십니다. </li>
      </ul>
    </div>
  </div>
  <div class="agree_items">
    <ul>
      <li class="clear">
        <div class="chk">
          <input type="checkbox" id="ck1" name="ck1" checked>
          <label for="ck1">무료체험 이용약관 동의</label>
        </div>
        <div class="link">
          <a href="http://www.letsgoreading.com/letsgoreading/terms" target="_blank">내용보기</a>
        </div>
      </li>
      <li class="clear">
        <div class="chk">
          <input type="checkbox" id="ck2" name="ck2" checked>
          <label for="ck2">개인정보 수집 및 이용 동의</label>
        </div>
        <div class="link">
          <a href="http://www.letsgoreading.com/letsgoreading/privacy_policy" target="_blank">내용보기</a>
        </div>
      </li>
      <li>
        <div class="chk">
          <input type="checkbox" id="ck3" name="ck3" checked>
          <label for="ck3" class="option">마케팅 활용 동의</label>
        </div>
        <div class="agree_content">
          <ul>
            <li>1. 목적 : 전화, 문자를 통한 제품 및 서비스 안내</li>
            <li>2. 항목 : 성명, 연락처(휴대폰 번호), 자녀정보(이름, 생년월일)</li>
            <li>3. 보유 및 이용기간 : 무료체험 종료일로부터 6개월 (기타, 관련 법령 및 개인정보처리방침에 따름)</li>
          </ul>
        </div>
      </li>
    </ul>
  </div>

  <div class="sin_choice">
      <img class="web" src="/images/lets_china/experience/choice.png" onclick="counsel('counselForm')" alt="7일체험 신청하기 버튼">
      <img class="mobile" src="/images/lets_china/experience/m_choice.png" onclick="counsel('counselForm')" alt="7일체험 신청하기 버튼">
  </div>
</form>
</div>
<script>
    $(document).ready(function(){
        var date = new Date();
        var now_time = date.getHours();

        var count_product = 20 - now_time +4;

        if(count_product<10){
            count_product = String('0'+count_product);
        }else{
            count_product = String(count_product);
        }


        var count1 = count_product.substr(0,1);
        var count2 = count_product.substr(1,1);

        $("#count_1").text(count1);
        $("#count_2").text(count2);
    });
    function counsel(frm_name) {

        var frm = "";

        if (frm_name == 'counselForm') {
            frm = $("#counselForm");
        }

        if (!frm.find('input[name="applicant_name"]').val()) {
            alert('신청자 명 을 입력해주세요.');
            frm.find('input[name="applicant_name"]').focus();
            return false;
        }

        if (!frm.find('input[name="student_name"]').val()) {
            alert('자녀명 을 입력해주세요.');
            frm.find('input[name="student_name"]').focus();
            return false;
        }
        if (!frm.find('input[name="student_age"]').val()) {
            alert('자녀 나이를 입력해주세요.');
            frm.find('input[name="student_age"]').focus();
            return false;
        }
        if (!frm.find('input[name="phone"]').val()) {
            alert('휴대폰번호를 입력해주세요.');
            frm.find('input[name="phone"]').focus();
            return false;
        }


        if (!$("#ck1").is(":checked")) {
            alert('무료체험 이용약관 동의에 대한 동의가 필요합니다.');
            frm.find('input[name="ck1"]').focus();
            return false;
        }
        if (!$("#ck2").is(":checked")) {
            alert('개인정보 수집 및 이용 동의에 대한 동의가 필요합니다.');
            frm.find('input:checkbox[name="ck2"]').focus();
            return false;
        }


        jQuery.ajax({
            url: "/marketing/apply_china_counsel",
            data: frm.serialize(),
            type: 'POST',
            timeout: 10000,
            dataType: 'json',
            success: function (data) {
                if (data.code == 200) {
                    alert("체험신청이 접수되었습니다.");
                    location.reload();
                } else {
                    alert(data.message);
                }
            },
            error: function (xhr, status, error) {
                console.log(xhr);
                alert("네트워크 오류!! 다시 선택하여 주세요!!");
                return false;
            }
        });
    }



</script>
