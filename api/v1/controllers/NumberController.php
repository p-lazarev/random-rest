<?php
namespace app\api\v1\controllers;

use app\api\v1\models\RandomNumber;
use yii\rest\ActiveController;
use yii\web\NotFoundHttpException;

class NumberController extends ActiveController
{
    public $modelClass = 'app\models\RandomNumber';

    public function actions()
    {
        return [];
    }

    public function actionGen()
    {
        $number =  new RandomNumber(['number' => rand()]);
        $number->save();

        return $number->getAttributes(['id', 'number']);
    }

    public function actionGet($id)
    {
        $number = RandomNumber::findOne($id);
        if (!$number) {
            throw new NotFoundHttpException();
        }

        return $number->getAttributes(['id', 'number']);
    }
}