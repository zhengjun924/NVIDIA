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
                height: 1198px;
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
                margin-left: 245px;
                margin-top: 32px;
                width: 955px;
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
                width: 907px;
                height: 508px;
                margin-left: 267px;
                margin-top: 30px;
                margin-bottom: 30px;
            }
            main .center::after {
                content: '';
                display: block;
                clear: left;
            }
            main .center .specialty, main .center .common, main .center .DLI {
                text-align: center;
                float: left;
                width: 298px;
                height: 508px;
            }
            main .center .common {
                margin: 0 5px;
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
                height: 130px;
                text-align: center;
                background: #bcbcbc;
                padding-top: 10px;
            }
            main .center .middle .seat {
                display: block;
                color: white;
                font-size: 13px;
            }
            main .center .middle .seat a {
                color: white;
                text-decoration: underline;
            }
            main .center .middle .day {
                display: block;
                color: white;
                font-size: 13px;
                margin-top: 5px;
                text-decoration: underline;
            }
            main .center .middle a:hover, main .center .middle .seat a:hover {
                color: white;
                text-decoration: underline;
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
                height: 308px;
                padding-top: 20px;
                background: #eaeaea;
            }
            main .center .bottom p {
                color: black;
                font-size: 22px;
            }
            main .center .bottom .price {
                display: inline-block;
                color: black;
                font-weight: bold;
                font-size: 56px;
                margin-top: 10px;
            }
            main .center .bottom .user {
                display: block;
                color: black;
                font-size: 15px;
                margin-top: 15px;
            }
            main .center .bottom .buy {
                width: 245px;
                height: 43px;
                background: #8cc624;
                font-size: 20px;
                text-align: center;
                line-height: 43px;
                margin-left: 28px;
                margin-top: 45px;
            }
            main .center .bottom .buy a {
                color: white;
            }
            main .center .bottom .buy a:hover {
                text-decoration: none;
            }
            main ul {
                text-align: left;
                font-size: 14px;
                list-style: none;
                margin-left: 245px;
                margin-bottom: 20px;
                color: black;
                width: 955px;
            }
            main ul li {
                color: black;
            }
            main ul .info {
                font-weight: bold;
            }
            main .shop {
                margin-top: 40px;
            }
            main ul li a {
                text-align: right;
                color: #8cc624;
            }
            main ul li a:hover {
                text-decoration: none;
                color: #8cc624;
            }
            main .return {
                display: inline-block;
                margin-left: 833px;
                text-align: center;
                line-height: 48px;
                color: white;
                font-weight: bold;
                font-size: 20px;
                width: 128px;
                height: 48px;
                background: #77b900;
                border: none;
            }
            main a:hover {
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
                <span>会议选择</span>
            </div>
            <div class="center">
                <div class="specialty">
                    <div class="top">
                        <span class="ticket">专业观众票</span>
                        <span class="time">（9月26、27日大会门票&nbsp;+&nbsp;DLI深度学习动手实验课）</span>
                    </div>
                    <div class="middle">
                        <span class="seat">包含：两日大会通票（主会场席位预留）</span>
                        <a href="study.php" id="study">
                            <span class="day">DLI深度学习动手实验课（9月26、27日）</span>
                        </a>
                        <span class="talk">分论坛</span>
                        <span class="project">展区参观</span>
                        <span class="eat">午餐（9月26、27日）</span>
                    </div>
                    <div class="bottom">
                        <p>票价</p>
                        <span class="price">￥1,580</span>
                        <span class="user">院校师生&nbsp;5&nbsp;优惠</span>
                        <div class="buy">
                            <a href="specialty_meeting.php" title="">购票&nbsp;></a>
                        </div>
                    </div>
                </div>
                <div class="common">
                    <div class="top">
                        <span class="ticket">普通观众票</span>
                        <span class="time">（仅9月26、27日大会门票）</span>
                    </div>
                    <div class="middle">
                        <span class="seat">包含：
                            两日大会通票（主会场席位预留
                        </span>
                        <span class="talk">分论坛</span>
                        <span class="project">展区参观</span>
                        <span class="eat">午餐（9月26、27日）</span>
                    </div>
                    <div class="bottom">
                        <p>票价</p>
                        <span class="price">￥580</span>
                        <span class="user">院校师生&nbsp;5&nbsp;优惠</span>
                        <div class="buy">
                            <a href="common_meeting.php">购票&nbsp;></a>
                        </div>
                    </div>
                </div>
                <div class="DLI">
                    <div class="top">
                        <span class="ticket">DLI深度学习实验课</span>
                        <span class="time">（9月26、27日大会门票&nbsp;+&nbsp;DLI深度学习动手实验课）</span>
                    </div>
                    <div class="middle">
                        <span class="seat">
                            包含：
                            <a href="study.php" id="study">DLI深度学习动手实验课（9月25、27日）</a>
                        </span>
                        <span class="eat">午餐（9月26、27日）</span>
                    </div>
                    <div class="bottom">
                        <p>票价</p>
                        <span class="price">￥1,080</span>
                        <span class="user">院校师生&nbsp;5&nbsp;优惠</span>
                        <div class="buy">
                            <a href="dli_meeting.php" title="">购票&nbsp;></a>
                        </div>
                    </div>
                </div>
            </div>
            <ul>
                <li class="info">优惠购票说明</li>
            </ul>
            <ul class="shop">
                <li class="info">院校师生优惠</li>
                <li>此优惠，仅适用于院校师生老师、学生，我们需要您上传您的教师证或者学生证，您可享受全价的五折优惠。证件照必须真实有效，如有传证件不符合造成退款支付平台将扣除&nbsp;的手续费！</li>
            </ul>
            <ul>
                <li class="info">关于&nbsp;NVIDIA&nbsp;深度学习学院</li>
                <li>聚焦于人工智能和深度学习，致力于在全世界范围内提供支持、解决最具挑战性的问题。由&nbsp;NVIDIA&nbsp;认证的讲师来教授的培训课程，可以帮助开发者、数据科学家、工程师和研究人员开启训练、优化和部署神经网络，从而解决多种学科方面的现实问题，例如自动驾驶、医疗、消费者服务和机器人等。如需要了解课程的详细内容，可
                    <a href="">点击这里</a>访问。</li>
            </ul>
            <ul>
                <li>实际课程以最终网站公布为准。</li>
            </ul>
            <ul>
                <li>备注：所有价格最终解释权归&nbsp;NVIDIA&nbsp;公司所有。</li>
            </ul>
            <a href="question.php" id="a">
                <span class="return">返&nbsp;&nbsp;回</span>
            </a>
        </main>
    </body>
    <script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
    <script type="text/javascript">
        $.ajax({
            url: 'select_info.php',
            type: 'post',
            data: 'select=select',
            success:function(data){
                if (data == 1) {
                    $('#a').css('display','none');
                }else if (data == 2) {
                    $('#a').css('display','block');
                }
            }
        });
    </script>
    </html>
    <?php
    include('footer.html');
 ?>