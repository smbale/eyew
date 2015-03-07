<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\datetimepicker\DateTimePicker;

/* @var $this yii\web\View */
/* @var $model app\models\Moment */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="col-md-6">
<div class="moment-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'latitude')->textInput() ?>

    <?= $form->field($model, 'longitude')->textInput() ?>

    <?= $form->field($model, 'distance')->textInput() ?>

    <strong>Start At</strong>
    <?= DateTimePicker::widget([
        'model' => $model,
        'attribute' => 'start_at',
        'language' => 'en',
        'size' => 'ms',
        'clientOptions' => [
            'autoclose' => true,
            'format' => 'MM dd, yyyy HH:ii P',
            'todayBtn' => true,
            'minuteStep'=> 15, 
            'pickerPosition' => 'bottom-left',
            // to do - format one day ahead
            //'startDate'=> "2013-02-14 10:00",
            //'initialDate'=> time(),            
        ]
    ]);?>
    <br />

    <?= $form->field($model, 'duration')
             ->dropDownList(
                 $model->getDurationOptions()   
 	                
 	            )->label('Duration') ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>
</div>
</div>