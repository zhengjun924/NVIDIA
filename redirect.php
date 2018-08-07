<?php
    include('header.html');
    session_start();
    if (!isset($_SESSION['email']) && !isset($_SESSION['user'])) {
        header("Refresh:1;url=http://www.work.com");
    }
    // print_r($_SESSION);
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
        </div>
    </main>
</body>
</html>
<?php
    include('./footer.html');
 ?>