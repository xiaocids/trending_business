<?php
Yii::import("application.components.tmhOAuthExamples.tmhOAuthExample", true);
Yii::import("application.components.tmhOAuth.tmhOAuth", true);

class CrawlerController extends Controller
{
    /**
     * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
     * using two-column layout. See 'protected/views/layouts/column2.php'.
     */
    public $layout = '//layouts/column2';
    private $crawler_id;
    private $kota_id;

    /**
     * @return array action filters
     */
    public function filters()
    {
        return array('accessControl', // perform access control for CRUD operations
            );
    }

    /**
     * Specifies the access control rules.
     * This method is used by the 'accessControl' filter.
     * @return array access control rules
     */
    public function accessRules()
    {
        return array(array('allow',
            // allow all users to perform 'index' and 'view' actions
            'actions' => array('IndexCrawler', 'mulai', 'view'), 'users' => array('*'), ), array('allow',
            // allow authenticated user to perform 'create' and 'update' actions
            'actions' => array('create', 'update', 'testCrawler', 'historiCrawler', 'mulaiCrawler'), 'users' => array('@'), ), array('allow',
            // allow admin user to perform 'admin' and 'delete' actions
            'actions' => array('admin', 'delete'), 'users' => array('admin'), ), array('deny',
            // deny all users
            'users' => array('*'), ), );
    }

    /**
     * Displays a particular model.
     * @param integer $id the ID of the model to be displayed
     */
    public function actionView($id)
    {
        $this->render('view', array('model' => $this->loadModel($id), ));
    }

    /**
     * Creates a new model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     */
    public function actionCreate()
    {
        $model = new Crawler_model;

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST['Crawler_model']))
        {
            $model->attributes = $_POST['Crawler_model'];
            $model->waktu_mulai = date('d-m-Y H:i:s');
            $model->waktu_berhenti = date('d-m-Y H:i:s');
            $model->create_time = date('d-m-Y H:i:s');
            $model->crawler_aktif = true;
            if ($model->save())
                $this->redirect(array('view', 'id' => $model->crawler_id));
        }

        $this->render('create', array('model' => $model, ));
    }

    /**
     * Updates a particular model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id the ID of the model to be updated
     */
    public function actionUpdate($id)
    {
        $model = $this->loadModel($id);

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST['Crawler_model']))
        {
            $model->attributes = $_POST['Crawler_model'];
            if ($model->save())
                $this->redirect(array('view', 'id' => $model->crawler_id));
        }

        $this->render('update', array('model' => $model, ));
    }

    /**
     * Deletes a particular model.
     * If deletion is successful, the browser will be redirected to the 'admin' page.
     * @param integer $id the ID of the model to be deleted
     */
    public function actionDelete($id)
    {
        if (Yii::app()->request->isPostRequest)
        {
            // we only allow deletion via POST request
            $this->loadModel($id)->delete();

            // if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
            if (!isset($_GET['ajax']))
                $this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
        } else
            throw new CHttpException(400,
                'Invalid request. Please do not repeat this request again.');
    }

    /**
     * Lists all models.
     */
    public function actionIndexCrawler()
    {
        $dataProvider = new CActiveDataProvider('Crawler_model');
        $this->render('indexCrawlerView', array('dataProvider' => $dataProvider, ));
    }

    /**
     * Manages all models.
     */
    public function actionAdmin()
    {
        $model = new Crawler_model('search');
        $model->unsetAttributes(); // clear any default values
        if (isset($_GET['Crawler_model']))
            $model->attributes = $_GET['Crawler_model'];

        $this->render('admin', array('model' => $model, ));
    }

    /**
     * Returns the data model based on the primary key given in the GET variable.
     * If the data model is not found, an HTTP exception will be raised.
     * @param integer the ID of the model to be loaded
     */
    public function loadModel($id)
    {
        $model = Crawler_model::model()->findByPk($id);
        if ($model === null)
            throw new CHttpException(404, 'The requested page does not exist.');
        return $model;
    }

    /**
     * Performs the AJAX validation.
     * @param CModel the model to be validated
     */
    protected function performAjaxValidation($model)
    {
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'crawler-model-form')
        {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }
    
    public function actionHistoriCrawler()
    {
        $model = new Crawler_model('search');
        $model->unsetAttributes(); // clear any default values
        if (isset($_GET['Crawler_model']))
            $model->attributes = $_GET['Crawler_model'];

        $this->render('historiCrawlerView', array('model' => $model, ));
    }
    
    public function actionMulaiCrawler()
    {
        if(Yii::app()->request->isPostRequest)
        {
            $modelPengaturan = Pengaturan_model::model()->findByAttributes(array('pengaturan_aktif'=>true));
            $waktu_mulai = date('Y-m-d H:i:s');
            $waktu_berhenti = date('Y-m-d H:i:s');
                       
            if(count($modelPengaturan) == 1)
            {
                // Memulai transaksi database
                
                //$transaction = Yii::app()->db->beginTransaction();
                
                // Array konfigurasi tmhOAuth
                $config = array(
                            'consumer_key'    => $modelPengaturan->consumer_key,
                            'consumer_secret' => $modelPengaturan->consumer_secret,
                            'token'           => $modelPengaturan->access_token,
                            'secret'          => $modelPengaturan->access_token_secret,
                            'curl_timeout'    => $modelPengaturan->limit_crawler,
                            'is_streaming'    => false,
                        );
                
                // Object ckoneksi socket menggunakan tmhOAuth
                $oAuth = new tmhOAuth($config);
                // Objeck baru untuk crawler
                $modelCrawler = new Crawler_model;
                $modelCrawler->unsetAttributes();
                
                $modelCrawler->waktu_mulai = $waktu_mulai;
                $modelCrawler->waktu_berhenti = $waktu_berhenti;
                $modelCrawler->nama_akun_twitter = $modelPengaturan->akun_twitter;
                $modelCrawler->crawler_aktif = true;
                $modelCrawler->create_time = date('Y-m-d H:i:s');
                $modelCrawler->save();
                
                $this->crawler_id = $modelCrawler->crawler_id;
                
               
                $http_code = $oAuth->streaming_request(
                    'POST',
                    $modelPengaturan->method_api,
                    array(
                        'track'=>$modelPengaturan->filters,
                        'locations'=>$modelPengaturan->kota->sw_long.','.$modelPengaturan->kota->sw_lat.','.$modelPengaturan->kota->ne_long.','.$modelPengaturan->kota->ne_lat,
                    ),
                    array($this,'simpanTweet')
                );
                 
                Crawler_model::model()->updateByPk($this->crawler_id, array('crawler_aktif'=>false,'waktu_berhenti'=>date('Y-m-d H:i:s')));         
                
                // Get the timeline with the Twitter API
                
                    
                // Request was successful
                if ($http_code == 200) {
                    Crawler_model::model()->updateByPk($this->crawler_id, array('crawler_aktif'=>false,'waktu_berhenti'=>$waktu_berhenti)); 
                                      
                    //$transaction->commit();
                    echo CJSON::encode('Crawler selesai! '. $this->crawler_id.'-'.date('Y-m-d H:i:s'.'. '));
                    
                    $this->crawler_id = 0;
                    Yii::app()->end();
                }
                // Handle errors from API request
                else {
                    if ($http_code == 429) {
                        //$transaction->rollback();
                        Crawler_model::model()->updateByPk($this->crawler_id, array('crawler_aktif'=>false,'waktu_berhenti'=>$waktu_berhenti));
                        echo CJSON::encode('Error: Twitter API rate limit reached');
                        Yii::app()->end();
                    }
                    else {
                        //$transaction->rollback();
                        Crawler_model::model()->updateByPk($this->crawler_id, array('crawler_aktif'=>false,'waktu_berhenti'=>$waktu_berhenti));
                        echo CJSON::encode('Error: Twitter was not able to process that request');
                        Yii::app()->end();
                    }
                }
            }
            else
            {
                //$transaction->rollback();
                echo CJSON::encode('Belum ada pengaturan crawler!');
                Yii::app()->end();
            }
        }
    }
    
     
    
    // Method callback untuk menyimpan data twitter yang terambil
      
    function simpanTweet($data, $length, $metrics) {
      $file = __DIR__.'/metrics.txt';
      $i=0;
      $modelTweet = null;
        
      //if(strlen($data)>2){
       
        //$oData = json_decode($data);
        if(strlen($data)>2){
            $oData = json_decode($data);
        //foreach($oData as $item){
            $modelTweet[$i] = new Tweet_model;
            //if(isset($oData->text) && $oData->coordinates != null){
                $modelTweet[$i]->idstr = $oData->id_str;
                $modelTweet[$i]->screen_name = $oData->user->screen_name;
                $modelTweet[$i]->text_mentah = $oData->text;
                $modelTweet[$i]->label = 'mentah';
                $modelTweet[$i]->create_at = date("Y-m-d H:i:s", strtotime($oData->created_at));
                $modelTweet[$i]->longitude = $oData->coordinates->coordinates[0];
                $modelTweet[$i]->latitude = $oData->coordinates->coordinates[1];
                $modelTweet[$i]->location = $oData->user->location;
                //$modelTweet->kota_id = 1;//$this->crawler_kota_id;
                $modelTweet[$i]->crawler_id = $this->crawler_id;
                $modelTweet[$i]->create_time = date('Y-m-d H:i:s');
                $i++;
                //echo $oData->id_str.'-'.$oData->user->screen_name.'-'.$oData->text.'</br>';
                //print_r($item);
            //}
            //$modelTweet[$i]->validate();
            
        }
        
        foreach ($modelTweet as $tw){
            $tw->save(false);
        }
        
        Crawler_model::model()->updateByPk($this->crawler_id, array('crawler_aktif'=>false,'waktu_berhenti'=>date('Y-m-d H:i:s')));
        
        if (!is_null($metrics)) {
            if (!file_exists($file)) {
              $line = 'time' . "\t" . implode("\t", array_keys($metrics)) . PHP_EOL;
              file_put_contents($file, $line);
            }
            $line = time() . "\t" . implode("\t", $metrics) . PHP_EOL;
            file_put_contents($file, $line, FILE_APPEND);
        }
        return file_exists(dirname(__FILE__) . '/STOP');
    }

    public function actionTestCrawler()
    {
        
        $oAuth = new tmhOAuthExample();
        
        
        $http_code = $oAuth->streaming_request(
          'POST',
          'https://stream.twitter.com/1.1/statuses/filter.json',
          array('track'=>'bandung'),
          array($this,'my_streaming_callback')
        );
        
        // Get the timeline with the Twitter API
        
            
        // Request was successful
        if ($http_code == 200) {
            // Extract the tweets from the API response
            $response = json_decode($oAuth->response['response'],true);
            $tweet_data = $response['statuses'];
        
            // Accumulate tweets from results
            $tweet_stream = '[';
            foreach ($tweet_data as $tweet) {
                // Add this tweet's text to the results
                $tweet_stream .= ' { "tweet": ' . json_encode($tweet['text']) . ' },';
            }
            $tweet_stream = substr($tweet_stream, 0, -1);
            $tweet_stream .= ']';
            // Send the tweets back to the Ajax request
            print $tweet_stream;
        }
        // Handle errors from API request
        else {
            if ($http_code == 429) {
                print 'Error: Twitter API rate limit reached';
            }
            else {
                print 'Error: Twitter was not able to process that request';
            }
        }
        
        
    }
}
