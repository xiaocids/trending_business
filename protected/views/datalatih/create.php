<?php
$this->breadcrumbs=array(
	'Datalatih Models'=>array('index'),
	'Create',
);

$this->menu=array(
array('label'=>'List Datalatih_model','url'=>array('index')),
array('label'=>'Manage Datalatih_model','url'=>array('admin')),
);
?>

<h1>Create Datalatih_model</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>