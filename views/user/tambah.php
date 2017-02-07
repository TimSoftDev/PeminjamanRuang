<?php

use yii\helpers\Html;

$this->title = 'Tambah Pesanan';
$this->params['breadcrumbs'][] = ['label' => 'Pesanan', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tambah-pesanan">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>

<code><?= __FILE__ ?></code>