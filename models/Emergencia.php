<?php

namespace app\models;

use Yii; 

/**
 * This is the model class for table "emergencia".
 *
 * @property integer $id_emergencia
 * @property string $descripcion
 * @property string $direccion
 * @property integer $tipo_emergencia
 * @property integer $voluntario
 * @property double $latitud
 * @property double $longitud
 * @property integer $nro_emergencia
 * @property integer $estado
 *
 * @property TipoEmergencia $tipoEmergencia
 * @property Voluntario $voluntario0
 * @property EstadoEmergencia $estado0
 */
class Emergencia extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'emergencia';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['descripcion', 'direccion', 'tipo_emergencia', 'latitud', 'longitud', 'estado', 'nro_emergencia'], 'required'],
            [['descripcion'], 'string'],
            [['tipo_emergencia', 'voluntario', 'estado'], 'integer'],
            [['latitud', 'longitud'], 'number'],
            [['direccion'], 'string', 'max' => 255],
            [['tipo_emergencia'], 'exist', 'skipOnError' => true, 'targetClass' => TipoEmergencia::className(), 'targetAttribute' => ['tipo_emergencia' => 'id_tipo_emergencia']],
            [['voluntario'], 'exist', 'skipOnError' => true, 'targetClass' => Voluntario::className(), 'targetAttribute' => ['voluntario' => 'id_voluntario']],
            [['estado'], 'exist', 'skipOnError' => true, 'targetClass' => EstadoEmergencia::className(), 'targetAttribute' => ['estado' => 'id_estado_emergencia']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_emergencia' => 'Id Emergencia',
            'descripcion' => 'Descripcion',
            'direccion' => 'Direccion',
            'tipo_emergencia' => 'Tipo Emergencia',
            'voluntario' => 'Voluntario',
            'latitud' => 'Latitud',
            'longitud' => 'Longitud',
            'nro_emergencia' => 'Nro Emergencia',
            'estado' => 'Estado',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTipoEmergencia()
    {
        return $this->hasOne(TipoEmergencia::className(), ['id_tipo_emergencia' => 'tipo_emergencia']);
    }
    public function getTipoEmergencianombre()
    {
        return $this->tipoEmergencia->nombre;
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getVoluntario0()
    {
        return $this->hasOne(Voluntario::className(), ['id_voluntario' => 'voluntario']);
    }
    public function getVoluntarionombre()
    {
        return $this->voluntario0->nombre;
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEstado0()
    {
        return $this->hasOne(EstadoEmergencia::className(), ['id_estado_emergencia' => 'estado']);
    }
}
