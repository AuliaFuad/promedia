<?php

namespace backend\controllers\api;

/**
* This is the class for REST controller "UserController".
*/

use yii\filters\AccessControl;
use yii\helpers\ArrayHelper;

class UserController extends \yii\rest\ActiveController
{
public $modelClass = 'backend\models\User';
}
