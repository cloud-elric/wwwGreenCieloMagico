<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "view_total_restante_dia".
 *
 * @property string $id_premio
 * @property string $txt_nombre
 * @property string $num_cantidad
 * @property string $num_cantidad_limite_dia
 * @property string $num_entregados_dia
 * @property string $num_restantes_dia
 */
class ViewTotalRestanteDia extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'view_total_restante_dia';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_premio', 'num_cantidad', 'num_entregados_dia'], 'integer'],
            [['txt_nombre'], 'required'],
            [['num_cantidad_limite_dia', 'num_restantes_dia'], 'number'],
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
            'txt_nombre' => 'Txt Nombre',
            'num_cantidad' => 'Num Cantidad',
            'num_cantidad_limite_dia' => 'Num Cantidad Limite Dia',
            'num_entregados_dia' => 'Num Entregados Dia',
            'num_restantes_dia' => 'Num Restantes Dia',
        ];
    }
}
