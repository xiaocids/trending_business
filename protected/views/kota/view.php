<?php
$this->breadcrumbs=array(
	'Kota Models'=>array('index'),
	$model->kota_id,
);

$this->menu=array(
array('label'=>'List Kota_model','url'=>array('index')),
array('label'=>'Create Kota_model','url'=>array('create')),
array('label'=>'Update Kota_model','url'=>array('update','id'=>$model->kota_id)),
array('label'=>'Delete Kota_model','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->kota_id),'confirm'=>'Are you sure you want to delete this item?')),
array('label'=>'Manage Kota_model','url'=>array('admin')),
);
?>

<h1>View Kota_model #<?php echo $model->kota_id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
'data'=>$model,
'attributes'=>array(
		'kota_id',
		'nama_kota',
		'sw_long',
		'sw_lat',
		'ne_long',
		'ne_lat',
		'kota_aktif',
		'create_time',
),
)); ?>
