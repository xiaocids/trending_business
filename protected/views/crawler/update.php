<?php
$this->breadcrumbs=array(
	'Crawler Models'=>array('index'),
	$model->crawler_id=>array('view','id'=>$model->crawler_id),
	'Update',
);

	$this->menu=array(
	array('label'=>'List Crawler_model','url'=>array('index')),
	array('label'=>'Create Crawler_model','url'=>array('create')),
	array('label'=>'View Crawler_model','url'=>array('view','id'=>$model->crawler_id)),
	array('label'=>'Manage Crawler_model','url'=>array('admin')),
	);
	?>

	<h1>Update Crawler_model <?php echo $model->crawler_id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>