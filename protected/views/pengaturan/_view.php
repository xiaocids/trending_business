<div class="view">

		<b><?php echo CHtml::encode($data->getAttributeLabel('pengaturan_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->pengaturan_id),array('view','id'=>$data->pengaturan_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('kota_id')); ?>:</b>
	<?php echo CHtml::encode($data->kota_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('akun_twitter')); ?>:</b>
	<?php echo CHtml::encode($data->akun_twitter); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('password_twitter')); ?>:</b>
	<?php echo CHtml::encode($data->password_twitter); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('limit_crawler')); ?>:</b>
	<?php echo CHtml::encode($data->limit_crawler); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('method_api')); ?>:</b>
	<?php echo CHtml::encode($data->method_api); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('filters')); ?>:</b>
	<?php echo CHtml::encode($data->filters); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('pengaturan_aktif')); ?>:</b>
	<?php echo CHtml::encode($data->pengaturan_aktif); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('create_time')); ?>:</b>
	<?php echo CHtml::encode($data->create_time); ?>
	<br />

	*/ ?>

</div>