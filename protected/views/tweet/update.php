<?php
$this->breadcrumbs=array(
	'Tweet Models'=>array('index'),
	$model->tweet_id=>array('view','id'=>$model->tweet_id),
	'Update',
);

	$this->menu=array(
	array('label'=>'List Tweet_model','url'=>array('index')),
	array('label'=>'Create Tweet_model','url'=>array('create')),
	array('label'=>'View Tweet_model','url'=>array('view','id'=>$model->tweet_id)),
	array('label'=>'Manage Tweet_model','url'=>array('admin')),
	);
	?>

	<h1>Update Tweet_model <?php echo $model->tweet_id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>