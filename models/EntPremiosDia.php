<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ent_premios_dia".
 *
 * @property string $id_premio_dia
 * @property string $id_premio
 * @property string $fch_premio_habilitado
 * @property string $txt_token
 * @property string $num_cantidad
 *
 * @property EntPremios $idPremio
 */
class EntPremiosDia extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'ent_premios_dia';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_premio', 'txt_token', 'num_cantidad'], 'required'],
            [['id_premio', 'num_cantidad'], 'integer'],
            [['fch_premio_habilitado'], 'safe'],
            [['txt_token'], 'string', 'max' => 50],
            [['id_premio'], 'exist', 'skipOnError' => true, 'targetClass' => EntPremios::className(), 'targetAttribute' => ['id_premio' => 'id_premio']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_premio_dia' => 'Id Premio Dia',
            'id_premio' => 'Id Premio',
            'fch_premio_habilitado' => 'Fch Premio Habilitado',
            'txt_token' => 'Txt Token',
            'num_cantidad' => 'Num Cantidad',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdPremio()
    {
        return $this->hasOne(EntPremios::className(), ['id_premio' => 'id_premio']);
    }
}
