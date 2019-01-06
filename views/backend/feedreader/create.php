<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Feedreader */

$this->title = Yii::t('app', 'Create Feedreader');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Admin Paneli'), 'url' => ['../feedreader']];
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Feedreaders'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="feedreader-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
<html lang="tr">
<head>
  <style type="text/css">
 body
 {
background-image:url('<?php echo "https://images.wallpaperscraft.com/image/spots_reflections_soft_light_47191_1920x1080.jpg" ?>');
   }
 </style>

</head>

</body>
</html>
