<?php

namespace backend\models;

use Yii;
use \backend\models\base\Kategori as BaseKategori;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "kategori".
 */
class Kategori extends BaseKategori
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
