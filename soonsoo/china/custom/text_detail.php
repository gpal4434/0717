<script>
    jQuery(document).ready(function(){
        jQuery('.listBtn').on("click",function(){
            location.href=document.referrer; return false;
        });

        jQuery(".reviewtab").click(function () {
            var rtype=jQuery(this).attr("rtype");
            location.href="/main/review/"+rtype;
        });
    });


</script>



<div id="china_hugi">
    <div class="hugi_ma">
        <p class="hu_txt">체험후기</p>
        <p class="hu_txt2 web">렛츠고 차이나 고객센터에서 알려드립니다.</p>
    </div>
</div>

<div id="tab_list">
    <div class='reviewtab' rtype="v">
        <p class="tab1_txt " style="cursor:pointer">동영상 리뷰 </p>
    </div>
    <div class='reviewtab actived' rtype="t">
        <p class="tab2_txt" style="cursor:pointer">텍스트 리뷰 </p>
    </div>
</div>
<div id="sangsa_list">
    <div class="sangsa_txt">
        <p class="sangsa_txt2">
            <?=$info[0]['title']?>
        </p>
        <p class="sangsa_txt3">
            <?=$info[0]['reg_date']?>
        </p>
    </div>

    <div class="sangsa_txt4" style="height:auto !important">
        <p class="sangsa_txt5">
            <?=stripslashes($info[0]['contents'])?>
        </p>
    </div>

    <div class="sangsa_bar">
    </div>

    <div id="sangsa_return">
        <div class="return_txt listBtn"> 목 록 </div>
    </div>
</div>
