<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Form;

/**
 * FormSearch represents the model behind the search form about `app\models\Form`.
 */
class FormSearch extends Form
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_form', 'sesi_latihan', 'saran_masalah', 'status'], 'integer'],
            [['nama', 'cabang_olahraga', 'id_atlet', 'id_psikolog', 'waktu_input', 'catatan_fisik', 'recovery_lain', 'mental_skill_lain', 'kendala_mental_skill', 'saran_masalah_lain', 'hal_positif'], 'safe'],
            [['antusiasme_pre_latih', 'antusiasme_pos_latih', 'fisik', 'stres', 'konsentrasi', 'keyakinan', 'target', 'lelah', 'komunikasi', 'intensitas', 'hidrasi', 'tidur', 'nutrisi', 'recovery', 'mental_skill', 'scoring_mental', 'scoring_fisik', 'intensitas_target'], 'number'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Form::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id_form' => $this->id_form,
            'waktu_input' => $this->waktu_input,
            'sesi_latihan' => $this->sesi_latihan,
            'antusiasme_pre_latih' => $this->antusiasme_pre_latih,
            'antusiasme_pos_latih' => $this->antusiasme_pos_latih,
            'fisik' => $this->fisik,
            'stres' => $this->stres,
            'konsentrasi' => $this->konsentrasi,
            'keyakinan' => $this->keyakinan,
            'target' => $this->target,
            'lelah' => $this->lelah,
            'komunikasi' => $this->komunikasi,
            'intensitas' => $this->intensitas,
            'hidrasi' => $this->hidrasi,
            'tidur' => $this->tidur,
            'nutrisi' => $this->nutrisi,
            'recovery' => $this->recovery,
            'mental_skill' => $this->mental_skill,
            'saran_masalah' => $this->saran_masalah,
            'scoring_mental' => $this->scoring_mental,
            'scoring_fisik' => $this->scoring_fisik,
            'intensitas_target' => $this->intensitas_target,
            'status' => $this->status,
        ]);

        $query->andFilterWhere(['like', 'nama', $this->nama])
            ->andFilterWhere(['like', 'cabang_olahraga', $this->cabang_olahraga])
            ->andFilterWhere(['like', 'id_atlet', $this->id_atlet])
            ->andFilterWhere(['like', 'id_psikolog', $this->id_psikolog])
            ->andFilterWhere(['like', 'catatan_fisik', $this->catatan_fisik])
            ->andFilterWhere(['like', 'recovery_lain', $this->recovery_lain])
            ->andFilterWhere(['like', 'mental_skill_lain', $this->mental_skill_lain])
            ->andFilterWhere(['like', 'kendala_mental_skill', $this->kendala_mental_skill])
            ->andFilterWhere(['like', 'saran_masalah_lain', $this->saran_masalah_lain])
            ->andFilterWhere(['like', 'hal_positif', $this->hal_positif]);

        return $dataProvider;
    }
}
