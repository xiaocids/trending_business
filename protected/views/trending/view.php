<?php
$this->breadcrumbs=array(
	'Trending Models'=>array('index'),
	$model->trending_id,
);

$this->menu=array(
array('label'=>'List Trending_model','url'=>array('index')),
array('label'=>'Create Trending_model','url'=>array('create')),
array('label'=>'Update Trending_model','url'=>array('update','id'=>$model->trending_id)),
array('label'=>'Delete Trending_model','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->trending_id),'confirm'=>'Are you sure you want to delete this item?')),
array('label'=>'Manage Trending_model','url'=>array('admin')),
);
?>

<h1>View Trending_model #<?php echo $model->trending_id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
'data'=>$model,
'attributes'=>array(
		'trending_id',
		'kota_id',
		'posisi',
		'kategori_id',
		'periode_bulan',
		'periode_tahun',
		'total_tweet',
		'total_tweet_neg',
		'total_tweet_pos',
		'create_time',
),
)); ?>
