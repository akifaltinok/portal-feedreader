<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\FeedreaderSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */
?>
<div align="center"> <h1> Feed Search </h1> </div>
<?php
$this->title = Yii::t('app', 'Feedreader Modülü');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Search'), 'url' => ['../feedreader']];

$this->params['breadcrumbs'][] = $this->title;
?>

<div class="feedreader-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>



    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],


            'SiteURL',



            ['class' => 'yii\grid\ActionColumn',
             'template' => '{view}',

		          'buttons' => [
                    'view' => function ($url, $model) {
                        return  Html::a('Show Feed', $url,
						[ 'title' => Yii::t('app', 'View'), 'class'=>'btn btn-info', ]) ;
                    },
             ],
             'urlCreator' => function ($action, $model, $key, $index) {
                  if ($action === 'view') {
                      $url = \yii\helpers\Url::toRoute(['feedoku', 'id' => $key]);
                      return $url;
                  }
              }

            ]
        ]
    ]);


    ?>


</div>
<html lang="tr">
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
