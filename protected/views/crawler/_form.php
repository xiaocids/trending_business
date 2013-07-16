<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'crawler-model-form',
	'enableAjaxValidation'=>false,
)); ?>

<p class="help-block">Fields with <span class="required">*</span> are required.</p>

<?php echo $form->errorSummary($model); ?>

	<?php echo $form->textFieldRow($model,'waktu_mulai',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'waktu_berhenti',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'nama_akun_twitter',array('class'=>'span5','maxlength'=>50)); ?>

	<?php echo $form->textFieldRow($model,'create_time',array('class'=>'span5')); ?>

<div class="form-actions">
	<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
		)); ?>
</div>

<?php $this->endWidget(); ?>
