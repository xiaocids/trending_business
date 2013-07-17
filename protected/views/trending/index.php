<?php
$this->breadcrumbs=array(
	'Trending Models',
);

$this->menu=array(
array('label'=>'Create Trending_model','url'=>array('create')),
array('label'=>'Manage Trending_model','url'=>array('admin')),
);
?>

<h1>Trending Models</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
'dataProvider'=>$dataProvider,
'itemView'=>'_view',
)); ?>
