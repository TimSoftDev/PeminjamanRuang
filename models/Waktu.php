<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "waktu".
 *
 * @property integer $sesi
 * @property string $jam
 *
 * @property Pesanan[] $pesanans
 */
class Waktu extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'waktu';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['sesi', 'jam'], 'required'],
            [['sesi'], 'integer'],
            [['jam'], 'string', 'max' => 16],
            [['sesi'], 'unique'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'sesi' => 'Sesi',
            'jam' => 'Jam',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPesanans()
    {
        return $this->hasMany(Pesanan::className(), ['sesi_waktu' => 'sesi']);
    }
}
