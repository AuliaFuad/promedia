<?php
// This class was automatically generated by a giiant build task
// You should not change it manually as it will be overwritten on next build

namespace backend\models\base;

use Yii;
use yii\behaviors\TimestampBehavior;

/**
 * This is the base-model class for table "pengguna".
 *
 * @property integer $id
 * @property double $nim
 * @property string $auth_key
 * @property string $password_hash
 * @property string $password_reset_token
 * @property integer $status
 * @property integer $created_at
 * @property integer $updated_at
 *
 * @property \backend\models\DataDiri[] $dataDiris
 * @property \backend\models\PerusahaanSatu[] $perusahaanSatus
 * @property string $aliasModel
 */
abstract class Pengguna extends \yii\db\ActiveRecord
{



    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'pengguna';
    }


    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            [
                'class' => TimestampBehavior::className(),
            ],
        ];
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nim', 'auth_key', 'password_hash'], 'required'],
            [['nim'], 'number'],
            [['status'], 'integer'],
            [['auth_key'], 'string', 'max' => 32],
            [['password_hash', 'password_reset_token'], 'string', 'max' => 255],
            [['nim'], 'unique'],
            [['password_reset_token'], 'unique']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nim' => 'Nim',
            'auth_key' => 'Auth Key',
            'password_hash' => 'Password Hash',
            'password_reset_token' => 'Password Reset Token',
            'status' => 'Status',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDataDiris()
    {
        return $this->hasMany(\backend\models\DataDiri::className(), ['id_pengguna' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPerusahaanSatus()
    {
        return $this->hasMany(\backend\models\PerusahaanSatu::className(), ['id_pengguna' => 'id']);
    }




}