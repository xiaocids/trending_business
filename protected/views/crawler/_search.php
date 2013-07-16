<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

		<?php echo $form->textFieldRow($model,'crawler_id',array('class'=>'span5')); ?>

		<?php echo $form->textFieldRow($model,'waktu_mulai',array('class'=>'span5')); ?>

		<?php echo $form->textFieldRow($model,'waktu_berhenti',array('class'=>'span5')); ?>

		<?php echo $form->textFieldRow($model,'nama_akun_twitter',array('class'=>'span5','maxlength'=>50)); ?>

		<?php echo $form->textFieldRow($model,'create_time',array('class'=>'span5')); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType' => 'submit',
			'type'=>'primary',
			'label'=>'Search',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
