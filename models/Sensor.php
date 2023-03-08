<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "sensor".
 *
 * @property int $id
 * @property string $ubicacion
 * @property int $estado
 *
 * @property Accion[] $accions
 * @property Movimientos[] $movimientos
 */
class Sensor extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'sensor';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ubicacion', 'estado'], 'required'],
            [['estado'], 'integer'],
            [['ubicacion'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'ubicacion' => 'Ubicacion',
            'estado' => 'Estado',
        ];
    }

    /**
     * Gets query for [[Accions]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAccions()
    {
        return $this->hasMany(Accion::class, ['id_sensor' => 'id']);
    }

    /**
     * Gets query for [[Movimientos]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMovimientos()
    {
        return $this->hasMany(Movimientos::class, ['id_sensor' => 'id']);
    }
}
