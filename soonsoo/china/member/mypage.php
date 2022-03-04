<?php
$email = explode("@",$member_info->email);
$pemail = explode("@",$member_info->parents_email);

$phone = str_replace("-","",$member_info->mobile_phone);
$p_phone = str_replace("-","",$member_info->parents_phone);

$lchecked ="";
$schecked ="";
$mchecked ="";
$wchecked ="";

$remain_per1 = 0;

switch($member_info->birthday_type){
    case 'S':
        $lchecked = "checked";
        break;
    default:
        $schecked = "checked";
        break;
}

switch($member_info->sex_division){
    case 'M':
        $mchecked = "checked";
        break;
    default:
        $wchecked = "checked";
        break;
}

$level_per = $study_book_level / MAX_CHINA_LEVEL;
?>

<script>
  $(document).ready(function(){
    //나의 레벨
    window.onload = function onLoad() {
      // (D) progressbar.js 1.1.0 현재 나와있는 버전에는 value값이 자동으로 계산되어 보여지는 기능이 있으나 현재 버전으로는 ie에서 플러그인이 작동하지 않아 하위버전으로 써서 value값은 따로 지정해야합니다.
      var circle = new ProgressBar.Circle('#container', {
          color: '#eee',
      	  strokeWidth: 6,
        	trailWidth: 1,
          trailColor: '#eee',
          duration: 1400,
          easing: 'easeInOut',
          text: {
              autoStyleContainer: false
            },
            from: { color: '#ebb830', width:6},
            to: { color: '#fed357', width:6},
            step: function(state, circle) {
                circle.path.setAttribute('stroke', state.color);
                circle.path.setAttribute('stroke-width', state.width);

                // var value = Math.round(circle.value() * 100);
                // if (value === 0) {
                //   circle.setText('');
                // } else {
                //   circle.setText(Math.floor(value/4.1));
                // }
              }
      });
      // circle.text.style.fontFamily = '"NanumSquare", sans-serif';
      // circle.text.style.fontSize = '4.5rem';
      // circle.text.style.fontWeight = 'bold';
      // circle.text.style.bottom = '0';
      // circle.text.style.top = 'auto';

      circle.animate(<?=$level_per?>);
    };
    
    if("<?=$mode?>" == "coupon"){
        $('.section_wrap .section').eq(0).hide();
        $('.section_wrap .section').eq(2).hide();
        $('.tab').eq(1).addClass('on');
        $('.tab').eq(1).siblings().removeClass('on');
    }else{
        //탭
        $('.section_wrap .section').eq(1).hide();
        $('.section_wrap .section').eq(2).hide();
    }
    $('.tab').click(function(){
      var index = $(this).index();
      $('.section_wrap .section').eq(index).show();
      $('.section_wrap .section').eq(index).siblings().hide();
      $('.tab').eq(index).addClass('on');
      $('.tab').eq(index).siblings().removeClass('on');
    });

    //[수강내역] - 더보기 버튼 클릭시
    $('.add_btn').click(function(){
      if($(this).parent().hasClass('show')){
        $(this).parent().removeClass('show');
        $(this).children().text('더보기 +');
      }else{
        $(this).parent().addClass('show');
        $(this).children().text('숨기기 -');
      }
    });
    // $("#e_add2").val('<?=$email[1]?>');
    // $("#e_add").val('<?=$pemail[1]?>');
    //
    // select_check('c');
    // select_check('p');
  });
</script>
<!-- (D) 회원탈퇴 -->
<div id="unsubscribe" class="modal">
  <div class="popup">
    <button type="button" class="close"></button>
    <div class="inner">
      <header>
        <h1>회원탈퇴</h1>
      </header>
      <div class="title clear">
        <span class="bullet">Q</span>
        <p>탈퇴사유를 선택해주세요.</p>
      </div>
      <form id ="unjoin_form">
         <input type="hidden" name="member_idx" id="member_idx" value="<?=$member_info->idx?>"/>
        <div class="radio_box">
          <ul class="clear" id="china_radio">
            <li class="radio">
              <input type="radio" id="reason1" name="reason" value="A" checked>
              <label for="reason1">강의 품질 불만</label>
            </li>
            <li class="radio">
              <input type="radio" id="reason2" name="reason" value="B">
              <label for="reason2">학습시스템 불만</label>
            </li>
            <li class="radio">
              <input type="radio" id="reason3" name="reason" value="C">
              <label for="reason3">상담서비스 불만</label>
            </li>
            <li class="radio">
              <input type="radio" id="reason4" name="reason" value="D">
              <label for="reason4">개인사유</label>
            </li>
            <li class="radio">
              <input type="radio" id="reason5" name="reason" value="E">
              <label for="reason5">기타</label>
              <input type="text" name="reason_etc" placeholder="기타 탈퇴사유를 구체적으로 입력해주세요." class="input_reseon">
            </li>
          </ul>
        </div>
      </form>
      <div class="warn">
        <div class="inner">
          <p>탈퇴시 고객님의 모든 정보가 소멸되며, 이전으로 복구가 불가능합니다.</p>
          <div id="china_chk">
            <input type="checkbox" id="agree" checked>
            <label for="agree">내용 확인 및 회원 탈퇴에 동의합니다.</label>
          </div>
        </div>
      </div>
    </div>
    <div class="footer_btn">
      <div class="inner">
        <ul class="gray">
          <li class="cancel">
            <button type="button" onclick="$('#unsubscribe').hide()">취소</button>
          </li>
          <li class="ok">
            <button type="button" onclick="unjoin()">탈퇴</button>
          </li>
        </ul>
      </div>
    </div>
  </div>
</div>
<!-- (D) //회원탈퇴 -->

<!-- (D) 비밀번호 변경 -->
<div id="pw_modify" class="modal">
  <div class="popup">
    <button type="button" class="close"></button>
    <div class="inner">
      <header>
        <h1>비밀번호 변경</h1>
      </header>
      <div class="box">
        <form name="passwordForm" id="passwordForm">
            <input type="hidden" name="member_id" id="member_id" value="<?=$member_info->id?>"/>
            <div class="warn">
              <span>개인 정보 보호를 위하여 주기적으로 비밀번호를 변경하시기 바랍니다.</span>
            </div>
            <div class="form">
              <ul>
                <li>
                  <span>기존 비밀번호</span>
                  <input type="password" name="current_password" id="current_password" />
                </li>
                <li>
                  <span>새비밀번호</span>
                  <input type="password" name="new_password" id="new_password">
                </li>
                <li>
                  <span>비밀번호 확인</span>
                  <input type="password" name="check_password" id="check_password">
                </li>
              </ul>
            </div>
        </form>
      </div>
      <div class="tips">
        <ul>
          <li>비밀번호는 영문, 숫자, 특수문자를 조합한 10자리 이상의 문자로 구성해주세요.</li>
          <li>숫자 및 영문을 연속으로 동일하게 입력하지 마시기 바랍니다.</li>
          <li>아이디와 중복되지 않도록 비밀번호를 설정해 주시기 바랍니다.</li>
        </ul>
      </div>
    </div>
    <div class="footer_btn">
      <div class="inner">
        <ul>
          <li class="cancel">
            <button type="button" onclick="$('#pw_modify').hide()">다음에 변경</button>
          </li>
          <li class="ok">
              <button type="button" onclick="change_password()">비밀번호 변경</button>
          </li>
        </ul>
      </div>
    </div>
  </div>
</div>
<!-- (D) //비밀번호 변경 -->

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

    <!-- (D) 우편번호 검색했을 때 -->
    <div class="postal_list" id="search_list" style="display: none;">
      <span id="total_rows"></span>

      <!-- (D) 우편번호 첫 화면만 보여짐 -->
      <!-- <span class="blue">검색어 예 : 도로명(강동대로 108), 건물명(독립기념관)</span> -->
      <!-- (D) //우편번호 첫 화면만 보여짐 -->

      <table id="post_list">
        <caption>우편번호 검색 리스트</caption>
        <colgroup>
          <col style="width: 141px">
          <col style="width: auto">
        </colgroup>
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
          <button type="button" name="button" class="prev" id="prev" onclick="post_list_prev()" style="display: none"></button>
        <span id ="post_page_current">5 </span>
        <span>/</span>
        <span id ="post_page_total"> 14</span>
        <button type="button" name="button" class="next" id="next" onclick="post_list_next()"></button>
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
            <col style="width:20%">
            <col style="width:80%">
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
        <input type="text" placeholder="나머지 주소를 입력해 주세요." id="cur_etc">
      </div>
      <button type="button" name="button" onclick="submitAddress()" class="submit">확인</button>
    </div>
    <!-- (D) //우편번호 선택했을 때 -->
  </div>
</div>
<!-- (D) //우편번호 -->

<div id="mypage">
  <header>
    <div class="header">
      <h1>마이페이지</h1>
      <h3>렛츠고 차이나 고객센터에서 알려드립니다.</h3>
    </div>
  </header>
  <div class="inner">
    <div class="tabs">
      <ul class="clear">
        <li class="tab on"><span>나의 정보</span></li>
        <li class="tab"><span>쿠폰 등록</span></li>
        <li class="tab"><span>회원정보 수정</span></li>
      </ul>
    </div>
    <div class="section_wrap">
      <!-- (D) [나의 정보]탭 -->
      <div class="section my_info">
        <span class="hello"><span class="id"><?=$member_info->name?></span>님 안녕하세요.</span>
        <ul class="data_wrap clear">
            <?php
                if(!empty($study_book_level)){
            ?>
                    <li class="data level">
                    <img src="/images/account/level.png" alt="레벨이미지">
                    <h5>나의 레벨</h5>
                    <div id="container">
                      <p class="value"><?=$study_book_level?></p>
                    </div>
                  </li>
             <?php
                }else{
             ?>
                <!-- (D) 레벨이 없을 때 -->
               <li class="data level none">
                  <img src="/images/account/level2.png" alt="물음표이미지">
                  <h5>아직 레벨테스트를<br />하지 않으셨군요?</h5>
                  <button type="button" name="button" onclick="level_test();">레벨테스트 시작</button>
                </li>
            <?php
                }
            ?>
          <li class="data gold">
            <img src="/images/account/gold.png" alt="골드이미지">
            <h5>보유 골드</h5>
            <span class="amount"><?=$member_info->coin?></span>
          </li>
          <li class="data diamond">
            <img src="/images/account/diamond.png" alt="다이아몬드이미지">
            <h5>보유 다이아</h5>
            <span class="amount"><?=$member_info->diamond?></span>
          </li>
        </ul>
        <!-- (D) 웹 -->
        <div class="ing_class web">
          <p class="title">수강 중 강좌</p>
          <div class="list">
            <table>
              <caption>수강 중 강좌</caption>
              <colgroup>
                <col style="width: 8%">
                <col style="width: 24%">
                <col style="width: 17%">
                <col style="width: 17%">
                <col style="width: 17%">
                <col style="width: 17%">
              </colgroup>
              <thead>
                <tr>
                  <th scope="col" rowspan="2">번호</th>
                  <th scope="col" colspan="2">상품명</th>
                  <th scope="col">결제일</th>
                  <th scope="col">결제금액</th>
                  <th scope="col">결제방법/영수증</th>
                </tr>
                 <tr>
                   <th scope="col">수강기간</th>
                   <th scope="col" colspan="2">남은 수강 일수</th>
                   <th scope="col" colspan="2">학습 수강 상태</th>
                 </tr>
              </thead>
              <tbody>

                <?php
                    if(!empty($current_goods_list)){

                                    foreach($current_goods_list as $row){
                                        if(!empty($row->cpm_idx)){
                                            $part_pay = "-".$row->cpm_pay_order."개월 약정(매월결제)";
                                        }else{
                                            $part_pay = "";
                                        }

                                        switch($row->commission_code){
                                            case 'CARDIL' :
                                                $pay_type = "카드 일시불";
                                                break;
                                            case 'CARDAUTO' :
                                                $pay_type = "카드 자동이체";
                                                break;
                                            case 'ACCIL' :
                                                $pay_type = "계좌 일시불";
                                                break;
                                            case 'ACCTR' :
                                                $pay_type = "계좌 이체";
                                                break;
                                            case 'ADMIN' :
                                                $pay_type = "관리자승인";
                                                break;
                                            case 'COUPON' :
                                                $pay_type = "쿠폰";
                                                break;
                                            case 'APP' :
                                                $pay_type = "앱";
                                                break;
                                            case 'default' :
                                                $pay_type = "인식안됌";
                                                break;
                                        }

                                        $date1 = new DateTime('now');
                                        $date2 = new DateTime($row->end_date);
                                        $date3 = new DateTime($row->s_start_date);
                                        $remain_date = date_diff($date1,$date2)->format('%R%a');
                                        $total_date = date_diff($date3,$date2)->days;

                                        if($remain_date < 0){
                                            $remain_date = 0;
                                        }
                                        $remain_per1 = ($remain_date / $total_date) * 100;

                                        if($row->pay_period > 29){
                                            $view_period = "(".($row->pay_period/30)."개월)";
                                        }else{
                                            $view_period = "";
                                        }

                                ?>
                                <script>
                                    if(<?=$remain_date?> < 1){
                                        $("#study_state_m").removeClass("on");
                                        $("#study_add_m").attr('disabled',false);
                                    }
                                </script>
                                <tr>
                                  <td class="bold" rowspan="2"></td>
                                  <td colspan="2" class="bold left">렛츠고 차이나 - <?=$row->pay_period?>일<?=$view_period?> <?=$part_pay?></td>
                                  <td><?= str_replace("-", ".", $row->approval_ymdhms)?></td>
                                  <td><?= number_format($row->amt)?></td>
                                  <td><?=$pay_type?></td>
                                </tr>
                                <tr>
                                  <td class="left"><?= str_replace("-", ".", $row->s_start_date)?> ~ <?= str_replace("-", ".", $row->s_end_date)?></td>
                                  <td colspan="2" class="progress_bar clear">
                                    <div class="center">
                                      <div id="progress" class="progress1"></div>
                                      <div class="rest"><?=$remain_date?>일 남음</div>
                                    </div>
                                  </td>
                                  <td>
                                    <!-- (D) 학습중일때 on 클래스 추가 -->
                                    <span class="type on" id="study_state">학습중</span>
                                  </td>
                                  <td class="button">
                                    <!-- (D) 학습중일때는 연장하기 버튼에  disabled 해주세요. -->
                                    <button type="button" id="h_study_add" onclick="location.href='https://www.letsgoreading.com/program/course_list#china'">연장하기</button>
                                  </td>
                                </tr>
                    <?php
                                    }
                    }else{
                    ?>
                        <tr>
                          <td class="empty" colspan="6">수강중인 강좌가 없습니다.</td>
                        </tr>

                    <?php
                    }
                    ?>
              </tbody>
            </table>
          </div>
        </div>

        <!-- (D) 모바일 -->
        <div class="ing_class mobile">
          <p class="title">수강 중 강좌</p>
          <div class="list">
            <ul>
<?php
                 if(!empty($current_goods_list)){
                    foreach($current_goods_list as $row){
                        if(!empty($row->cpm_idx)){
                            $part_pay = "-".$row->cpm_pay_order."개월 약정(매월결제)";
                        }else{
                            $part_pay = "";
                        }

                        switch($row->commission_code){
                            case 'CARDIL' :
                                $pay_type = "카드 일시불";
                                break;
                            case 'CARDAUTO' :
                                $pay_type = "카드 자동이체";
                                break;
                            case 'ACCIL' :
                                $pay_type = "계좌 일시불";
                                break;
                            case 'ACCTR' :
                                $pay_type = "계좌 이체";
                                break;
                            case 'ADMIN' :
                                $pay_type = "관리자승인";
                                break;
                            case 'COUPON' :
                                $pay_type = "쿠폰";
                                break;
                            case 'APP' :
                                $pay_type = "앱";
                                break;
                            case 'default' :
                                $pay_type = "인식안됌";
                                break;
                        }

                        $date1 = new DateTime('now');
                        $date2 = new DateTime($row->end_date);
                        $date3 = new DateTime($row->s_start_date);
                        $remain_date = date_diff($date1,$date2)->format('%R%a');
                        $total_date = date_diff($date3,$date2)->days;

                        if($remain_date < 0){
                            $remain_date = 0;
                        }
                        $remain_per1 = ($remain_date / $total_date) * 100;


                        if($row->pay_period > 29){
                            $view_period = "(".($row->pay_period/30)."개월)";
                        }else{
                            $view_period = "";
                        }
?>
                <script>
                    if(<?=$remain_date?> < 1){
                        $("#study_state_m").removeClass("on");
                        $("#study_add_m").attr('disabled',false);
                    }
                </script>

              <li>
                <div class="inner">
                  <div class="title">
                    <p class="class_name">렛츠고 차이나 - <?=$row->pay_period?>일<?=$view_period?> <?=$part_pay?> </p>
                    <p class="class_date"><?= str_replace("-", ".", $row->s_start_date)?> ~ <?= str_replace("-", ".", $row->s_end_date)?></p>
                  </div>
                  <div class="center">
                    <div id="progress" class="progress1"></div>
                    <div class="rest"><?=$remain_date?>일 남음</div>
                  </div>
                  <div class="condition clear">
                    <span class="type on" id="study_state_m">학습중</span>
                    <button type="button" id="study_add_m" disabled>연장하기</button>
                  </div>
                  <div class="pay_detail">
                    <table>
                      <caption>결제 상세</caption>
                      <colgroup>
                        <col style="width:50%">
                        <col style="width:50%">
                      </colgroup>
                      <tbody>
                        <tr>
                          <th scope="row">결제일</th>
                          <td><?= str_replace("-", ".", $row->approval_ymdhms)?></td>
                        </tr>
                        <tr>
                          <th scope="row">결제금액</th>
                          <td><?= number_format($row->amt)?></td>
                        </tr>
                        <tr>
                          <th scope="row">결제방법/영수증</th>
                          <td><?=$pay_type?></td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </li>
<?php
        }
    }else{
?>
                <li class="empty" colspan="6">수강중인 강좌가 없습니다.</li>
<?php
    }
?>
            </ul>
          </div>
        </div>
      </div>

        <!-- (D) [쿠폰등록]탭 -->
      <div class="section class_list">
        <!-- (D) 수강내역 -->
        <div class="ing_class web">

        </div>
        <!-- (D) 쿠폰등록 -->
        <div class="ticket_wrap">
          <form id="ticketForm" name="ticketForm" action="" method="post">
              <p class="ticket_desc">문자를 통해 받으신 쿠폰번호를 입력해 주세요.</p>
              <div class="ticket_form">
                  <input id="coupon_number" name="coupon_number" type="text" placeholder="'-'(하이픈) 포함" />
                  <button type="button" name="button" id="useBtn">쿠폰 등록</button>
              </div>
          </form>
        </div>
      </div>
      <!-- (D) [정보 수정]탭 -->
      <div class="section modify">
        <div id="signup">
          <div id="inputForm">
            <form method="post" id="modify_form" name="modify_form">
              <fieldset>
                <table>
                  <caption>회원가입서</caption>
                  <colgroup>
                    <col style="width: 141px">
                    <col style="width: auto">
                  </colgroup>
                  <tbody>
                    <tr>
                      <th class="star">생년월일</th>
                      <td class="clear">
                        <div class="birth clear">
                          <label for="yyyy" class="year">
                            <select id="yyyy" disabled>
                                <option value="<?=substr($member_info->birthday,0,4)?>"><?=substr($member_info->birthday,0,4)?></option>
                            </select>
                          </label>
                          <label for="mm" class="month">
                            <select id="mm">
                              <option value="<?=substr($member_info->birthday,5,2)?>"><?=substr($member_info->birthday,5,2)?></option>
                            </select>
                          </label>
                          <label for="dd" class="day">
                            <select id="dd">
                              <option value="<?=substr($member_info->birthday,8,2)?>"><?=substr($member_info->birthday,8,2)?></option>
                            </select>
                          </label>
                        </div>
                        <div class="radio clear">
                          <div class="radio_item">
                            <input type="radio" name="birth_type" id="solar" <?=$schecked?>>
                            <label for="solar" class="custom">양력</label>
                          </div>
                          <div class="radio_item">
                            <input type="radio" name="birth_type" id="lunar" <?=$lchecked?>>
                            <label for="lunar" class="custom">음력</label>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <th class="star">사용자 이름</th>
                      <td class="fl clear">
                        <input type="hidden" value="<?=$member_info->idx?>" name="member_idx" id="member_idx">
                        <input type="text" value="<?=$member_info->name?>" disabled>
                        <div class="radio clear">
                          <div class="radio_item">
                            <input type="radio" name="radio2" id="male" <?=$mchecked?>  disabled>
                            <label for="male" class="custom">남자</label>
                          </div>
                          <div class="radio_item">
                            <input type="radio" name="radio2" id="female" <?=$wchecked?> disabled>
                            <label for="female" class="custom">여자</label>
                          </div>
                        </div>
                      </td>
                    </tr>
                    <tr>
                      <th class="star">사용자 아이디</th>
                      <td>
                        <input type="text" disabled value="<?=$member_info->id?>">
                      </td>
                    </tr>
                    <tr>
                      <th class="star">비밀번호</th>
                      <td class="fl clear">
                        <input type="password">
                        <button type="button" name="button" class="gray" onclick="openPwModify();">비밀번호 변경</button>
                      </td>
                    </tr>
                    <tr>
                      <th class="star">보호자<br />핸드폰번호</th>
                      <td>
                        <input type="tel" name="member_tel" id="member_tel" placeholder="-빼고 숫자만 입력하세요." value="<?=$phone?>">
                      </td>
                    </tr>
                    <tr>
                      <th class="star">지점코드</th>
                      <td class="fl clear">
                        <input type="text" name="member_code" id="member_code" placeholder="지점코드 입력" id="member_code" value="<?=$member_info->code?>">
                        <div id="china_chk">
                          <input type="checkbox" id="code" name="uncode" checked>
                          <label for="code">지점코드가 없는 경우 체크</label>
                        </div>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </fieldset>
          </div>
          <div id="inputForm" class="add_info">
          <div class="title">
            추가 정보 입력
          </div>
            <fieldset>
              <table>
                <caption>추가 정보 입력</caption>
                <colgroup>
                  <col style="width: 141px">
                  <col style="width: auto">
                </colgroup>
                <tbody>
                  <tr>
                    <th>주소</th>
                    <td class="address">
                      <div class="postal clear">
                        <!-- (D) 우편번호 input을 눌러도 우편번호 팝업 열리게 해주세요.
                                 아래 input에 우편번호와 주소는 value값으로 들어갑니다.
                         -->
                        <input type="text" readonly id="post_code" name="post_code" value="<?=$member_info->post?>">
                        <button type="button" name="button"  class="gray" onclick="openPostalCode();">우편번호</button>
                      </div>
                      <div class="address_detail">
                        <input type="text" readonly name="addr" id="addr" value="<?=$member_info->address1?>">
                        <input type="text" readonly name="addr_etc" id="addr_etc" value="<?=$member_info->address2?>">
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <th class="web">학생<br />이메일 주소</th>
                    <th class="mobile">학생 이메일 주소</th>
                    <td class="email clear">
                      <input type="text" class="email_id" name="email_id" value="<?=$email[0]?>">
                      <input type="text" class="email_address" name="email_address" id="email_address" value="<?=$email[1]?>">
                      <div class="email_select clear">
                        <label for="e_add2">
                          <select id="e_add2">
                            <option value="custom">직접입력</option>
                            <option value="naver.com">네이버</option>
                            <option value="daum.net">다음</option>
                            <option value="nate.com">네이트</option>
                            <option value="gmail.com">지메일</option>
                          </select>
                        </label>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <th>보호자 이름</th>
                    <td>
                      <input type="text" name="p_name" readonly value="<?=$member_info->parents_name?>">
                    </td>
                  </tr>
                  <tr>
                    <th class="web">보호자<br />이메일 주소</th>
                    <th class="mobile">보호자 이메일 주소</th>
                    <td class="email clear">
                        <input type="text" class="email_id" name="p_email_id" value="<?=$pemail[0]?>">
                      <input type="text" class="email_address" name="p_email_address" id="p_email_address" value="<?=$pemail[1]?>">
                      <div class="email_select clear">
                        <label for="e_add">
                          <select id="e_add">
                            <option value="custom">직접입력</option>
                            <option value="naver.com">네이버</option>
                            <option value="daum.net">다음</option>
                            <option value="nate.com">네이트</option>
                            <option value="gmail.com">지메일</option>
                          </select>
                        </label>
                      </div>
                    </td>
                  </tr>
                </tbody>
              </table>
            </fieldset>
          <button type="button" name="button" class="unsubscribe" onclick="openUnsubscribe();">회원탈퇴</button>
        </div>
          <!-- <div class="sns_agree clear">
            <div id="china_chk">
              <input type="checkbox" id="agr" name="sns_agree" checked>
              <label for="agr">SNS학습 리포트 수신에 동의합니다.</label>
            </div>
          </div> -->
          <div class="submit_btns">
            <ul class="clear">
              <li>
                <button type="button" name="button" class="back" onclick="location.reload();">취소</button>
              </li>
              <li>
                <button type="button" name="button" class="next" onclick="modify_submit()">수정</button>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</form>
<script>

    $(function(){
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
            select_check('c');
        });
        $("#e_add").change(function (){
            select_check('p');
        });

        if(<?=count($history_goods_list)?> > 3){
            $(".add_btn").show();
        }else{
            $(".add_btn").hide();
        }
        
        

        $("#useBtn").click(function () {
            if (!$('#coupon_number').val()) {
                alert("티켓번호를 입력해주세요.");
                $('#coupon_number').focus();
                return false;
            } else {
                jQuery.ajax({
                    url: '/coupon/set_use_coupon',
                    data: jQuery("form[name='ticketForm']").serialize(),
                    type: 'POST',
                    timeout: 10000,
                    dataType: 'json',
                    success: function (data) {
                        if (data.code != '200') {
                            alert(data.message);
                        } else {
                            alert("쿠폰이 사용되었습니다.");
                            window.location.reload();
                        }
                    },
                    error: function (xhr, status, error) {
                        console.log(xhr, status, error)
                        alert("네트워크 오류!! 다시 선택하여 주세요!!");
                        return false;
                    }
                });
            }
        });   
    });


    function unjoin(){

        if(!$('#agree').is(':checked')){
            alert("동의 내용에 동의 해주시기 바랍니다.");
            return false;
        }else{
            if(confirm("정말 탈퇴를 진행하시겠습니까?")){
                jQuery.ajax({
                    url: "/member/unjoin",
                    data: $("#unjoin_form").serialize(),
                    type:'POST',
                    timeout:10000,
                    dataType: 'json',
                    success: function(data) {
                        if(!data.result) {
                            alert(data.message);
                            return false;
                        } else  {
                            alert(data.message);
                            location.href="/member/logout";
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
    }

    function level_test(){
        alert("준비중입니다.");
    }

    function search_post(){
        var txt = $("#search_text").val();
            if(txt == ""){
                alert_message("주소값 입력후 검색을 해주세요","red");
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

    function change_password() {

        if(!$('#current_password').val()) {
            alert('기존 비밀번호를 입력하세요');
            $('input[name="current_password"]').focus();
            return false;
        }

        if(!$('#new_password').val()) {
            alert('새 비밀번호를 입력하세요');
            $('input[name="new_password"]').focus();
            return false;
        }

        if(!$('#check_password').val()) {
            alert('비밀번호 확인을 입력하세요');
            $('input[name="check_password"]').focus();
            return false;
        }

        if(!checkSpecial($('#new_password').val())) {
            alert('10자이상 숫자, 영문, 특수문자를 두가지이상 혼용하여야 합니다.');
            $('input[name="new_password"]').focus();
            return false;
        }

        if($('#new_password').val() != $('#check_password').val()) {
            alert('새비밀번호와 비밀번호 확인이 일치하지 않습니다');
            $('#new_password').focus();
            return false;
        }

        if(confirm("비밀번호를 변경 하시겠습니까?")) {
                jQuery.ajax({
                    url: "/member/pw_change",
                    data: $("#passwordForm").serialize(),
                    type:'POST',
                    timeout:10000,
                    dataType: 'json',
                    success: function(data) {
                        if(data.result == '1') {
                            alert('수정완료');
                            location.reload();
                        } else {
                           alert(data.message);
                           location.reload();
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

    function checkSpecial(str) {

        var num = str.search(/[0-9]/g);
        var eng = str.search(/[a-z]/ig);
        var sta = str.search(/[~!@#$%^&*]/);
        var cnt = 0;
        
        if(str.length < 10) {
            return 0; 
        } else {
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
                return 0;
            }else{
                return 1;
            }
        }

    }

    function select_check(type){

        var select;
        var text;

        if(type == "p"){
            select = $('#e_add');
            text = $('#p_email_address');
        }else{
            select = $('#e_add2');
            text = $('#email_address');
        }

        if(select.val() == 'custom'){
            text.val('');
            text.attr('readonly', false);
        }else{
            text.val(select.val());
            text.attr('readonly', true);
        }
    }

    function modify_submit(){

        if(!null_check("#member_tel","핸드폰 번호")){
            return false;
        }
        if(!null_check("#member_region","지역")){
            return false;
        }

        if($("#code").is(":checked") == false){
            if(!null_check("#member_code","지점코드")){
                return false;
            }
        }


        if(confirm("회원정보를 변경 하시겠습니까?")) {
            jQuery.ajax({
                url: "/member/modify_submit",
                data: $("#modify_form").serialize(),
                type:'POST',
                timeout:10000,
                dataType: 'json',
                success: function(data) {
                    if(data.result == '1') {
                        alert('수정완료');
                        location.reload();
                    } else {
                       alert(data.message);
                       location.reload();
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
            alert(label+"란을 확인해주세요.","red");
            $(id).focus();
            return false;
        }else{
            return true;
        }
    }


        //남은 수강 일수
    $( "#progress.progress1" ).progressbar({value: <?=$remain_per1?>});
    $( "#progress.progress2" ).progressbar({value: 89});
    $( "#progress.progress3" ).progressbar({value: 0});

</script>
