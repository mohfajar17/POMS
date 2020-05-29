<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "rekam_medis".
 *
 * @property integer $id_rekam_medis
 * @property integer $id_form
 * @property string $id_atlet
 * @property string $id_psikolog
 * @property string $nama
 * @property string $cabang_olahraga
 * @property string $waktu_input
 * @property integer $sesi_latihan
 * @property string $catatan_fisik
 * @property string $kendala_mental_skill
 * @property string $hal_positif
 * @property string $catatan_psikolog
 * @property integer $status_read
 */
class RekamMedis extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'rekam_medis';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_form', 'id_atlet', 'id_psikolog', 'nama', 'cabang_olahraga', 'waktu_input', 'sesi_latihan', 'catatan_fisik', 'kendala_mental_skill', 'hal_positif', 'catatan_psikolog', 'status_read'], 'required'],
            [['id_form', 'sesi_latihan', 'status_read'], 'integer'],
            [['waktu_input'], 'safe'],
            [['catatan_fisik', 'kendala_mental_skill', 'hal_positif', 'catatan_psikolog'], 'string'],
            [['id_atlet', 'id_psikolog', 'nama', 'cabang_olahraga'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_rekam_medis' => 'Id Rekam Medis',
            'id_form' => 'Id Form',
            'id_atlet' => 'Id Atlet',
            'id_psikolog' => 'Id Psikolog',
            'nama' => 'Nama',
            'cabang_olahraga' => 'Cabang Olahraga',
            'waktu_input' => 'Waktu Input',
            'sesi_latihan' => 'Sesi Latihan',
            'catatan_fisik' => 'Catatan Fisik',
            'kendala_mental_skill' => 'Kendala Mental Skill',
            'hal_positif' => 'Hal Positif',
            'catatan_psikolog' => 'Catatan Psikolog',
            'status_read' => 'Status Read',
        ];
    }
}
