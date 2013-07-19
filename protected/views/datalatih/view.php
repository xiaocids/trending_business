<?php
$this->breadcrumbs=array(
	'Datalatih Models'=>array('index'),
	$model->datalatih_id,
);

$this->menu=array(
array('label'=>'List Datalatih_model','url'=>array('index')),
array('label'=>'Create Datalatih_model','url'=>array('create')),
array('label'=>'Update Datalatih_model','url'=>array('update','id'=>$model->datalatih_id)),
array('label'=>'Delete Datalatih_model','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->datalatih_id),'confirm'=>'Are you sure you want to delete this item?')),
array('label'=>'Manage Datalatih_model','url'=>array('admin')),
);
?>

<h1>View Datalatih_model #<?php echo $model->datalatih_id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
'data'=>$model,
'attributes'=>array(
		'datalatih_id',
		'teks',
		'kelas',
),
)); ?>
