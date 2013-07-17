<?php
$this->breadcrumbs=array(
	'Trending Models'=>array('index'),
	'Create',
);

$this->menu=array(
array('label'=>'List Trending_model','url'=>array('index')),
array('label'=>'Manage Trending_model','url'=>array('admin')),
);
?>

<h1>Create Trending_model</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>