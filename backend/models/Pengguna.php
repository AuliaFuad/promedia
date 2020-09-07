<?php

namespace backend\models;

use Yii;
use \backend\models\base\Pengguna as BasePengguna;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "pengguna".
 */
class Pengguna extends BasePengguna
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
