<?php
// This class was automatically generated by a giiant build task
// You should not change it manually as it will be overwritten on next build

namespace backend\models\base;

use Yii;

/**
 * This is the base-model class for table "slider_homepage".
 *
 * @property integer $id
 * @property string $background
 * @property string $judul
 * @property string $kalimat
 * @property string $aliasModel
 */
abstract class SliderHomepage extends \yii\db\ActiveRecord
{



    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'slider_homepage';
    }


    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['background'], 'required'],
            [['background', 'judul','kalimat'], 'string', 'max' => 250]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'background' => 'Background',
            'judul' => 'Judul',
            'kalimat' => 'Isi'
        ];
    }




}
