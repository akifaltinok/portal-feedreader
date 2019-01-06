<?php
use kouosl\theme\helpers\Html;
use kouosl\theme\widgets\Portlet;
use yii\grid\GridView;

$this->title = 'Feed Reader';
#$data['title'] = Html::encode($this->title);
#$this->params['breadcrumbs'][] = $this->title;
#Portlet::begin(['title' => $this->title,'subTitle' => 'samples data','icon' => 'glyphicon glyphicon-cog']);
#echo $this->render('index');
#Portlet::end();

?>
<h2>Feeds</h2>

<?= GridView::widget([
      'dataProvider' => $dataProvider,
  'options' => [
              'style'=>'overflow: auto; word-wrap: break-word;'
      ],
      'summary'=>'',
    'showFooter'=>false,
  'showHeader' => false,
  'columns' => [
          'FeedID',
          'SiteURL',
          'Feed',
          'SiteAuthor',
    ['class' => 'yii\grid\ActionColumn',
     'template' => '',
   ]
      ]
]);
?>
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
<div align="center">   <a class="btn btn-lg btn-success" href="../feedreader/feedreader">Feed Search</a> </div>
