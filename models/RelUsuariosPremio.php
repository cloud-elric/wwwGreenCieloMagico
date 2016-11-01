<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "rel_usuarios_premio".
 *
 * @property string $id_usuario
 * @property string $id_premio
 * @property string $txt_codigo
 */
class RelUsuariosPremio extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'rel_usuarios_premio';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_usuario', 'id_premio', 'txt_codigo'], 'required'],
            [['id_usuario', 'id_premio'], 'integer'],
            [['txt_codigo'], 'string', 'max' => 20],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_usuario' => 'Id Usuario',
            'id_premio' => 'Id Premio',
            'txt_codigo' => 'Txt Codigo',
        ];
    }
}
