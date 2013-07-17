<div class="view">

		<b><?php echo CHtml::encode($data->getAttributeLabel('tweet_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->tweet_id),array('view','id'=>$data->tweet_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idstr')); ?>:</b>
	<?php echo CHtml::encode($data->idstr); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('screen_name')); ?>:</b>
	<?php echo CHtml::encode($data->screen_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('text_mentah')); ?>:</b>
	<?php echo CHtml::encode($data->text_mentah); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hasil_proses1')); ?>:</b>
	<?php echo CHtml::encode($data->hasil_proses1); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hasil_proses2')); ?>:</b>
	<?php echo CHtml::encode($data->hasil_proses2); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hasil_proses3')); ?>:</b>
	<?php echo CHtml::encode($data->hasil_proses3); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('label')); ?>:</b>
	<?php echo CHtml::encode($data->label); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('location')); ?>:</b>
	<?php echo CHtml::encode($data->location); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('longitude')); ?>:</b>
	<?php echo CHtml::encode($data->longitude); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('latitude')); ?>:</b>
	<?php echo CHtml::encode($data->latitude); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('crawler_id')); ?>:</b>
	<?php echo CHtml::encode($data->crawler_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('create_at')); ?>:</b>
	<?php echo CHtml::encode($data->create_at); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('create_time')); ?>:</b>
	<?php echo CHtml::encode($data->create_time); ?>
	<br />

	*/ ?>

</div>