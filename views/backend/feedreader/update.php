<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Feedreader */

$this->title = Yii::t('app', 'Update Feedreader: {name}', [
    'name' => $model->FeedID,
]);
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Feedreaders'), 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->FeedID, 'url' => ['view', 'id' => $model->FeedID]];
$this->params['breadcrumbs'][] = Yii::t('app', 'Update');
?>
<div class="feedreader-update">

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
