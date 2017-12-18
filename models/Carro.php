<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "carro".
 *
 * @property integer $id_carro
 * @property string $codigo
 * @property string $patente
 * @property integer $estado
 * @property integer $tipo_carro
 *
 * @property TipoCarro $tipoCarro
 * @property EstadoCarro $estado0
 * @property Emergencia[] $emergencias
 */
class Carro extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'carro';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['codigo', 'patente', 'estado', 'tipo_carro'], 'required'],
            [['estado', 'tipo_carro'], 'integer'],
            [['codigo'], 'string', 'max' => 10],
            [['patente'], 'string', 'max' => 8],
            [['tipo_carro'], 'exist', 'skipOnError' => true, 'targetClass' => TipoCarro::className(), 'targetAttribute' => ['tipo_carro' => 'id_tipo_carro']],
            [['estado'], 'exist', 'skipOnError' => true, 'targetClass' => EstadoCarro::className(), 'targetAttribute' => ['estado' => 'id_estado_carro']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_carro' => 'Id Carro',
            'codigo' => 'Codigo',
            'patente' => 'Patente',
            'estado' => 'Estado',
            'tipo_carro' => 'Tipo Carro',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTipoCarro()
    {
        return $this->hasOne(TipoCarro::className(), ['id_tipo_carro' => 'tipo_carro']);
    }
    public function getTipoCarronombre()
    {
        return $this->tipoCarro->nombre;
    }


    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEstado0()
    {
        return $this->hasOne(EstadoCarro::className(), ['id_estado_carro' => 'estado']);
    }
     public function getEstadonombre()
    {
        return $this->estado0->nombre;
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEmergencias()
    {
        return $this->hasMany(Emergencia::className(), ['carro' => 'id_carro']);
    }
    
}
