<?php
// This class was automatically generated by a giiant build task
// You should not change it manually as it will be overwritten on next build

namespace backend\models\base;

use Yii;

/**
 * This is the base-model class for table "aplikasi".
 *
 * @property integer $id
 * @property string $nama_app
 * @property string $link_fb
 * @property string $link_twitter
 * @property string $link_linkedin
 * @property string $link_instagram
 * @property string $aliasModel
 */
abstract class Aplikasi extends \yii\db\ActiveRecord
{



    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'aplikasi';
    }


    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nama_app'], 'required'],
            [['nama_app', 'link_fb', 'link_twitter', 'link_linkedin', 'link_instagram'], 'string', 'max' => 50]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nama_app' => 'Nama Perusahaan',
            'link_fb' => 'Facebook',
            'link_twitter' => 'Twitter',
            'link_linkedin' => 'Linkedin',
            'link_instagram' => 'Instagram',
        ];
    }




}
