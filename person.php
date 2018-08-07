<?php
    session_start();
    include('header.html');
    if (!isset($_SESSION['email']) || !isset($_SESSION['pass'])) {
        header("Refresh:1;url=http://www.work.com");
    }
 ?>
    <!DOCTYPE html>
    <html>

    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>个人信息</title>
        <link rel="stylesheet" href="css/bootstrap.css">
        <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
        <script type="text/javascript" src="js/city.js"></script>
        <style type="text/css">
            main {
                width: 1444px;
                height: 1005px;
                background: white;
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
                margin-bottom: 40px;
            }
            main .nav {
                width: 1050px;
                height: 41px;
                margin-left: 195px;
                background: url('./img/person_nav.png');
            }
            main .form_head {
                margin-left: 278px;
                margin-top: 32px;
                width: 888px;
                font-size: 15px;
                font-weight: bold;
                text-align: left;
                border-bottom: 1px solid gray;
            }
            main .form_head span {
                color: #8cc624;
                font-size: 15px;
                font-weight: bold;
            }
            main .form_body {
                text-align: left;
                margin-top: 30px;
                margin-bottom: 50px;
            }
            .clear::after {
                content: '';
                display: block;
                clear: both;
            }
            main .form_left {
                width: 407px;
                margin-left: 275px;
                margin-top: 30px;
                float: left;
            }
            main .form_right {
                width: 407px;
                float: right;
                margin-right: 280px;
                margin-top: 30px;
            }
            main .form_left span, main .form_right span {
                display: inline-block;
                color: black;
                word-spacing: -3px;
                font-size: 14px;
                font-weight: bold;
                margin-bottom: 2px;
            }
            main input, select {
                width: 404px;
                height: 35px;
                margin-bottom: 20px;
            }
            main .next {
                float: right;
                margin-right: 280px;
                margin-top: 30px;
                text-align: center;
                line-height: 48px;
                color: white;
                font-weight: bold;
                font-size: 20px;
                width: 126px;
                height: 48px;
                background: #77b900;
                border: none;
            }
            main .form_footer a:hover {
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
            <div class="nav"></div>
            <div class="form_head">
                <span>创建登录账户</span>（请创建您自己的用户名与密码，便于登录和进行账户修改）
            </div>
            <form class="form_body">
                <span style="font-weight: bold;margin-left: 350px;">用户名*</span>
                <input type="text" style="width: 230px;height: 30px;" id="user">
                <span>长度不得小于6个字符，您可以使用电子邮件作为地址作为用户名</span>
                <p></p>
                <span style="font-weight: bold;margin-left: 365px;">密码*</span>
                <input type="password" style="width: 230px;height: 30px;" id="pass_one">
                <span>密码长度不得小于6个字符</span>
                <p></p>
                <span style="font-weight: bold;margin-left: 305px;">再次输入密码*</span>
                <input type="password" style="width: 230px;height: 30px;" id="pass_two">
                <span>密码长度不得小于6个字符</span>
                <div class="form_head">
                    <span>请输入您的个人信息</span>
                </div>
                <div class="clear">
                    <div class="form_left">
                        <span>姓名*</span>
                        <br>
                        <input type="text" id="name">
                        <span>年龄*</span>
                        <br>
                        <select name="age" id="age">
                            <option value="25">25</option>
                            <option value="26">26</option>
                            <option value="27">27</option>
                            <option value="28">28</option>
                            <option value="29">29</option>
                            <option value="30">30</option>
                            <option value="31">31</option>
                            <option value="32">32</option>
                            <option value="33">33</option>
                        </select>
                        <span>手机号*</span>
                        <br>
                        <input type="text" id="tel" maxlength="11">
                        <span>省份*</span>
                        <br>
                        <select name="pro" id="pro" onchange="change();">
                            <option value="1">北京</option>
                            <option value="2">广东</option>
                            <option value="3">山东</option>
                            <option value="4">江苏</option>
                            <option value="5">河南</option>
                            <option value="6">上海</option>
                            <option value="7">河北</option>
                            <option value="8">浙江</option>
                            <option value="9">香港</option>
                            <option value="10">陕西</option>
                            <option value="11">湖南</option>
                            <option value="12">重庆</option>
                            <option value="13">福建</option>
                            <option value="14">天津</option>
                            <option value="15">云南</option>
                            <option value="16">四川</option>
                            <option value="17">广西</option>
                            <option value="18">安徽</option>
                            <option value="19">海南</option>
                            <option value="20">江西</option>
                            <option value="21">湖北</option>
                            <option value="22">山西</option>
                            <option value="23">辽宁</option>
                            <option value="24">台湾</option>
                            <option value="25">黑龙江</option>
                            <option value="26">内蒙</option>
                            <option value="27">澳门</option>
                            <option value="28">贵州</option>
                            <option value="29">甘肃</option>
                            <option value="30">青海</option>
                            <option value="31">新疆</option>
                            <option value="32">西藏区</option>
                            <option value="33">吉林</option>
                            <option value="34">宁夏</option>
                        </select>
                        <span>公司/单位*</span>
                        <br>
                        <input type="text" id="company">
                    </div>
                    <div class="form_right">
                        <span>性别*</span>
                        <br>
                        <select id="sex">
                            <option value="男" selected="">男</option>
                            <option value="女">女</option>
                        </select>
                        <span>职务*</span>
                        <br>
                        <input type="text" id="job">
                        <span>邮箱*</span>
                        <br>
                        <input type="text" id="email">
                        <span>城市*</span>
                        <br>
                        <select name="city" id="city"></select>
                        <span>地址*</span>
                        <br>
                        <input type="text" id="address">
                    </div>
                    <input type="submit" value="保存并下一步" class="next">
                </div>
            </form>
        </main>
    </body>
    <script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
    <script type="text/javascript">
        $("#user").blur(function() {
            var v = $(this).val();
            if (v.length > 5) {
                $.ajax({
                    url: 'person_nameinfo.php',
                    type: 'post',
                    data: 'user='+v,
                    success:function(data){
                        if (data == 1) {
                            $("#user").val('用户名已存在');
                        }
                        // alert(data);
                    },
                });
            }else{
                $(this).val('');
            }
        });
        $("#pass_one").blur(function() {
            var v = $(this).val();
            if (v.length < 6 & v.length > 0) {
                $(this).val('');
            }
        });
        $("#pass_two").blur(function() {
            var v = $('#pass_two').val();
            var s = $('#pass_one').val();
            if (v !== s) {
                $(this).val('');
            }
        });
        $("#name").blur(function() {
            var v = $(this).val();
            var reg = /^[\u4e00-\u9fa5_a-zA-Z]+$/;
            if (v.length > 0) {
                if (!reg.test(v)) {
                    $(this).val('');
                }
            }
        });
        $("#tel").blur(function() {
            var v = $(this).val();
            var reg = /^\d{11}$/;
            if (v.length > 0) {
                if (!reg.test(v)) {
                    $(this).val('');
                }
            }
        });
        $("#company").blur(function() {
            var v = $(this).val();
            var reg = /^[\u4e00-\u9fa5_a-zA-Z]+$/;
            if (v.length > 0) {
                if (!reg.test(v)) {
                    $(this).val('');
                }
            }
        });
        $("#job").blur(function() {
            var v = $(this).val();
            var reg = /^[\u4e00-\u9fa5_a-zA-Z]+$/;
            if (v.length > 0) {
                if (!reg.test(v)) {
                    $(this).val('');
                }
            }
        });
        $('#email').blur(function() {
        var v = $(this).val();
        var reg = /^\w+@\w+\.\w{2,5}$/;
            if (v.length > 0) {
                if (!reg.test(v)) {
                    $(this).val('');
                }
            }
        });
        $('.next').click(function() {
            var user = $('#user').val();
            var pass = $('#pass_two').val();
            var name = $('#name').val();
            var sex = $('#sex option:selected').val();
            var age = $('#age option:selected').val();
            var job = $('#job').val();
            var tel = $('#tel').val();
            var pro = $('#pro option:selected').text();
            var city = $("#city option:selected").text();;
            var company = $('#company').val();
            var address = $('#address').val();
            var email = $('#email').val();
            $.ajax({
                url: 'person_info.php',
                type: 'post',
                data: 'user=' + user + '&pass=' + pass + '&name=' + name +'&job=' + job + '&tel=' + tel +'&company=' + company + '&address=' + address + '&email=' + email+ '&pro=' + pro + '&age=' + age + '&city=' + city+ '&sex=' + sex+'&_='+new Date().getTime(),
                success: function(data) {
                    if (data == 1) {
                        window.location.href="question.php";
                    }else if (data == 2){
                        alert('请全部填写');
                        window.location.reload();
                    }
                    // alert(data);
                },
            });
            // alert(121);
        });
    </script>

    </html>
 <?php
    include('footer.html');
 ?>