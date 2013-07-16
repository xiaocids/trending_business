<h1>Buat Trending</h1>

<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'trending-model-form',
	'enableAjaxValidation'=>false,
)); ?>

<p class="help-block">Fields with <span class="required">*</span> are required.</p>

<?php echo $form->errorSummary($model); ?>

<div class="form-horizontal">
    <div class="control-group">
        <?php echo $form->labelEx($model, 'kota_id', array('class'=>'control-label')); ?>
        <div class="controls">
           <?php echo $form->dropDownList($model,'kota_id',CHtml::listData(Kota_model::model()->findAllByAttributes(array('kota_aktif'=>true)),'kota_id','nama_kota'),array('prompt'=>'-Pilih','class'=>'span5','maxlength'=>45)); ?>                    
        </div>
    </div>

	<div class="control-group">
        <?php echo $form->labelEx($model, 'posisi', array('class'=>'control-label')); ?>
        <div class="controls">
           <?php echo $form->textField($model,'posisi',array('class'=>'span5','maxlength'=>45)); ?>                    
        </div>
    </div>

	<div class="control-group">
        <?php echo $form->labelEx($model, 'kategori_id', array('class'=>'control-label')); ?>
        <div class="controls">
           <?php echo $form->dropDownList($model,'kategori_id',CHtml::listData(Kategori_model::model()->findAllByAttributes(array('kategori_aktif'=>true)), 'kategori_id', 'nama_kategori'),array('prompt'=>'-Pilih','class'=>'span5','maxlength'=>45)); ?>                    
        </div>
    </div>

	<div class="control-group">
        <?php echo $form->labelEx($model, 'periode_bulan', array('class'=>'control-label')); ?>
        <div class="controls">
           <?php echo $form->dropDownList($model,'periode_bulan',Params::listBulan(),array('prompt'=>'-Pilih','class'=>'span5','maxlength'=>45)); ?>                    
        </div>
    </div>

	<div class="control-group">
        <?php echo $form->labelEx($model, 'periode_tahun', array('class'=>'control-label')); ?>
        <div class="controls">
           <?php echo $form->dropDOwnList($model,'periode_tahun',Params::listTahun(),array('prompt'=>'-Pilih','class'=>'span5','maxlength'=>45)); ?>                    
        </div>
    </div>

	<div class="control-group">
        <?php echo $form->labelEx($model, 'total_tweet', array('class'=>'control-label')); ?>
        <div class="controls">
           <?php echo $form->textField($model,'total_tweet',array('class'=>'span5','maxlength'=>45)); ?>                    
        </div>
    </div>

	<div class="control-group">
        <?php echo $form->labelEx($model, 'total_tweet_neg', array('class'=>'control-label')); ?>
        <div class="controls">
           <?php echo $form->textField($model,'total_tweet_neg',array('class'=>'span5','maxlength'=>45)); ?>                    
        </div>
    </div>

	<div class="control-group">
        <?php echo $form->labelEx($model, 'total_tweet_pos', array('class'=>'control-label')); ?>
        <div class="controls">
           <?php echo $form->textField($model,'total_tweet_pos',array('class'=>'span5','maxlength'=>45)); ?>                    
        </div>
    </div>

    <div class="form-actions">
    	<?php $this->widget('bootstrap.widgets.TbButton', array(
    			'buttonType'=>'submit',
    			'type'=>'primary',
                'icon'=>'icon-white icon-ok',
    			'label'=>$model->isNewRecord ? 'Simpan' : 'Simpan',
    		)); ?>
            
        <?php $this->widget('bootstrap.widgets.TbButton', array(
    			'buttonType'=>'link',
    			'type'=>'inverse',
                'url'=>array('/trending/dataTrending'),
                'icon'=>'icon-white icon-refresh',
    			'label'=>'Batal',
    		)); ?>
    </div>
</div>

<?php $this->endWidget(); ?>
