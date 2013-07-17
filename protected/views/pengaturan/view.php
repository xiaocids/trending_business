<?php
$this->breadcrumbs=array(
	'Pengaturan Models'=>array('index'),
	$model->pengaturan_id,
);

$this->menu=array(
array('label'=>'List Pengaturan_model','url'=>array('index')),
array('label'=>'Create Pengaturan_model','url'=>array('create')),
array('label'=>'Update Pengaturan_model','url'=>array('update','id'=>$model->pengaturan_id)),
array('label'=>'Delete Pengaturan_model','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->pengaturan_id),'confirm'=>'Are you sure you want to delete this item?')),
array('label'=>'Manage Pengaturan_model','url'=>array('admin')),
);
?>

<h1>View Pengaturan_model #<?php echo $model->pengaturan_id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
'data'=>$model,
'attributes'=>array(
		'pengaturan_id',
		'kota_id',
		'akun_twitter',
		'password_twitter',
		'limit_crawler',
		'method_api',
		'filters',
		'pengaturan_aktif',
		'create_time',
),
)); ?>
