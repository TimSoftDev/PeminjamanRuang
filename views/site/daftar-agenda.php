<?php
use yii\helpers\Url;
use yii\helpers\Html;

/* @var $this yii\web\View */
$this->title = 'DATA AGENDA';
?>
<div class="data-agenda">

    <div class="body-content">

        <?= yii2fullcalendar\yii2fullcalendar::widget(array(
              'clientOptions' => [
                    'selectable' => true,
                    'selectHelper' => true,
                    'defaultDate' => date('Y-m-d h:m:s')
              ],
              'options' => [
                    'lang' => 'id',
              ],
              'ajaxEvents' => Url::toRoute(['/site/agen'])
            ));
        ?>        

    </div>
</div>

<br>
<code><?= __FILE__ ?></code>