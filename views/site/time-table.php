<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\PesananSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Pesanans';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="pesanan-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Pesanan', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        // 'filterModel' => $searchModel,
        'columns' => [



            'id_ruang',
            'sesi_waktu',
            'sesi_waktu',
            'sesi_waktu',
            'sesi_waktu',
            'sesi_waktu',
            'sesi_waktu',
            'sesi_waktu',
            'sesi_waktu',
            // 'tanggal_penggunaan',
            // 'no_surat',
            // 'status',
            // 'tanggal_pesan',
            // 'tanggal_verifikasi',
        ],
    ]); ?>
</div>

<code><?= __FILE__ ?></code>