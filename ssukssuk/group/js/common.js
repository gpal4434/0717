$(document).ready(function(){

  //탭
  $('dt').click(function(){
    $(this).siblings().removeClass('on');
    $(this).addClass('on');
    $('dd').addClass('hidden');
    $(this).next().removeClass('hidden');
  });

  $('.openPay').click(function(){
    $('dt').removeClass('on');
    $('dd').addClass('hidden');
    $(document).scrollTop(0);
    $('#goPay').removeClass('hidden');
    $('#goPay').prev().addClass('on');
  });

  //결제 수단 버튼
 $('.pay_type button').on('click', function(){
   $('.pay_type button').removeClass('on');
   if(!$(this).hasClass('on')){
     $(this).addClass('on');
     $(this).siblings().removeClass('on');
   }
 });

});

// 팝업 열기
function OpenPopup(){
   window.open("pay.html", "popup01", "width=1200, height=1080, left:0, top:0, scrollbars:0");
}

// 동의 벨리데이션
function CheckTest(){
  var chk = document.getElementsByName('agree');
  if(chk[0].checked == false || chk[1].checked == false ){
    alert('모든 사항에 동의를 하셔야 합니다.');
    return false;
  }else{
    return true;
  }
}
