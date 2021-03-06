<?php
/**
 *
 * author Cary
 * contact QQ : 373889161($S$-memory)
 *
 */
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>后台登录</title>
    <meta name="author" content="DeathGhost" />
    <?=Html::cssFile('@web/css/site.css')?>
    <style>
        body{height:100%;background:#000;overflow:hidden;}
        canvas{z-index:-1;position:absolute;}
    </style>
    <?=Html::jsFile('@web/js/jquery.js')?>
    <?=Html::jsFile('@web/js/verificationNumbers.js')?>
    <?=Html::jsFile('@web/js/Particleground.js')?>
    <script>
        $(document).ready(function() {
            //粒子背景特效
            $('body').particleground({
                dotColor: '#5cbdaa',
                lineColor: '#5cbdaa'
            });
        });
    </script>
</head>
<body>
<?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>
<dl class="admin_login">
    <dt>
        <strong>站点后台管理系统</strong>
        <em>Management System</em>
    </dt>
    <dd class="user_icon">
        <?= Html::textInput('Admin[username]','',['class'=>'login_txtbx','placeholder'=>'账号']) ?>
    </dd>
    <dd class="pwd_icon">
        <?= Html::passwordInput('Admin[password]','',['class'=>'login_txtbx','placeholder'=>'密码']) ?>
    </dd>
    <!--<dd class="val_icon">
        <div class="checkcode">
            <input type="text" id="J_codetext" placeholder="验证码" maxlength="4" class="login_txtbx">
            <canvas class="J_codeimg" id="myCanvas" onclick="createCode()">对不起，您的浏览器不支持canvas，请下载最新版浏览器!</canvas>
        </div>
        <input type="button" value="验证码核验" class="ver_btn" onClick="validate();">
    </dd>-->
    <dd>
        <?= Html::submitButton('立即登陆', ['class' => 'submit_btn', 'name' => 'login-button']) ?>
    </dd>
    <dd>
        <p>© 2015-2016 Cary 版权所有</p>
        <p>粤ICP备15096384号-2</p>
    </dd>
</dl>
<?php ActiveForm::end(); ?>
</body>
</html>