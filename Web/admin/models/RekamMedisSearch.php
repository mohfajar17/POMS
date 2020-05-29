<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\RekamMedis;

/**
 * RekamMedisSearch represents the model behind the search form about `app\models\RekamMedis`.
 */
class RekamMedisSearch extends RekamMedis
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_rekam_medis', 'id_form', 'sesi_latihan', 'status_read'], 'integer'],
            [['id_atlet', 'id_psikolog', 'nama', 'cabang_olahraga', 'waktu_input', 'catatan_fisik', 'kendala_mental_skill', 'hal_positif', 'catatan_psikolog'], 'safe'],
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
        $query = RekamMedis::find();

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
            'id_rekam_medis' => $this->id_rekam_medis,
            'id_form' => $this->id_form,
            'waktu_input' => $this->waktu_input,
            'sesi_latihan' => $this->sesi_latihan,
            'status_read' => $this->status_read,
        ]);

        $query->andFilterWhere(['like', 'id_atlet', $this->id_atlet])
            ->andFilterWhere(['like', 'id_psikolog', $this->id_psikolog])
            ->andFilterWhere(['like', 'nama', $this->nama])
            ->andFilterWhere(['like', 'cabang_olahraga', $this->cabang_olahraga])
            ->andFilterWhere(['like', 'catatan_fisik', $this->catatan_fisik])
            ->andFilterWhere(['like', 'kendala_mental_skill', $this->kendala_mental_skill])
            ->andFilterWhere(['like', 'hal_positif', $this->hal_positif])
            ->andFilterWhere(['like', 'catatan_psikolog', $this->catatan_psikolog]);

        return $dataProvider;
    }
}
