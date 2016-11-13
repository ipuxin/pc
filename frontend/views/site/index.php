<?php
use yii\helpers\Html;
use yii\widgets\ListView;

/* @var $this yii\web\View */
$siteconfig = \common\models\System::findOne(['id' => 1]);
$this->title = $siteconfig->webname;
$this->registerMetaTag(['name' => 'keywords', 'content' => $siteconfig->keywords]);
$this->registerMetaTag(['name' => 'description', 'content' => $siteconfig->description]);
?>


<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- 轮播（Carousel）指标 -->

    <!-- 轮播（Carousel）项目 -->
    <div class="carousel-inner">
        <div class="item active">
            <img src="images/sy1.jpg" alt="First slide">
        </div>

    </div>
    <!-- 轮播（Carousel）导航 -->
</div>
<!--banner end-->
<!--
汇集10年以上经验的资深买手
优选本地好货，给您提供24h达的配送服务
-->
<div class="containe ind-tit-box-a">
    <div class="row">
        <div class="col-lg-3 col-md-5  col-sm-4  col-xs-3">
            <div class="ind-tit-line-l"></div>
            <div class="ind-tit-dot-l"></div>
        </div>
        <div class="col-lg-6 col-md-2  col-sm-4  col-xs-6 ind_tita">汇集10年以上经验的资深买手<br>
优选本地好货，给您提供24h达的配送服务
        </div>
        <div class="col-lg-3 col-md-5 col-sm-4 col-xs-3">
            <div class="ind-tit-line-r"></div>
            <div class="ind-tit-dot-r"></div>
        </div>
    </div>
    <div class="row">
        <img src="imgages/" alt="">
    </div>
</div>
<!---
汇集10年以上经验的资深买手
优选本地好货，给您提供24h达的配送服务
-->
<!--活动专区-->
<div class="containe ind-tit-box-a">
    <div class="row">
        <div class="col-lg-5 col-md-5  col-sm-4  col-xs-3">
            <div class="ind-tit-line-l"></div>
            <div class="ind-tit-dot-l"></div>
        </div>
        <div class="col-lg-2 col-md-2  col-sm-4  col-xs-6 ind_tita">
            活动专区
        </div>
        <div class="col-lg-5 col-md-5 col-sm-4 col-xs-3">
            <div class="ind-tit-line-r"></div>
            <div class="ind-tit-dot-r"></div>
        </div>
    </div>
</div>
<div class="lc">
    <div class="container">
        <div class="lc-show">
            <ul>
                <li><a href=""><img src="images/ind_f_img_23.jpg" class="img-responsive center-block">
                        <p>好产品，拼出乐趣，团到实惠</p></a></li>

                <li><a href=""><img src="images/ind_f_img_25.jpg" class="img-responsive center-block">
                        <p>超值产品，1元抢购</p></a></li>

                <li><a href=""><img src="images/ind_f_img_27.jpg" class="img-responsive center-block">
                        <p>每天抽一下，好礼送不停</p></a></li>

                <li><a href=""><img src="images/ind_f_img_29.jpg" class="img-responsive center-block">
                        <p>给你一个试用的特权</p></a></li>

            </ul>
        </div>
    </div>
</div>
<!---活动专区-->

<!--  product  star-->
<div class="product-show">
    <div class="container">
        <div class="row product-ju">
            <div class="col-md-5 col-sm-4 col-xs-3">
                <div class="hg"></div>
            </div>
            <div class="col-md-2 col-sm-3 col-xs-6 xs">每日好货<span>Daily Good</span></div>
            <div class="col-md-5 col-sm-4 col-xs-3">
                <div class="hg"></div>
            </div>
        </div>
        <div class="row ">
            <div class="col-md-4 col-sm-4 col-xs-6"><img src="images/b1-1.png" class="img-responsive"></div>
            <div class="col-md-4 col-sm-4 col-xs-6"><img src="images/b1-2.png" class="img-responsive"></div>
            <div class="col-md-4 col-sm-4 col-xs-6"><img src="images/b1-3.png" class="img-responsive"></div>
            <div class="col-md-4 col-sm-4 col-xs-6"><img src="images/b1-4.png" class="img-responsive"></div>
            <div class="col-md-4 col-sm-4 col-xs-6"><img src="images/b1-5.png" class="img-responsive"></div>
            <div class="col-md-4 col-sm-4 col-xs-6"><img src="images/b1-6.png" class="img-responsive"></div>
            <div class="col-md-4 col-sm-4 col-xs-6"><img src="images/b1-7.png" class="img-responsive"></div>
            <div class="col-md-4 col-sm-4 col-xs-6"><img src="images/b1-8.png" class="img-responsive"></div>
            <div class="col-md-4 col-sm-4 col-xs-6"><img src="images/b1-9.png" class="img-responsive"></div>
        </div>
    </div>
</div>


<!--  product  end-->
<!-- 媒体合作 star-->
<div class="madia">
    <div class="container">
        <div class="news-text bounceIn animated" style="margin: 30px 0;">
            <h1>媒体合作</h1>
            <!--<span class="pull-right"><a href="#" style="font-size: 0.6em; color: #333333;">查看更多></a></span>-->
        </div>
        <div class="row">
            <div class="col-md-3 col-xs-6 fadeInRight animated">
                <img src="images/bd.jpg" class="img-responsive">
            </div>
            <div class="col-md-3 col-xs-6 fadeInRight animated">
                <img src="images/sl0.jpg" class="img-responsive">
            </div>
            <div class="col-md-3 col-xs-6  fadeInRight animated">
                <img src="images/tx.jpg" class="img-responsive">
            </div>
            <div class="col-md-3  col-xs-6 fadeInRight animated">
                <img src="images/sh.jpg" class="img-responsive">
            </div>
            <div class="col-md-3 col-xs-6 fadeInRight animated">
                <img src="images/zh.jpg" class="img-responsive">
            </div>

            <div class="col-md-3 col-xs-6 fadeInRight animated">
                <img src="images/al.jpg" class="img-responsive">
            </div>
            <div class="col-md-3  col-xs-6 fadeInRight animated">
                <img src="images/sd.jpg" class="img-responsive">
            </div>

            <div class="col-md-3 col-xs-6 fadeInRight animated">
                <img src="images/zs.jpg" class="img-responsive">
            </div>

        </div>
    </div>
</div>
<!--媒体合作 end-->


