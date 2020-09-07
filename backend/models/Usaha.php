<?php

namespace backend\models;

use Yii;
use \backend\models\base\Usaha as BaseUsaha;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "usaha".
 */
class Usaha extends BaseUsaha
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
