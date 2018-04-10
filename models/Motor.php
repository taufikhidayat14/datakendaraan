<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "motor".
 *
 * @property integer $no
 * @property string $NIM
 * @property string $NAMA
 * @property string $NOPOL
 * @property string $NORANGKA
 */
class Motor extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'motor';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['NIM', 'NAMA', 'NOPOL', 'NORANGKA'], 'required'],
            [['NIM'], 'string', 'max' => 13],
            [['NAMA', 'NORANGKA'], 'string', 'max' => 50],
            [['NOPOL'], 'string', 'max' => 12],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'no' => 'No',
            'NIM' => 'Nim',
            'NAMA' => 'Nama',
            'NOPOL' => 'Nopol',
            'NORANGKA' => 'Norangka',
        ];
    }

    /**
     * @inheritdoc
     * @return MotorQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new MotorQuery(get_called_class());
    }
}
