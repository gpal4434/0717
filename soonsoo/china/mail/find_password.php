<!doctype>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no"/>

        <title>[렛츠고 차이나]임시 비밀번호 안내</title>

        <?php
        if(isset($_SERVER['HTTPS'])) {
            $protocol = 'https://';
        } else {
            $protocol = 'http://';
        }
        ?>
        <style>
            @import url('https://cdn.rawgit.com/innks/NanumSquareRound/master/nanumsquareround.min.css');

            /*초기값*/
            *{ font-family: 'NanumSquareRound', sans-serif; }
            body,div,dl,dt,dd,ul,ol,li,h1,h2,h3,h4,h5,
            h6,pre,code,form,fieldset,legend,input,
            textarea,p,blockquote,th,td{margin:0;padding:0;}
            img{border:none;vertical-align:top;}
            fieldset{border:none;}
            li{list-style:none;}
            a{text-decoration:none;}
            input,select,button,select{vertical-align:middle;}
            h1,h2,h3,h4,h5,h6{font-size:100%;font-weight:normal;}
            address,caption,cite,code,
            dfn,em,strong,th,var{font-style:normal;font-weight:normal;}
            button {background-color:rgba(0,0,0,0);border:none; outline:0; padding:0; cursor:pointer;}
            button:focus{padding:0}
            button:active{padding:0}
            table, tr, th, td{border-collapse:collapse;}
            input[type="button"]{border:none; cursor:pointer}
            input[type="text"]{border:1px solid #dedede; color:#444; padding:7px 0 7px 10px}


            input::-webkit-input-placeholder { /* Chrome/Opera/Safari */ color:#bfbfbf !important;}
            input::-moz-placeholder { /* Firefox 19+ */color:#bfbfbf !important;}
            input:-ms-input-placeholder { /* IE 10+ */color:#bfbfbf !important;}
            input:-moz-placeholder { /* Firefox 18- */color:#bfbfbf !important;}

            .bolder{font-weight:800}
            .bold{font-weight:700}
            .light{font-weight:300}
            .normal{font-weight:400}

            body {

           width:700px; height:600px; margin:0;

            }

        </style>
    </head>
     <body>
        <div id="tem_wrap" style="width:700px; height:600px; margin:0;">
            <img src="<?=$protocol.$_SERVER['SERVER_NAME']?>/images/email_bg.png" alt="비밀번호 찾기 배경" style="position:relative"/>
            <div style="width:737px; height:415px;">
                <div style="width:100%; padding:70px 0 50px;background:#f4f4f4;text-align:center;">
                    <!-- <div class="sear_pwd" style="margin:0 30px 0 40px;display:inline-block; vertical-align:top"><img src="<?=$protocol.$_SERVER['SERVER_NAME']?>/images/lets_china/btn/pwd_sear.png" alt="아이디,비밀번호 찾기"/></div> -->
                    <div class="info_pwd" style="display:inline-block; vertical-align:top">
                        <h3 style="font-size:18px; color:#888; padding-bottom:13px;margin:0">안녕하세요. <span style="color:#ef5856;font-weight:600;">렛츠고 차이나</span> 입니다~</h3>
                        <p style="font-size:18px; color:#888; padding-bottom:19px; line-height:1.5;">
                                회원님의 임시 비밀번호가 발급되었습니다.<br>
                                로그인 후 반드시 사용하실 비밀번호로 변경해주세요.
                        </p>
                        <h1 class="bold" style="font-size:23px; color:#222;font-weight:700">임시비밀번호 : &nbsp;<span style="font-size:31px; color:#222"><?=$temp_pw?></span></h1>
                    </div>
                    <a href="<?=$protocol.$_SERVER['SERVER_NAME']?>" target="_blank" style="display:block;margin-top:50px;"><button type="button" style="border:none;width:400px;line-height:3;font-size:20px;font-weight: 600;background:#ef5856;color:#fff;height:auto;">로그인</button></a>
                </div>
                <!-- <div class="go_login" style="text-align:center; padding-top:30px">
                  <a href="<?=$protocol.$_SERVER['SERVER_NAME']?>" target="_blank"><button type="button" style="border:none"><span><img src="<?=$protocol.$_SERVER['SERVER_NAME']?>/images/lets_china/btn/go_login.png" alt="로그인 하기"/></span></button></a>
                </div> -->
            </div>
        </div>
     </body>
</html>
