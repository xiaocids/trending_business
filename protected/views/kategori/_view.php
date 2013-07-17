<div class="view">

		<b><?php echo CHtml::encode($data->getAttributeLabel('kategori_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->kategori_id),array('view','id'=>$data->kategori_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nama_kategori')); ?>:</b>
	<?php echo CHtml::encode($data->nama_kategori); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('kategori_aktif')); ?>:</b>
	<?php echo CHtml::encode($data->kategori_aktif); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('create_time')); ?>:</b>
	<?php echo CHtml::encode($data->create_time); ?>
	<br />


</div>