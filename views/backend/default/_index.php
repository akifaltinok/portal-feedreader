<?php
use kouosl\theme\helpers\Html;
use kouosl\theme\widgets\Portlet;

$this->title = 'Admin Paneli';
$data['title'] = Html::encode($this->title);
$this->params['breadcrumbs'][] = $this->title;


?>

<div class="site-index">

	$this->title = Yii::t('app', 'Feedreaders');

	?>


	<h2>Konular</h2>

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
				 'template' => '{view}',
				 'buttons' => [
	                    'view' => function ($url, $model) {
	                        return  Html::a('Feedi Görüntüle', $url,
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

<div align="center"><h1>Admin Paneli</h1> </div>

		<div align="center">   <a class="btn btn-lg btn-success" href="/admin/feedreader/feedreader">Feed Settings</a> </div>


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
