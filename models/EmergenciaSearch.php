<?php

namespace app\models;
 
use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Emergencia;

/**
 * EmergenciaSearch represents the model behind the search form about `app\models\Emergencia`.
 */
class EmergenciaSearch extends Emergencia
{
    /**
     * @inheritdoc
     */
    public $TipoEmergencianombre;
    public $Voluntarionombre;
    public function rules()
    {
        return [
            [['id_emergencia', 'tipo_emergencia', 'voluntario', 'nro_emergencia', 'estado'], 'integer'],
            [['descripcion', 'direccion', 'Voluntarionombre', 'TipoEmergencianombre'], 'safe'],
            [['latitud', 'longitud'], 'number'],
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
        $query = Emergencia::find();
         
        $query->joinWith(['tipoEmergencia']);
        $query->joinWith(['voluntario0']);

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
            'sort' => ['defaultOrder' => ['id_emergencia' => SORT_DESC]]
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id_emergencia' => $this->id_emergencia,
            'tipo_emergencia' => $this->tipo_emergencia,
            'voluntario' => $this->voluntario,
            'latitud' => $this->latitud,
            'longitud' => $this->longitud,
            'nro_emergencia' => $this->nro_emergencia,
            'estado' => $this->estado,
        ]);

        $query->andFilterWhere(['like', 'descripcion', $this->descripcion])
            ->andFilterWhere(['like', 'direccion', $this->direccion]);

        return $dataProvider;
    }
}
