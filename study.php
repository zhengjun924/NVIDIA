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
    <title>深度学习</title>
    <link rel="stylesheet" href="">
    <style type="text/css">
        main {
            width: 1444px;
            height: 1697px;
            background-color: #ffffff;
            padding-top: 2px;
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
            margin-top: 15px;
            margin-bottom: 30px;
        }
        main .hr {
            width: 1202px;
            height: 7px;
            background: #8cc624;
            margin-left: 120px;
            margin-top: 23px;
            margin-bottom: 5px;
        }
        main .content .NVIDIA, main .content .ywd {
            color: #8cc624;
            font-size: 15px;
            text-align: left;
            margin-left: 165px;
        }
        main .content .NVIDIA {
            margin-top: 25px;
            margin-bottom: 5px;
        }
        main .content .ywd {
            margin-bottom: 10px;
        }
        main .content img {
            margin-left: 130px;
        }
        main .content .content sapn {
            display: inline-block;
        }
        main .content .time, main .content .lesson {
            color: black;
            font-weight: bold;
            font-size: 15px;
        }
        main .content input {
            margin-top: 10px;
            margin-left: 140px;
        }
        main .content .lesson_time, main .content .lesson_info, main .content .lesson_introduce {
            margin-left: 210px;
            font-size: 15px;
        }
        main .content .lesson_introduce {
            font-size: 16px;
            color: #737c9d;
        }
        main .content .lesson_seat {
            display: inline-block;
            margin-bottom: 5px;
        }
        main .hr_center {
            width: 1202px;
            height: 4px;
            background: #eeeeee;
            margin-left: 120px;
            margin-top: 10px;
            margin-bottom: 25px;
        }
        main .content .final {
            cursor:pointer;
            width: 175px;
            height: 50px;
            color: #f8ffff;
            font-size: 25px;
            line-height: 50px;
            background: #75b902;
            border: none;
            border-radius: 5px;
            margin-left: 635px;
        }
        main .seat {
            display: inline-block;
            color: black;
            font-size: 15px;
            margin-left: 570px;
            margin-top: 18px;
            margin-bottom: 45px;
        }
        main ol {
            margin-left: 120px;
            list-style-position: outside;
        }
        main ol li, span {
            font-size: 15px;
            color: black;
        }
        main ol li a {
            color: #8cc624;
            text-decoration: underline;
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
            <p>NVIDIA&nbsp;深度学习学院课程选择</p>
        </div>
        <div class="hr"></div>
        <form action="" method="post" enctype="multipart/form-data">
            <div class="content">
                <p class="NVIDIA">NVIDIA&nbsp;Deep&nbsp;Learning&nbsp;institute&nbsp;Tring</p>
                <p class="ywd">英伟达深度学习学院培训</p>
                <img src="img/icon.png" alt="">
                <span class="time">&nbsp;&nbsp;&nbsp;9&nbsp;月&nbsp;26&nbsp;日&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;13:00-15:00</span>
                <br>
                <input type="radio" name="T1707" id="T1707" value="T1707">&nbsp;
                <span class="lesson">T1707.通过&nbsp;Keras&nbsp;和&nbsp;Theano&nbsp;采用DragoNN对基因组学进行深度学习&nbsp;&nbsp;Deep&nbsp;Learning&nbsp;for&nbsp;Genomics&nbsp;Using&nbsp;DragoNN&nbsp;with&nbsp;Keras&nbsp;and&nbsp;Theano</span>
                <br>
                <span class="lesson_time">(T1707和T1712课程一致，仅限选择一次，请您根据您的时间进行安排)</span>
                <br>
                <span class="lesson_info" style="color: #8cc624;">级别：</span>
                <span>高级&nbsp;|</span>
                <span style="color: #8cc624;">预备知识：</span>
                <span>无&nbsp;|</span>
                <span style="color: #8cc624;">行业：</span>
                <span>生物信息&nbsp;|</span>
                <span style="color: #8cc624;">Frameworks：</span>
                <span>Theano</span>
                <br>
                <a href="" title="">
                    <span class="lesson_introduce">课程简介&nbsp;>&nbsp;></span>
                </a>
                <span class="lesson_seat">剩余座位席：席</span>
                <br>
                <input type="radio" name="T1709" id="T1709" value="T1709">&nbsp;
                <span class="lesson">T1709.通过&nbsp;TensorFlow&nbsp;实现图像分割&nbsp;&nbsp;&nbsp;Image&nbsp;segmentation&nbsp;with&nbsp;TensorFlow</span>
                <br>
                <span class="lesson_info" style="color: #8cc624;">级别：</span>
                <span>初级&nbsp;|</span>
                <span style="color: #8cc624;">预备知识：</span>
                <span>NVIDIA&nbsp;DIGITS&nbsp;与图像分类&nbsp;|</span>
                <span style="color: #8cc624;">行业：</span>
                <span>所有&nbsp;|</span>
                <span style="color: #8cc624;">Frameworks：</span>
                <span>ThesorFlow</span>
                <br>
                <a href="" title="">
                    <span class="lesson_introduce">课程简介&nbsp;>&nbsp;></span>
                </a>
                <span class="lesson_seat">剩余座位席：席</span>
                <div class="hr_center"></div>
                <img src="img/icon.png" alt="">
                <span class="time">&nbsp;&nbsp;&nbsp;9&nbsp;月&nbsp;26&nbsp;日&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;16:00-18:00</span>
                <br>
                <input type="radio" name="T1708" id="T1708" value="T1708">&nbsp;
                <span class="lesson">T1708.通过&nbsp;NVIDIA&nbsp;Jetson&nbsp;TX2&nbsp;进行图像分类和目标检测&nbsp;&nbsp;&nbsp;Image&nbsp;Classification&nbsp;and&nbsp;Object&nbsp;Detection&nbsp;with&nbsp;NVIDIA&nbsp;jetson&nbsp;TX2</span>
                <br>
                <span class="lesson_time">(T1708和T1711课程一致，仅限选择一次，请您根据您的时间进行安排)</span>
                <br>
                <span class="lesson_info" style="color: #8cc624;">级别：</span>
                <span>初级&nbsp;|</span>
                <span style="color: #8cc624;">预备知识：</span>
                <span>无&nbsp;|</span>
                <span style="color: #8cc624;">行业：</span>
                <span>机器人/安防/零售&nbsp;|</span>
                <span style="color: #8cc624;">Frameworks：</span>
                <span>Caffe</span>
                <br>
                <a href="" title="">
                    <span class="lesson_introduce">课程简介&nbsp;>&nbsp;></span>
                </a>
                <span class="lesson_seat">剩余座位席：席</span>
                <br>
                <input type="radio" name="T1710" id="T1710" value="T1710">&nbsp;
                <span class="lesson">T1710.基于自动交易的&nbsp;LSTM&nbsp;时间序列金融数据预测&nbsp;&nbsp;&nbsp;Prediction&nbsp;of&nbsp;Time&nbsp;Series&nbsp;Financial&nbsp;Data&nbsp;using&nbsp;LSTM&nbsp;for&nbsp;ALgorithmic&nbsp;Trading</span>
                <br>
                <span class="lesson_info" style="color: #8cc624;">级别：</span>
                <span>中级&nbsp;|</span>
                <span style="color: #8cc624;">预备知识：</span>
                <span>具备基本Python&nbsp;科学计算的应用知识，以及&nbsp;TensorFlow&nbsp;基础知识。强烈建议选课者要有&nbsp;RNN知识背景。&nbsp;|</span>
                <span style="color: #8cc624;">行业：</span>
                <span>金融&nbsp;|</span>
                <span style="color: #8cc624;">Frameworks：</span>
                <span>TensorFlow</span>
                <br>
                <a href="" title="">
                    <span class="lesson_introduce">课程简介&nbsp;>&nbsp;></span>
                </a>
                <span class="lesson_seat">剩余座位席：席</span>
                <div class="hr"></div>
                <img src="img/icon.png" alt="">
                <span class="time">&nbsp;&nbsp;&nbsp;9&nbsp;月&nbsp;27&nbsp;日&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;10:00-12:00</span>
                <br>
                <input type="radio" name="T1711" id="T1711" value="T1711">&nbsp;
                <span class="lesson">T1711.通过&nbsp;NVIDIA&nbsp;Jetson&nbsp;TX2&nbsp;进行图像分类和目标检测&nbsp;&nbsp;&nbsp;Image&nbsp;Classification&nbsp;and&nbsp;Object&nbsp;Detection&nbsp;with&nbsp;NVIDIA&nbsp;Jetson&nbsp;TX2</span>
                <br>
                <span class="lesson_time">(T1708和T1711课程一致，仅限选择一次，请您根据您的时间进行安排)</span>
                <br>
                <span class="lesson_info" style="color: #8cc624;">级别：</span>
                <span>初级&nbsp;|</span>
                <span style="color: #8cc624;">预备知识：</span>
                <span>无&nbsp;|</span>
                <span style="color: #8cc624;">行业：</span>
                <span>机器人/安防/零售&nbsp;|</span>
                <span style="color: #8cc624;">Frameworks：</span>
                <span>Caffe</span>
                <br>
                <a href="" title="">
                    <span class="lesson_introduce">课程简介&nbsp;>&nbsp;></span>
                </a>
                <span class="lesson_seat">剩余座位席：席</span>
                <br>
                <input type="radio" name="T1714" id="T1714" value="T1714">&nbsp;
                <span class="lesson">T1714.使用&nbsp;Apache&nbsp;MXNet&nbsp;在&nbsp;AWS&nbsp;上构建深度学习应用&nbsp;&nbsp;&nbsp;Distributed&nbsp;Deep&nbsp;Learning&nbsp;Using&nbsp;Apache&nbsp;MXNet&nbsp;on&nbsp;AWS</span>
                <br>
                <span class="lesson_info" style="color: #8cc624;">级别：</span>
                <span>高级&nbsp;|</span>
                <span style="color: #8cc624;">预备知识：</span>
                <span>了解基本的深度学习知识和框架&nbsp;|</span>
                <span style="color: #8cc624;">行业：</span>
                <span>所有&nbsp;|</span>
                <span style="color: #8cc624;">Frameworks：</span>
                <span>MXNet</span>
                <br>
                <a href="" title="">
                    <span class="lesson_introduce">课程简介&nbsp;>&nbsp;></span>
                </a>
                <span class="lesson_seat">剩余座位席：席</span>
                <div class="hr_center"></div>
                <img src="img/icon.png" alt="">
                <span class="time">&nbsp;&nbsp;&nbsp;9&nbsp;月&nbsp;27&nbsp;日&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;13:00-15:00</span>
                <br>
                <input type="radio" name="T1712" id="T1712" value="T1712">&nbsp;
                <span class="lesson">T1712.通过&nbsp;Keras&nbsp;和&nbsp;Theano&nbsp;采用DragoNN对基因组学进行深度学习&nbsp;&nbsp;Deep&nbsp;Learning&nbsp;for&nbsp;Genomics&nbsp;Using&nbsp;DragoNN&nbsp;with&nbsp;Keras&nbsp;and&nbsp;Theano</span>
                <br>
                <span class="lesson_time">(T1707和T1712课程一致，仅限选择一次，请您根据您的时间进行安排)</span>
                <br>
                <span class="lesson_info" style="color: #8cc624;">级别：</span>
                <span>高级&nbsp;|</span>
                <span style="color: #8cc624;">预备知识：</span>
                <span>无&nbsp;|</span>
                <span style="color: #8cc624;">行业：</span>
                <span>生物信息&nbsp;|</span>
                <span style="color: #8cc624;">Frameworks：</span>
                <span>Theano</span>
                <br>
                <a href="" title="">
                    <span class="lesson_introduce">课程简介&nbsp;>&nbsp;></span>
                </a>
                <span class="lesson_seat">剩余座位席：席</span>
                <br>
                <input type="radio" name="T1715" id="T1715" value="T1715">&nbsp;
                <span class="lesson">T1715.通过&nbsp;NVIDIA&nbsp;DIGITS&nbsp;进行信号处理&nbsp;&nbsp;&nbsp;Signal&nbsp;Processing&nbsp;Using&nbsp;DIGITS</span>
                <br>
                <span class="lesson_info" style="color: #8cc624;">级别：</span>
                <span>初级&nbsp;|</span>
                <span style="color: #8cc624;">预备知识：</span>
                <span>无&nbsp;|</span>
                <span style="color: #8cc624;">行业：</span>
                <span>生物信息&nbsp;|</span>
                <span style="color: #8cc624;">Frameworks：</span>
                <span>Caffe</span>
                <br>
                <a href="" title="">
                    <span class="lesson_introduce">课程简介&nbsp;>&nbsp;></span>
                </a>
                <br>
                <div class="hr_center"></div>
                <img src="img/icon.png" alt="">
                <span class="time">&nbsp;&nbsp;&nbsp;9&nbsp;月&nbsp;27&nbsp;日&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;15:00-17:00</span>
                <br>
                <input type="radio" name="T1713" id="T1713" value="T1713">&nbsp;
                <span class="lesson">T1713.通过&nbsp;NVIDIA&nbsp;DIGITS&nbsp;进行图像分类&nbsp;&nbsp;&nbsp;Image&nbsp;Classification&nbsp;with&nbsp;DIGITS</span>
                <br>
                <span class="lesson_info" style="color: #8cc624;">级别：</span>
                <span>初级&nbsp;|</span>
                <span style="color: #8cc624;">预备知识：</span>
                <span>无&nbsp;|</span>
                <span style="color: #8cc624;">行业：</span>
                <span>所有&nbsp;|</span>
                <span style="color: #8cc624;">Frameworks：</span>
                <span>CAffe</span>
                <br>
                <a href="" title="">
                    <span class="lesson_introduce">课程简介&nbsp;>&nbsp;></span>
                </a>
                <span class="lesson_seat">剩余座位席：席</span>
                <br>
                <input type="radio" name="T1716" id="T1716" value="T1716">&nbsp;
                <span class="lesson">T1716.通过&nbsp;TensorFlow&nbsp;和&nbsp;NVIDIA&nbsp;DIGITS&nbsp;采用生成式对抗网络进行图像生成&nbsp;&nbsp;&nbsp;Image&nbsp;Creating&nbsp;using&nbsp;Generative&nbsp;Adversarial&nbsp;Networks&nbsp;with&nbsp;TensorFlow&nbsp;and&nbsp;DIGITS</span>
                <br>
                <span class="lesson_info" style="color: #8cc624;">级别：</span>
                <span>中级&nbsp;|</span>
                <span style="color: #8cc624;">预备知识：</span>
                <span>具有训练神经网络的经验&nbsp;|</span>
                <span style="color: #8cc624;">行业：</span>
                <span>数字内容制作&nbsp;|</span>
                <span style="color: #8cc624;">Frameworks：</span>
                <span>TensorFlow&nbsp;and&nbsp;Caffe</span>
                <br>
                <a href="" title="">
                    <span class="lesson_introduce">课程简介&nbsp;>&nbsp;></span>
                </a>
                <span class="lesson_seat">剩余座位席：席</span>
                <div class="hr_center"></div>
                <input type="submit" class="final" value="提&nbsp;&nbsp;交">
            </div>
        </form>
        <span class="seat">温馨提示：因座位有限，课程选择提交后不能变更</span>
        <ol>
            <span>注意事项</span>
            <li>参加培训前，在
                <a href="http://nvidia.qwilab.com/">http://nvidia.qwilab.com/</a>上注册账号，以在陪你课程中动手实验。注册此账号所用的邮箱，请务必与报名此次会议时所用的邮箱相同</li>
            <li>您需要携带自己的设备（笔记本电脑或平板电脑）参加培训，需要做如下设置</li>
            <li style="list-style: none;">&nbsp;&nbsp;&nbsp;&nbsp;安装&nbsp; IE&nbsp;10（或以上版本），以及Chrome 59（或以上版本）浏览器。如果是参加TensorFlow相关课程，必须使用Chrome浏览器。</li>
            <li style="list-style: none;">&nbsp;&nbsp;&nbsp;&nbsp;为确保实验课件可以正常运行，请点击
                <a href="http://websocketest.com/">http://websocketest.com/</a>测试。只要结果显示&nbsp;"work&nbsp;for&nbsp;you"&nbsp;即可。</li>
            <li>参加培训时请将助教发给您的准入凭证（TOKEN）并输入电脑，获取培训资格，每一节课一个TOKEN，注意保存不要丢失。</li>
            <li>选课系统将于9月22日晚6点关闭，请在此期间今早选课，先选先得</li>
        </ol>
    </main>
</body>
<script type="text/javascript" src="js/jquery-1.8.3.min.js"></script>
<script type="text/javascript">
    $("#T1707").click(function(){
        $("#T1712").val('');
        $("#T1712").attr('disabled', 'disabled');
        // $("#T1708").click(function(){
        //     window.location.reload();
        // });
    });
    $("#T1712").click(function(){
        $("#T1707").val('');
        $("#T1707").attr('disabled', 'disabled');
    });
    $("#T1708").click(function(){
        $("#T1711").val('');
        $("#T1711").attr('disabled', 'disabled');
    });
    $("#T1711").click(function(){
        $("#T1708").val('');
        $("#T1708").attr('disabled', 'disabled');
    });
    $('.final').click(function(){
        var T1707 = $("input[name='T1707']:checked").val();
        var T1712 = $("input[name='T1712']:checked").val();
        var T1708 = $("input[name='T1708']:checked").val();
        var T1711 = $("input[name='T1711']:checked").val();
        var T1709 = $("input[name='T1709']:checked").val();
        var T1710 = $("input[name='T1710']:checked").val();
        var T1714 = $("input[name='T1714']:checked").val();
        var T1715 = $("input[name='T1715']:checked").val();
        var T1713 = $("input[name='T1713']:checked").val();
        var T1716 = $("input[name='T1716']:checked").val();

        $.ajax({
            url: 'study_info.php',
            type: 'post',
            data: 'T1707='+T1707+'&T1708='+T1708+'&T1709='+T1709+'&T1710='+T1710+'&T1711='+T1711+'&T1712='+T1712+'&T1714='+T1714+'&T1715='+T1715+'&T1713='+T1713+'&T1716='+T1716,
            success:function(data){
                if (data == 1) {
                    alert('提交成功');
                    window.location.href="select.php";
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