<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "voluntario".
 *
 * @property integer $id_voluntario
 * @property string $nombre
 * @property string $correo
 * @property string $direccion
 * @property integer $telefono
 *
 * @property Emergencia[] $emergencias
 */
class Voluntario extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'voluntario';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nombre'], 'required'],
            [['telefono'], 'integer'],
            [['nombre', 'correo'], 'string', 'max' => 30],
            [['direccion'], 'string', 'max' => 40],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_voluntario' => 'Id Voluntario',
            'nombre' => 'Nombre',
            'correo' => 'Correo',
            'direccion' => 'Direccion',
            'telefono' => 'Telefono',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEmergencias()
    {
        return $this->hasMany(Emergencia::className(), ['voluntario' => 'id_voluntario']);
    }
}
