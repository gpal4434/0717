<script>
$(document).ready(function(){
  listController.setPageNavi(jQuery("#paging"));
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
            basePath : '/worksheet/',
            page : ''
        };
        setPaging.setEvent(pageEventParam);
    }
};
</script>

<div class="modal" id="work_answer">
  <div class="popup work_answer">
    <button type="button" class="close"></button>
    <div class="inner">
      <div class="title">
        <h1>워크시트 정답지</h1>
      </div>
      <div class="cont">
        <ul>
          <li class="clear">
            <div class="subject">
              <span>기초</span>
              <span>Level 1~6</span>
            </div>
            <div class="down">
              <button type="button" name="button" onclick="location.href='/worksheet/answer_download/grade1_answer.pdf'"></button>
            </div>
          </li>
          <li class="clear">
            <div class="subject">
              <span>초급</span>
              <span>Level 7~12</span>
            </div>
            <div class="down">
              <button type="button" name="button" onclick="location.href='/worksheet/answer_download/grade2_answer.pdf'"></button>
            </div>
          </li>
          <li class="clear">
            <div class="subject">
              <span>중급</span>
              <span>Level 13~18</span>
            </div>
            <div class="down">
              <button type="button" name="button" onclick="location.href='/worksheet/answer_download/grade3_answer.pdf'"></button>
            </div>
          </li>
          <li class="clear">
            <div class="subject">
              <span>고급</span>
              <span>Level 19~24</span>
            </div>
            <div class="down">
              <button type="button" name="button" onclick="location.href='/worksheet/answer_download/grade4_answer.pdf'"></button>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
</div>
<div id="workSheet">
    <div class="tit">
      <div class="inner">
        <h1>워크시트</h1>
        <h3 class="web">책을 읽고, 워크시트로 학습을 마무리 해 보세요!</h3>
      </div>
    </div>
    <div class="cont">
      <div class="search_box clear">
        <form name='searchForm' method='get' action=''>
            <div class="select_box clear">
              <label for="level">
                <select name="study_level" id="level">
                  <option value="">레벨 선택</option>
                    <?php
                    if (!empty($study_level_rows)) {
                        foreach ($study_level_rows as $row) {
                            ?>
                            <option value="<?= $row->study_level ?>" <?= ($row->study_level == $search_vo->study_level) ? "selected" : ""; ?>>Lv.<?= $row->study_level ?></option>
                            <?php
                        }
                    }
                    ?>
                </select>
              </label>
              <label for="stage">
                <select class="stage" name="stage" id="stage">
                  <option value="">스테이지 선택</option>
                    <?php
                    if (!empty($stage_rows)) {
                        foreach ($stage_rows as $row) {
                            ?>
                            <option value="<?= $row->stage ?>" <?= ($row->stage == $search_vo->stage) ? "selected" : ""; ?>>St.<?= $row->stage ?></option>
                            <?php
                        }
                    }
                    ?>
                </select>
              </label>
            </div>
            <!--<button type="button" name="button" class="web" onClick="javascript:document.searchForm.submit();"></button>-->
            <input type="hidden" name="grade" value="<?=$search_vo->grade?>"/>
        </form>
      </div>
      <section>
        <div class="tab">
          <ul class="clear">
            <li onclick="grade_chage(1)" id="grade_1">기초</li>
            <li onclick="grade_chage(2)" id="grade_2">초급</li>
            <li onclick="grade_chage(3)" id="grade_3">중급</li>
            <li onclick="grade_chage(4)" id="grade_4">고급</li>
          </ul>
        </div>
        <div class="worksheet_box">
          <ul class="clear">
            <?php
            if (!empty($rows)) {
                foreach ($rows as $row) {
                    ?>
                    <li>
                        <div class="img_box">
                            <img src="<?= $row->image_url ?>" alt="워크시트">
                            <div class="hidden web">
                                <button type="button" name="button" class="pdf_down web" onclick="location.href='/worksheet/worksheet_download/<?= $row->idx ?>'"></button>
                            </div>
                        </div>
                        <div class="name">
                            <p><?= sprintf("%02d",$row->study_level) ?>-<?=sprintf("%02d",$row->stage)?>-<?=sprintf("%02d",$row->sort_num)?></p>
                            <button type="button" name="button" class="pdf_down mobile" onclick="location.href='/worksheet/worksheet_download/<?= $row->idx ?>'"></button>
                        </div>
                    </li>
                    <?php
                }
            } else {
            ?>
            <!-- 검색결과 없음 -->  
            <div style="text-align:center; font-weight:700; font-size:25px; color:#222; padding:110px 0 120px 0;">
                <span>검색 결과가 없습니다.</span>
            </div>
            <?php
            }
            ?>                  
          </ul>
        </div>
      </section>
      <div class="btn_box">
          <button type="button" name="button" id="answer_button">Answer sheet</button>
      </div>
        <div class="row se_list" style="margin-bottom: 30px" id="paging">
          <ul>
                <?php echo $paging['scale']."/".$paging['setscale']."/".$paging['currset']."/".$paging['currpage']."/".$paging['totalcount'] ?>
          </ul>
      </div> 
    </div>
</div>

<script>
    
    $(document).ready(function(){
       $("#grade_<?=$search_vo->grade?>").addClass("on");
       
       $("#answer_button").click(function(){

           $("#work_answer").show();
       });
       
       $("#level").change(function(){
           document.searchForm.submit();
       });
       
       $("#stage").change(function(){
           document.searchForm.submit();
       });
    });
    
    function grade_chage(grade_num){
        location.href = "/worksheet/index?grade="+grade_num;
    }
</script>
