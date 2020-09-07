<?php

namespace backend\controllers\api;

/**
* This is the class for REST controller "PerusahaanSatuController".
*/

use yii\filters\AccessControl;
use yii\helpers\ArrayHelper;

class PerusahaanSatuController extends \yii\rest\ActiveController
{
public $modelClass = 'backend\models\PerusahaanSatu';
}
