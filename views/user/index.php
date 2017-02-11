<?php

use yii\helpers\Html;
use yii\grid\GridView;

$this->title = 'PEMESANAN RUANG UPT TIK UNS';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pesanan-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Pesan Sekarang', ['tambah-pesanan'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            [
                'attribute' => 'id_ruang',
                'value' => 'idRuang.nama',                
            ],
            'tanggal_mulai',
        ],
    ]); ?>
</div>

<code><?= __FILE__ ?></code>