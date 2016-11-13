<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta name="author" content=" UI:lirong941122@qq.com   Bront-end: offert@qq.com  Back-end:ncplum@qq.com">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>

    <?php $this->beginBody() ?>
    <script>
        var _hmt = _hmt || [];
        (function () {
            var hm = document.createElement("script");
            hm.src = "//hm.baidu.com/hm.js?08ad2f3c2954a67a1f40d24bf6692287";
            var s = document.getElementsByTagName("script")[0];
            s.parentNode.insertBefore(hm, s);
        })();
    </script>

</head>
<body>
<div class="navbar top1 top1V2" style="min-height: 90px;">
    <div class="container">
        <div class="navbar-header">
            <button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span>更多...</span>

                <!--	<span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>-->
            </button>
            <a class="navbar-brand navbar-brandV2" href="http://www.pingoing.cn/">
                <img src="/images/logo.png" class="img-responsive col-md-2"></a>
        </div>
        <div class="navbar-collapse collapse" role="navigation">
            <ul class="nav navbar-nav navbar-navV2">
                <li><?= Html::a('网站首页', ['site/index']) ?> </li>
                <li><?= Html::a('区域合伙人', ['page/zs']) ?> </li>
                <li><?= Html::a('商户合伙人', ['page/shop']) ?></li>
                <li><?= Html::a('我要开店', ['page/shop']) ?></li>
                <li><?= Html::a('成功案例', ['partner/index']) ?></li>
                <li> <?= Html::a('关于我们', ['page/gywm']) ?></li>
                <li> <?= Html::a('联系我们', ['page/lxwm']) ?></li>
                <li><?= Html::a('下载APP', ['page/app']) ?></li>
            </ul>
        </div>
    </div>
</div>


<?= Alert::widget() ?>
<?= $content ?>


<div class="footer">
    <div class="container">
        <div class="col-md-6   footer-left  bounceIn animated" data-wow-delay="0.4s"
             style="visibility: visible; -webkit-animation-delay: 0.4s;">
            <ul>
                <!-- footer -->

                <li><?= Html::a('网站首页', ['site/index']) ?> </li>
                <li><?= Html::a('招商加盟', ['page/zs']) ?></li>
                <li><?= Html::a('成功案例', ['partner/index']) ?></li>
                <!-- <li> <?= Html::a('公司新闻', ['info/index']) ?></li> -->
                <li> <?= Html::a('关于我们', ['page/gywm']) ?></li>

                <li> <?= Html::a('联系我们', ['book/lxwm']) ?></li>
                <li><?= Html::a('下载APP', ['page/app']) ?> </li>


            </ul>
            <div style="margin-top: 45px; color: #FFFFFF; font-size: 0.875em;  ">
                <p>沪ICP备15028933号-1 2016 上海果色天香网络科技有限公司 版权所有</p>
                <p>本网所刊载内容（包括但不限于图片、文字、视频等）之知识产权为本</p>
                <p>公司及/或相关权利人专属所有或持有，如若转载，请标明出处</p>
            </div>
        </div>
        <div class="col-sm-3  footer-middle  bounceIn animated">
            <h3>地址：</h3>
            <div class="address">
                <p class="text-center">上海市杨浦区国定东路200号

                </p>
            </div>
            <div class="phone">
                <p class="text-center">
                    <?php
                    $siteconfigmain = \common\models\System::findOne(['id' => 1]);
                    echo $tel = $siteconfigmain->tel;
                    ?>

                </p>
            </div>
        </div>


        <div class="col-sm-3  text-center footer-right  wow fadeInRight animated">
            <a href="#"><img src="/images/ewm.jpg" alt=""/></a>
            <p style="margin-top: 30px;">扫一扫，更多关注！</p>
        </div>
        <div class="clearfix"></div>
    </div>
    <!-- //container -->
</div>
<!-- //footer -->

<!-- container -->

<script>
    (function () {
        var _53code = document.createElement("script");
        _53code.src = "//tb.53kf.com/code/code/10136363/1";
        var s = document.getElementsByTagName("script")[0];
        s.parentNode.insertBefore(_53code, s);
    })();
</script>


<script
    type="text/javascript">var cnzz_protocol = (("https:" == document.location.protocol) ? " https://" : " http://");
    document.write(unescape("%3Cspan id='cnzz_stat_icon_1259173407'%3E%3C/span%3E%3Cscript src='" + cnzz_protocol + "s11.cnzz.com/stat.php%3Fid%3D1259173407%26show%3Dpic1' type='text/javascript'%3E%3C/script%3E"));</script>
<style>
    #cnzz_stat_icon_1259173407 {
        display: none
    }
</style>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
