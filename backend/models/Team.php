<?php

namespace backend\models;

use Yii;
use \backend\models\base\Team as BaseTeam;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "team".
 */
class Team extends BaseTeam
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
