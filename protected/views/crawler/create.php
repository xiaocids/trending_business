<?php
$this->breadcrumbs=array(
	'Crawler Models'=>array('index'),
	'Create',
);

$this->menu=array(
array('label'=>'List Crawler_model','url'=>array('index')),
array('label'=>'Manage Crawler_model','url'=>array('admin')),
);
?>

<h1>Create Crawler_model</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>