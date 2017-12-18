<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "estado_emergencia".
 *
 * @property integer $id_estado_emergencia
 * @property string $nombre
 *
 * @property Emergencia[] $emergencias
 */
class EstadoEmergencia extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'estado_emergencia';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nombre'], 'required'],
            [['nombre'], 'string', 'max' => 25],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_estado_emergencia' => 'Id Estado Emergencia',
            'nombre' => 'Nombre',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEmergencias()
    {
        return $this->hasMany(Emergencia::className(), ['estado' => 'id_estado_emergencia']);
    }
}
