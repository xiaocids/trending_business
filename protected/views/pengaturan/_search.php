<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

		<?php echo $form->textFieldRow($model,'pengaturan_id',array('class'=>'span5')); ?>

		<?php echo $form->textFieldRow($model,'kota_id',array('class'=>'span5')); ?>

		<?php echo $form->textFieldRow($model,'akun_twitter',array('class'=>'span5','maxlength'=>50)); ?>

			<?php echo $form->textFieldRow($model,'limit_crawler',array('class'=>'span5')); ?>

		<?php echo $form->textFieldRow($model,'method_api',array('class'=>'span5','maxlength'=>255)); ?>

		<?php echo $form->textAreaRow($model,'filters',array('rows'=>6, 'cols'=>50, 'class'=>'span8')); ?>

		<?php echo $form->textFieldRow($model,'pengaturan_aktif',array('class'=>'span5')); ?>

		<?php echo $form->textFieldRow($model,'create_time',array('class'=>'span5')); ?>

	<div class="form-actions">
		<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType' => 'submit',
			'type'=>'primary',
			'label'=>'Search',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
