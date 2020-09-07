<?php
namespace frontend\controllers;
use backend\models\Alamat;
use backend\models\Project;
use dmstr\bootstrap\Tabs;
use Yii;
use yii\base\InvalidParamException;
use yii\helpers\Url;
use yii\data\ActiveDataProvider;
use yii\web\BadRequestHttpException;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use yii\web\HttpException;

/**
 * Site controller
 */
class ProjectController extends Controller
{
   public function actionIndex()
    {
        $model = Project::find()->orderBy(['id' => SORT_DESC]);
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
        if (($model = Project::findOne($id)) !== null) {
            return $model;
        } else {
            throw new HttpException(404, 'The requested page does not exist.');
        }
    }
}