<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "form".
 *
 * @property integer $id_form
 * @property string $nama
 * @property string $cabang_olahraga
 * @property string $id_atlet
 * @property string $id_psikolog
 * @property string $waktu_input
 * @property integer $sesi_latihan
 * @property double $antusiasme_pre_latih
 * @property double $antusiasme_pos_latih
 * @property double $fisik
 * @property string $catatan_fisik
 * @property double $stres
 * @property double $konsentrasi
 * @property double $keyakinan
 * @property double $target
 * @property double $lelah
 * @property double $komunikasi
 * @property double $intensitas
 * @property double $hidrasi
 * @property double $tidur
 * @property double $nutrisi
 * @property double $recovery
 * @property string $recovery_lain
 * @property double $mental_skill
 * @property string $mental_skill_lain
 * @property string $kendala_mental_skill
 * @property integer $saran_masalah
 * @property string $saran_masalah_lain
 * @property string $hal_positif
 * @property double $scoring_mental
 * @property double $scoring_fisik
 * @property double $intensitas_target
 * @property integer $status
 */
class Form extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'form';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nama', 'cabang_olahraga', 'id_atlet', 'id_psikolog', 'waktu_input', 'sesi_latihan', 'antusiasme_pre_latih', 'antusiasme_pos_latih', 'fisik', 'catatan_fisik', 'stres', 'konsentrasi', 'keyakinan', 'target', 'lelah', 'komunikasi', 'intensitas', 'hidrasi', 'tidur', 'nutrisi', 'recovery', 'recovery_lain', 'mental_skill', 'mental_skill_lain', 'kendala_mental_skill', 'saran_masalah', 'saran_masalah_lain', 'hal_positif', 'scoring_mental', 'scoring_fisik', 'intensitas_target', 'status'], 'required'],
            [['nama', 'cabang_olahraga', 'catatan_fisik', 'recovery_lain', 'mental_skill_lain', 'kendala_mental_skill', 'saran_masalah_lain', 'hal_positif'], 'string'],
            [['waktu_input'], 'safe'],
            [['sesi_latihan', 'saran_masalah', 'status'], 'integer'],
            [['antusiasme_pre_latih', 'antusiasme_pos_latih', 'fisik', 'stres', 'konsentrasi', 'keyakinan', 'target', 'lelah', 'komunikasi', 'intensitas', 'hidrasi', 'tidur', 'nutrisi', 'recovery', 'mental_skill', 'scoring_mental', 'scoring_fisik', 'intensitas_target'], 'number'],
            [['id_atlet', 'id_psikolog'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_form' => 'Id Form',
            'nama' => 'Nama',
            'cabang_olahraga' => 'Cabang Olahraga',
            'id_atlet' => 'Id Atlet',
            'id_psikolog' => 'Id Psikolog',
            'waktu_input' => 'Waktu Input',
            'sesi_latihan' => 'Sesi Latihan',
            'antusiasme_pre_latih' => 'Antusiasme Pre Latih',
            'antusiasme_pos_latih' => 'Antusiasme Pos Latih',
            'fisik' => 'Fisik',
            'catatan_fisik' => 'Catatan Fisik',
            'stres' => 'Stres',
            'konsentrasi' => 'Konsentrasi',
            'keyakinan' => 'Keyakinan',
            'target' => 'Target',
            'lelah' => 'Lelah',
            'komunikasi' => 'Komunikasi',
            'intensitas' => 'Intensitas',
            'hidrasi' => 'Hidrasi',
            'tidur' => 'Tidur',
            'nutrisi' => 'Nutrisi',
            'recovery' => 'Recovery',
            'recovery_lain' => 'Recovery Lain',
            'mental_skill' => 'Mental Skill',
            'mental_skill_lain' => 'Mental Skill Lain',
            'kendala_mental_skill' => 'Kendala Mental Skill',
            'saran_masalah' => 'Saran Masalah',
            'saran_masalah_lain' => 'Saran Masalah Lain',
            'hal_positif' => 'Hal Positif',
            'scoring_mental' => 'Scoring Mental',
            'scoring_fisik' => 'Scoring Fisik',
            'intensitas_target' => 'Intensitas Target',
            'status' => 'Status',
        ];
    }
}
