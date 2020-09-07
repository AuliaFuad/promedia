<?php

namespace backend\models;

use Yii;
use \backend\models\base\MasterJurusan as BaseMasterJurusan;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "master_jurusan".
 */
class MasterJurusan extends BaseMasterJurusan
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
