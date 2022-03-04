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
<!-- (D) 우편번호 -->
<div id="postal_code" class="modal">
    <div class="popup">
    <button type="button" class="close"></button>
    <header>
      <h1>우편번호 찾기</h1>
    </header>
    <div class="input_box">
      <input type="text" name="search_text" id="search_text" value="">
      <button type="button" name="button" class="search" id="search_post"></button>
    </div>
    <!-- (D) 우편번호 첫 화면만 보여짐 -->
    <div class="postal_list" id="search_first" style="display: block;">
      <span class="blue">검색어 예 : 도로명(강동대로 108), 건물명(독립기념관)</span>
      <span class="blue">정확한 결과를 위해 상세한 주소기입이 필요합니다.</span>
    </div>
    <!-- (D) //우편번호 첫 화면만 보여짐 -->

    <!-- (D) 우편번호 검색했을 때 -->
    <div class="postal_list" id="search_list" style="display: none;">
        <span id="total_rows"></span>
      <table id="post_list">
        <caption>우편번호 검색 리스트</caption>
        <thead>
          <tr>
            <th scope="col">우편번호</th>
            <th scope="col">주소</th>
          </tr>
        </thead>
        <tbody>

        </tbody>
      </table>
      <div class="paging clear">
          <button type="button" name="prev" class="prev" id="prev" onclick="post_list_prev()" style="display: none"></button>
        <span id ="post_page_current">5 </span>
        <span>/</span>
        <span id ="post_page_total"> 14</span>
        <button type="button" name="next" class="next" id="next" onclick="post_list_next()"></button>
      </div>
    </div>
    <!-- (D) //우편번호 검색했을 때 -->

    <!-- (D) 우편번호 선택했을 때 -->
    <div class="postal_list detail" id="search_detail" style="display:none;">
      <div class="row">
        <span class="line">기본주소</span>
        <table>
          <caption>우편번호 상세주소 입력</caption>
          <colgroup>
            <col style="width:25%">
            <col style="width:75%">
          </colgroup>
          <tbody>
            <tr>
              <th scope="row">우편번호</th>
              <td><span id="cur_zip_no"></span></td>
            </tr>
            <tr>
              <th scope="row">도로명주소</th>
              <td><span id="cur_adr"></span></td>
            </tr>
            <tr>
              <th scope="row">지번주소</th>
              <td><span id="cur_rnadr"></span></td>
            </tr>
          </tbody>
        </table>
      </div>
      <div class="row">
        <span>상세주소</span>
        <input type="text" id="cur_etc" placeholder="나머지 주소를 입력해 주세요.">
      </div>
        <button type="button" name="submit" onclick="submitAddress()" class="submit">확인</button>
    </div>
    <!-- (D) //우편번호 선택했을 때 -->
  </div>
</div>
<!-- (D) //우편번호 -->

<!-- 아이디중복 -->
<div id="validID" class="modal">
  <div class="popup">
    <button type="button" class="close"></button>
    <div class="cont">
        <h3 class="red" id="view_id_rd"></h3>
        <h3 class="black" id="view_id_bk"></h3>
    </div>
  </div>
</div>
<form method="post" id="joinForm">
    <!-- //아이디중복 -->
    <div id="signup" class="account toggle">
      <div class="back_btn mobile">
        <button type="button" name="click" onclick="location.href=document.referrer; return false;"></button>
      </div>
      <div class="inner">
        <div class="logo web">
          <img src="/images/account/logo.png" alt="렛츠고차이나" onclick="location.href='/main'">
        </div>
        <div class="title mobile">
          <img src="/images/account/m_title2.png" alt="개인정보입력">
        </div>
        <div class="step web">
          <ul class="clear">
            <li>약관동의</li>
            <li class="on">개인정보 입력</li>
            <li>가입완료</li>
          </ul>
        </div>
        <div id="inputForm">
            <fieldset>
              <table>
                <caption>회원가입서</caption>
                <tbody>
                  <tr>
                    <th class="star">학생 출생년도</th>
                    <td class="clear">
                      <div class="birth clear">
                        <label for="yyyy" class="year">
                          <select id="yyyy" name="birth_year">
                            <?php
                                for($i=date('Y'); $i>1900; $i--){
                            ?>
                                    <option value="<?=$i?>"><?=$i?></option>
                            <?php
                                }
                            ?>
                          </select>
                        </label>
                        <!-- <label for="mm" class="month">
                          <select id="mm" name="birth_month">
                            <?php
                                for($i=1;$i<13;$i++){
                                    $mon = sprintf("%02d",$i);
                            ?>
                                    <option value="<?=$mon?>"><?=$mon?></option>
                            <?php
                                }
                            ?>
                          </select>
                        </label>
                        <label for="dd" class="day">
                          <select id="dd" name="birth_day">
                            <?php
                                for($i=1;$i<32;$i++){
                                    $day = sprintf("%02d",$i);
                            ?>
                                    <option value="<?=$day?>"><?=$day?></option>
                            <?php
                                }
                            ?>
                          </select>
                        </label> -->
                      </div>
                      <!-- <div class="radio clear">
                        <div class="radio_item">
                          <input type="radio" name="birth_type" id="solar" value="S" checked="">
                          <label for="solar" class="custom">양력</label>
                        </div>
                        <div class="radio_item">
                          <input type="radio" name="birth_type" id="lunar" value="L">
                          <label for="lunar" class="custom">음력</label>
                        </div>
                      </div> -->
                    </td>
                  </tr>
                  <tr>
                    <th class="star">학생 이름</th>
                    <td class="fl clear">
                      <input type="text" id="member_name" name="member_name">
                      <div class="radio clear">
                        <div class="radio_item">
                          <input type="radio" name="radio2" id="male" value="M" checked="">
                          <label for="male" class="custom">남자</label>
                        </div>
                        <div class="radio_item">
                          <input type="radio" name="radio2" id="female" value="F">
                          <label for="female" class="custom">여자</label>
                        </div>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <th class="star">학생 아이디</th>
                    <td class="fl clear">
                      <input type="text" name="member_id" id="member_id">
                        <button type="button" name="member_id_check" id="member_id_check" class="gray" onclick="openValidId();">중복 체크</button>
                        <input type="hidden" name ="id_check_val" id="id_check_val" value="N"/>
                    </td>
                  </tr>
                  <tr>
                    <th class="star">비밀번호</th>
                    <td>
                      <input type="password" id="member_pw1" name="member_pw1" placeholder="10자 이상의 영문과 숫자, 대소문자 확인">
                    </td>
                  </tr>
                  <tr>
                    <th class="star">비밀번호 확인</th>
                    <td>
                      <input type="password" id="member_pw2" name="member_pw2" placeholder="패스워드를 한번더 입력하세요.">
                    </td>
                  </tr>
                  <tr>
                    <th class="star web">보호자 핸드폰 번호</th>
                    <th class="star mobile" style="padding-top:0.5rem;">보호자 핸드폰 번호</th>
                    <td>
                      <input type="number" id="member_tel" name="member_tel" placeholder="-빼고 숫자만 입력하세요.">
                    </td>
                  </tr>
                  <!-- <tr>
                    <th class="web star">사용자<br />이메일 주소</th>
                    <th class="mobile">사용자 이메일 주소</th>
                    <td class="email clear">
                      <input type="text" name="email_id" class="email_id" id="email_id">
                      <input type="text" name="email_address" class="email_address" id="email_address">
                      <div class="email_select clear">
                        <label for="e_add2">
                          <select id="e_add2">
                            <option value="직접입력">직접입력</option>
                            <option value="naver.com">네이버</option>
                            <option value="daum.net">다음</option>
                            <option value="nate.com">네이트</option>
                            <option value="gmail.com">지메일</option>
                          </select>
                        </label>
                      </div>
                    </td>
                  </tr> -->
                  <tr>
                    <th class="star">지점코드</th>
                    <td class="fl clear code">
                      <input type="text" id="member_code" name="member_code" placeholder="지점코드 입력">
                      <div id="china_chk">
                        <input type="checkbox" name="none_code" id="code" checked>
                        <label for="code">지점코드가 없는 경우 체크</label>
                      </div>
                    </td>
                  </tr>
                <tr>
                    <th class="star">쿠폰번호</th>
                    <td class="fl clear code">
                      <div id="fl clear">
                        <input type="text" name="coupon_number" id="coupon_number"/>
                        <button type="button" name="confirm_coupon" id="confirm_coupon" class="gray" onclick="confirmCoupon();">쿠폰등록</button>
                      </div>
                    </td>
                  </tr>
                  <!-- <tr>
                      <td colspan="2" style="text-align: center"><input type="button" id="order_button" value="추가 정보 입력"/></td>
                  </tr> -->
                </tbody>
              </table>
            </fieldset>
        </div>
        <!-- <div id="inputForm" class="add_info">
          <div class="title" id="order_button">
            추가 정보 입력
          </div>
            <fieldset>
              <table>
                <caption>추가 정보 입력</caption>
                <colgroup>
                  <col style="width:20%">
                  <col style="width:80%">
                </colgroup>
                <tbody>
                  <tr>
                    <th>주소</th>
                    <td class="address">
                      <div class="postal clear">
                        <input type="text" disabled id="post_code" name="post_code">
                        <button type="button" name="button" value="" class="gray" onclick="openPostalCode();">우편번호</button>
                      </div>
                      <div class="address_detail">
                        <input type="text" value="" disabled id="addr" name="addr">
                        <input type="text" value="" disabled id="addr_etc" name="addr_etc">
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <th>보호자 이름</th>
                    <td class="fl clear">
                      <input type="text" name="p_name" id="p_name">
                      <div id="china_chk">
                        <input type="checkbox" name="copy_name" id="copy_name"  style="display: none"/>
                        <label for="copy_name">위와 동일 </label>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <th class="web">보호자<br />이메일 주소</th>
                    <th class="mobile">보호자 이메일 주소</th>
                    <td class="email clear">
                      <input type="text" class="email_id" id="p_email_id" name="p_email_id">
                      <input type="text" class="email_address" id="p_email_address" name="p_email_address">
                      <div class="email_select clear">
                        <label for="e_add">
                          <select id="e_add">
                            <option value="직접입력">직접입력</option>
                            <option value="naver.com">네이버</option>
                            <option value="daum.net">다음</option>
                            <option value="nate.com">네이트</option>
                            <option value="gmail.com">지메일</option>
                          </select>
                        </label>
                      </div>
                      <div id="china_chk">
                        <input type="checkbox" name="copy_email" id="copy_email"  style="display: none"/>
                        <label for="copy_email">위와 동일 </label>
                      </div>
                    </td>
                  </tr>
                </tbody>
              </table>
            </fieldset>
        </div>
        <div class="sns_agree clear">
          <div id="china_chk">
            <input type="checkbox" id="agr" name="sns_agree" checked>
            <label for="agr">SNS학습 리포트 수신에 동의합니다.</label>
          </div>
        </div> -->
        <div class="submit_btns">
         <ul class="clear">
           <!-- <li>
             <button type="button" name="button" class="gray" onclick="location.href=document.referrer; return false;">취소</button>
           </li> -->
           <li>
             <button type="button" name="complete" class="red" onclick="signup_submit();">완료</button>
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
</form>
<script>

    var postArray = new Array();
    var total_paging;
    var cur_paging;
    var prev_paging;

    $(function(){


        $("#member_id_check").click(function(){
            var id = $("#member_id").val();
            var len = id.length;

            var patt = new RegExp(/^[a-z0-9]+$/);

            if(id == ""){
                alert_message("아이디를 입력후 중복확인을 해주세요.","red");
                $('#member_id').focus();
                return false;
            } else if(id.length < 5 || id.length > 20) {
                alert_message("아이디는 5~20자의 영문 소문자, 숫자만 사용 가능합니다.","red");
                $('#member_id').focus();
                return false;
            } else if(!patt.test(id)) {
                alert_message("아이디는 5~20자의 영문 소문자, 숫자만 사용 가능합니다.","red");
                $('#member_id').focus();
                return false;
            } else {
                jQuery.ajax({
                    url: "/member/check_id",
                    data: {member_id: id},
                    type:'POST',
                    timeout:10000,
                    dataType: 'json',
                    success: function(data) {

                        if(data.result == '1') {
                            alert_message(data.message,"red");
                            $('#member_id').focus();
                            return false;
                        } else {
                            $('#id_check_val').val("Y");
                            alert_message("사용 가능한 아이디입니다.","black");
                            $('#member_id').focus();
                            jQuery("input[name='member_id']").prop("readonly","true");
                            return true;
                        }
                    },
                    error: function(xhr,status,error) {
                        console.log(xhr,status,error)
                        alert("네트워크 오류!! 다시 선택하여 주세요!!");
                        return false;
                    }
                });
            }
        });

        $("#search_post").click(function(){
          search_post();
        });
        $("#search_text").keydown(function(key){
            if(key.keyCode == 13){
                search_post();
            }
        });
        $("#cur_etc").keydown(function(key){
            if(key.keyCode == 13){
                submitAddress();
            }
        });
        $("#e_add2").change(function (){
            $('#email_address').val(this.value);
            $('#email_address').attr('disabled', true);
        });
        $("#e_add").change(function (){
            $('#p_email_address').val(this.value);
            $('#p_email_address').attr('disabled', true);
        });

        if($(window).width() < 780) {
          $(".add_info fieldset").hide();
          $("#order_button").click(function(){
             $(".add_info fieldset").toggle();
          });
        }
        $("#copy_name").click(function(){
            if($("#copy_name").attr("checked")){
                $("#p_name").val($("#member_name").val());
            }
        });
        $("#copy_phone").click(function(){
            if($("#copy_phone").attr("checked")){
                $("#p_member_tel").val($("#member_tel").val());
            }
        });
        $("#copy_email").click(function(){
            if($("#copy_email").attr("checked")){
                $("#p_email_id").val($("#email_id").val());
                $("#p_email_address").val($("#email_address").val());
            }
        });
    });
    function alert_message(value, color){

        $('#view_id_rd').text("");
        $('#view_id_bk').text("");

        if(color == "red"){
            $('#view_id_rd').text(value);
        }else{
            $('#view_id_bk').text(value);
        }

        openValidId();
    }
    function search_post(){
        var txt = $("#search_text").val();
            if(txt == ""){
                alert_message("주소값 입력후 검색을 해주세요.","red");
                $('#search_text').focus();
            }else{
                jQuery.ajax({
                    url: "/post_code/ajax_check",
                    data: {search_text: txt},
                    type:'POST',
                    timeout:10000,
                    dataType: 'json',
                    success: function(data) {
                        if(data.result == '1') {
                            alert_message(data.message,"red");
                            $('#search_text').focus();
                            return false;
                        } else {
                            postArray = data.post
                            post_list(0);
                            $('#total_rows').text("검색결과"+data.total_rows[0]+"(건)");
                            $('#search_first').hide();
                            $('#search_list').show();
                        }
                    },
                    error: function(xhr,status,error) {
                        console.log(xhr,status,error)
                        alert("네트워크 오류!! 다시 선택하여 주세요!!");
                        return false;
                    }
                });
            }
    }
    function post_list(paging){
        paging_min = 3*paging;
        paging_max = 3*(paging+1);
        total_paging = Math.round(postArray.length/3);
        $("#post_page_total").text(total_paging);
        cur_paging = paging+1;
        prev_paging = paging-1;
        $("#post_page_current").text(cur_paging);
        $('#post_list tbody').empty();

        if(cur_paging == total_paging){
            $('#next').hide();
        }else{
            $('#next').show();
        }
        if(cur_paging != 1){
            $('#prev').show();
        }else{
            $('#prev').hide();
        }


        for(var i=paging_min;i<paging_max;i++){
            $('#post_list tbody').append(postArray[i]);
        }
    }
    function post_list_next(){
        post_list(cur_paging);
    }
    function post_list_prev(){
        post_list(prev_paging);
    }
    function callAddress(trName){

        var zip =  $("#"+trName+" td").eq(0).text();
        var adr =  $("#"+trName+" td").eq(1).text();
        var rnadr = $("#"+trName+"_rn td").eq(0).text();

        $("#cur_zip_no").text(zip);
        $("#cur_adr").text(adr);
        $("#cur_rnadr").text(rnadr);

        $("#post_code").val(zip);
        $("#addr").val(adr);

        $("#search_list").hide();
        $("#search_detail").show();
    }

    function submitAddress(){

       $("#addr_etc").val($("#cur_etc").val());
       $("#postal_code").hide();
    }
    function postal_init(){
        $("#search_text").val("");
        $("#search_first").show();
        $("#search_list").hide();
        $("#search_detail").hide();
    }
    function signup_submit(){

        if(!null_check("#member_name","사용자 이름")){
            return false;
        }
        if(!null_check("#member_id","사용자 아이디")){
            return false;
        }
        if(!null_check("#member_pw1","비밀번호")){
            return false;
        }
        if(!null_check("#member_pw2","비밀번호 확인")){
            return false;
        }
        if(!null_check("#member_tel","핸드폰 번호")){
            return false;
        }


        if($("#code").is(":checked") == false){
            if(!null_check("#member_code","지점코드")){
                return false;
            }
        }

        if($("#id_check_val").val() == "N"){
            alert_message("ID 중복체크를 하시기 바랍니다.","red");
            return false;
        }

        if($("#member_pw1").val() != $("#member_pw2").val()){
            alert_message("비밀번호가 서로 다릅니다.","red");
            return false;
        }




        if(!password_check()){
            return false;
        }else{
            jQuery.ajax({
                url: "/member/signup_sumit",
                data: $("#joinForm").serialize(),
                type:'POST',
                timeout:10000,
                dataType: 'json',
                success: function(data) {
                    if(!data.result) {
                        alert(data.message);
                        return false;
                    } else  {
                        location.href="/member/signup_complete?message="+data.message+"&code="+data.result;
                    }
                },
                error: function(xhr,status,error) {
                    console.log(xhr,status,error)
                    alert("네트워크 오류!! 다시 선택하여 주세요!!");
                    return false;
                }
            });
        }
    }

    function confirmCoupon(){
        var coupon_number = $("#coupon_number").val();
        if(coupon_number == ""){
            alert_message("쿠폰값 입력후 신청해주세요.","red");
            $('#search_text').focus();
        }else{
            jQuery.ajax({
                url: "/coupon/confirmCoupon",
                data: {coupon_number: coupon_number},
                type:'POST',
                timeout:10000,
                dataType: 'json',
                success: function(data) {
                    if(data.code != '200') {
                        alert_message(data.message,"red");
                        $('#coupon_number').focus();
                        return false;
                    } else {
                        alert_message(data.message);
                    }
                },
                error: function(xhr,status,error) {
                    console.log(xhr,status,error)
                    alert("네트워크 오류!! 다시 선택하여 주세요!!");
                    return false;
                }
            });
        }

    }

    function null_check(id,label){
        if($(id).val() == ""){
            alert_message(label+"란을 확인해주세요.","red");
            $(id).focus();
            return false;
        }else{
            return true;
        }
    }
    function password_check(){

         var pw = $("#member_pw1").val();

         var num = pw.search(/[0-9]/g);
         var eng = pw.search(/[a-z]/ig);
         var sta = pw.search(/[~!@#$%^&*]/);


         if(pw.length < 10 ){
            alert_message("비밀번호는 10자리 이상 입력해주세요.","red");
            return false;
         }
         if(pw.search(/\s/) != -1){
            alert_message("비밀번호는 공백없이 입력해주세요.","red");
            return false;
         }

        var cnt =0;

        if(num < 0){
            cnt++;
        }
        if(eng < 0){
            cnt++;
        }
        if(sta < 0){
            cnt++;
        }

         if(cnt > 1){
            alert_message("비밀번호는 숫자, 영문, 특수문자를 두가지이상 혼용하여야 합니다.","red");
            return false;
         }
         return true;
    }
</script>
</body>
</html>
