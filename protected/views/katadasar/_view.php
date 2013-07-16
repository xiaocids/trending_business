<div class="view">

		<b><?php echo CHtml::encode($data->getAttributeLabel('katadasar_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->katadasar_id),array('view','id'=>$data->katadasar_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('kata_dasar_teks')); ?>:</b>
	<?php echo CHtml::encode($data->kata_dasar_teks); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('kata_dasar_tipe')); ?>:</b>
	<?php echo CHtml::encode($data->kata_dasar_tipe); ?>
	<br />


</div>