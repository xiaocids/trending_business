<?php
$this->breadcrumbs=array(
	'Kota Models',
);

$this->menu=array(
array('label'=>'Create Kota_model','url'=>array('create')),
array('label'=>'Manage Kota_model','url'=>array('admin')),
);
?>

<h1>Kota Models</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
'dataProvider'=>$dataProvider,
'itemView'=>'_view',
)); ?>
