<?php
$this->breadcrumbs=array(
	'Opini Models'=>array('index'),
	'Create',
);

$this->menu=array(
array('label'=>'List Opini_model','url'=>array('index')),
array('label'=>'Manage Opini_model','url'=>array('admin')),
);
?>

<h1>Create Opini Models</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>