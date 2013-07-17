<?php
$this->breadcrumbs=array(
	'Opini Models'=>array('index'),
	$model->opini_id=>array('view','id'=>$model->opini_id),
	'Update',
);

	$this->menu=array(
	array('label'=>'List Opini_model','url'=>array('index')),
	array('label'=>'Create Opini_model','url'=>array('create')),
	array('label'=>'View Opini_model','url'=>array('view','id'=>$model->opini_id)),
	array('label'=>'Manage Opini_model','url'=>array('admin')),
	);
	?>

	<h1>Update Opini_model <?php echo $model->opini_id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>