<?php
use yii\helpers\Url;
use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
$this->title = 'yii2 extension yii2-fullcalendar demo';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-index">

    <div class="body-content">

		<div class="container">
		    <p>
		        <?= Html::a('Tambah Agenda', ['tambah'], ['class' => 'btn btn-success']) ?>
		    </p>

		    <div class="pesanan-index">

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
			            'tanggal_selesai',
			        ],
			    ]); ?>
			</div>
		
		    <?= yii2fullcalendar\yii2fullcalendar::widget(array(
		          'clientOptions' => [
		                'selectable' => true,
		                'selectHelper' => true,
		                'droppable' => true,
		                'editable' => true,
		                'defaultDate' => date('Y-m-d h:m:s')
		          ],
		          'ajaxEvents' => Url::toRoute(['/khusus/agen'])
		        ));
		    ?>
	    </div>        

    </div>
</div>

<br>
<code><?= __FILE__ ?></code>