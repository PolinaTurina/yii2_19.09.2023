<?php

namespace app\controllers;

use app\models\Post;

class MyController extends \yii\web\Controller
{
    public function actionPage1()
    {
        $posts = Post::find()->asArray()->all();
        return $this->render('page1', compact( 'posts'));
    }

}
