<?php
/* @var $this ItemsController */
/* @var $model Items */

$this->breadcrumbs=array(
	'Items'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Items', 'url'=>array('index')),
	array('label'=>'Manage Items', 'url'=>array('admin')),
);
?>

<h1>Create Items</h1>

<?php echo CHtml::link('Create Brands',array('brands/create'), array('target'=>'_blank')); ?>
<br><br>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>


<?php $this->widget('zii.widgets.grid.CGridView', array(
	'id'=>'items-grid',
	'dataProvider'=>$model->search(),
	'filter'=>$model,
	'columns'=>array(
		'id',
		'name',
		'cost',
		'selling',
		array( 'name'=>'brand_id', 'value'=>'$data->brand->brand_name' ),
		array(
			'class'=>'CButtonColumn',
			'htmlOptions' => array('style'=>'width:80px')
		),
	),
)); ?>
