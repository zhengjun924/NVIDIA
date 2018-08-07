<?php
    // session_start();
    include('header.html');
    // if (!isset($_SESSION['email'])) {
    //     header("Refresh:2;url=http://www.work.com");
    // }
 ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>员工注册</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <style type="text/css">
        main {
            width: 1444px;
            height: 555px;
            background: white;
            text-align: left;
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
        main .form_head {
            margin-left: 278px;
            margin-top: 32px;
            width: 888px;
            font-size: 15px;
            font-weight: bold;
            border-bottom: 1px solid gray;
        }
        main .form_head span {
            color: #8cc624;
        }
        main .form_body {
            margin-top: 30px;
            margin-bottom: 50px;
        }
        main .form_left{
            width: 407px;
            margin-left: 275px;
            margin-top: 30px;
            float: left;
        }
        main .form_right{
            width: 407px;
            float: right;
            margin-right: 280px;
            margin-top: 30px;
        }
        main .form_left span,main .form_right span{
            display: inline-block;
            color: black;
            word-spacing: -3px;
            font-size: 14px;
            font-weight: bold;
            margin-bottom: 2px;
        }
        main input,select{
            width:404px;
            height: 35px;
            margin-bottom: 20px;
        }
        main .next{
            float: right;
            margin-right: 280px;
            margin-top: 30px;
            text-align: center;
            line-height: 48px;
            color: white;
            font-weight: bold;
            font-size: 16px;
            word-spacing: -2px;
            width: 126px;
            height: 48px;
            background: #77b900;
            border: none;
        }
        main .form_footer a:hover{
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
        <div class="form_head">
            <span>NVIDIA 员工注册 / NVIDIA Staff Registration</span>
        </div>
        <form>
            <div class="form_left">
                <span>姓氏 /  Surname*</span>
                <br>
                <input type="text" id="surname">
                <span>手机 / Mobile*</span>
                <span>(Country Code - Mobile Nmuber)</span>
                <br>
                + <input type="text" id="num" value="0086" style="width: 50px;height: 35px;"> - <input type="text" id="tel" style="width: 250px;height: 35px;">
                <br>
                <span>部门 / Department*</span>
                <br>
                <input type="text" id="depart">
            </div>
            <div class="form_right">
                <span>名字 / First Name*</span>
                <br>
                <input type="text" id="firstname">
                <span>邮箱 / Email*</span>
                <br>
                <input type="text" id="email">
                <span>现场工作职责 / Onsite Duty*</span>
                <br>
                <select id="duty">
                    <option value="1" selected="">请选择/Please Select</option>
                    <option value="2">销售顾问</option>
                    <option value="4">场地维护</option>
                    <option value="5">安保</option>
                </select>
            </div>
                <input type="submit" value="提交&nbsp;/&nbsp;Submit" class="next">
        </form>
    </main>
</body>
<script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
<script type="text/javascript">
    $("#surname").blur(function() {
        var v = $(this).val();
        var reg = /^[\u4e00-\u9fa5_a-zA-Z]+$/;
        if (v.length > 0) {
            if (!reg.test(v)) {
                $(this).val('');
            }
        }
    });
    $("#firstname").blur(function() {
        var v = $(this).val();
        var reg =/^[\u4e00-\u9fa5_a-zA-Z]+$/;
        if (v.length > 0) {
            if (!reg.test(v)) {
                $(this).val('');
            }
        }
    });
    $("#num").blur(function() {
        var v = $(this).val();
        var reg = /^\d$/;
        if (v.length > 0) {
            if (!reg.test(v)) {
                $(this).val('');
            }
        }
    });
    $("#tel").blur(function() {
        var v = $(this).val();
        var reg = /^\d{4,11}$/;
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
    $('#depart').blur(function() {
        var v = $(this).val();
        var reg = /^[\u4e00-\u9fa5_a-zA-Z]+$/;
        if (v.length > 0) {
            if (!reg.test(v)) {
                $(this).val('');
            }
        }
    });
    $('.next').click(function(){
        var surname = $('#surname').val();
        var firstname = $('#firstname').val();
        var num = $('#num').val();
        var tel = $('#tel').val();
        var email = $('#email').val();
        var depart = $('#depart').val();
        var duty = $('#duty option:selected').text();
        $.ajax({
            url: 'work_info.php',
            type: 'POST',
            data: 'surname='+surname+'&firstname='+firstname+'&num='+num+'&tel='+tel+'&email='+email+'&depart='+depart+'&duty='+duty,
            success: function(data){
                if (data == 1) {
                    alert("注册成功");
                    window.open('index.php','_self');
                }else if (data == 2) {
                    window.open('worker.php','_self');
                    // alert(515);
                }
                // alert(data);
            },
        });
    });
</script>
</html>
<?php
    include('footer.html');
 ?>