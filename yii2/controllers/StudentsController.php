<?php

namespace app\controllers;

class StudentsController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }

}
