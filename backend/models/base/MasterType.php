<?php
// This class was automatically generated by a giiant build task
// You should not change it manually as it will be overwritten on next build

namespace backend\models\base;

use Yii;

/**
 * This is the base-model class for table "master_type".
 *
 * @property integer $id
 * @property string $nama_type
 * @property string $aliasModel
 */
abstract class MasterType extends \yii\db\ActiveRecord
{



    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'master_type';
    }


    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nama_type'], 'required'],
            [['nama_type'], 'string', 'max' => 25]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nama_type' => 'Nama Type',
        ];
    }




}
