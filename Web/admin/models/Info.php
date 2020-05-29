<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "info".
 *
 * @property integer $id
 * @property string $id_pengirim
 * @property string $judul
 * @property string $dari
 * @property string $untuk
 * @property string $waktu
 * @property string $isi_info
 */
class Info extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'info';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_pengirim', 'judul', 'dari', 'untuk', 'waktu', 'isi_info'], 'required'],
            [['waktu'], 'safe'],
            [['isi_info'], 'string'],
            [['id_pengirim'], 'string', 'max' => 12],
            [['judul', 'dari', 'untuk'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_pengirim' => 'Id Pengirim',
            'judul' => 'Judul',
            'dari' => 'Dari',
            'untuk' => 'Untuk',
            'waktu' => 'Waktu',
            'isi_info' => 'Isi Info',
        ];
    }
}
