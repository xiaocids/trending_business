<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'trending-model-form',
	'enableAjaxValidation'=>false,
)); ?>

<p class="help-block">Fields with <span class="required">*</span> are required.</p>

<?php echo $form->errorSummary($model); ?>

	<?php echo $form->textFieldRow($model,'kota_id',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'posisi',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'kategori_id',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'periode_bulan',array('class'=>'span5','maxlength'=>25)); ?>

	<?php echo $form->textFieldRow($model,'periode_tahun',array('class'=>'span5','maxlength'=>5)); ?>

	<?php echo $form->textFieldRow($model,'total_tweet',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'total_tweet_neg',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'total_tweet_pos',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'create_time',array('class'=>'span5')); ?>

<div class="form-actions">
	<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
		)); ?>
</div>

<?php $this->endWidget(); ?>
