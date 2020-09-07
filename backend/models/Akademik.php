<?php

namespace backend\models;

use Yii;
use \backend\models\base\Akademik as BaseAkademik;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "akademik".
 */
class Akademik extends BaseAkademik
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
