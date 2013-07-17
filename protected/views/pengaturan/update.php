<?php
/*$this->breadcrumbs=array(
	'Pengaturan Models'=>array('index'),
	$model->pengaturan_id=>array('view','id'=>$model->pengaturan_id),
	'Update',
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
	array('label'=>'List Pengaturan_model','url'=>array('index')),
	array('label'=>'Create Pengaturan_model','url'=>array('create')),
	array('label'=>'View Pengaturan_model','url'=>array('view','id'=>$model->pengaturan_id)),
	array('label'=>'Manage Pengaturan_model','url'=>array('admin')),
	);
	?>

	<h1>Pengaturan Crawler</h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>