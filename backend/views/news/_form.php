<?php

use yii\helpers\Html;
use kartik\form\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\News */
/* @var $form kartik\form\ActiveForm */
?>

<div class="news-form">

    <?php $form = ActiveForm::begin(); ?>

    <div class="row">
        <div class="col-md-8"><?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?></div>
        <div class="col-md-4"><?= $form->field($model, 'slug')->textInput(['maxlength' => true]) ?></div>
    </div>

    <?= $form->field($model, 'category_id')->textInput() ?>

    <?= $form->field($model, 'description')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'enabled')->radioButtonGroup([
            0 => 'No',
            1 => 'Yes',
    ]) ?>

    <div class="form-group pull-right">
        <?= Html::a(Yii::t('app', 'Cancel'), ['news/index'],['class' => 'btn btn-default']) ?>
        <?= Html::submitButton(Yii::t('app', 'Save'), ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
