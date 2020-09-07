<?php

namespace backend\controllers\api;

/**
* This is the class for REST controller "BisnisController".
*/

use yii\filters\AccessControl;
use yii\helpers\ArrayHelper;

class BisnisController extends \yii\rest\ActiveController
{
public $modelClass = 'backend\models\Bisnis';
}
