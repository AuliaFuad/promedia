<?php

namespace backend\controllers\api;

/**
* This is the class for REST controller "MasterJurusanController".
*/

use yii\filters\AccessControl;
use yii\helpers\ArrayHelper;

class MasterJurusanController extends \yii\rest\ActiveController
{
public $modelClass = 'backend\models\MasterJurusan';
}
