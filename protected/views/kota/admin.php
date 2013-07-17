<?php
/*$this->breadcrumbs=array(
	'Kota Models'=>array('index'),
	'Manage',
);*/
$this->widget('bootstrap.widgets.TbAlert', array('block' => true,
    // display a larger alert block?
        'fade' => true, // use transitions?
        'closeText' => '&times;', // close link text - if set to false, no close link is displayed
        //'alerts' => array( // configurations per alert type
            //'success' => array('block' => true, 'fade' => true, 'closeText' => '$times'),
            // success, info, warning, error or danger
        //), 
    ));
    
$this->menu=array(
array('label'=>'List Kota_model','url'=>array('index')),
array('label'=>'Create Kota_model','url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
$('.search-form').toggle();
return false;
});
$('.search-form form').submit(function(){
$.fn.yiiGridView.update('kota-model-grid', {
data: $(this).serialize()
});
return false;
});
");
?>

<h1>Master Kota</h1>

<div class="well">
    <?php echo CHtml::link('<i class="icon icon-plus icon-white"></i> Tambah Kota',array('/kota/create'),array('class'=>'btn btn-primary')); ?>
    <div class="search-form" style="display:none">
    	<?php $this->renderPartial('_search',array(
    	'model'=>$model,
    )); ?>
    </div><!-- search-form -->
</div>
<?php $this->widget('bootstrap.widgets.TbGridView',array(
'id'=>'kota-model-grid',
'itemsCssClass'=>'table table-hover table-striped table-bordered table-condensed',
'dataProvider'=>$model->search(),
'filter'=>$model,
'columns'=>array(
        array(
            'header'=>'No',
            'type'=>'raw',
            'value'=>'$this->grid->dataProvider->pagination->currentPage*$this->grid->dataProvider->pagination->pageSize + $row+1',
        ),
		//'kota_id',
		'nama_kota',
		'sw_long',
		'sw_lat',
		'ne_long',
		'ne_lat',
        array(
            'header'=>'Kota Aktif',
            'filter'=> CHtml::activeDropDownList($model,'kota_aktif', array(true=>'Aktif', false=>'Tidak Aktif'), array('class'=>'', 'prompt'=>'-Pilih')),
            'value'=>'Params::aktifNonAktif($data->kota_aktif)',
        ),
		/*
		'kota_aktif',
		'create_time',
		*/
array(
'class'=>'bootstrap.widgets.TbButtonColumn',
),
),
)); ?>
