<div class="view">

		<b><?php echo CHtml::encode($data->getAttributeLabel('trending_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->trending_id),array('view','id'=>$data->trending_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('kota_id')); ?>:</b>
	<?php echo CHtml::encode($data->kota_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('posisi')); ?>:</b>
	<?php echo CHtml::encode($data->posisi); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('kategori_id')); ?>:</b>
	<?php echo CHtml::encode($data->kategori_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('periode_bulan')); ?>:</b>
	<?php echo CHtml::encode($data->periode_bulan); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('periode_tahun')); ?>:</b>
	<?php echo CHtml::encode($data->periode_tahun); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('total_tweet')); ?>:</b>
	<?php echo CHtml::encode($data->total_tweet); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('total_tweet_neg')); ?>:</b>
	<?php echo CHtml::encode($data->total_tweet_neg); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('total_tweet_pos')); ?>:</b>
	<?php echo CHtml::encode($data->total_tweet_pos); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('create_time')); ?>:</b>
	<?php echo CHtml::encode($data->create_time); ?>
	<br />

	*/ ?>

</div>