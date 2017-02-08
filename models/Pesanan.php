<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "pesanan".
 *
 * @property integer $id
 * @property string $nim_mahasiswa
 * @property string $id_ruang
 * @property string $tanggal_penggunaan
 * @property integer $sesi_waktu
 * @property string $no_surat
 * @property string $status
 * @property string $tanggal_pesan
 * @property string $tanggal_verifikasi
 *
 * @property Ruang $idRuang
 * @property Waktu $sesiWaktu
 * @property Mahasiswa $nimMahasiswa
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
            [['nim_mahasiswa', 'id_ruang', 'tanggal_penggunaan', 'sesi_waktu', 'no_surat', 'status', 'tanggal_pesan', 'tanggal_verifikasi'], 'required'],
            [['tanggal_penggunaan', 'tanggal_pesan', 'tanggal_verifikasi'], 'safe'],
            [['sesi_waktu'], 'integer'],
            [['status'], 'string'],
            [['nim_mahasiswa', 'id_ruang'], 'string', 'max' => 8],
            [['no_surat'], 'string', 'max' => 15],
            [['id_ruang'], 'exist', 'skipOnError' => true, 'targetClass' => Ruang::className(), 'targetAttribute' => ['id_ruang' => 'id']],
            [['sesi_waktu'], 'exist', 'skipOnError' => true, 'targetClass' => Waktu::className(), 'targetAttribute' => ['sesi_waktu' => 'sesi']],
            [['nim_mahasiswa'], 'exist', 'skipOnError' => true, 'targetClass' => Mahasiswa::className(), 'targetAttribute' => ['nim_mahasiswa' => 'nim']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nim_mahasiswa' => 'Nim Mahasiswa',
            'id_ruang' => 'Nama Ruang',
            'tanggal_penggunaan' => 'Tanggal Penggunaan',
            'sesi_waktu' => 'Waktu Penggunaan',
            'no_surat' => 'No Surat',
            'status' => 'Status',
            'tanggal_pesan' => 'Tanggal Pesan',
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
    public function getSesiWaktu()
    {
        return $this->hasOne(Waktu::className(), ['sesi' => 'sesi_waktu']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNimMahasiswa()
    {
        return $this->hasOne(Mahasiswa::className(), ['nim' => 'nim_mahasiswa']);
    }
}
