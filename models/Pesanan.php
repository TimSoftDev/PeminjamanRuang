<?php

namespace app\models;

use Yii;

class Pesanan extends \yii\db\ActiveRecord
{
    public static function tableName()
    {
        return 'pesanan';
    }

    public function rules()
    {
        return [
            [['nim_mahasiswa', 'id_ruang', 'tanggal_penggunaan', 'sesi_waktu', 'no_surat', 'status', 'tanggal_pesan'], 'required'],
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

    public function getIdRuang()
    {
        return $this->hasOne(Ruang::className(), ['id' => 'id_ruang']);
    }

    public function getSesiWaktu()
    {
        return $this->hasOne(Waktu::className(), ['sesi' => 'sesi_waktu']);
    }

    public function getNimMahasiswa()
    {
        return $this->hasOne(Mahasiswa::className(), ['nim' => 'nim_mahasiswa']);
    }
}
