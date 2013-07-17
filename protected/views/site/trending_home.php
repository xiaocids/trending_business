<?php

/**
 * @author XiaoCid
 * @copyright 2013
 */



?>
<center>
    <h1>Trending Business</h1>
    
    <br />
    <br />
    <br />
    
    <?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
        'id'=>'submit-trending',
    	'action'=>Yii::app()->createUrl($this->route),
    	'method'=>'post',
    )); ?>
        <img class="img-rounded" alt="Trending Bussines"  src="<?=Yii::app()->getBaseUrl()?>../images/logo.jpg" border="1" width="300" height="150"/>
        <div class="form-inline" style="margin-top:10px;">
            
            <?php echo CHtml::label('Kota', 'kota', array('class'=>'control-label')) ?>
            <?php echo CHtml::dropDownList('kota','',CHtml::listData(Kota_model::model()->findAll('kota_aktif = true'),'kota_id', 'nama_kota'), array('prompt'=>'-Pilih'));?>
            <input id="btn-submit-trending" type="button" onclick="submitTrending()" value="Go" class="btn btn-primary">
            
        </div>
    <?php $this->endWidget(); ?>
</center>

<script>
function submitTrending()
{
    var kota = $('#kota').val();
    if(kota==0)
    {
        alert('Harus pilih kota terlebih dahulu!');
    }
    else
    {
        $('#submit-trending').submit();
    }
    
}
</script>