<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "atlet".
 *
 * @property string $id_atlet
 * @property string $id_psikolog
 * @property string $nama
 * @property string $cabang_olahraga
 * @property integer $jenis_kelamin
 * @property string $tempat_lahir
 * @property string $tanggal_lahir
 * @property string $alamat
 * @property string $kota_asal
 * @property string $no_telefon
 * @property string $email
 * @property string $password
 * @property string $token
 * @property string $photo_profile
 * @property double $intensitas_target
 * @property integer $label
 * @property integer $status_verifikasi
 */
class Atlet extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'atlet';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_atlet', 'id_psikolog', 'nama', 'cabang_olahraga', 'jenis_kelamin', 'tempat_lahir', 'tanggal_lahir', 'alamat', 'kota_asal', 'no_telefon', 'email', 'password', 'token', 'photo_profile', 'intensitas_target', 'label', 'status_verifikasi'], 'required'],
            [['jenis_kelamin', 'label', 'status_verifikasi'], 'integer'],
            [['tanggal_lahir'], 'safe'],
            [['token'], 'string'],
            [['intensitas_target'], 'number'],
            [['id_atlet', 'id_psikolog'], 'string', 'max' => 12],
            [['nama', 'cabang_olahraga', 'tempat_lahir', 'alamat', 'kota_asal', 'no_telefon', 'email', 'password', 'photo_profile'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_atlet' => 'Id Atlet',
            'id_psikolog' => 'Id Psikolog',
            'nama' => 'Nama',
            'cabang_olahraga' => 'Cabang Olahraga',
            'jenis_kelamin' => 'Jenis Kelamin',
            'tempat_lahir' => 'Tempat Lahir',
            'tanggal_lahir' => 'Tanggal Lahir',
            'alamat' => 'Alamat',
            'kota_asal' => 'Kota Asal',
            'no_telefon' => 'No Telefon',
            'email' => 'Email',
            'password' => 'Password',
            'token' => 'Token',
            'photo_profile' => 'Photo Profile',
            'intensitas_target' => 'Intensitas Target',
            'label' => 'Label',
            'status_verifikasi' => 'Status Verifikasi',
        ];
    }
}
