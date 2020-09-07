<?php
namespace frontend\controllers;

use backend\models\Alamat;
use backend\models\Berita;
use backend\models\Kategori;
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
class BeritaController extends Controller
{
    public function actionIndex()
    {
        $model = Berita::find()->orderBy(['id' => SORT_DESC]);
        $modelB = Berita::find()->orderBy(['id' => SORT_DESC])->limit(4)->all();
        $alamat = Alamat::find()->limit(1)->one();
        $dataProvider = new ActiveDataProvider([
            'query' => $model,
            'pagination' => [
                'pageSize' => 3,
            ],
        ]);
        $beritaAkhir = Berita::find()->orderBy(['id' => SORT_DESC])->limit(3)->all();
        $kategori = Kategori::find()->orderBy(['nama_kategori'=> SORT_ASC])->all();

        return $this->render('index',[
            'dataProvider' => $dataProvider,
            'kategori' => $kategori,
            'modelB' => $modelB,
            'beritaAkhir' => $beritaAkhir,
            'alamat' => $alamat
        ]);
    }
    public function actionBaca($id)
    {
        $model = $this->findModel($id);
        $berita = Berita::find()->orderBy(['id' => SORT_DESC])->all();
        $beritaAkhir = Berita::find()->orderBy(['id' => SORT_DESC])->limit(3)->all();
        $kategori = Kategori::find()->orderBy(['nama_kategori'=> SORT_ASC])->all();
        $alamat = Alamat::find()->limit(1)->one();
        return $this->render('baca',[
            'model' => $model,
            'berita' => $berita,
            'kategori' => $kategori,
            'beritaAkhir' => $beritaAkhir,
            'alamat' => $alamat
        ]);
    }
    public function actionKategori($id)
    {
        $berita = Berita::find()->where(['id_kategori'=>$id])->orderBy(['id' => SORT_DESC])->all();
        $beritaAkhir = Berita::find()->where(['id_kategori'=>$id])->orderBy(['id' => SORT_DESC])->limit(3)->all();
        $kategori = Kategori::find()->orderBy(['nama_kategori'=> SORT_ASC])->all();
        return $this->render('kategori',[
            'berita' => $berita,
            'kategori' => $kategori,
            'beritaAkhir' => $beritaAkhir
        ]);
    }

    protected function findModel($id)
    {
        if (($model = Berita::findOne($id)) !== null) {
            return $model;
        } else {
            throw new HttpException(404, 'The requested page does not exist.');
        }
    }
}