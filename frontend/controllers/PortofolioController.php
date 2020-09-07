<?php
/**
 * Created by PhpStorm.
 * User: K0D1K
 * Date: 17/04/2018
 * Time: 16:52
 */

namespace frontend\controllers;

use backend\models\Alamat;
use backend\models\Berita;
use backend\models\Kategori;
use backend\models\Portofolio;
use backend\models\Service;
use Yii;
use yii\base\InvalidParamException;
use yii\data\ActiveDataProvider;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use yii\web\HttpException;

/**
 * Site controller
 */
class PortofolioController extends Controller
{

     public function actionIndex()
    {
        $model = Portofolio::find()->orderBy(['id' => SORT_DESC]);
        $dataProvider = new ActiveDataProvider([
            'query' => $model,
            'pagination' => [
                'pageSize' => 6,
            ],
        ]);

        return $this->render('index',[
            'dataProvider' => $dataProvider
        ]);
    }

    public function actionBaca($id)
    {
        $model = $this->findModel($id);
        return $this->render('baca',[
            'model' => $model,

        ]);
    }

    protected function findModel($id)
    {
        if (($model = Portofolio::findOne($id)) !== null) {
            return $model;
        } else {
            throw new HttpException(404, 'The requested page does not exist.');
        }
    }
}
