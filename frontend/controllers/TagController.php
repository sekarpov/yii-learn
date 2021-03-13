<?php

namespace frontend\controllers;

use frontend\models\Tag;
use yii\web\Controller;
use yii\web\NotFoundHttpException;

class TagController extends Controller
{
    public function actionIndex()
    {
        $title = 'You ar on Category/Index page';
        return $this->render('index', ['title' => $title]);
    }

    public function actionView($id)
    {
        $model = Tag::findOne($id);

        if ($model === null) {
            throw new NotFoundHttpException('Page not found');
        }

        return $this->render('view', [
            'model' => $model
        ]);
    }
}