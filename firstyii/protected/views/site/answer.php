<?php
/* @var $this SiteController */
/* @var $model WorkerForm */
/* @var $form CFormModel */
?>
    <div class="form">
<?php echo CHtml::beginForm(); ?>
 
<?php echo CHtml::errorSummary($model); ?>
 
<div class="row">
<?php echo CHtml::activeTextarea($model, 'primeNumbers', array('maxlength' => 300, 'rows' => 6, 'cols' => 50)) ?>
<?php echo CHtml::activeTextarea($model, 'palindromeNumbers', array('maxlength' => 300, 'rows' => 6, 'cols' => 50)) ?>
<?php echo CHtml::activeTextarea($model, 'password', array('maxlength' => 300, 'rows' => 6, 'cols' => 50)) ?>

</div>
 
<?php echo CHtml::endForm(); ?>
</div><!-- form -->

<a href="index.php">Go back</a>
