<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'kategori-model-form',
	'enableAjaxValidation'=>false,
)); ?>

<p class="help-block">Kolom dengan tanda <span class="required">*</span> harus diisi.</p>

<?php echo $form->errorSummary($model); ?>
<div class="form-horizontal">
    <div class="control-group">
        <?php echo $form->labelEx($model, 'nama_kategori', array('class'=>'control-label')); ?>
        <div class="controls">
           <?php echo $form->textField($model,'nama_kategori',array('class'=>'span5','maxlength'=>45)); ?>                    
        </div>
    </div>
	 <div class="control-group">
        <?php echo $form->labelEx($model, 'kategori_aktif', array('class'=>'control-label')); ?>
        <div class="controls">
           <?php echo $form->dropDownList($model,'kategori_aktif', array(true=>'Aktif', false=>'Tidak Aktif'), array('prompt'=>'-Pilih', 'class'=>'span2')); ?>                 
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
            'url'=>array('/kategori/admin'),
            'icon'=>'icon-white icon-refresh',
			'label'=>'Batal',
		)); ?>
            
    </div>
</div>
<?php $this->endWidget(); ?>
