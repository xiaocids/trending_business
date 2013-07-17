<?php
$this->breadcrumbs=array(
	'Kategori Models',
);

$this->menu=array(
array('label'=>'Create Kategori_model','url'=>array('create')),
array('label'=>'Manage Kategori_model','url'=>array('admin')),
);
?>

<h1>Kategori</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
'dataProvider'=>$dataProvider,
'itemView'=>'_view',
)); ?>
