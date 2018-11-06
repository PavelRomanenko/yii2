<?php

namespace app\controllers;

use app\models\Test;
use yii\web\Controller;

class TaskController extends Controller
{

    public function actionIndex()
    {
        $model = new Test();

          $model->setAttributes([
              'title' => 'Yii2sgdfsdfsdfsdfsdf',
              'content' => 'lesson1',
              'date' => date("Y-m-d")
          ]);

       /* $model->load([
            'Test' => [
                'title' => 'Yii2',
                'content' => 'lesson1'
            ],
            ['hjsdfjhs', 'ksjdkskfj']
        ]);*/

        var_dump($model->toArray());
        //$model->title = "Yii2";


        var_dump($model->validate());
        var_dump($model->getErrors());
        exit;


        return $this->render('index', [
            'title' => 'Yii2',
            'content' => 'Hello, world!!!'
        ]);
    }
}