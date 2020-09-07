<?php

namespace backend\models;

use Yii;
use \backend\models\base\Aplikasi as BaseAplikasi;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "aplikasi".
 */
class Aplikasi extends BaseAplikasi
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
