<?php
$this->breadcrumbs=array(
	'Tweet Models',
);

$this->menu=array(
array('label'=>'Create Tweet_model','url'=>array('create')),
array('label'=>'Manage Tweet_model','url'=>array('admin')),
);
?>

<h1>Tweet Models</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
'dataProvider'=>$dataProvider,
'itemView'=>'_view',
)); ?>
