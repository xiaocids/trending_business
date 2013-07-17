<?php
/*$this->breadcrumbs=array(
	'Kategori Models'=>array('index'),
	'Create',
);*/

$this->menu=array(
array('label'=>'List Kategori_model','url'=>array('index')),
array('label'=>'Manage Kategori_model','url'=>array('admin')),
);
?>

<h1>Tambah Kategori</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>