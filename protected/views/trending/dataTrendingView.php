<?php
/*$this->breadcrumbs=array(
	'Trending Models'=>array('index'),
	'Manage',
);

$this->menu=array(
array('label'=>'List Trending_model','url'=>array('index')),
array('label'=>'Create Trending_model','url'=>array('create')),
);*/

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
$('.search-form').toggle();
return false;
});
$('.search-form form').submit(function(){
$.fn.yiiGridView.update('trending-model-grid', {
data: $(this).serialize()
});
return false;
});
");
?>

<h1>Data Trending</h1>

<div class="well">
   <?php 
        echo CHtml::link('<i class="icon icon-signal icon-white"></i> Buat Trending',array('/trending/buatTrending'),array('class'=>'btn btn-primary'));
   ?>
    <div class="search-form" style="display:none">
    	<?php $this->renderPartial('_search',array(
    	'model'=>$model,
    )); ?> 
    
    </div><!-- search-form -->
</div>

<?php $this->widget('bootstrap.widgets.TbGroupGridView',array(
'id'=>'trending-model-grid',
'itemsCssClass'=>'table table-hover table-striped table-bordered table-condensed',
'dataProvider'=>$model->search(),
'filter'=>$model,
'columns'=>array(
		array(
            'header'=>'No',
            'type'=>'raw',
            'value'=>'$this->grid->dataProvider->pagination->currentPage*$this->grid->dataProvider->pagination->pageSize + $row+1',
        ),
		array(
            'header'=>'Kota',
            'filter'=> CHtml::activeDropDownList($model,'kota_id', CHtml::listData(Kota_model::model()->findAllByAttributes(array('kota_aktif'=>true)), 'kota_id', 'nama_kota') , array('class'=>'', 'prompt'=>'-Pilih')),
            'value'=>'$data->kota->nama_kota',
        ),
		'posisi',
		//'kategori_id',
        array(
            'header'=>'Kategori',
            'filter'=> CHtml::activeDropDownList($model,'kategori_id', CHtml::listData(Kategori_model::model()->findAllByAttributes(array('kategori_aktif'=>true)), 'kategori_id', 'nama_kategori') , array('class'=>'', 'prompt'=>'-Pilih')),
            'value'=>'$data->kategori->nama_kategori',
        ),
		//'periode_bulan',
        array(
            'header'=>'Bulan',
            'filter'=> CHtml::activeDropDownList($model,'periode_bulan', Params::listBulan(), array('class'=>'', 'prompt'=>'-Pilih')),
            'value'=>'Params::getNamaBulan($data->periode_bulan)',
        ),
		//'periode_tahun',
        array(
            'header'=>'Tahun',
            'filter'=> CHtml::activeDropDownList($model,'periode_tahun', Params::listTahun(), array('class'=>'', 'prompt'=>'-Pilih')),
            'value'=>'$data->periode_tahun',
        ),
		/*
		'total_tweet',
		'total_tweet_neg',
		'total_tweet_pos',
		'create_time',
		*/
array(
'class'=>'bootstrap.widgets.TbButtonColumn',
),
),
)); ?>
