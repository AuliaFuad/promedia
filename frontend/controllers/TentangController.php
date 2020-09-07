<?php
namespace frontend\controllers;
use backend\models\Alamat;
use backend\models\Tentang;
use dmstr\bootstrap\Tabs;
use Yii;
use yii\base\InvalidParamException;
use yii\helpers\Url;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use yii\web\HttpException;

/**
 * Site controller
 */
class TentangController extends Controller
{
    public function actionIndex()
    {
        $model = Tentang::find()->where(['id' => 1])->one();
        return $this->render('index',[
            'model' => $model
        ]);
    }
}