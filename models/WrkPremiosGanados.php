<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "wrk_premios_ganados".
 *
 * @property string $id_premio_ganado
 * @property string $id_premio
 * @property string $txt_token
 * @property string $fch_creacion
 *
 * @property EntPremios $idPremio
 */
class WrkPremiosGanados extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'wrk_premios_ganados';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_premio', 'txt_token'], 'required'],
            [['id_premio'], 'integer'],
            [['fch_creacion'], 'safe'],
            [['txt_token'], 'string', 'max' => 70],
            [['id_premio'], 'exist', 'skipOnError' => true, 'targetClass' => EntPremios::className(), 'targetAttribute' => ['id_premio' => 'id_premio']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_premio_ganado' => 'Id Premio Ganado',
            'id_premio' => 'Id Premio',
            'txt_token' => 'Txt Token',
            'fch_creacion' => 'Fch Creacion',
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
