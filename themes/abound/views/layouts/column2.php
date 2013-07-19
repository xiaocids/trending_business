<?php /* @var $this Controller */ ?>
<?php $this->beginContent('//layouts/main'); ?>

  <div class="row-fluid">
	<div class="span3">
		<div class="sidebar-nav">
        
		  <?php $this->widget('zii.widgets.CMenu', array(
			/*'type'=>'list',*/
			'encodeLabel'=>false,
			'items'=>array(
				array('label'=>'<i class="icon icon-home icon-white"></i>  Dashboard <span class="label label-success pull-right">BETA</span>', 'url'=>array('/site/dashboard'),'itemOptions'=>array('class'=>'')),
				//array('label'=>'<i class="icon icon-search icon-white"></i> About this application', 'url'=>'/site/about'),
				//array('label'=>'<i class="icon icon-envelope icon-white"></i> Messages <span class="badge badge-success pull-right">12</span>', 'url'=>'#'),
				// Include the operations menu
				array('label'=>'<strong>CRAWLER</strong>','items'=>array(
                    array('label'=>'<i class="icon icon-retweet icon-white"></i> Mulai Crawler', 'url'=>array('/crawler/indexCrawler')),
                    array('label'=>'<i class="icon icon-comment icon-white"></i> Data Tweet Mentah', 'url'=>array('/tweet/dataTweetMentah')),
                    array('label'=>'<i class="icon icon-list-alt icon-white"></i> Histori Crawler', 'url'=>array('/crawler/historiCrawler')),
                )),
                
                array('label'=>'<strong>MINING</strong>','items'=>array(
                    array('label'=>'<i class="icon icon-resize-small icon-white"></i> Pre Proses Data', 'url'=>array('/mining/indexPreproses')),
                    array('label'=>'<i class="icon icon-comment icon-white"></i> Data Tweet Bersih', 'url'=>array('/tweet/dataTweetBersih')),
                    array('label'=>'<i class="icon icon-th-list icon-white"></i> Klasifikasi Kategori Bisnis', 'url'=>array('/mining/indexKlasifikasiKategori')),
                    array('label'=>'<i class="icon icon-th-list icon-white"></i> Klasifikasi Polaritas', 'url'=>array('/mining/indexKlasifikasiPolaritas')),
                )),
                
                array('label'=>'<strong>TRENDING</strong>','items'=>array(
                    array('label'=>'<i class="icon icon-comment icon-white"></i> Data Opini', 'url'=>array('/opini/dataOpini')),
                    array('label'=>'<i class="icon icon-signal icon-white"></i> Data Trending', 'url'=>array('/trending/dataTrending')),                    
                )),
                
                array('label'=>'<strong>PENGATURAN</strong>','items'=>array(
                    array('label'=>'<i class="icon icon-folder-open icon-white"></i> Master Kota', 'url'=>array('/kota/admin')),
                    array('label'=>'<i class="icon icon-folder-open icon-white"></i> Master Kategori', 'url'=>array('/kategori/admin')),
                    array('label'=>'<i class="icon icon-folder-open icon-white"></i> Data Latih', 'url'=>array('/datalatih/admin')),
                    array('label'=>'<i class="icon icon-wrench icon-white"></i> Pengaturan Crawler', 'url'=>array('/pengaturan/pengaturanCrawler')),
                    array('label'=>'<i class="icon icon-folder-close icon-white"></i> Import Data', 'url'=>Yii::app()->createUrl('importcsv/default/index')),
                )),
			),
			));?>
		</div>
        <br>
        
        <!-- DIbuang saja
        <table class="table table-striped table-bordered">
          <tbody>
            <tr>
              <td width="50%">Bandwith Usage</td>
              <td>
              	<div class="progress progress-danger">
                  <div class="bar" style="width: 80%"></div>
                </div>
              </td>
            </tr>
            <tr>
              <td>Disk Spage</td>
              <td>
             	<div class="progress progress-warning">
                  <div class="bar" style="width: 60%"></div>
                </div>
              </td>
            </tr>
            <tr>
              <td>Conversion Rate</td>
              <td>
             	<div class="progress progress-success">
                  <div class="bar" style="width: 40%"></div>
                </div>
              </td>
            </tr>
            <tr>
              <td>Closed Sales</td>
              <td>
              	<div class="progress progress-info">
                  <div class="bar" style="width: 20%"></div>
                </div>
              </td>
            </tr>
          </tbody>
        </table>
		<div class="well">
        
            <dl class="dl-horizontal">
              <dt>Account status</dt>
              <dd>$1,234,002</dd>
              <dt>Open Invoices</dt>
              <dd>$245,000</dd>
              <dt>Overdue Invoices</dt>
              <dd>$20,023</dd>
              <dt>Converted Quotes</dt>
              <dd>$560,000</dd>
              
            </dl>
      </div>
		
        Dibuang saja
        -->
    </div><!--/span-->
    <div class="span9">
    
    <?php if(isset($this->breadcrumbs)):?>
		<?php $this->widget('zii.widgets.CBreadcrumbs', array(
            'links'=>$this->breadcrumbs,
			'homeLink'=>CHtml::link('Dashboard'),
			'htmlOptions'=>array('class'=>'breadcrumb')
        )); ?><!-- breadcrumbs -->
    <?php endif?>
    
    <!-- Include content pages -->
    <?php echo $content; ?>

	</div><!--/span-->
  </div><!--/row-->


<?php $this->endContent(); ?>