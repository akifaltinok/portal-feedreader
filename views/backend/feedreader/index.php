<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\FeedreaderSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Feedreaders');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Admin Paneli'), 'url' => ['../feedreader']];

$this->params['breadcrumbs'][] = $this->title;
?>
<div class="feedreader-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a(Yii::t('app', 'Create Feedreader'), ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'FeedID',
            'SiteURL',
            'Feed',
            'SiteAuthor',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
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
