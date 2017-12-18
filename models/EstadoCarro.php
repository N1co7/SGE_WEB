<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "estado_carro".
 *
 * @property integer $id_estado_carro
 * @property string $nombre
 *
 * @property Carro[] $carros
 */
class EstadoCarro extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'estado_carro';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nombre'], 'required'],
            [['nombre'], 'string', 'max' => 15],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_estado_carro' => 'Id Estado Carro',
            'nombre' => 'Nombre',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCarros()
    {
        return $this->hasMany(Carro::className(), ['estado' => 'id_estado_carro']);
    }
}
