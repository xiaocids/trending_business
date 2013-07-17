<div class="view">

		<b><?php echo CHtml::encode($data->getAttributeLabel('kota_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->kota_id),array('view','id'=>$data->kota_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nama_kota')); ?>:</b>
	<?php echo CHtml::encode($data->nama_kota); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sw_long')); ?>:</b>
	<?php echo CHtml::encode($data->sw_long); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('sw_lat')); ?>:</b>
	<?php echo CHtml::encode($data->sw_lat); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ne_long')); ?>:</b>
	<?php echo CHtml::encode($data->ne_long); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('ne_lat')); ?>:</b>
	<?php echo CHtml::encode($data->ne_lat); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('kota_aktif')); ?>:</b>
	<?php echo CHtml::encode($data->kota_aktif); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('create_time')); ?>:</b>
	<?php echo CHtml::encode($data->create_time); ?>
	<br />

	*/ ?>

</div>