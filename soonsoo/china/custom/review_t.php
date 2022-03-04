<script>
jQuery(document).ready(function () {
  listController.setPageNavi(jQuery("#paging"));
  jQuery(".reviewtab").click(function () {
    var rtype=jQuery(this).attr("rtype");
    location.href="/main/review/"+rtype;
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
        page : 'review/t'
    };
    setPaging.setEvent(pageEventParam);
  }
};
</script>
<div id="china_hugi">
  <div class="hugi_ma">
    <h1 class="hu_txt">체험후기</h1>
    <h3 class="hu_txt2 web">렛츠고 차이나 고객센터에서 알려드립니다.</h3>
  </div>
</div>

<div id="tab_list">
  <div class="reviewtab" rtype="v">
    <p class="tab1_txt " style="cursor:pointer">동영상 리뷰 </p>
  </div>
  <div class="reviewtab actived" rtype="t">
    <p class="tab2_txt " style="cursor:pointer">텍스트 리뷰 </p>
  </div>
</div>

<!-- 웹 -->
<div id="list_wrap" class="web">
    <table id="gong_list">
      <tr class="list_1">
        <th><p class="c_list00">번호</th>
        <th><p class="c_list00">제목</p></th>
        <th><p class="c_list00">작성자</th>
        <th><p class="c_list00">등록일</th>
      </tr>
<?php
    for($i=0;$i<count($list);$i++){
?>
      <tr onclick=location.href="/main/review_detail/t?idx=<?=$list[$i]['idx']?>">
        <td class="ls_on"> <?=$num--?> </td>
        <td class="ls_on">
          <p class="li_ont">
            <?=$list[$i]['title']?>
          </p>
        </td>
        <td class="ls_on"> <?=$list[$i]['name']?> </td>
        <td class="ls_on"> <?=$list[$i]['reg_date']?> </td>
      </tr>
<?php
    }
?>
    </table>

    <div class="row se_list" style="text-align:center" id="paging">
    <?php echo $paging['scale']."/".$paging['setscale']."/".$paging['currset']."/".$paging['currpage']."/".$paging['totalcount'] ?>
    </div>
</div>

<!-- 모바일 -->
<div id="gong_list" class="mobile">
  <ul>
    <?php
        for($i=0;$i<count($list);$i++){
    ?>
    <li onclick=location.href="/main/review_detail/t?idx=<?=$list[$i]['idx']?>">
      <p class="notice_title"><?=$list[$i]['title']?></p>
      <div class="clear">
        <p class="date"><?=$list[$i]['reg_date']?></p>
        <p class="name"><?=$list[$i]['name']?></p>
      </div>
    </li>
    <?php
        }
    ?>
  </ul>
</div>

<!-- (D) 페이징 처리 부탁드려요. -->

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
