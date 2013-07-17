<?php
$this->breadcrumbs=array(
	'Katadasar Models'=>array('index'),
	$model->katadasar_id=>array('view','id'=>$model->katadasar_id),
	'Update',
);

	$this->menu=array(
	array('label'=>'List Katadasar_model','url'=>array('index')),
	array('label'=>'Create Katadasar_model','url'=>array('create')),
	array('label'=>'View Katadasar_model','url'=>array('view','id'=>$model->katadasar_id)),
	array('label'=>'Manage Katadasar_model','url'=>array('admin')),
	);
	?>

	<h1>Update Katadasar_model <?php echo $model->katadasar_id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>