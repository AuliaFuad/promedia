<?php

namespace backend\models;

use Yii;
use \backend\models\base\ProjectProgress as BaseProjectProgress;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "project_progress".
 */
class ProjectProgress extends BaseProjectProgress
{

public function behaviors()
    {
        return ArrayHelper::merge(
            parent::behaviors(),
            [
                # custom behaviors
            ]
        );
    }

    public function rules()
    {
        return ArrayHelper::merge(
             parent::rules(),
             [
                  # custom validation rules
             ]
        );
    }
}
