<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "grifo".
 *
 * @property integer $id_grifo
 * @property double $latitud
 * @property double $longitud
 * @property integer $nro_grifo
 * @property string $direccion
 */
class Grifo extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'grifo';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['latitud', 'longitud', 'nro_grifo', 'direccion'], 'required'],
            [['latitud', 'longitud'], 'number'],
            [['direccion'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_grifo' => 'Id Grifo',
            'latitud' => 'Latitud',
            'longitud' => 'Longitud',
            'nro_grifo' => 'Nro Grifo',
            'direccion' => 'Direccion',
        ];
    }
}
