<?php

use backend\helpers\EnabledHelper;
use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = Yii::t('app', 'Categories');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="category-index">

    <?= Html::a(Yii::t('app', 'Create Category'), ['create'], ['class' => 'btn btn-success pull-right']) ?>
    <h1><?= Html::encode($this->title) ?></h1>



    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [

            'id',
            'title',
            'slug',
            [
                'attribute' => 'enabled',
                'filter' => EnabledHelper::getEnabledFilter(),
                'value' => function ($model, $key, $index, $column) {
                    return EnabledHelper::getEnabledView($model->enabled);
                }
            ],
            [
                'class' => 'yii\grid\ActionColumn',
                'template' => '{update} {delete}',
            ],
        ],
    ]); ?>


</div>
