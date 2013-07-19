<?php
/*$this->breadcrumbs=array(
	'Datalatih Models'=>array('index'),
	'Manage',
);

$this->menu=array(
array('label'=>'List Datalatih_model','url'=>array('index')),
array('label'=>'Create Datalatih_model','url'=>array('create')),
);*/

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
$('.search-form').toggle();
return false;
});
$('.search-form form').submit(function(){
$.fn.yiiGridView.update('datalatih-model-grid', {
data: $(this).serialize()
});
return false;
});
");
?>

<h1>Data Latih</h1>

<?php $this->widget('bootstrap.widgets.TbGridView',array(
'id'=>'datalatih-model-grid',
'dataProvider'=>$model->search(),
'filter'=>$model,
'columns'=>array(
		array(
            'header'=>'No',
            'type'=>'raw',
            'value'=>'$this->grid->dataProvider->pagination->currentPage*$this->grid->dataProvider->pagination->pageSize + $row+1',
        ),
		'teks',
		array(
            'name'=>'kelas',
            'filter'=>CHtml::activeDropDownList($model, 'kelas', CHtml::listData(Datalatih_model::model()->findAll(array(
                                                                                            'select'=>'t.kelas',
                                                                                            'group'=>'t.kelas',
                                                                                            'distinct'=>true,
                                                                                        )), 'kelas', 'kelas')),
        ),
array(
'class'=>'bootstrap.widgets.TbButtonColumn',
),
),
)); ?>
