<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Feedreader */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="feedreader-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'FeedID')->textInput() ?>

    <?= $form->field($model, 'SiteURL')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'Feed')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'SiteAuthor')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
