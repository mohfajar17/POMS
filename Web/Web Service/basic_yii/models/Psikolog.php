<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "psikolog".
 *
 * @property string $id_psikolog
 * @property string $nama
 * @property integer $jenis_kelamin
 * @property string $tempat_lahir
 * @property string $tanggal_lahir
 * @property string $alamat
 * @property string $no_telefon
 * @property string $email
 * @property string $password
 * @property string $token
 * @property string $photo_profile
 * @property integer $status_verifikasi
 */
class Psikolog extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'psikolog';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_psikolog', 'nama', 'jenis_kelamin', 'tempat_lahir', 'tanggal_lahir', 'alamat', 'no_telefon', 'email', 'password', 'token', 'photo_profile', 'status_verifikasi'], 'required'],
            [['jenis_kelamin', 'status_verifikasi'], 'integer'],
            [['tanggal_lahir'], 'safe'],
            [['token'], 'string'],
            [['id_psikolog'], 'string', 'max' => 12],
            [['nama', 'tempat_lahir', 'alamat', 'no_telefon', 'email', 'password', 'photo_profile'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_psikolog' => 'Id Psikolog',
            'nama' => 'Nama',
            'jenis_kelamin' => 'Jenis Kelamin',
            'tempat_lahir' => 'Tempat Lahir',
            'tanggal_lahir' => 'Tanggal Lahir',
            'alamat' => 'Alamat',
            'no_telefon' => 'No Telefon',
            'email' => 'Email',
            'password' => 'Password',
            'token' => 'Token',
            'photo_profile' => 'Photo Profile',
            'status_verifikasi' => 'Status Verifikasi',
        ];
    }
}
