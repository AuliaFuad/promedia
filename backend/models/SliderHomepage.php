<?php

namespace backend\models;

use Yii;
use \backend\models\base\SliderHomepage as BaseSliderHomepage;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "slider_homepage".
 */
class SliderHomepage extends BaseSliderHomepage
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
