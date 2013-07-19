<?php
$this->breadcrumbs=array(
	'Datalatih Models',
);

$this->menu=array(
array('label'=>'Create Datalatih_model','url'=>array('create')),
array('label'=>'Manage Datalatih_model','url'=>array('admin')),
);
?>

<h1>Datalatih Models</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
'dataProvider'=>$dataProvider,
'itemView'=>'_view',
)); ?>
