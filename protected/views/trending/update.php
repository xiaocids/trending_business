<?php
$this->breadcrumbs=array(
	'Trending Models'=>array('index'),
	$model->trending_id=>array('view','id'=>$model->trending_id),
	'Update',
);

	$this->menu=array(
	array('label'=>'List Trending_model','url'=>array('index')),
	array('label'=>'Create Trending_model','url'=>array('create')),
	array('label'=>'View Trending_model','url'=>array('view','id'=>$model->trending_id)),
	array('label'=>'Manage Trending_model','url'=>array('admin')),
	);
	?>

	<h1>Update Trending_model <?php echo $model->trending_id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>