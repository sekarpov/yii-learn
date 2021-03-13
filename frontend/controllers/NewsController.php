<?php

namespace frontend\controllers;

use frontend\models\News;
use yii\web\Controller;
use yii\web\NotFoundHttpException;

class NewsController extends Controller
{
    public function actionIndex()
    {
        $title = 'You ar on News/Index page';
        return $this->render('index', ['title' => $title]);
    }

    public function actionView($id)
    {
        $model = News::findOne($id);

        if ($model === null) {
            throw new NotFoundHttpException('Page not found');
        }

        return $this->render('view', [
            'model' => $model
        ]);
    }
}