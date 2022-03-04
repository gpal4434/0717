<script>
    $(document).ready(function () {
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
            page : 'review/v'
        };
        setPaging.setEvent(pageEventParam);
    }
};
</script>
<div id="video_detail">
  <div id="video_modal">

  </div>
</div>
<div id="china_hugi">
    <div class="hugi_ma">
        <h1 class="hu_txt">체험후기</h1>
        <h3 class="hu_txt2 web">렛츠고 차이나 고객센터에서 알려드립니다.</h3>
    </div>
</div>

<div id="tab_list">
    <div class='reviewtab actived' rtype="v">
        <p class="tab1_txt " style="cursor:pointer">동영상 리뷰 </p>
    </div>
    <div class='reviewtab' rtype="t">
        <p class="tab2_txt" style="cursor:pointer">텍스트 리뷰 </p>
    </div>
</div>

<div id="hugi_video">
  <div id="video_list" class="clear">
    <?php
      for($i=0,$n=1;$i<count($list);$i++,$n++){
        if($n%3==1){
          $margin = "";
        }else if($n%3==2){
          $margin = "margin:0 auto";
        }else{
          $margin = "float:right";
        }
        $video_ar = explode("src=",$list[$i]['video_url']);
        $video_ar = explode("frameborder=", $video_ar[1]);
        $video_src = substr($video_ar[0],8);
        $video_src = substr($video_src,0,-3);

        if($this->input->server('secure')){
          $video_src = "https:".$video_src;
        }else{
          $video_src = "http:".$video_src;
        }
    ?>
    <div class="video_item">
      <div class="video_img" style="<?=$margin?>">
        <div class="over_effect" onclick=video_view('<?=$video_src?>')></div>
        <img src="http://lms.letsgoreading.com<?=$list[$i]['thumbnail_img_url']?>" alt="동영상 썸네일 이미지"  />
        <img src="/images/lets_china/hugi/video_play.png" alt="재생버튼" class="play_btn" onclick=video_view('<?=$video_src?>') />
      </div>
      <div class="video_title" style="<?=$margin?>">
        <p class="gogak_name1"> <?=$list[$i]['name']?> <br/>
          <span class="go_na1"><?=$list[$i]['title']?></span>
        </p>
      </div>
    </div>
    <?php
      }
    ?>
  </div>
</div>

<div class="row se_list" id="paging">
<?php echo $paging['scale']."/".$paging['setscale']."/".$paging['currset']."/".$paging['currpage']."/".$paging['totalcount'] ?>
</div>

<script>
  function video_view(url){
      $('#video_modal').html("<iframe width='900' height='506' id='video_player' src='"+url+"' allowFullScreen></iframe>");

      $('#video_detail').show();
  }
  function stopVideo(){
      $("#video_player")[0].contentWindow.postMessage('{"event":"command","func":"' + 'pauseVideo' + '","args":""}', '*');
  }
</script>
