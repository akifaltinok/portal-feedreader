<?php
namespace kouosl\feedreader\controllers\frontend;

use Yii;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use kouosl\feedreader\models\Feedreader;
use kouosl\feedreader\models\FeedreaderSearch;
/**
 * Default controller for the `feedreader` module
 */
class DefaultController extends \kouosl\base\controllers\frontend\BaseController
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
      $model = new Feedreader();
		$searchModel = new FeedreaderSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
		$dataProvider->query-> Where(1);
		//$dataProvider->query-> SELECT * FROM 'Konular' ;
        return $this->render('_index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }
    public function actionForm()
    {
        return $this->render('form');
    }
}
