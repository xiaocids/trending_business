<?php
$this->breadcrumbs=array(
	'Tweet Models'=>array('index'),
	$model->tweet_id,
);

$this->menu=array(
array('label'=>'List Tweet_model','url'=>array('index')),
array('label'=>'Create Tweet_model','url'=>array('create')),
array('label'=>'Update Tweet_model','url'=>array('update','id'=>$model->tweet_id)),
array('label'=>'Delete Tweet_model','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->tweet_id),'confirm'=>'Are you sure you want to delete this item?')),
array('label'=>'Manage Tweet_model','url'=>array('admin')),
);
?>

<h1>View Tweet_model #<?php echo $model->tweet_id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
'data'=>$model,
'attributes'=>array(
		'tweet_id',
		'idstr',
		'screen_name',
		'text_mentah',
		'hasil_proses1',
		'hasil_proses2',
		'hasil_proses3',
		'label',
		'location',
		'longitude',
		'latitude',
		'crawler_id',
		'create_at',
		'create_time',
),
)); ?>
