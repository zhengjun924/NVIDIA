<?php
    session_start();
    include('header.html');
    if (!isset($_SESSION['email']) && !isset($_SESSION['user'])) {
        header("Refresh:1;url=http://www.work.com");
    }
 ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>会议选择</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <style type="text/css">
        main {
            width: 1444px;
            height: 1235px;
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
        main .nav {
            width: 1050px;
            height: 41px;
            margin-left: 195px;
            background: url('./img/select_nav.png');
        }
        main .form_head {
            margin-left: 277px;
            margin-top: 32px;
            width: 885px;
            font-size: 15px;
            font-weight: bold;
            border-bottom: 1px solid gray;
        }
        main .form_head span {
            color: #8cc624;
            font-size: 15px;
            font-weight: bold;
        }
        main .center {
            width: 885px;
            height: 508px;
            margin-left: 277px;
        }
        main .center::after {
            content: '';
            display: block;
            clear: both;
        }
        main .center .specialty {
            text-align: center;
            float: right;
            width: 298px;
            height: 340px;
            margin-top: 30px;
        }
        main .center .top {
            text-align: center;
            width: 298px;
            height: 70px;
            background: #76b900;
        }
        main .center .top .ticket {
            display: inline-block;
            color: white;
            font-size: 25px;
            margin-top: 6px;
        }
        main .center .top .time {
            display: block;
            color: white;
            font-size: 12px;
            margin-top: 2px;
        }
        main .center .middle {
            width: 298px;
            height: 108px;
            text-align: center;
            background: #bcbcbc;
            padding-top: 10px;
        }
        main .center .middle .seat {
            display: block;
            color: white;
            font-size: 13px;
        }
        main .center .middle .day {
            display: block;
            color: white;
            font-size: 13px;
            margin-top: 5px;
        }
        main .center .middle .talk {
            display: block;
            color: white;
            font-size: 13px;
            margin-top: 5px;
        }
        main .center .middle .project {
            display: block;
            color: white;
            font-size: 14px;
            margin-top: 5px;
        }
        main .center .middle .eat {
            display: block;
            color: white;
            font-size: 14px;
            margin-top: 5px;
        }
        main .center .bottom {
            width: 298px;
            height: 162px;
            padding-top: 40px;
            background: #eaeaea;
        }
        main .center .bottom .price {
            display: inline-block;
            color: black;
            font-weight: bold;
            font-size: 56px;
        }
        main .center .form {
            width: 405px;
            float: left;
            margin-top: 20px;
        }
        main .center .form a {
            color: black;
        }
        main .center .form a:hover {
            text-decoration: none;
        }
        main .center .form .price_num, .company, .company_num, .address, .name, .tel {
            width: 405px;
            height: 35px;
            text-indent: 10px;
        }
        main .center .form .info {
            display: block;
            color: black;
            font-weight: bold;
            font-size: 15px;
            margin-top: 20px;
            margin-bottom: 5px;
        }
        main .center .form .user {
            display: inline-block;
            color: black;
            margin-right: 20px;
            margin-left: 15px;
        }
        main .btn {
            float: left;
            border: none;
            padding: 0 0;
            margin-top: 30px;
        }
        main .btn .return {
            display: inline-block;
            width: 125px;
            height: 50px;
            line-height: 50px;
            text-align: center;
            color: white;
            font-weight: bold;
            font-size: 20px;
            background: #77b900;
            margin-right: 23px;
        }
        main .btn .next {
            width: 125px;
            height: 50px;
            background: #77b900;
            font-size: 20px;
            color: white;
            font-weight: bold;
            border: none;
            outline: none;
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
            <span>会议选择</span>
        </div>
        <div class="center">
            <div class="specialty">
                <div class="top">
                    <span class="ticket">DLI深度学习动手实验课</span>
                    <span class="time">（9月25、27日DLI深度学习动手实验课）</span>
                </div>
                <div class="middle">
                    <span class="seat">包含：两日大会通票（主会场席位预留）</span>
                    <span class="eat">午餐（9月25、27日）</span>
                </div>
                <div class="bottom">
                    <span class="price">￥1,080</span>
                </div>
            </div>
            <div class="form">
                <form action="" method="post" enctype="multipart/form-data">
                    <span class="info">您的身份&nbsp;*</span>
                    <input type="radio" name="user" value="行业用户" checked="">
                    <span class="user">行业用户</span>
                    <input type="radio" name="user" value="院校师生">
                    <span class="user">院校师生</span>
                    <span class="info">使用优惠码&nbsp;∨</span>
                    <input type="text" class="price_num">
                    <span class="info">是否要提供发票</span>
                    <input type="checkbox" id="receipt" value="是">&nbsp;&nbsp;（仅提供增值税普通发票）
                    <span class="info">发票领取方式&nbsp;*</span>
                    <input type="radio" id="way" value="是">
                    <span class="user">会后快递</span>
                    <span class="info">发票抬头&nbsp;*</span>
                    <input type="text" class="company" value="">
                    <span>请确认发票抬头填写正确，已经开出，不可更改、退票</span>
                    <span class="info">纳税人识别号（税号）*</span>
                    <input type="text" class="company_num">
                    <a href="" title="">
                        <span>税号查询</span>
                    </a>
                    <span class="info">发票内容&nbsp;*</span>
                    <p>会议费</p>
                    <span class="info">发票快递地址&nbsp;*</span>
                    <input type="text" class="address" value="">
                    <span class="info">收件人姓名&nbsp;*</span>
                    <input type="text" class="name" value="">
                    <span class="info">收件人电话&nbsp;*</span>
                    <input type="text" class="tel" value="">
                    <hr>
                    <input type="checkbox" id="all">&nbsp;我已阅读以上内容并遵守相关规定
                    <div class="btn">
                        <a href="select.php" title="">
                        <span class="return">返&nbsp;&nbsp;回</span>
                    </a>
                    <input type="submit" value="付&nbsp;&nbsp;费" class="next">
                    </div>
                </form>
            </div>
        </div>
    </main>
</body>
<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
<script type="text/javascript">
    $('.price_num').blur(function() {
        var v = $(this).val();
        var reg = /^[0-9a-zA-Z]{6}$/;
        if (v.length > 0) {
            if (!reg.test(v)) {
                $(this).val('请输入正确的优惠码');
            }
        }
    });
    $('.company').blur(function() {
        var v = $(this).val();
        var reg = /^[\u4e00-\u9fa5]{2,}$/;
        if (v.length > 0) {
            if (!reg.test(v)) {
                $(this).val('请输入正确的名称');
            }
        }
    });
    $('.company_num').blur(function() {
        var v = $(this).val();
        var reg = /^[0-9A-Z]{15}$/;
        if (v.length > 0) {
            if (!reg.test(v)) {
                $(this).val('请输入正确的税号');
            }
        }
    });
    $('#receipt').click(function() {
        var company = $('.company').val();
        var company_num = $('.company_num').val();
        var name = $('.name').val();
        var tel = $('.tel').val();
        var address = $('.address').val();
        if ($(this).is(':checked')) {
            $.ajax({
                url: 'company_info.php',
                type: 'post',
                data: 'company=' + company + '&tel=' + tel + '&name=' + name + '&address=' + address,
                success: function(data) {
                    var v = JSON.parse(data);
                    $('.company').val(v['company']).attr('readonly', '');
                    $('.name').val(v['name']).attr('readonly', '');
                    $('.tel').val(v['tel']).attr('readonly', '');
                    $('.address').val(v['pro']+v['city']+v['address']).attr('readonly', '');
                },
            });
        } else {
            $('.company').val('');
            $('.name').val('');
            $('.tel').val('');
            $('.address').val('');
        }
    });
    $('.next').click(function() {
        var status = $("input[name='user']:checked").val();
        var price_num = $('#price_num').val();
        var receipt = $('#receipt:checked').val();
        var way = $('#way:checked').val();
        var company_num = $('.company_num').val();
        if ($('#all').is(':checked')) {
            $.ajax({
                url: 'dli_meetinginfo.php',
                type: 'post',
                data: 'price_num=' + price_num + '&receipt=' + receipt + '&way=' + way + '&company_num=' + company_num + '&status=' + status,
                success: function(data) {
                    if (data == 1) {
                        window.location.href = "success.php";
                    } else if (data == 2) {
                        window.location.reload();
                    }
                    // alert(data);
                },
            });
        }else{
            alert("请勾选'我已阅读以上内容并遵守相关规定'");
            window.location.reload();
            // $('.next').attr('disabled', 'disabled');
        }
    });
</script>

</html>
<?php
    include('footer.html');
 ?>