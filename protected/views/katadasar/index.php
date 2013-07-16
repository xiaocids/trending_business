<?php
$this->breadcrumbs=array(
	'Katadasar Models',
);

$this->menu=array(
array('label'=>'Create Katadasar_model','url'=>array('create')),
array('label'=>'Manage Katadasar_model','url'=>array('admin')),
);
?>

<h1>Katadasar Models</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
'dataProvider'=>$dataProvider,
'itemView'=>'_view',
)); ?>
