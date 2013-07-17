<?php
$this->widget('bootstrap.widgets.TbAlert', array('block' => true,
    // display a larger alert block?
        'fade' => true, // use transitions?
        'closeText' => '&times;', // close link text - if set to false, no close link is displayed
        //'alerts' => array( // configurations per alert type
            //'success' => array('block' => true, 'fade' => true, 'closeText' => '$times'),
            // success, info, warning, error or danger
        //), 
    ));
?>

<h1>Pengaturan Crawler</h1>

<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'pengaturan-model-form',
	'enableAjaxValidation'=>false,
)); ?>

<p class="help-block">Kolom dengan tanda <span class="required">*</span> harus diisi.</p>

<?php echo $form->errorSummary($model); ?>
<div class="form-horizontal">
	<div class="control-group">
        <?php echo $form->labelEx($model, 'kota_id', array('class'=>'control-label')); ?>
        <div class="controls">
           <?php echo $form->dropDownList($model,'kota_id', CHtml::listData(Kota_model::model()->findAll('kota_aktif = TRUE'), 'kota_id', 'nama_kota'), array('prompt'=>'-Pilih', 'class'=>'span3')); ?>                 
        </div>
    </div>

    <div class="control-group">
        <?php echo $form->labelEx($model, 'akun_twitter', array('class'=>'control-label')); ?>
        <div class="controls">
            <div class="input-prepend">
                <span class="add-on">@</span>
                 <?php echo $form->textField($model,'akun_twitter', array('class'=>'')); ?>
            </div>                           
        </div>
    </div>
	
    <!-- <div class="control-group">
        <?php //echo $form->labelEx($model, 'password_twitter', array('class'=>'control-label')); ?>
        <div class="controls">
            <?php //echo $form->passwordField($model,'password_twitter', array('class'=>'span4')); ?>
        </div>
    </div> -->
	
    <div class="control-group">
        <?php echo $form->labelEx($model, 'limit_crawler', array('class'=>'control-label')); ?>
        <div class="controls">
            <div class="input-append">                
                 <?php echo $form->textField($model,'limit_crawler', array('class'=>'span5')); ?>
                 <span class="add-on">detik</span>
            </div>                           
        </div>
    </div>

	<div class="control-group">
        <?php echo $form->labelEx($model, 'method_api', array('class'=>'control-label')); ?>
        <div class="controls">
            <?php echo $form->textField($model,'method_api', array('class'=>'span8', 'maxlength'=>255)); ?>
        </div>
    </div>

	<div class="control-group">
        <?php echo $form->labelEx($model, 'consumer_key', array('class'=>'control-label')); ?>
        <div class="controls">
            <?php echo $form->textField($model,'consumer_key', array('class'=>'span8', 'maxlength'=>255)); ?>
        </div>
    </div>
    
   	<div class="control-group">
        <?php echo $form->labelEx($model, 'consumer_secret', array('class'=>'control-label')); ?>
        <div class="controls">
            <?php echo $form->textField($model,'consumer_secret', array('class'=>'span8', 'maxlength'=>255)); ?>
        </div>
    </div>
    
   	<div class="control-group">
        <?php echo $form->labelEx($model, 'access_token', array('class'=>'control-label')); ?>
        <div class="controls">
            <?php echo $form->textField($model,'access_token', array('class'=>'span8', 'maxlength'=>255)); ?>
        </div>
    </div>

   	<div class="control-group">
        <?php echo $form->labelEx($model, 'access_token_secret', array('class'=>'control-label')); ?>
        <div class="controls">
            <?php echo $form->textField($model,'access_token_secret', array('class'=>'span8', 'maxlength'=>255)); ?>
        </div>
    </div>
        
	<div class="control-group">
        <?php echo $form->labelEx($model, 'filters', array('class'=>'control-label')); ?>
        <div class="controls">
            <?php echo $form->textArea($model,'filters', array('class'=>'span8')); ?>
        </div>
    </div>

	<div class="control-group">
        <?php echo $form->labelEx($model, 'pengaturan_aktif', array('class'=>'control-label')); ?>
        <div class="controls">
           <?php echo $form->dropDownList($model,'pengaturan_aktif', array(true=>'Aktif', false=>'Tidak Aktif'), array('prompt'=>'-Pilih', 'class'=>'span2')); ?>                 
        </div>
    </div>

    <div class="form-actions">
    	<?php $this->widget('bootstrap.widgets.TbButton', array(
    			'buttonType'=>'submit',
    			'type'=>'primary',
                'icon'=>'icon-white icon-ok',
    			'label'=>$model->isNewRecord ? 'Create' : 'Simpan',
    		)); ?>
            
        <?php $this->widget('bootstrap.widgets.TbButton', array(
    			'buttonType'=>'link',
    			'type'=>'inverse',
                'url'=>array('/pengaturan/pengaturan_crawler'),
                'icon'=>'icon-white icon-refresh',
    			'label'=>'Batal',
    		)); ?>
    </div>
</div>
<?php $this->endWidget(); ?>
