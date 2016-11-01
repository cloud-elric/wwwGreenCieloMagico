<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ent_premios".
 *
 * @property string $id_premio
 * @property string $txt_nombre
 * @property string $txt_token
 * @property string $num_cantidad
 */
class EntPremios extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'ent_premios';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['txt_nombre'], 'required'],
            [['num_cantidad'], 'integer'],
            [['txt_nombre'], 'string', 'max' => 100],
            [['txt_token'], 'string', 'max' => 60],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_premio' => 'Id Premio',
            'txt_nombre' => 'Txt Nombre',
            'txt_token' => 'Txt Token',
            'num_cantidad' => 'Num Cantidad',
        ];
    }
}
