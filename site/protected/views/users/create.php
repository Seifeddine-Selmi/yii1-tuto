<?php
/* @var $this UsersController */
/* @var $model Users */

$this->breadcrumbs=array(
	'Users'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Users', 'url'=>array('index')),
	array('label'=>'Manage Users', 'url'=>array('admin')),
);
?>

<h1>Create Users</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>



	<?php $this->widget('zii.widgets.grid.CGridView', array(
		'id'=>'users-grid',
		//'itemsCssClass' => 'table table-striped table-hover',
		'htmlOptions' => array('style'=>'width:100%'),
		'dataProvider'=>$model->search(),
		'filter'=>$model,
		'columns'=>array(
			'id',
			'username',
			'password',
			array(
				'class'=>'CButtonColumn',
				'htmlOptions' => array('style'=>'width:80px')
			),
		),
	)); ?>




