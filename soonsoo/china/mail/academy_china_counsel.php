<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <style type="text/css">
            *{margin:0; padding:0; }
            table{border-collapse: collapse;}
            a:visited, a:link{color:#000; text-decoration:none;}

            #wrap{width:486px; margin:0 auto; }
            h1{width:100%; padding:10px 0; }
            h1 img{width:100px;}
            .descText{font-size:28px; }
            .descTable{width:100%; border-top:2px solid #2195F2; border-bottom:2px solid #2195F2;  margin-top:50px; }
            .descTable table{width:100%;}
            .descTable tr{width:100%; height:40px; border-bottom:1px solid #DEF1FF; }
            .descTable tr:last-child{border-bottom:none; }
            .descTable tr th{text-align:left; text-indent:20px;}
            .siteName{color:#2195F2; font-weight:900; }
            .link_btn{margin-top:10px; height:30px; text-align:right; }
            .link_btn a{display:inline-block; line-height:30px; width:130px; color:#2195F2; background-color:#D1ECFF; text-align:center; font-weight:900; }
        </style>
    </head>
    <body>
        <div id="wrap">
            <h1><img src="https://www.letsgoreading.com/images/main/letsgo/logo_china.png" alt="렛츠고차이나"/></h1>
            <div class="descText">
                관리자님 신규 DB가 접수되었습니다.<br/>
                확인 부탁드립니다.
            </div>
            <div class="descTable">
                <table>
                    <tr>
                        <th>사이트명</th>
                        <td class="siteName">렛츠고 차이나</td>
                    </tr>
                    <tr>
                        <th>접수자</th>
                        <td><?= $row->parents_name ?></td>
                    </tr>
                    <tr>
                        <th>연락처</th>
                        <td><?= $row->tel ?></td>
                    </tr>
                    <tr>
                        <th>접수일</th>
                        <td><span><?= date('Y-m-d', strtotime($row->reg_date)) ?></span>&nbsp;<span><?= date('H:i:s', strtotime($row->reg_date)) ?></span></td>
                    </tr>
                </table>
            </div>
            <p class="link_btn"><a href="https://lms.letsgoreading.com/agent/db_search" title="관리자페이지로이동">관리자페이지</a></p>
        </div>
    </body>
</html>