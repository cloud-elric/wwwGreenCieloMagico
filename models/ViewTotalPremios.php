<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "view_total_premios".
 *
 * @property string $id_premio
 * @property string $txt_token
 * @property string $num_cantidad_inicial
 * @property string $txt_nombre
 * @property string $num_total_premios_entregados
 * @property string $num_premios_sobrantes
 */
class ViewTotalPremios extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'view_total_premios';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_premio', 'num_cantidad_inicial'], 'integer'],
            [['txt_nombre'], 'required'],
            [['num_total_premios_entregados', 'num_premios_sobrantes'], 'number'],
            [['txt_token'], 'string', 'max' => 60],
            [['txt_nombre'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id_premio' => 'Id Premio',
            'txt_token' => 'Txt Token',
            'num_cantidad_inicial' => 'Num Cantidad Inicial',
            'txt_nombre' => 'Txt Nombre',
            'num_total_premios_entregados' => 'Num Total Premios Entregados',
            'num_premios_sobrantes' => 'Num Premios Sobrantes',
        ];
    }
}
