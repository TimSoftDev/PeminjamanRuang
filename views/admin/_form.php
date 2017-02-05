<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
use app\models\Ruang;
use app\models\Waktu;

?>

<div class="tambah-pesanan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nim_mahasiswa')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'id_ruang')->dropDownList(
        ArrayHelper::map(Ruang::find()->all(),
        'id', 'nama'),
        ['prompt' => 'Pilih Ruang']
    ) ?>

    <?= $form->field($model, 'sesi_waktu')->dropDownList(
        ArrayHelper::map(Waktu::find()->all(),
        'sesi', 'jam'),
        ['prompt' => 'Pilih Waktu Penggunaan']
    ) ?>

    <?= $form->field($model, 'tanggal_penggunaan')->textInput() ?>

    <?= $form->field($model, 'no_surat')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Tambah Pesanan' : 'Perbarui Pesanan', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

<code><?= __FILE__ ?></code>
