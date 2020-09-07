<?php

namespace backend\models;

use Yii;
use \backend\models\base\Tentang as BaseTentang;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "tentang".
 */
class Tentang extends BaseTentang
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
