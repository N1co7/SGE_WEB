<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tipo_carro".
 *
 * @property integer $id_tipo_carro
 * @property string $nombre
 *
 * @property Carro[] $carros
 */
class TipoCarro extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tipo_carro';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nombre'], 'required'],
            [['nombre'], 'string', 'max' => 30],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_tipo_carro' => 'Id Tipo Carro',
            'nombre' => 'Nombre',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCarros()
    {
        return $this->hasMany(Carro::className(), ['tipo_carro' => 'id_tipo_carro']);
    }
}
