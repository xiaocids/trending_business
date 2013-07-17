<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

		<?php echo $form->textFieldRow($model,'trending_id',array('class'=>'span5')); ?>

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
			'buttonType' => 'submit',
			'type'=>'primary',
			'label'=>'Search',
		)); ?>
	</div>

<?php $this->endWidget(); ?>
