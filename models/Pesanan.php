<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pesanan".
 *
 * @property integer $id
 * @property string $nim
 * @property string $id_ruang
 * @property string $tanggal_mulai
 * @property string $tanggal_selesai
 * @property string $no_surat
 * @property string $tanggal_input
 * @property string $tanggal_verifikasi
 *
 * @property Ruang $idRuang
 * @property User $nim0
 */
class Pesanan extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'pesanan';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nim', 'id_ruang', 'tanggal_mulai', 'tanggal_selesai', 'no_surat', 'tanggal_verifikasi'], 'required'],
            [['tanggal_mulai', 'tanggal_selesai', 'tanggal_input', 'tanggal_verifikasi'], 'safe'],
            [['nim', 'id_ruang'], 'string', 'max' => 8],
            [['no_surat'], 'string', 'max' => 15],
            [['id_ruang'], 'exist', 'skipOnError' => true, 'targetClass' => Ruang::className(), 'targetAttribute' => ['id_ruang' => 'id']],
            [['nim'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['nim' => 'nim']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nim' => 'Nim',
            'id_ruang' => 'Id Ruang',
            'tanggal_mulai' => 'Tanggal Mulai',
            'tanggal_selesai' => 'Tanggal Selesai',
            'no_surat' => 'No Surat',
            'tanggal_input' => 'Tanggal Input',
            'tanggal_verifikasi' => 'Tanggal Verifikasi',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdRuang()
    {
        return $this->hasOne(Ruang::className(), ['id' => 'id_ruang']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNim0()
    {
        return $this->hasOne(User::className(), ['nim' => 'nim']);
    }
}
