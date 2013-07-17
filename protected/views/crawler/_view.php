<div class="view">

		<b><?php echo CHtml::encode($data->getAttributeLabel('crawler_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->crawler_id),array('view','id'=>$data->crawler_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('waktu_mulai')); ?>:</b>
	<?php echo CHtml::encode($data->waktu_mulai); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('waktu_berhenti')); ?>:</b>
	<?php echo CHtml::encode($data->waktu_berhenti); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nama_akun_twitter')); ?>:</b>
	<?php echo CHtml::encode($data->nama_akun_twitter); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('create_time')); ?>:</b>
	<?php echo CHtml::encode($data->create_time); ?>
	<br />


</div>