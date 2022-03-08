$(document).ready(function(){
  // url 추가 버튼
  $('.add').click(function(){
    $(this).parent().after('<div class="url clear"><input type="text"><button class="sub">-</button></div>')
  });

  $(document).on('click', 'button.sub', function(){
    $(this).parent().remove();
  });
});


// 과목 선택 2개
  var maxCount = 2;
  var count = 0;

  function CountChecked(field){
    if (field.checked) {
      count += 1;
    }
    else {
      count -= 1;
    }

    if (count > maxCount) {
      alert("2개까지만 선택 가능합니다!");
    field.checked = false;
    count -= 1;
    }
  }

// 팝업 열기
function OpenPopup() {
   window.open("popup.html", "popup01", "width=717, height=1080, left:0, top:0, scrollbars:0");
}

// 주소 복사
function copyToClipBoard() {
  const url = document.location.href;
  const t = document.createElement("textarea");
  document.body.appendChild(t);
  t.value = url;
  t.select();
  document.execCommand('copy');
  document.body.removeChild(t);
  alert('주소가 복사되었습니다. 붙여넣기(Ctrl+V) 하셔서 공유하시면 됩니다.')
}
