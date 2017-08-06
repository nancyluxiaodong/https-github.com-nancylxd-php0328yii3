<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
    <title>用户注册</title>
    <link rel="stylesheet" href="<?=\Yii::getAlias('@web')?>/style/base.css" type="text/css">
    <link rel="stylesheet" href="<?=\Yii::getAlias('@web')?>/style/global.css" type="text/css">
    <link rel="stylesheet" href="<?=\Yii::getAlias('@web')?>/style/header.css" type="text/css">
    <link rel="stylesheet" href="<?=\Yii::getAlias('@web')?>/style/login.css" type="text/css">
    <link rel="stylesheet" href="<?=\Yii::getAlias('@web')?>/style/footer.css" type="text/css">
</head>
<body>
<!-- 顶部导航 start -->
<div class="topnav">
    <div class="topnav_bd w990 bc">
        <div class="topnav_left">

        </div>
        <div class="topnav_right fr">
            <ul>
                <li>您好，欢迎来到京西！[<a href="login.html">登录</a>] [<a href="register.html">免费注册</a>] </li>
                <li class="line">|</li>
                <li>我的订单</li>
                <li class="line">|</li>
                <li>客户服务</li>

            </ul>
        </div>
    </div>
</div>
<!-- 顶部导航 end -->

<div style="clear:both;"></div>

<!-- 页面头部 start -->
<div class="header w990 bc mt15">
    <div class="logo w990">
        <h2 class="fl"><a href="index.html"><img src="<?=\Yii::getAlias('@web')?>/images/logo.png" alt="京西商城"></a></h2>
    </div>
</div>
<!-- 页面头部 end -->

<!-- 登录主体部分start -->
<div class="login w990 bc mt10 regist">
    <div class="login_hd">
        <h2>用户注册</h2>
        <b></b>
    </div>
    <div class="login_bd">
        <div class="login_form fl">
            <!--<form action="" method="post">-->
            <?php $form=\yii\bootstrap\ActiveForm::begin(['id'=>'login_form']);?>
                <ul>
                    <li id="li_username">
                        <!--<label for="">用户名：</label>
                        <input type="text" class="txt" name="Member[username]" ="3-20位字符，可由中文、字母、数字和下划线组成"/>-->
                        <?= $form->field($model,'username')->textInput(['class'=>'txt','placeholder' => '3-20位字符，可由中文、字母、数字和下划线组成'])?>
                        <p></p>
                    </li>
                    <li id="li_password">
                       <!-- <label for="">密码：</label>
                        <input type="password" class="txt" name="Member[password]" placeholder="6-20位字符，可使用字母、数字和符号的组合"/>-->
                        <?= $form->field($model,'password')->passwordInput(['class'=>'txt','placeholder' => '6-20位字符，可使用字母、数字和符号的组合'])?>
                        <p></p>
                    </li>
                    <li id="li_rePassword">
                        <?= $form->field($model,'rePassword')->passwordInput(['class'=>'txt','placeholder' => '请再次输入密码'])?>
                        <!--<label for="">确认密码：</label>
                        <input type="password" class="txt" name="Member[password]" placeholder=""/>-->
                        <p></p>
                    </li>
                    <li id="li_email">
                        <?= $form->field($model,'email')->textInput(['class'=>'txt','placeholder' => '邮箱必须合法'])?>
                        <!--<label for="">邮箱：</label>
                        <input type="text" class="txt" name="Member[email]" placeholder=""/>-->
                        <p></p>
                    </li>
                    <li id="li_tel">
<<<<<<< HEAD
                        <?= $form->field($model,'tel')->textInput(['class'=>'txt','placeholder' => '请输入正确手机号码','id'=>'tel'])?>
=======
<<<<<<< HEAD
                        <?= $form->field($model,'tel')->textInput(['class'=>'txt','placeholder' => '请输入正确手机号码','id'=>'tel'])?>
=======
                        <?= $form->field($model,'tel')->textInput(['class'=>'txt','placeholder' => ''])?>
>>>>>>> c33ae3bb2ac604eaaa977fac84451893a7c6f218
>>>>>>> add72ce4f6b209301c688b2cca61928ab9b8fa35
                        <!--<label for="">手机号码：</label>
                        <input type="text" class="txt" value="" name="Member[tel]" id="tel" placeholder=""/>-->
                    </li>
                    <li id="li_captcha">
                        <!-- //$form->field($model,'captcha')->textInput(['class'=>'txt','placeholder' => '请输入短信验证码'])-->
<<<<<<< HEAD
<!--                         <label for="">验证码：</label>-->
                        <input type="button" onclick="bindPhoneNum(this)" id="get_captcha" value="获取验证码" style="height: 25px;padding:3px 8px;margin: 0px auto 10px 60px;ma"/>
                        <?php echo $form->field($model,'tel_code')->textInput(['class'=>'txt','placeholder'=>'请输入短信验证码','disabled'=>"disabled", 'id'=>"captcha"]);?>
=======
<<<<<<< HEAD
<!--                         <label for="">验证码：</label>-->
                        <input type="button" onclick="bindPhoneNum(this)" id="get_captcha" value="获取验证码" style="height: 25px;padding:3px 8px;margin: 0px auto 10px 60px;ma"/>
                        <?php echo $form->field($model,'tel_code')->textInput(['class'=>'txt','placeholder'=>'请输入短信验证码','disabled'=>"disabled", 'id'=>"captcha"]);?>
=======
                         <label for="">验证码：</label>
                        <input type="text" class="txt" value="" placeholder="" name="Member[captcha]" disabled="disabled" id="captcha"/>
                        <input type="button" onclick="bindPhoneNum(this)" id="get_captcha" value="获取验证码" style="height: 25px;padding:3px 8px"/>
>>>>>>> c33ae3bb2ac604eaaa977fac84451893a7c6f218
>>>>>>> add72ce4f6b209301c688b2cca61928ab9b8fa35

                    </li >
                    <li class="checkcode" id="li_code">
                        <?php //验证码
                        echo $form->field($model,'code')->widget(\yii\captcha\Captcha::className(),
                            ['captchaAction'=>'member/captcha','template'=> '<div class="row"><div class="col-lg-1">{image}{input}</div></div>'])->label('验证码：');?>
                       <!-- <label for="">验证码：</label>
                       <input type="text"  name="code" />
                        <img src="/images/checkcode1.jpg" alt="" />
                        <span>看不清？<a href="">换一张</a></span>-->
                    </li>

                    <li>
                        <label for="">&nbsp;</label>
<<<<<<< HEAD
                        <?php echo $form->field($model,'agree')->checkbox(['class'=>'chb','id'=>"agree" ]);?>
=======
<<<<<<< HEAD
                        <?php echo $form->field($model,'agree')->checkbox(['class'=>'chb','id'=>"agree" ]);?>
=======
                        <input type="checkbox" class="chb" checked="checked" /> 我已阅读并同意《用户注册协议》
>>>>>>> c33ae3bb2ac604eaaa977fac84451893a7c6f218
>>>>>>> add72ce4f6b209301c688b2cca61928ab9b8fa35
                    </li>
                    <li>
                        <!--<label for="">&nbsp;</label>
                        <input type="submit" value="" class="login_btn" />                  <input type="button" value="" >-->
                        <?= \yii\bootstrap\Html::submitButton('',['class'=>'login_btn'])?>
                    </li>
                </ul>
            <?php \yii\bootstrap\ActiveForm::end();?>
            <!--</form>-->


        </div>

        <div class="mobile fl">
            <h3>手机快速注册</h3>
            <p>中国大陆手机用户，编辑短信 “<strong>XX</strong>”发送到：</p>
            <p><strong>1069099988</strong></p>
        </div>

    </div>
</div>
<!-- 登录主体部分end -->

<div style="clear:both;"></div>
<!-- 底部版权 start -->
<div class="footer w1210 bc mt15">
    <p class="links">
        <a href="">关于我们</a> |
        <a href="">联系我们</a> |
        <a href="">人才招聘</a> |
        <a href="">商家入驻</a> |
        <a href="">千寻网</a> |
        <a href="">奢侈品网</a> |
        <a href="">广告服务</a> |
        <a href="">移动终端</a> |
        <a href="">友情链接</a> |
        <a href="">销售联盟</a> |
        <a href="">京西论坛</a>
    </p>
    <p class="copyright">
        © 2005-2013 京东网上商城 版权所有，并保留所有权利。  ICP备案证书号:京ICP证070359号
    </p>
    <p class="auth">
        <a href=""><img src="<?=\Yii::getAlias('@web')?>/images/xin.png" alt="" /></a>
        <a href=""><img src="<?=\Yii::getAlias('@web')?>/images/kexin.jpg" alt="" /></a>
        <a href=""><img src="<?=\Yii::getAlias('@web')?>/images/police.jpg" alt="" /></a>
        <a href=""><img src="<?=\Yii::getAlias('@web')?>/images/beian.gif" alt="" /></a>
    </p>
</div>
<!-- 底部版权 end -->
<script type="text/javascript" src="<?=\Yii::getAlias('@web')?>/js/jquery-1.8.3.min.js"></script>
<script type="text/javascript">
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> add72ce4f6b209301c688b2cca61928ab9b8fa35
    function bindPhoneNum(){
        //启用输入框
        $('#captcha').prop('disabled',false);
        //发送短信
        console.debug($('#tel').val());
        var url = 'send-sms';
        //var data =$('#tel').val() ;
        var data ={'tel':$('#tel').val()} ;
        $.post(url,data,function(response){
            console.debug(response);
        });
        var time=60;
        var interval = setInterval(function(){
            time--;
            if(time<=0){
                clearInterval(interval);
                var html = '获取验证码';
                $('#get_captcha').prop('disabled',false);
            } else{
                var html = time + ' 秒后再次获取';
                $('#get_captcha').prop('disabled',true);
            }

            $('#get_captcha').val(html);
        },1000);
    }
    $('#w1').remove();
    $('body div :first').removeAttr("class");
    $(function(){
        $('footer').empty();
        $('#yii-debug-toolbar').empty();
        $('.checkbox label').attr('style','width:auto');
        $('.login_btn').attr('disabled','disabled');
    });

    $("#agree").click(function(){
        var n=$("#agree").val();
        if(n==1){
            $("#agree").val(2);
            $('.login_btn').attr('disabled',false);
        }else if(n==2) {
            $("#agree").val(1);
            $('.login_btn').attr('disabled','disabled');
        }
        console.debug($("#agree").val());
    });
//    更换验证码
<<<<<<< HEAD
=======
=======
    function bindPhoneNum() {
        //启用输入框
        $('#captcha').prop('disabled', false);

        var time = 30;
        var interval = setInterval(function () {
            time--;
            if (time <= 0) {
                clearInterval(interval);
                var html = '获取验证码';
                $('#get_captcha').prop('disabled', false);
            } else {
                var html = time + ' 秒后再次获取';
                $('#get_captcha').prop('disabled', true);
            }

            $('#get_captcha').val(html);
        }, 1000);
    }
    //更换验证码
>>>>>>> c33ae3bb2ac604eaaa977fac84451893a7c6f218
>>>>>>> add72ce4f6b209301c688b2cca61928ab9b8fa35
//$("#member-code-image").click(function(){
//$.getJSON('/site/captcha?refresh=1',function(json){
//$("#member-code-image").attr('src',json.url);
//});
//});

</script>
</body>
</html>