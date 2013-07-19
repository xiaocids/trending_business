<?php

/**
 * @author XiaoCid
 * @copyright 2013
 */



?>
<h1>Mulai Crawler</h1>

<div class="data-page">
    <center>
    <div class="column span9">
        <div class=""><img id="loader" class="loader_off" src="<?= Yii::app()->getBaseUrl().'../images/loader_disabled.gif'; ?>"/></div>
        <br />
        <button id="btn_mulai" type="button" class="btn btn-primary btn-large">Mulai</button>
    </div>
    </center>
</div>
<?php

?>
<script>
    var loader_on = '<?= Yii::app()->getBaseUrl().'../images/loader.gif'; ?>';
    var loader_off = '<?= Yii::app()->getBaseUrl().'../images/loader_disabled.gif'; ?>';
    var loader = $('#loader');
    
     $(function() {
        $('#btn_mulai').click(function (){
            if(loader.hasClass('loader_off')){
                loader.removeClass('loader_off');
                loader.addClass('loader_on');
                loader.attr('src', loader_on);
                $('button').html('Berhenti')
                $('button').addClass('disabled');
                
                $.ajax({
                     type: "POST",
                     url: "<?php echo Yii::app()->createUrl('/crawler/MulaiCrawler'); ?>",
                     //data: postData , //assign the var here 
                     success: function(msg){
                        loader.removeClass('loader_on');
                        loader.addClass('loader_off');
                        loader.attr('src', loader_off);
                        $('button').html('Mulai');
                        $('button').removeClass('disabled');
                        alert( "Crawler Selesai!");                        
                     }
                });
         
                 return false;
            }else{
                loader.removeClass('loader_on');
                loader.addClass('loader_off');
                loader.attr('src', loader_off);
                $('button').html('Mulai');
                $('button').removeClass('disabled');
            }
        })
     });
</script>