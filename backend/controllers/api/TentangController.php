<?php

namespace backend\controllers\api;

/**
* This is the class for REST controller "TentangController".
*/

use yii\filters\AccessControl;
use yii\helpers\ArrayHelper;

class TentangController extends \yii\rest\ActiveController
{
public $modelClass = 'backend\models\Tentang';
}
