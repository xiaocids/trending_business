<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

		<?php echo $form->textFieldRow($model,'opini_id',array('class'=>'span5')); ?>

		<?php echo $form->textFieldRow($model,'tweet_id',array('class'=>'span5')); ?>

		<?php echo $form->textFieldRow($model,'idstr',array('class'=>'span5','maxlength'=>60)); ?>

		<?php echo $form->textFieldRow($model,'screen_name',array('class'=>'span5','maxlength'=>50)); ?>

		<?php echo $form->textFieldRow($model,'text',array('class'=>'span5','maxlength'=>255)); ?>

		<?php echo $form->textFieldRow($model,'label',array('class'=>'span5','maxlength'=>45)); ?>

		<?php echo $form->textFieldRow($model,'skor',array('class'=>'span5')); ?>

		<?php echo $form->textFieldRow($model,'kategori_id',array('class'=>'span5')); ?>

		<?php echo $form->textFieldRow($model,'kota_id',array('class'=>'span5')); ?>

		<?php echo $form->textFieldRow($model,'location',array('class'=>'span5','maxlength'=>60)); ?>

		<?php echo $form->textFieldRow($model,'longitude',array('class'=>'span5')); ?>

		<?php echo $form->textFieldRow($model,'latitude',array('class'=>'span5')); ?>

		<?php echo $form->textFieldRow($model,'created_at',array('class'=>'span5')); ?>

		<?php echo $form->textFieldRow($model,'create_time',array('class'=>'span5')); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType' => 'submit',
			'type'=>'primary',
			'label'=>'Search',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
