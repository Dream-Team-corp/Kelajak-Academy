<?php

/** @var \yii\web\View $this */
/** @var string $content */

use frontend\assets\AppAsset;
use yii\bootstrap5\Html;

AppAsset::register($this);
$route = Yii::$app->controller->route;
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">

<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="google-site-verification" content="2EC3f7cGZopB7rPrOumPl0K8MGGC6CWVWJ2bknj1UdA" />
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>

<body class="d-flex flex-column h-100">
    <?php $this->beginBody() ?>

    <?php echo $this->render('navbar'); ?>
    <?php
        if($route == ''  || $route == 'main/index'){
            echo $this->render('home_hero');
        }else{
            echo $this->render('hero');
        }
    ?>
    <?= $content ?>
    <?= $this->render('footer') ?>
    <?php $this->endBody() ?>
</body>

</html>
<?php $this->endPage();
