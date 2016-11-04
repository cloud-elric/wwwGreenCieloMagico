<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ent_usuarios".
 *
 * @property string $id_usuario
 * @property string $txt_token
 * @property string $txt_nombre
 * @property string $txt_email
 * @property string $txt_cp
 * @property string $txt_apellido_paterno
 * @property string $tel_numero_celular
 * @property string $fch_creacion
 * @property string $fch_nacimiento
 */
class EntUsuarios extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'ent_usuarios';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['txt_token', 'txt_nombre', 'txt_cp', 'txt_apellido_paterno', 'tel_numero_celular','fch_nacimiento','txt_email'], 'required', 'message'=>'Campo requerido'],
            [['fch_creacion'], 'safe'],
        	['txt_email', 'email', 'message'=>'Ingrese una dirección válida'],
            [['txt_token'], 'string', 'max' => 60],
            [['txt_nombre', 'txt_email', 'txt_apellido_paterno', 'tel_numero_celular'], 'string', 'max' => 50],
            [['txt_cp'], 'string', 'max' => 5],
            [['txt_token'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_usuario' => 'Id Usuario',
            'txt_token' => 'Txt Token',
            'txt_nombre' => 'Nombre',
            'txt_email' => 'Mail',
            'txt_cp' => 'C.P.',
            'txt_apellido_paterno' => 'Apellido',
            'tel_numero_celular' => 'Celular',
            'fch_creacion' => 'Fch Creacion',
            'fch_nacimiento' => 'Fecha de Nacimiento',
        ];
    }
}
