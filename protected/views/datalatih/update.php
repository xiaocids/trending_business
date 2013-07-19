<?php
$this->breadcrumbs=array(
	'Datalatih Models'=>array('index'),
	$model->datalatih_id=>array('view','id'=>$model->datalatih_id),
	'Update',
);

	$this->menu=array(
	array('label'=>'List Datalatih_model','url'=>array('index')),
	array('label'=>'Create Datalatih_model','url'=>array('create')),
	array('label'=>'View Datalatih_model','url'=>array('view','id'=>$model->datalatih_id)),
	array('label'=>'Manage Datalatih_model','url'=>array('admin')),
	);
	?>

	<h1>Update Datalatih_model <?php echo $model->datalatih_id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>