<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\TipoEmergencia;

/**
 * TipoEmergenciaSearch represents the model behind the search form about `app\models\TipoEmergencia`.
 */
class TipoEmergenciaSearch extends TipoEmergencia
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_tipo_emergencia'], 'integer'],
            [['nombre', 'clave'], 'safe'],
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
        $query = TipoEmergencia::find();

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
            'id_tipo_emergencia' => $this->id_tipo_emergencia,
        ]);

        $query->andFilterWhere(['like', 'nombre', $this->nombre])
            ->andFilterWhere(['like', 'clave', $this->clave]);

        return $dataProvider;
    }
}
