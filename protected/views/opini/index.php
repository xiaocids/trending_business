<?php
$this->breadcrumbs=array(
	'Opini Models',
);

$this->menu=array(
array('label'=>'Create Opini_model','url'=>array('create')),
array('label'=>'Manage Opini_model','url'=>array('admin')),
);
?>

<h1>Opini Models</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
'dataProvider'=>$dataProvider,
'itemView'=>'_view',
)); ?>
