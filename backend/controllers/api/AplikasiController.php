<?php

namespace backend\controllers\api;

/**
* This is the class for REST controller "AplikasiController".
*/

use yii\filters\AccessControl;
use yii\helpers\ArrayHelper;

class AplikasiController extends \yii\rest\ActiveController
{
public $modelClass = 'backend\models\Aplikasi';
}
