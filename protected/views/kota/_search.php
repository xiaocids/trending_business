<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

		<?php echo $form->textFieldRow($model,'kota_id',array('class'=>'span5')); ?>

		<?php echo $form->textFieldRow($model,'nama_kota',array('class'=>'span5','maxlength'=>45)); ?>

		<?php echo $form->textFieldRow($model,'sw_long',array('class'=>'span5')); ?>

		<?php echo $form->textFieldRow($model,'sw_lat',array('class'=>'span5')); ?>

		<?php echo $form->textFieldRow($model,'ne_long',array('class'=>'span5')); ?>

		<?php echo $form->textFieldRow($model,'ne_lat',array('class'=>'span5')); ?>

		<?php echo $form->textFieldRow($model,'kota_aktif',array('class'=>'span5')); ?>

		<?php echo $form->textFieldRow($model,'create_time',array('class'=>'span5')); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType' => 'submit',
			'type'=>'primary',
			'label'=>'Search',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
