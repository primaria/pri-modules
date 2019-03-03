<?php

namespace primaria\modules\controllers;

use yii\web\Controller;

class SiteController extends Controller
{
    // ...existing code...

    public function actionIndex($message = 'Hello')
    {
        return $this->render('index', ['message' => $message]);
    }
}