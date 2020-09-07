<?php

namespace backend\models;

use Yii;
use \backend\models\base\DataDiri as BaseDataDiri;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "data_diri".
 */
class DataDiri extends BaseDataDiri
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
