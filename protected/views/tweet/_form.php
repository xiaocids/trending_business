<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'tweet-model-form',
	'enableAjaxValidation'=>false,
)); ?>

<p class="help-block">Fields with <span class="required">*</span> are required.</p>

<?php echo $form->errorSummary($model); ?>

	<?php echo $form->textFieldRow($model,'tweet_id',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'idstr',array('class'=>'span5','maxlength'=>60)); ?>

	<?php echo $form->textFieldRow($model,'screen_name',array('class'=>'span5','maxlength'=>50)); ?>

	<?php echo $form->textFieldRow($model,'text_mentah',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldRow($model,'hasil_proses1',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldRow($model,'hasil_proses2',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldRow($model,'hasil_proses3',array('class'=>'span5','maxlength'=>255)); ?>

	<?php echo $form->textFieldRow($model,'label',array('class'=>'span5','maxlength'=>45)); ?>

	<?php echo $form->textFieldRow($model,'location',array('class'=>'span5','maxlength'=>45)); ?>

	<?php echo $form->textFieldRow($model,'longitude',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'latitude',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'crawler_id',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'create_at',array('class'=>'span5')); ?>

	<?php echo $form->textFieldRow($model,'create_time',array('class'=>'span5')); ?>

<div class="form-actions">
	<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Create' : 'Save',
		)); ?>
</div>

<?php $this->endWidget(); ?>
