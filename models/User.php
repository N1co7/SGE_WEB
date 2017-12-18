<?php

namespace app\models;
use app\models\Usuario;

class User extends \yii\base\Object implements \yii\web\IdentityInterface
{
    /*public $id;
    public $username;
    public $password;
    public $authKey;
    public $accessToken;)*/

    const ROLE_ADMIN = 1;

    public $id_usuario;
    public $nombre_usuario;
    public $login_usuario;
    public $contrasena_usuario;
    public $perfil;
    public $authKey;  

    /*private static $users = [
        '100' => [
            'id' => '100',
            'username' => 'admin',
            'password' => 'admin',
            'authKey' => 'test100key',
            'accessToken' => '100-token',
        ],
        '101' => [
            'id' => '101',
            'username' => 'demo',
            'password' => 'demo',
            'authKey' => 'test101key',
            'accessToken' => '101-token',
        ],
    ];
    */

    /**
     * @inheritdoc
     */
    public static function findIdentity($id)
    {
        //return isset(self::$users[$id]) ? new static(self::$users[$id]) : null;
        $user = Usuario::find()->where(['id_Usuario'=>$id])->one();
    
        if(count($user)){
            return new static($user);
        }
        return null;
    }
     public static function findByUsername($nombre_usuario)
    {
        $user = Usuario::find()->where(['login_usuario'=>$nombre_usuario])->one();
        if(count($user)){
            return new static($user);
        }
        return null;
    }
    public static function isUserAdmin($nombre_usuario){
      if (Usuario::find()->where(['nombre_usuario' => $nombre_usuario, 'perfil' => self::ROLE_ADMIN])->one()){
 
             return true;
      } else {
 
             return false;
      }
 
    }

    /**
     * @inheritdoc
     */
    public static function findIdentityByAccessToken($token, $type = null)
    {
        
    }

    /**
     * Finds user by username
     *
     * @param string $username
     * @return static|null
     */

    /**
     * @inheritdoc
     */
    public function getId()
    {
        return $this->id_usuario;
    }

    /**
     * @inheritdoc
     */
    public function getAuthKey()
    {
        return $this->authKey;
    }

    /**
     * @inheritdoc
     */
    public function validateAuthKey($authKey)
    {
        return $this->authKey === $authKey;
    }

    /**
     * Validates password
     *
     * @param string $password password to validate
     * @return boolean if password provided is valid for current user
     */
    public function validatePassword($password)
    {
        return $this->contrasena_usuario === $password;
    }
}
