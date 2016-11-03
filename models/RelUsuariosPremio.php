<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "rel_usuarios_premio".
 *
 * @property string $id_usuario
 * @property string $id_premio
 * @property string $txt_codigo
 *
 * @property EntUsuarios $idUsuario
 * @property EntPremios $idPremio
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
            [['id_usuario'], 'exist', 'skipOnError' => true, 'targetClass' => EntUsuarios::className(), 'targetAttribute' => ['id_usuario' => 'id_usuario']],
            [['id_premio'], 'exist', 'skipOnError' => true, 'targetClass' => EntPremios::className(), 'targetAttribute' => ['id_premio' => 'id_premio']],
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

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdUsuario()
    {
        return $this->hasOne(EntUsuarios::className(), ['id_usuario' => 'id_usuario']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdPremio()
    {
        return $this->hasOne(EntPremios::className(), ['id_premio' => 'id_premio']);
    }
}
