<?php

namespace backend\controllers\api;

/**
* This is the class for REST controller "ProjectProgressController".
*/

use yii\filters\AccessControl;
use yii\helpers\ArrayHelper;

class ProjectProgressController extends \yii\rest\ActiveController
{
public $modelClass = 'backend\models\ProjectProgress';
}
