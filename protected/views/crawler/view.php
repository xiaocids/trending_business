<?php
$this->breadcrumbs=array(
	'Crawler Models'=>array('index'),
	$model->crawler_id,
);

$this->menu=array(
array('label'=>'List Crawler_model','url'=>array('index')),
array('label'=>'Create Crawler_model','url'=>array('create')),
array('label'=>'Update Crawler_model','url'=>array('update','id'=>$model->crawler_id)),
array('label'=>'Delete Crawler_model','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->crawler_id),'confirm'=>'Are you sure you want to delete this item?')),
array('label'=>'Manage Crawler_model','url'=>array('admin')),
);
?>

<h1>View Crawler_model #<?php echo $model->crawler_id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
'data'=>$model,
'attributes'=>array(
		'crawler_id',
		'waktu_mulai',
		'waktu_berhenti',
		'nama_akun_twitter',
		'create_time',
),
)); ?>
