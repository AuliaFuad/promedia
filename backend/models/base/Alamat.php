<?php
// This class was automatically generated by a giiant build task
// You should not change it manually as it will be overwritten on next build

namespace backend\models\base;

use Yii;

/**
 * This is the base-model class for table "alamat".
 *
 * @property integer $id
 * @property string $alamat
 * @property string $no_kantor
 * @property string $email
 * @property string $aliasModel
 */
abstract class Alamat extends \yii\db\ActiveRecord
{



    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'alamat';
    }


    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['alamat', 'no_kantor', 'email'], 'required'],
            [['alamat'], 'string', 'max' => 250],
            [['no_kantor'], 'string', 'max' => 15],
            [['email'], 'string', 'max' => 50]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'alamat' => 'Alamat',
            'no_kantor' => 'No Kantor',
            'email' => 'Email',
        ];
    }




}