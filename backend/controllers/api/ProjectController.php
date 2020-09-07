<?php

namespace backend\controllers\api;

/**
* This is the class for REST controller "ProjectController".
*/

use yii\filters\AccessControl;
use yii\helpers\ArrayHelper;

class ProjectController extends \yii\rest\ActiveController
{
public $modelClass = 'backend\models\Project';
}
