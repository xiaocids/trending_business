<?php
$this->breadcrumbs=array(
	'Pengaturan Models',
);

$this->menu=array(
array('label'=>'Create Pengaturan_model','url'=>array('create')),
array('label'=>'Manage Pengaturan_model','url'=>array('admin')),
);
?>

<h1>Pengaturan Models</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
'dataProvider'=>$dataProvider,
'itemView'=>'_view',
)); ?>
