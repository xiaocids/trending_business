<?php
$this->breadcrumbs=array(
	'Katadasar Models'=>array('index'),
	$model->katadasar_id,
);

$this->menu=array(
array('label'=>'List Katadasar_model','url'=>array('index')),
array('label'=>'Create Katadasar_model','url'=>array('create')),
array('label'=>'Update Katadasar_model','url'=>array('update','id'=>$model->katadasar_id)),
array('label'=>'Delete Katadasar_model','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->katadasar_id),'confirm'=>'Are you sure you want to delete this item?')),
array('label'=>'Manage Katadasar_model','url'=>array('admin')),
);
?>

<h1>View Katadasar_model #<?php echo $model->katadasar_id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
'data'=>$model,
'attributes'=>array(
		'katadasar_id',
		'kata_dasar_teks',
		'kata_dasar_tipe',
),
)); ?>
