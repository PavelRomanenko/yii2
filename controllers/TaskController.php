<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;

class TaskController extends Controller
{
    public function actionIndex()
    {
        echo "Run action... Welcom!";
        exit;
    }
}
