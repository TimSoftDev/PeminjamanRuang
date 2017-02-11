<?php

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

$this->title = 'Daftar';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="daftar-khusus">
    <h1><?= Html::encode($this->title) ?></h1>

    <p>Please fill out the following fields to signup:</p>

    <div class="row">
        <div class="col-lg-5">
            <?php $form = ActiveForm::begin(['id' => 'form-daftar']); ?>

                <?= $form->field($model, 'nim')->textInput(['autofocus' => true, 'class' => 'form-control text-uppercase']) ?>

                <?= $form->field($model, 'nama')->textInput(['class' => 'form-control text-uppercase']) ?>

                <?= $form->field($model, 'username')->textInput(['class' => 'form-control text-lowercase']) ?>

                <?= $form->field($model, 'email')->textInput(['class' => 'form-control text-lowercase']) ?>

                <?= $form->field($model, 'password')->passwordInput() ?>

                <div class="form-group">
                    <?= Html::submitButton('Daftar', ['class' => 'btn btn-primary', 'name' => 'daftar']) ?>
                </div>

            <?php ActiveForm::end(); ?>
        </div>
    </div>

    
        <code><?= __FILE__ ?></code>
</div>
