<?php

namespace backend\controllers\api;

/**
* This is the class for REST controller "KategoriController".
*/

use yii\filters\AccessControl;
use yii\helpers\ArrayHelper;

class KategoriController extends \yii\rest\ActiveController
{
public $modelClass = 'backend\models\Kategori';
}
