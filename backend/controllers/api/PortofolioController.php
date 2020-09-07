<?php

namespace backend\controllers\api;

/**
* This is the class for REST controller "PortofolioController".
*/

use yii\filters\AccessControl;
use yii\helpers\ArrayHelper;

class PortofolioController extends \yii\rest\ActiveController
{
public $modelClass = 'backend\models\Portofolio';
}
