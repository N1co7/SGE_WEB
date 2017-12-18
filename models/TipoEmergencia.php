<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tipo_emergencia".
 *
 * @property integer $id_tipo_emergencia
 * @property string $nombre
 * @property string $clave
 *
 * @property Emergencia[] $emergencias
 */
class TipoEmergencia extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tipo_emergencia';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nombre', 'clave'], 'required'],
            [['nombre'], 'string', 'max' => 40],
            [['clave'], 'string', 'max' => 10],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_tipo_emergencia' => 'Id Tipo Emergencia',
            'nombre' => 'Nombre',
            'clave' => 'Clave',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getEmergencias()
    {
        return $this->hasMany(Emergencia::className(), ['tipo_emergencia' => 'id_tipo_emergencia']);
    }
}
