<?php

use yii\helpers\Html;

//echo '<h2>' . $title . '</h2>';
echo Html::tag('h2', $title);
echo Html::a('Go to view page', ['tag/view', 'id' => 10]);