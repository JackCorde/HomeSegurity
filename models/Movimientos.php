<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "movimientos".
 *
 * @property int $id
 * @property string $fecha
 * @property string $hora
 * @property int $id_sensor
 *
 * @property Sensor $sensor
 */
class Movimientos extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'movimientos';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['fecha', 'hora', 'id_sensor'], 'required'],
            [['fecha', 'hora'], 'safe'],
            [['id_sensor'], 'integer'],
            [['id_sensor'], 'exist', 'skipOnError' => true, 'targetClass' => Sensor::class, 'targetAttribute' => ['id_sensor' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'fecha' => 'Fecha',
            'hora' => 'Hora',
            'id_sensor' => 'Id Sensor',
        ];
    }

    /**
     * Gets query for [[Sensor]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSensor()
    {
        return $this->hasOne(Sensor::class, ['id' => 'id_sensor']);
    }
}
