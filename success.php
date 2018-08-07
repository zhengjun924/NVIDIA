<?php
    session_start();
    include('header.html');
    if (isset($_SESSION['email']) || isset($_SESSION['user'])) {
        header("Refresh:5;url=http://www.work.com");
        session_unset();
        session_destroy();
    }else if (!isset($_SESSION['email']) && !isset($_SESSION['user'])) {
       header("Refresh:1;url=http://www.work.com");
    }
 ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>缴费成功</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <style type="text/css">
        main {
            text-align: left;
            width: 1444px;
            height: 670px;
            background-color: #ffffff;
            padding-top: 2px;
        }
        main .head {
            width: 200px;
            height: 35px;
            background: url('./img/sign.png') no-repeat;
            margin-left: 145px;
        }
        main .head .bj {
            margin-left: 48px;
            margin-right: 10px;
            color: #999999;
        }
        main .head .month {
            color: #8cc624;
        }
        main .head .bj, main .head .month {
            font-size: 10px;
            display: inline-block;
            margin-top: 11px;
        }
        main .title {
            text-align: center;
        }
        main .title p {
            font-size: 30px;
            color: #666666;
            margin-top: 20px;
        }
        main .form_head {
            margin-left: 318px;
            margin-top: 53px;
            width: 808px;
            font-size: 15px;
            font-weight: bold;
            border-bottom: 1px solid gray;
        }
        main .content{
            margin-top: 75px;
            margin-left: 318px;
        }
        main .content ul{
            font-size:15px;
            margin-bottom: 20px;
        }
        main .content ul:nth-child(2){
            margin-bottom: 60px;
        }
        main .content ul a{
            color: #8cc624;
        }
        main .content ul a:hover{
            text-decoration: none;
        }
    </style>
</head>

<body>
    <main>
        <div class="head">
            <span class="bj">BEIJING</span>
            <span class="month">SEP.25-27,2017</span>
        </div>
        <div class="title">
            <p>GTC&nbsp;&nbsp;CHINA&nbsp;&nbsp;2017&nbsp;&nbsp;(GPU&nbsp;&nbsp;技术大会)</p>
        </div>
        <div class="form_head"></div>
        <div class="content">
            <ul>
                <li>感谢您注册GTC&nbsp;CHINA&nbsp;2017&nbsp;(GPU&nbsp;技术大会)， 并成功缴费</li>
            </ul>
            <ul>
                <li>您的注册确认码为：801539</li>
                <li>同时您所注册的邮件&nbsp;reer543543@12.fd&nbsp;将收到注册确认信。</li>
            </ul>
            <ul>
                <li>了解更多</li>
                <li>访问<a href="">大会官方网站</a></li>
                <li>关注NVIDIA官方微信微博，获取更多精彩资讯和活动信息。</li>
            </ul>
            <ul>
                <li><img src="img/touch.png" alt=""></li>
            </ul>
            <ul>
                <li>祝您参会顺利，GTC&nbsp;CHINA&nbsp;2017&nbsp;(GPU&nbsp;技术大会)在北京期待与您相聚！</li>
            </ul>
             <ul>
                <li>GTC&nbsp;CHINA&nbsp;2017&nbsp;</li>
            </ul>
        </div>
    </main>
</body>
<script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
<script type="text/javascript">
    $('#email').click(function() {
        var v = $('#email').val();
        var reg = /^\w+@\w+\.\w{2,5}$/;
        if (v == '') {
            alert('请输入邮箱地址');
        } else if (!reg.test(v)) {
            alert('请输入正确的邮箱地址');
        }
    });
    $('#string').click(function() {
        var v = $('#string').val();
        var reg = /^[0-9a-zA-Z]{5}$/;
        if (v == '') {
            alert('请输入邀请码');
        } else if (!reg.test(v)) {
            alert('请输入正确的邀请码');
        }
    });
    $('#user').click(function() {
        var v = $('#user').val();
        var reg = /^\w+@\w+\.\w{2,5}$/;
        if (v == '') {
            alert('请输入用户名');
        } else if (!reg.test(v)) {
            alert('请输入正确的用户名');
        }
    });
    $('#password').click(function() {
        var v = $('#password').val();
        var reg = /^[0-9a-zA-Z]{5}$/;
        if (v == '') {
            alert('请输入密码');
        }
    });
    $('button:first').click(function() {
        $(this).css('background', 'white');
        $('button:last').css('background', '#eef7ee');
        $('button:last').css('border-bottom', '1px solid #cccccc');
        $('button:last').css('border-left', '1px solid #cccccc');
        $(this).css('border', 'none');
        $('form:first').css('display', 'block');
        $('form:last').css('display', 'none');

    });
    $('button:last').click(function() {
        $(this).css('background', 'white');
        $('button:first').css('background', '#eef7ee');
        $('button:first').css('border-bottom', '1px solid #cccccc');
        $('button:first').css('border-right', '1px solid #cccccc');
        $(this).css('border', 'none');
        $('form:first').css('display', 'none');
        $('form:last').css('display', 'block');
    });
</script>

</html>
<?php
    include('./footer.html');
 ?>