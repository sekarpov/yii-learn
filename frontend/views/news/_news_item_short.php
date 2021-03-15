<?php

use yii\helpers\Html;
use yii\helpers\StringHelper;

$descripiton = StringHelper::truncateWords(strip_tags($model->description), 20);

echo Html::a(
    Html::encode($model->title) . Html::tag('br') . Html::tag('small', $descripiton,   ['class' => 'text-muted']),
    ['news/view', 'id' => $model->id],
    ['class' => 'list-group-item']
);