<?php

namespace backend\models;

use Yii;
use \backend\models\base\Alamat as BaseAlamat;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "alamat".
 */
class Alamat extends BaseAlamat
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
