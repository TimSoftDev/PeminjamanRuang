<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PesananSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="pesanan-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'nim') ?>

    <?= $form->field($model, 'id_ruang') ?>

    <?= $form->field($model, 'tanggal_mulai') ?>

    <?= $form->field($model, 'tanggal_selesai') ?>

    <?php // echo $form->field($model, 'no_surat') ?>

    <?php // echo $form->field($model, 'status') ?>

    <?php // echo $form->field($model, 'tanggal_input') ?>

    <?php // echo $form->field($model, 'tanggal_verifikasi') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
