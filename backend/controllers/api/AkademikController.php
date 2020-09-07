<?php

namespace backend\controllers\api;

/**
* This is the class for REST controller "AkademikController".
*/

use yii\filters\AccessControl;
use yii\helpers\ArrayHelper;

class AkademikController extends \yii\rest\ActiveController
{
public $modelClass = 'backend\models\Akademik';
}
