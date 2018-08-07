<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>找回密码</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            color: gray;
            font-family: 微软雅黑, 宋体, 仿宋, Arial;
            border: 0;
            text-decoration: none;
            list-style: none;
            list-style-position: inside;
        }
        header {
            width: 1444px;
            height: 119px;
            background: url('./img/header.png') center center no-repeat;
        }
        main {
            width: 1444px;
            height: 490px;
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
            margin-top: 25px;
        }
        main .pass {
            width: 800px;
            height: 21px;
            margin-top: 45px;
            margin-left: 320px;
            border-bottom: 1px solid gray;
        }
        main .pass p {
            font-size: 15px;
            font-weight: bold;
            color: #8cc624;
        }
        main .email_form {
            margin-left: 530px;
            margin-top: 30px;
        }
        main .post {
            width: 128px;
            height: 50px;
            font-size: 20px;
            color: white;
            margin-left: 120px;
            margin-top: 20px;
            font-weight: bold;
            background: #77b900;
        }
    </style>
</head>

<body>
    <header></header>
    <main>
        <div class="head">
            <span class="bj">BEIJING</span>
            <span class="month">SEP.25-27,2017</span>
        </div>
        <div class="title">
            <p>GTC&nbsp;&nbsp;CHINA&nbsp;&nbsp;2017&nbsp;&nbsp;(GPU&nbsp;&nbsp;技术大会)</p>
        </div>
        <div class="pass">
            <p>找回密码</p>
        </div>
        <form class="form-inline email_form" action="" enctype="multipart/form-data" method="post">
            <div class="form-group">
                <label for="exampleInputName2">
                    <span style="font-size: 15px;">请输入您的邮箱
                        <span style="color: red;">*</span>
                    </span>
                </label>
                <input type="text" class="form-control" id="exampleInputName2">
                <span id="inp"></span>
            </div>
            <br>
            <input type="submit" value="提&nbsp;交" class="post">
        </form>
    </main>
</body>
<script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
<script type="text/javascript">
    $('input').blur(function(){
        var v = $(this).val();
        var reg = /^\w+@\w+\.\w{2,5}$/;
        if (!reg.test(v)) {
            $('#inp').text('×').css('color','red');
            return false;
        }else {
            $('#inp').text('√').css('color','green');
            return true;
        }
    });
</script>
</html>
<?php
    include('footer.html');
 ?>