<?php
$this->breadcrumbs=array(
	'Kategori Models'=>array('index'),
	$model->kategori_id,
);

$this->menu=array(
array('label'=>'List Kategori_model','url'=>array('index')),
array('label'=>'Create Kategori_model','url'=>array('create')),
array('label'=>'Update Kategori_model','url'=>array('update','id'=>$model->kategori_id)),
array('label'=>'Delete Kategori_model','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->kategori_id),'confirm'=>'Are you sure you want to delete this item?')),
array('label'=>'Manage Kategori_model','url'=>array('admin')),
);
?>

<h1>Lihat Kategori #<?php echo $model->kategori_id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
'data'=>$model,
'attributes'=>array(
		'kategori_id',
		'nama_kategori',
		'kategori_aktif',
		'create_time',
),
)); ?>
