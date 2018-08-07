<?php
    include('header.html');
    // session_start();
    // if (isset($_SESSION['email']) || isset($_SESSION['user'])) {
    //     session_destroy();
    //     header("Refresh:1;url=http://www.work.com");
    //     session_destroy();
    // }
 ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>注册登录</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <style type="text/css">
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
            margin-left: 48px;s
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
        main .both{
            margin-left: 220px;
            margin-right: 222px;
        }
        main .both::after{
            content: '';
            display: block;
            clear: both;
        }
        main .both .content {
            float: left;
            text-align: left;
            margin-top: 45px;
        }
        main .both .content ul {
            font-size: 14px;
            list-style: none;
            margin-bottom: 20px;
            list-style-position: inside;
        }
        main .both .content ul li {
            list-style: none;
            color: black;
        }
        main .both .content ul li:nth-child(2n+1) {
            font-weight: bold;
        }
        main .both .table {
            width: 298px;
            height: 273px;
            float: right;
            text-align: left;
            margin-top: 43px;
            border: 1px solid #cccccc;
        }
        main .both .table .enroll, main .both .table .submit {
            font-size: 15px;
            color: #8cc624;
            font-weight: bold;
            text-align: center;
            line-height: 30px;
            outline-style: none;
        }
        main .both .table .enroll {
            background: #eef7ee;
            width: 147.5px;
            border-left: none;
            border-top: none;
            border-right: 1px solid #cccccc;
            border-bottom: 1px solid #cccccc;
        }
        main .both .table .enroll_page {
            padding: 25px 15px 0px 15px;
            display: none;
        }
        main .both .table .submit {
            width: 147.5px;
            border: none;
            background: white;
        }
        main .both .table .submit_page {
            padding: 25px 15px 0px 15px;
        }
        main .both .table .submit_page p a {
            color: #8cc624;
        }
        main .both .table .sure,main .both .table .skip {
            text-align: center;
            line-height: 50px;
            display: inline-block;
            width: 128px;
            height: 50px;
            border: none;
            background: #77b900;
            font-size: 20px;
            color: white;
            font-weight: bold;
            margin-left: 139px;
            margin-top: -5px;
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
        <div class="both">
            <div class="content">
                <ul>
                    <li>引领AI新格局，不容错过的GTC&nbsp;&nbsp;CHINA&nbsp;&nbsp;2017</li>
                    <li>抢先注册，解读以AI为首的前沿科技</li>
                </ul>
                <ul>
                    <li>大咖云集的科技盛宴</li>
                    <li>NVIDA CEO 黄仁勋先生，与来自各自领域的AI和深度学习的专家一起，为您详解各项前沿科技。</li>
                </ul>
                <ul>
                    <li>技术热点一网打尽</li>
                    <li>深度学习、人工智能、自动驾驶、虚拟实现.......您感兴趣的热门技术都在这里。</li>
                </ul>
                <ul>
                    <li>新技术 VS 新思路</li>
                    <li>特邀初创业企业分享创新经验，当新型技术遇到新型商业模式，将会碰出怎样的火花？</li>
                </ul>
                <ul>
                    <li>全方位体验科技魅力</li>
                    <li>互动体验区、深度学习培训课程、DLI 动手实验室等精彩内容等您探索，带您全方位体验科技魅力。</li>
                </ul>
            </div>
            <div class="table">
                <button class="enroll">注册</button><button class="submit">登录</button>
                <form class="enroll_page">
                    <div class="form-group">
                        <label for="exampleInputEmail1" style="font-size: 15px;color: black;">请输入您的邮箱*</label>
                        <input type="email" class="form-control" id="email">
                    </div>
                    <div class="form-group" style="margin-top: -10px;">
                        <label for="exampleInputPassword1" style="font-size: 15px;color: black;">邀请码*</label>
                        <input type="text" class="form-control" id="num" maxlength="6">
                        <p>如果您没有参会邀请码，请点击注册</p>
                    </div>
                    <input type="submit" class="skip" value="注&nbsp;册">
                </form>
                <form class="submit_page">
                    <div class="form-group">
                        <label for="exampleInputEmail1" style="font-size: 15px;color: black;">用户名*</label>
                        <input type="email" class="form-control" id="user">
                    </div>
                    <div class="form-group" style="margin-top: -10px;">
                        <label for="exampleInputPassword1" style="font-size: 15px;color: black;">密码*</label>
                        <input type="password" class="form-control" id="pass">
                        <p>
                            <a href="get.php">忘记密码了？</a>
                        </p>
                    </div>
                    <input type="submit" value="登&nbsp;录" class="sure">
                </form>
            </div>
        </div>
    </main>
</body>
<script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
<script type="text/javascript">
    $('#email').blur(function() {
        var v = $(this).val();
        var reg = /^\w+@\w+\.\w{2,5}$/;
        if (v.length > 0) {
            if (!reg.test(v)) {
                $(this).val('请输入正确的邮箱地址');
            }
        }
    });
    $('#num').blur(function() {
        var v = $(this).val();
        var reg = /^[0-9]{6}$/;
        if (v.length > 0) {
            if (!reg.test(v)) {
                 $(this).val('请输入六位数字的邀请码');
            }
        }
    });
    $('#user').blur(function() {
        var v = $(this).val();
        var reg = /^\w{6,}$/;
        var re = /^\w+@\w+\.\w{2,5}$/;
        if (v.length > 0) {
            if (!reg.test(v) && !re.test(v)) {
                $(this).val('请输入正确的用户名');
            }
        }
    });
    $('#pass').blur(function() {
        var v = $(this).val();
        var reg = /^[0-9a-zA-Z]{6,}$/;
        if (v.length > 0) {
            if (!reg.test(v)) {
                $(this).val('');
            }
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
    $('.skip').click(function(){
        var email = $('#email').val();
        var num = $('#num').val();
         $.ajax({
            url:'email_info.php',
            type:'post',
            data:'email='+email+'&num='+num+'&_='+new Date().getTime(),
            success:function(data){
                if (data == 1) {
                   window.location.href="person.php";
                }else if (data == 2) {
                    alert('邀请码不对');
                }else if (data == 3) {
                    alert('用户名已存在');
                }
                // alert(data);
            },
        });
    });
    $('.sure').click(function(){
        var user = $('#user').val();
        var pass = $('#pass').val();
        $.ajax({
            url: 'user_info.php',
            type: 'post',
            data: 'user='+user+'&pass='+pass+'&_='+new Date().getTime(),
            success:function(data){
                if (data == 1) {
                    // $('.table').css('display', 'none');
                    window.location.href="select.php";
                }else if (data == 2) {
                    alert('用户名或密码不正确');
                    window.location.reload();
                }else if (data == 3) {
                    alert('你还未注册，请先注册');
                    // window.location.reload();
                    $('button:first').css('background', 'white');
                    $('button:last').css('background', '#eef7ee');
                    $('button:last').css('border-bottom', '1px solid #cccccc');
                    $('button:last').css('border-left', '1px solid #cccccc');
                    $('button:first').css('border', 'none');
                    $('form:first').css('display', 'block');
                    $('form:last').css('display', 'none');
                }else if (data == 4) {
                    alert('你已经登陆过');
                    window.location.href="redirect.php";
                }
                // alert(data);
            },
        });
    });
</script>

</html>
<?php
    include('./footer.html');
 ?>