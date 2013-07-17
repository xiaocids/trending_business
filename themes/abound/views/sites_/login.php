<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

/*$this->pageTitle=Yii::app()->name . ' - Login';
$this->breadcrumbs=array(
	'Login',
);*/
?>
<!-- <div class="page-header">
	<h1>Login <small>to your account</small></h1>
</div> -->
<div class="row-fluid">
	
    <div class="span6 offset3">
    <?php
    	$this->beginWidget('zii.widgets.CPortlet', array(
    		'title'=>"Login",
    	));
    	
    ?>



    <p>Please fill out the following form with your login credentials:</p>
    
    <div class="form">
    <?php $form=$this->beginWidget('CActiveForm', array(
        'id'=>'login-form',
        'enableClientValidation'=>true,
        'clientOptions'=>array(
            'validateOnSubmit'=>true,
        ),
    )); ?>
    
        <p class="note">Fields with <span class="required">*</span> are required.</p>
        <div class="form-horizontal">
            <div class="control-group">
                <?php echo $form->labelEx($model, 'username', array('class'=>'control-label')); ?>
                <div class="controls">
                   <?php echo $form->textField($model,'username',array('class'=>'span8','maxlength'=>45)); ?>                    
                </div>
            </div>
            
            <div class="control-group">
                <?php echo $form->labelEx($model, 'password', array('class'=>'control-label')); ?>
                <div class="controls">
                   <?php echo $form->textField($model,'password',array('class'=>'span8','maxlength'=>45)); ?>                    
                </div>
            </div>
    
            <div class="control-group">
                <?php echo $form->labelEx($model, 'rememberMe', array('class'=>'control-label')); ?>
                <div class="controls">
                   <?php echo $form->checkBox($model,'rememberMe'); ?>                    
                </div>
            </div>
    
        <div class="form-actions">
            <?php 
                $this->widget('bootstrap.widgets.TbButton', array(
        			'buttonType'=>'submit',
        			'type'=>'primary',
                    'icon'=>'icon-white icon-ok',
        			'label'=>'Login',
        		));
                echo '&nbsp;&nbsp;';
                $this->widget('bootstrap.widgets.TbButton', array(
        			'buttonType'=>'reset',
        			'type'=>'inverse',
                    'icon'=>'icon-white icon-refresh',
        			'label'=>'Batal',
        		));
            ?>
        </div>
    
    <?php $this->endWidget(); ?>
    </div><!-- form -->

<?php $this->endWidget();?>

    </div>

</div>