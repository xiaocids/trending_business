<?php
$this->breadcrumbs=array(
	'Trending Models'=>array('index'),
	'Manage',
);

$this->menu=array(
array('label'=>'List Trending_model','url'=>array('index')),
array('label'=>'Create Trending_model','url'=>array('create')),
);

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

<h1>Manage Trending Models</h1>

<p>
	You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>
		&lt;&gt;</b>
	or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button btn')); ?>
<div class="search-form" style="display:none">
	<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('bootstrap.widgets.TbGridView',array(
'id'=>'trending-model-grid',
'itemsCssClass'=>'table table-hover table-striped table-bordered table-condensed',
'dataProvider'=>$model->search(),
'filter'=>$model,
'columns'=>array(
		'trending_id',
		'kota_id',
		'posisi',
		'kategori_id',
		'periode_bulan',
		'periode_tahun',
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
