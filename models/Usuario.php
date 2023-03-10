<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "usuario".
 *
 * @property int $id
 * @property string $nom
 * @property string $ap
 * @property string $am
 * @property string $correo
 * @property string $pass
 * @property string $tel
 * @property string $tipo
 *
 * @property Accion[] $accions
 */
class Usuario extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'usuario';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nom', 'ap', 'am', 'correo', 'pass', 'tel', 'tipo'], 'required'],
            [['tipo'], 'string'],
            [['nom', 'ap', 'am'], 'string', 'max' => 30],
            [['correo'], 'string', 'max' => 50],
            [['pass'], 'string', 'max' => 60],
            [['tel'], 'string', 'max' => 10],
            [['correo'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nom' => 'Nombre',
            'ap' => 'Apellido Paterno',
            'am' => 'Apellido Materno',
            'correo' => 'Correo',
            'pass' => 'Contraseña',
            'tel' => 'Telefono',
            'tipo' => 'Tipo',
        ];
    }

    /**
     * Gets query for [[Accions]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAccions()
    {
        return $this->hasMany(Accion::class, ['id_usuario' => 'id']);
    }
}