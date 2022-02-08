<?php
/* @var $this SiteController */
/* @var $model WorkerForm */
/* @var $form CFormModel */
?>
<!-- public $numberTotalCount;
    public $passwordMaxLength; -->
    <div class="form">
<?php echo CHtml::beginForm(); ?>
 
<?php echo CHtml::errorSummary($model); ?>
 
<div class="row">
<?php echo CHtml::activeLabel($model,'numberTotalCount'); ?>
<?php echo CHtml::activeTextField($model,'numberTotalCount',array('class'=>'width600')); ?>
</div>
 
<div class="row">
<?php echo CHtml::activeLabel($model,'passwordMaxLength'); ?>
<?php echo CHtml::activeTextField($model,'passwordMaxLength',array('class'=>'width600')); ?>
</div>
 
<div class="row submit">
<?php echo CHtml::submitButton('Submit'); ?>
</div>
 
<?php echo CHtml::endForm(); ?>
</div><!-- form -->

<style>
    .width600{width: 600px;}
</style>