<?php

use yii\helpers\Html;


$this->title = 'Tambah Agenda';
$this->params['breadcrumbs'][] = ['label' => 'Tambah Agenda', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tambah-agenda">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
