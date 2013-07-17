<?php
/*$this->breadcrumbs=array(
	'Kota Models'=>array('index'),
	'Create',
);*/

$this->menu=array(
array('label'=>'List Kota_model','url'=>array('index')),
array('label'=>'Manage Kota_model','url'=>array('admin')),
);
?>

<h1>Tambah Kota</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>