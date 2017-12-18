<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "usuario".
 *
 * @property integer $id_usuario
 * @property string $nombre_usuario
 * @property string $login_usuario
 * @property string $contrasena_usuario
 * @property integer $perfil
 *
 * @property Perfil $perfil0
 */
class Usuario extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'usuario';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nombre_usuario', 'login_usuario', 'contrasena_usuario', 'perfil'], 'required'],
            [['perfil'], 'integer'],
            [['nombre_usuario', 'login_usuario', 'contrasena_usuario'], 'string', 'max' => 15],
            [['perfil'], 'exist', 'skipOnError' => true, 'targetClass' => Perfil::className(), 'targetAttribute' => ['perfil' => 'id_perfil']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_usuario' => 'Id Usuario',
            'nombre_usuario' => 'Nombre Usuario',
            'login_usuario' => 'Login Usuario',
            'contrasena_usuario' => 'Contrasena Usuario',
            'perfil' => 'Perfil',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPerfil0()
    {
        return $this->hasOne(Perfil::className(), ['id_perfil' => 'perfil']);
    }
    public function getPerfilnombre()
    {
        return $this->perfil0->nombre_perfil; 
    }
}
