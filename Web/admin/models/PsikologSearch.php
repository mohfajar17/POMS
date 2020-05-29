<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Psikolog;

/**
 * PsikologSearch represents the model behind the search form about `app\models\Psikolog`.
 */
class PsikologSearch extends Psikolog
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_psikolog', 'nama', 'tempat_lahir', 'tanggal_lahir', 'alamat', 'no_telefon', 'email', 'password', 'token', 'photo_profile'], 'safe'],
            [['jenis_kelamin', 'status_verifikasi'], 'integer'],
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
        $query = Psikolog::find();

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
            'jenis_kelamin' => $this->jenis_kelamin,
            'tanggal_lahir' => $this->tanggal_lahir,
            'status_verifikasi' => $this->status_verifikasi,
        ]);

        $query->andFilterWhere(['like', 'id_psikolog', $this->id_psikolog])
            ->andFilterWhere(['like', 'nama', $this->nama])
            ->andFilterWhere(['like', 'tempat_lahir', $this->tempat_lahir])
            ->andFilterWhere(['like', 'alamat', $this->alamat])
            ->andFilterWhere(['like', 'no_telefon', $this->no_telefon])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'password', $this->password])
            ->andFilterWhere(['like', 'token', $this->token])
            ->andFilterWhere(['like', 'photo_profile', $this->photo_profile]);

        return $dataProvider;
    }
}
