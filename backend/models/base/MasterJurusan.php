<?php
// This class was automatically generated by a giiant build task
// You should not change it manually as it will be overwritten on next build

namespace backend\models\base;

use Yii;

/**
 * This is the base-model class for table "master_jurusan".
 *
 * @property integer $id
 * @property string $nama_jurusan
 *
 * @property \backend\models\Akademik[] $akademiks
 * @property string $aliasModel
 */
abstract class MasterJurusan extends \yii\db\ActiveRecord
{



    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'master_jurusan';
    }


    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nama_jurusan'], 'required'],
            [['nama_jurusan'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nama_jurusan' => 'Nama Jurusan',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAkademiks()
    {
        return $this->hasMany(\backend\models\Akademik::className(), ['jurusan' => 'id']);
    }




}
