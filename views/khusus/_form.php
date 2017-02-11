<?php

use yii\helpers\Html;
use yii\helpers\ArrayHelper;
use yii\widgets\ActiveForm;
use app\models\Ruang;
use app\models\User;
use kartik\datetime\DateTimePicker;

?>

<div class="pesanan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'id_ruang')->dropDownList(
    	ArrayHelper::map(Ruang::find()->all(),
    	'id', 'nama'),
    	['prompt' => '===PILIH RUANG===']
    ) ?>

    <?= $form->field($model, 'tanggal_mulai')->widget(DateTimePicker::classname(), [
	    'options' => [
	    	'placeholder' => 'Masukkan waktu ...'
	    ],
	    'pluginOptions' => [
	        'autoclose'=>true,
	        'todayHighlight' => true,
			'todayBtn' => true,
			'daysOfWeekDisabled' => '0,6',
        	'hoursDisabled' => '0,1,2,3,4,5,6,7,8,19,20,21,22',
	        'format' => 'dd-M-yyyy hh:ii',
	    ],    
	    'convertFormat' => true,
	]) ?>

    <?= $form->field($model, 'tanggal_selesai')->widget(DateTimePicker::classname(), [
	    'options' => [
	    	'placeholder' => 'Masukkan waktu ...'
	    ],
	    'pluginOptions' => [
	        'autoclose'=>true,
	        'todayHighlight' => true,
			'todayBtn' => true,
			'daysOfWeekDisabled' => '0,6',
        	'hoursDisabled' => '0,1,2,3,4,5,6,7,8,19,20,21,22',
	        'format' => 'dd-M-yyyy hh:ii',
	    ],    
	    'convertFormat' => true,
	]) ?>

    <?= $form->field($model, 'no_surat')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'tanggal_input')->widget(DateTimePicker::classname(), [
	    'options' => [
	    	'value' => date('d-m-Y h:m:s'),
	        'type' => DateTimePicker::TYPE_INPUT,	        
	        'disabled' => true,
	    ],
	    'pluginOptions' => [
	        'autoclose'=>true,
	        'format' => 'dd-M-yyyy hh:ii',
	    ],    
	]) ?>

    <?= $form->field($model, 'tanggal_verifikasi')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>


</div>