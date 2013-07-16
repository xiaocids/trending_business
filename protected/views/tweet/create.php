<?php
$this->breadcrumbs=array(
	'Tweet Models'=>array('index'),
	'Create',
);

$this->menu=array(
array('label'=>'List Tweet_model','url'=>array('index')),
array('label'=>'Manage Tweet_model','url'=>array('admin')),
);
?>

<h1>Create Tweet_model</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>