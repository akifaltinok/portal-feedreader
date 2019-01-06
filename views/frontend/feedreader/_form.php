<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Feedreader */
/* @var $form yii\widgets\ActiveForm */

?>

<div class="feedreader-form">

    <?php $form = ActiveForm::begin(); ?>



    <?= $form->field($model, 'SiteURL')->textInput(['maxlength' => true]) ?>





    <?php ActiveForm::end(); ?>

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
