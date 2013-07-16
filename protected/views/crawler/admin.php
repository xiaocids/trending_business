<?php
/*$this->breadcrumbs=array(
	'Histori Crawler',
);*/

$this->menu=array(
array('label'=>'List Crawler_model','url'=>array('index')),
array('label'=>'Create Crawler_model','url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
$('.search-form').toggle();
return false;
});
$('.search-form form').submit(function(){
$.fn.yiiGridView.update('crawler-model-grid', {
data: $(this).serialize()
});
return false;
});
");
?>

<h1>Histori Crawler</h1>
<div class="well">
   <?php echo CHtml::link('<i class="icon icon-retweet icon-white"></i> Mulai Crawler',array('/crawler/indexCrawler'),array('class'=>'btn btn-primary')); ?>
    <div class="search-form" style="display:none">
    	<?php $this->renderPartial('_search',array(
    	'model'=>$model,
    )); ?> 
    
    </div><!-- search-form -->
</div>



<?php $this->widget('bootstrap.widgets.TbGridView',array(
'id'=>'crawler-model-grid',
'itemsCssClass'=>'table table-hover table-striped table-bordered table-condensed',
'dataProvider'=>$model->search(),
'filter'=>$model,
'columns'=>array(
		array(
            'header'=>'No',
            'type'=>'raw',
            'value'=>'$this->grid->dataProvider->pagination->currentPage*$this->grid->dataProvider->pagination->pageSize + $row+1',
        ),
        //'crawler_id',
        'nama_akun_twitter',
		'waktu_mulai',
		'waktu_berhenti',
        array(
            'header'=>'Crawler Aktif',
            'filter'=> CHtml::activeDropDownList($model,'crawler_aktif', array(true=>'Aktif', false=>'Tidak Aktif'), array('class'=>'', 'prompt'=>'-Pilih')),
            'value'=>'Params::aktifNonAktif($data->crawler_aktif)',
        ),		
		'create_time',
array(
'class'=>'bootstrap.widgets.TbButtonColumn',
),
),
)); ?>
