<div class="view">

		<b><?php echo CHtml::encode($data->getAttributeLabel('opini_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->opini_id),array('view','id'=>$data->opini_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('tweet_id')); ?>:</b>
	<?php echo CHtml::encode($data->tweet_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idstr')); ?>:</b>
	<?php echo CHtml::encode($data->idstr); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('screen_name')); ?>:</b>
	<?php echo CHtml::encode($data->screen_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('text')); ?>:</b>
	<?php echo CHtml::encode($data->text); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('label')); ?>:</b>
	<?php echo CHtml::encode($data->label); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('skor')); ?>:</b>
	<?php echo CHtml::encode($data->skor); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('kategori_id')); ?>:</b>
	<?php echo CHtml::encode($data->kategori_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('kota_id')); ?>:</b>
	<?php echo CHtml::encode($data->kota_id); ?>
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

	<b><?php echo CHtml::encode($data->getAttributeLabel('created_at')); ?>:</b>
	<?php echo CHtml::encode($data->created_at); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('create_time')); ?>:</b>
	<?php echo CHtml::encode($data->create_time); ?>
	<br />

	*/ ?>

</div>