<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Grifo;

/**
 * GrifoSearch represents the model behind the search form about `app\models\Grifo`.
 */
class GrifoSearch extends Grifo
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_grifo', 'nro_grifo'], 'integer'],
            [['latitud', 'longitud'], 'number'],
            [['direccion'], 'safe'],
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
        $query = Grifo::find();

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
            'id_grifo' => $this->id_grifo,
            'latitud' => $this->latitud,
            'longitud' => $this->longitud,
            'nro_grifo' => $this->nro_grifo,
        ]);

        $query->andFilterWhere(['like', 'direccion', $this->direccion]);

        return $dataProvider;
    }
}
