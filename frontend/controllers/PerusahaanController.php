<?php
namespace frontend\controllers;

use backend\models\Berita;
use backend\models\Kategori;
use backend\models\PerusahaanSatu;
use backend\models\PerusahaanSatuSearch;
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
class PerusahaanController extends Controller
{
    public function actionIndex()
    {
        $searchModel = new PerusahaanSatuSearch();
        $dataProvider = $searchModel->search($_GET);
        Tabs::clearLocalStorage();

        Url::remember();
        \Yii::$app->session['__crudReturnUrl'] = null;

        return $this->render('index', [
            'dataProvider' => $dataProvider,
            'searchModel' => $searchModel,
        ]);
    }
}