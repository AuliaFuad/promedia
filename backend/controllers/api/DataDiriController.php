<?php

namespace backend\controllers\api;

/**
* This is the class for REST controller "DataDiriController".
*/

use yii\filters\AccessControl;
use yii\helpers\ArrayHelper;

class DataDiriController extends \yii\rest\ActiveController
{
public $modelClass = 'backend\models\DataDiri';
}
