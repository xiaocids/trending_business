<div class="view">

		<b><?php echo CHtml::encode($data->getAttributeLabel('datalatih_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->datalatih_id),array('view','id'=>$data->datalatih_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('teks')); ?>:</b>
	<?php echo CHtml::encode($data->teks); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('kelas')); ?>:</b>
	<?php echo CHtml::encode($data->kelas); ?>
	<br />


</div>