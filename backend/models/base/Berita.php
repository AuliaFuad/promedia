<?php
// This class was automatically generated by a giiant build task
// You should not change it manually as it will be overwritten on next build

namespace backend\models\base;

use Yii;

/**
 * This is the base-model class for table "berita".
 *
 * @property integer $id
 * @property integer $id_kategori
 * @property string $judul
 * @property string $isi_berita
 * @property string $tanggal
 * @property string $foto
 * @property integer $id_user
 *
 * @property \backend\models\Kategori $idKategori
 * @property \backend\models\User $idUser
 * @property \backend\models\User $idUser0
 * @property string $aliasModel
 */
abstract class Berita extends \yii\db\ActiveRecord
{


    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'berita';
    }


    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_kategori', 'judul', 'isi_berita', 'tanggal', 'id_user'], 'required'],
            [['id_kategori', 'id_user'], 'integer'],
            [['isi_berita'], 'string'],
            [['tanggal'], 'safe'],
            [['judul'], 'string', 'max' => 200],
            [['foto'], 'string', 'max' => 250],
            [['id_kategori'], 'exist', 'skipOnError' => true, 'targetClass' => \backend\models\Kategori::className(), 'targetAttribute' => ['id_kategori' => 'id']],
            [['id_user'], 'exist', 'skipOnError' => true, 'targetClass' => \backend\models\User::className(), 'targetAttribute' => ['id_user' => 'id']],
            [['id_user'], 'exist', 'skipOnError' => true, 'targetClass' => \backend\models\User::className(), 'targetAttribute' => ['id_user' => 'id']]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_kategori' => 'Kategori',
            'judul' => 'Judul',
            'isi_berita' => 'Isi Berita',
            'tanggal' => 'Tanggal',
            'foto' => 'Foto',
            'id_user' => 'User',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdKategori()
    {
        return $this->hasOne(\backend\models\Kategori::className(), ['id' => 'id_kategori']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdUser()
    {
        return $this->hasOne(\backend\models\User::className(), ['id' => 'id_user']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdUser0()
    {
        return $this->hasOne(\backend\models\User::className(), ['id' => 'id_user']);
    }


}
