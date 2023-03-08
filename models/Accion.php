<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "accion".
 *
 * @property int $id
 * @property string $fecha
 * @property string $hora
 * @property int $id_usuario
 * @property int $id_sensor
 * @property string $accion
 *
 * @property Sensor $sensor
 * @property Usuario $usuario
 */
class Accion extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'accion';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['fecha', 'hora', 'id_usuario', 'id_sensor', 'accion'], 'required'],
            [['fecha', 'hora'], 'safe'],
            [['id_usuario', 'id_sensor'], 'integer'],
            [['accion'], 'string'],
            [['id_usuario'], 'exist', 'skipOnError' => true, 'targetClass' => Usuario::class, 'targetAttribute' => ['id_usuario' => 'id']],
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
            'id_usuario' => 'Id Usuario',
            'id_sensor' => 'Id Sensor',
            'accion' => 'Accion',
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

    /**
     * Gets query for [[Usuario]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUsuario()
    {
        return $this->hasOne(Usuario::class, ['id' => 'id_usuario']);
    }
}
