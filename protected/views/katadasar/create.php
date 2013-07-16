<?php
$this->breadcrumbs=array(
	'Katadasar Models'=>array('index'),
	'Create',
);

$this->menu=array(
array('label'=>'List Katadasar_model','url'=>array('index')),
array('label'=>'Manage Katadasar_model','url'=>array('admin')),
);
?>

<h1>Create Katadasar_model</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>