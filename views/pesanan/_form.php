<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Pesanan */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pesanan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nim_mahasiswa')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_ruang')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tanggal_penggunaan')->textInput() ?>

    <?= $form->field($model, 'sesi_waktu')->textInput() ?>

    <?= $form->field($model, 'no_surat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'status')->dropDownList([ 'Aktif' => 'Aktif', 'Menunggu' => 'Menunggu', 'Ditolak' => 'Ditolak', 'Selesai' => 'Selesai', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'tanggal_pesan')->textInput() ?>

    <?= $form->field($model, 'tanggal_verifikasi')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
