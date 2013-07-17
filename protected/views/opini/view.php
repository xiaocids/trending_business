<?php
$this->breadcrumbs=array(
	'Opini Models'=>array('index'),
	$model->opini_id,
);

$this->menu=array(
array('label'=>'List Opini_model','url'=>array('index')),
array('label'=>'Create Opini_model','url'=>array('create')),
array('label'=>'Update Opini_model','url'=>array('update','id'=>$model->opini_id)),
array('label'=>'Delete Opini_model','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->opini_id),'confirm'=>'Are you sure you want to delete this item?')),
array('label'=>'Manage Opini_model','url'=>array('admin')),
);
?>

<h1>View Opini_model #<?php echo $model->opini_id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
'data'=>$model,
'attributes'=>array(
		'opini_id',
		'tweet_id',
		'idstr',
		'screen_name',
		'text',
		'label',
		'skor',
		'kategori_id',
		'kota_id',
		'location',
		'longitude',
		'latitude',
		'created_at',
		'create_time',
),
)); ?>
