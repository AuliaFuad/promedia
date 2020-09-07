<?php
namespace backend\controllers;

use app\components\NodeLogger;
use backend\models\Berita;
use backend\models\DataDiri;
use backend\models\Portofolio;
use backend\models\Service;
use backend\models\User;
use Yii;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use common\models\LoginmemberForm;
use yii\web\UploadedFile;

/**
 * Site controller
 */
class SiteController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'rules' => [
                    [
                        'actions' => ['login', 'error'],
                        'allow' => true,
                    ],
                    [
                        'actions' => ['logout', 'index','profile'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        $totPortofolio = Portofolio::find()->count();
        $totBerita = Berita::find()->count();
        $totService = Service::find()->count();
        $totUser = User::find()->count();
        return $this->render('index',[
            'totPortofolio' => $totPortofolio,
            'totBerita' => $totBerita,
            'totService' => $totService,
            'totUser' => $totUser
        ]);
    }
    public function actionProfile()
    {
        $model = User::find()->where(["id" => Yii::$app->user->id])->one();
        $oldPassword = $model->password_hash;

        $model->password_hash = "";

        if ($model->load($_POST)) {
            //password
            if ($model->password_hash != "") {
                $model->password_hash = password_hash($model->password_hash, PASSWORD_DEFAULT);
            } else {
                $model->password_hash = $oldPassword;
            }


            if ($model->save()) {
                Yii::$app->session->addFlash("success", "Profile successfully updated.");
            } else {
                Yii::$app->session->addFlash("danger", "Profile cannot updated.");

            }
            return $this->redirect(["profile"]);
        }
        return $this->render('profile', [
            'model' => $model,
        ]);
    }

    /**
     * Login action.
     *
     * @return string
     */
//    public function actionLoginmember()
//    {
//        if (!Yii::$app->user->isGuest) {
//            return $this->goHome();
//        }
//
//        $model = new LoginmemberForm();
//        if ($model->load(Yii::$app->request->post()) && $model->login()) {
//            return $this->goBack();
//
//        } else {
//
//            return $this->render('loginmember', [
//                'model' => $model,
//            ]);
//
//        }
//    }
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();

        } else {

            return $this->render('login', [
                'model' => $model,
            ]);

        }
    }
    /**
     * Logout action.
     *
     * @return string
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }
}
