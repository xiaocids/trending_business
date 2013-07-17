<?php
$this->breadcrumbs=array(
	'Kota Models'=>array('index'),
	$model->kota_id=>array('view','id'=>$model->kota_id),
	'Update',
);

	$this->menu=array(
	array('label'=>'List Kota_model','url'=>array('index')),
	array('label'=>'Create Kota_model','url'=>array('create')),
	array('label'=>'View Kota_model','url'=>array('view','id'=>$model->kota_id)),
	array('label'=>'Manage Kota_model','url'=>array('admin')),
	);
	?>

	<h1>Update Kota_model <?php echo $model->kota_id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>