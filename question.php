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
    <title>参会问卷</title>
   <!-- Include Twitter Bootstrap and jQuery: -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css" />
    <script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <!-- Include the plugin's CSS and JS: -->
    <script type="text/javascript" src="js/bootstrap-multiselect.js"></script>
    <link rel="stylesheet" href="css/bootstrap-multiselect.css" type="text/css" />
    <style type="text/css">
        main {
            width: 1444px;
            height: 832px;
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
            background: url('./img/meeting_nav.png');
        }
        main .form_head {
            margin-left: 278px;
            margin-top: 32px;
            width: 888px;
            text-align: left;
            font-size: 15px;
            font-weight: bold;
            border-bottom: 1px solid gray;
        }
        main .form_head span {
            color: #8cc624;
        }
        .clear::after{
            content: '';
            display: block;
            clear: both;
        }
        main .form_body{
            width: 888px;
            text-align: left;
            margin-top: 35px;
            margin-left: 278px;
        }
        main .form_body .form_left{
            width: 407px;
            margin-right: 75px;
            float: left;
        }
        main .form_body .form_right #get{
            width: 404px;
            height: 35px;
            margin-bottom: 25px;
        }
        main .form_body span{
            display: inline-block;
            color: black;
            word-spacing: -3px;
            font-size: 14px;
            font-weight: bold;
            margin-bottom: 2px;
        }
        main .form_body select{
            width:404px;
            height: 35px;
            margin-bottom: 25px;
        }
        main .form_body .return{
            margin-right: 30px;
             margin-left: 110px;
        }
        main .form_body .return,main .form_body .next{
            display: inline-block;
            margin-top: 30px;
            text-align: center;
            line-height: 48px;
            color: white;
            font-weight: bold;
            font-size: 20px;
            width: 130px;
            height: 48px;
            background: #77b900;
            border: none;
        }
        main .form_body a:hover{
            text-decoration: none;
        }
        .btn-group open{
            font-size: 16px;
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
            <span>请输入您的个人信息</span>
        </div>
        <form class="form_body">
            <div class="clear">
                <div class="form_left">
                <span>您以前是否参加过 GTC 技术大会？*</span>
                <br>
                <select id="joinmeet">
                    <option value="是" selected="">是</option>
                    <option value="否">否</option>
                </select>
                <span>您的主要工作职务是什么？*</span>
                <br>
                <select id="mainjob">
                    <option value="执行管理者" selected="">执行管理者</option>
                    <option value="26">26</option>
                    <option value="27">27</option>
                    <option value="28">28</option>
                    <option value="29">29</option>
                    <option value="30">30</option>
                    <option value="31">31</option>
                    <option value="32">32</option>
                    <option value="33">33</option>
                </select>
                <span>以下哪一项最好描述了您的公司/机构的行业细分/垂直领域？*</span>
                <br>
                <select id="des">
                    <option value="汽车" selected="">汽车</option>
                    <option value="26">26</option>
                    <option value="27">27</option>
                    <option value="28">28</option>
                    <option value="29">29</option>
                    <option value="30">30</option>
                    <option value="31">31</option>
                    <option value="32">32</option>
                    <option value="33">33</option>
                </select>
                <span>您在公司有采购权吗？*</span>
                <br>
                <select id="buy">
                    <option value="否，但我可以影响决策" selected="">否，但我可以影响决策</option>
                    <option value="是">是</option>
                </select>
                <span>您是否教受机器学习，人工智能或相关技术？*</span>
                <br>
                <select id="study">
                    <option value="否" selected>否</option>
                    <option value="是">是</option>
                </select>
                <span>饮食需求*</span>
                <br>
                <select id="eat">
                    <option value="普通西餐" selected="">普通西餐</option>
                    <option value="中餐">中餐</option>
                </select>
                </div>
                <div class="form_right">
                    <span>您是通过什么途径了解到 GTC CHINA 2017 (GPU 技术大会)的信<br>息的？*</span>
                    <br>
                    <select id="know">
                        <option value="大会广告" selected="">大会广告</option>
                        <option value="朋友介绍">朋友介绍</option>
                    </select>
                    <span>您所专注的研究领域是（可多选）*</span>
                    <br>
                    <select id="area" class="example-buttonWidth" multiple="multiple">
                        <option value="3D打印，算法与数值技术" selected="selected">3D打印，算法与数值技术</option>
                        <option value="3D打印">3D打印</option>
                    </select>
                    <span>您是应用开发工程师或软件工程师吗？*</span>
                    <br>
                    <select id="engineer">
                        <option value="是">是</option>
                        <option value="否" selected="">否</option>
                    </select>
                    <span>我们还能做什么或需要知道的事情帮助您能从会议经验中得到最大<br>的收获？*</span>
                    <br>
                    <input type="text" id="get">
                    <span>您的学历是什么？*</span>
                    <br>
                    <select id="edu">
                        <option value="博士" selected="">博士</option>
                        <option value="硕士">硕士</option>
                        <option value="硕士">本科</option>
                        <option value="硕士">大专</option>
                    </select>
                </div>
                <a href="person.php" target="_self">
                    <span class="return">返&nbsp;&nbsp;回</span>
                </a>
                <input type="submit" value="保存并下一步" class="next">
            </div>
        </form>
    </main>
</body>
<script type="text/javascript">
    $("#get").blur(function() {
        var v = $(this).val();
        var reg = /^[\u4e00-\u9fa5_a-zA-Z]+$/;
        if (v.length > 0) {
            if (!reg.test(v)) {
                $(this).val('');
            }
        }
    });
    $('.next').click(function(){
        var joinmeet = $('#joinmeet option:selected').val();
        var know = $('#know option:selected').text();
        var mainjob = $('#mainjob option:selected').val();
        var area = $('#area option:selected').val();
        var des = $('#des option:selected').val();
        var engineer = $('#engineer option:selected').val();
        var buy = $('#buy option:selected').val();
        var get = $('#get').val();
        var eat = $('#eat option:selected').val();
        var edu = $('#edu option:selected').val();
        var study = $('#study option:selected').val();
        $.ajax({
            url: 'question_info.php',
            type: 'post',
            data: 'joinmeet='+joinmeet+'&know='+know+'&des='+des+'&mainjob='+mainjob+'&area='+area+'&engineer='+engineer+'&buy='+buy+'&get='+get+'&eat='+eat+'&edu='+edu+'&study='+study+'&select=select',
            success:function(data){
                // alert(data);
                if (data == 1) {
                    window.location.href="select.php";
                }else if (data == 2) {
                    alert('请全部填写');
                    window.location.reload();
                }
            },
        });
    });
    $(document).ready(function() {
        $('.example-buttonWidth').multiselect({
            buttonWidth: '404px',
        });
    });
</script>
</html>
<?php
    include('footer.html');
 ?>