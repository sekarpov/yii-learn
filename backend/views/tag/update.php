<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Tag */

$this->title = Yii::t('app', 'Update Tag: {name}', [
    'name' => $model->title,
]);
?>
<div class="tag-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
