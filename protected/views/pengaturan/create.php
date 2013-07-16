<?php
$this->breadcrumbs=array(
	'Pengaturan Models'=>array('index'),
	'Create',
);

$this->menu=array(
array('label'=>'List Pengaturan_model','url'=>array('index')),
array('label'=>'Manage Pengaturan_model','url'=>array('admin')),
);
?>

<h1>Create Pengaturan_model</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>