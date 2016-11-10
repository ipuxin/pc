 <?php
require_once (__DIR__ .'/../common/kint/Kint.class.php');
//ddd($_SERVER);
 /**
  * 跟踪
  */
// $a = 1;$b=3;
// Kint::trace();
 //文本输出
// s($a);
 //输出文本后,终止命令
// sd();
 /**
  * 会清除在这之前的所有文字类型的输出
  */
// -d($a);
 //输出的结果自动展开,无需手动点击.
// !d($a);
defined('YII_DEBUG') or define('YII_DEBUG', true);
defined('YII_ENV') or define('YII_ENV', 'dev');

//defined('YII_DEBUG') or define('YII_DEBUG', false);
//defined('YII_ENV') or define('YII_ENV', 'prod');

require(__DIR__ . '/../vendor/autoload.php');
require(__DIR__ . '/../vendor/yiisoft/yii2/Yii.php');
require(__DIR__ . '/../common/config/bootstrap.php');
require(__DIR__ . '/../frontend/config/bootstrap.php');

$config = yii\helpers\ArrayHelper::merge(
    require(__DIR__ . '/../common/config/main.php'),
    require(__DIR__ . '/../common/config/main-local.php'),
    require(__DIR__ . '/../frontend/config/main.php'),
    require(__DIR__ . '/../frontend/config/main-local.php')
);

$application = new yii\web\Application($config);
$application->run();