<?php

use yii\helpers\Html;
use yii\widgets\ListView;

echo Html::tag('h2', $title);

echo ListView::widget([
   'dataProvider' => $dataProvider,
   'itemView' => '_news_item_short',
   'itemOptions' => ['tag' => null],
   'options' => ['class' => 'list-group'],
]);