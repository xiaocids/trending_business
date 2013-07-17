<?php
/*$this->breadcrumbs=array(
	'Kategori Models'=>array('index'),
	$model->kategori_id=>array('view','id'=>$model->kategori_id),
	'Update',
);
*/
	$this->menu=array(
	array('label'=>'List Kategori_model','url'=>array('index')),
	array('label'=>'Create Kategori_model','url'=>array('create')),
	array('label'=>'View Kategori_model','url'=>array('view','id'=>$model->kategori_id)),
	array('label'=>'Manage Kategori_model','url'=>array('admin')),
	);
	?>

	<h1>Ubah Kategori</h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>