<?php
/*$this->breadcrumbs=array(
	'Opini Models'=>array('index'),
	'Manage',
);

$this->menu=array(
array('label'=>'List Opini_model','url'=>array('index')),
array('label'=>'Create Opini_model','url'=>array('create')),
);
*/
Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
$('.search-form').toggle();
return false;
});
$('.search-form form').submit(function(){
$.fn.yiiGridView.update('opini-model-grid', {
data: $(this).serialize()
});
return false;
});
");
?>

<h1>Data Opini</h1>

<div class="well">
   <?php 
        echo CHtml::link('<i class="icon icon-tasks icon-white"></i> Klasifikas Kategori',array('/mining/indexKlasifikasi'),array('class'=>'btn btn-primary'));
        echo '&nbsp;'; 
        echo CHtml::link('<i class="icon icon-tags icon-white"></i> Klasifikasi Polaritas',array('/mining/indexPolaritas'),array('class'=>'btn btn-primary'));
   ?>
    <div class="search-form" style="display:none">
    	<?php $this->renderPartial('_search',array(
    	'model'=>$model,
    )); ?> 
    
    </div><!-- search-form -->
</div>

<?php $this->widget('bootstrap.widgets.TbGridView',array(
'id'=>'opini-model-grid',
'itemsCssClass'=>'table table-hover table-striped table-bordered table-condensed',
'dataProvider'=>$model->search(),
'filter'=>$model,
'columns'=>array(
		array(
            'header'=>'No',
            'type'=>'raw',
            'value'=>'$this->grid->dataProvider->pagination->currentPage*$this->grid->dataProvider->pagination->pageSize + $row+1',
        ),
		'tweet_id',
		'idstr',
		'screen_name',
		'text',
		'label',
		/*
		'skor',
		'kategori_id',
		'kota_id',
		'location',
		'longitude',
		'latitude',
		'created_at',
		'create_time',
		*/
array(
'class'=>'bootstrap.widgets.TbButtonColumn',
),
),
)); ?>
