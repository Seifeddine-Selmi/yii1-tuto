<?php
/* @var $this ItemsController */
/* @var $model Items */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'items-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'brand_id'); ?>
		<?php
			$brands = Brands::model()->findAll();
			$list = CHtml::listData($brands, 'id', 'name');
		?>
		<?php echo $form->dropDownList($model,'brand_id',$list); ?>
		<?php echo $form->error($model,'brand_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'created_date'); ?>
		<?php //echo $form->dateField($model,'created_date'); ?>
		<?php

		$this->widget('zii.widgets.jui.CJuiDatePicker',array(
			'attribute'=>'created_date',
			'name'=>'created_date',
			'id'=>'created_date',
			'model'=> $model,
			'value'=>Yii::app()->dateFormatter->format("y-mm-dd",strtotime($model->created_date)),
			'flat'=>false,//remove to hide the datepicker
			'options'=>array(
				'showAnim'=>'slide', //'slide','fold','slideDown','fadeIn','blind','bounce','clip','drop'
				'numberOfMonths'=>1,
				'showOtherMonths'=>true,// Show Other month in jquery
				'selectOtherMonths'=>true,// Select Other month in jquery
				'showButtonPanel'=>true,
				'dateFormat' => 'yy-mm-dd', //Date format 'mm/dd/yy','yy-mm-dd','d M, y','d MM, y','DD, d MM, yy'
				'changeMonth'=>true,
				'changeYear'=>true,
				'yearRange'=>'2000:2099',
				'minDate' => '2000-01-01',      // minimum date
				'maxDate' => '2099-12-31',      // maximum date
			),
			'htmlOptions'=>array(
				'style'=>'height:20px;'
			),
		));
		?>
		<?php echo $form->error($model,'created_date'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cost'); ?>
		<?php echo $form->textField($model,'cost',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'cost'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'selling'); ?>
		<?php echo $form->textField($model,'selling',array('size'=>10,'maxlength'=>10)); ?>
		<?php echo $form->error($model,'selling'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->