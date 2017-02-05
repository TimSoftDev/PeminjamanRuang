<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "prodi".
 *
 * @property string $id
 * @property string $id_fakultas
 * @property string $nama
 *
 * @property Mahasiswa[] $mahasiswas
 * @property Fakultas $idFakultas
 */
class Prodi extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'prodi';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'id_fakultas', 'nama'], 'required'],
            [['id', 'id_fakultas'], 'string', 'max' => 8],
            [['nama'], 'string', 'max' => 32],
            [['id'], 'unique'],
            [['id_fakultas'], 'exist', 'skipOnError' => true, 'targetClass' => Fakultas::className(), 'targetAttribute' => ['id_fakultas' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_fakultas' => 'Id Fakultas',
            'nama' => 'Nama',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getMahasiswas()
    {
        return $this->hasMany(Mahasiswa::className(), ['id_prodi' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdFakultas()
    {
        return $this->hasOne(Fakultas::className(), ['id' => 'id_fakultas']);
    }
}
