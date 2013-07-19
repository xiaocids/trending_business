<?php
Yii::import("application.components.Bayesian", true);
class MiningController extends Controller
{
    /**
     * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
     * using two-column layout. See 'protected/views/layouts/column2.php'.
     */
    public $layout = '//layouts/column2';
    
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
            'actions' => array('index'), 'users' => array('*'), ), array('allow',
            // allow authenticated user to perform 'create' and 'update' actions
            'actions' => array('indexPreproses', 'preprosesDataTwitter'), 'users' => array('@'), ), array('allow',
            // allow admin user to perform 'admin' and 'delete' actions
            'actions' => array(), 'users' => array('admin'), ), array('deny',
            // deny all users
            'users' => array('*'), ), );
    }
    
	public function actionIndex()
	{
		$this->render('index');
	}

    public function actionIndexPreproses()
    {
        $this->render('indexPreproses');
    }
    
    public function actionIndexKlasifikasiKategori()
    {
        $this->render('indexKlasifikasiKategoriView');
    }
    
    public function actionIndexKlasifikasiPolaritas()
    {
        $this->render('indexKlasifikasiPolaritas');
    }
    
    public function actionKlasifikasiKategoriBisnis()
    {
        if(Yii::app()->request->isPostRequest)
        {
            // konfigurasi klasifier bayes
            $config = array(
                    'classes' =>  array('makanan', 'travel'),
                    'classTokCounts' => array('makanan' => 0, 'travel' => 0),
                    'tokCount'=>0,
                    'classDocCounts' => array('makanan' => 0, 'travel' => 0),
                    'docCount'=>0,
                    'prior' => array('makanan' => 0.5, 'travel' => 0.5),
                );
                
            // objek bayes classifier
            $bayes = new Bayesian($config);
            // pelatihan model kategori makanan
            
            
            $bayes->addToIndex();
            
            // pelatihan model kategori travel
            $bayes->addToIndex();
            
            
            
            // Ambil data tweet bersih
            $modelTweet = Tweet_model::model()->findAllByAttributes(array('label'=>'bersih'));
            
            
            foreach ($modelTweet as $i=>$tweet):
                $data[$i] = $tweet;
            endforeach;
            echo CJSON::encode($data);
            Yii::app()->end();
        }else
            throw new CHttpException(400,
                'Invalid request. Please do not repeat this request again.');
    }
    
    // Method membersihkan data twitter mentah dari URL
    protected function cleansing($tweet)
    {
        // Hapus URL
        $noURL= preg_replace('@((https?://)?([-\w]+\.[-\w\.]+)+\w(:\d+)?(/([-\w/_\.]*(\?\S+)?)?)*)@', '', $tweet);
        
        // Membersihkan karakter noise dan merubahnya ke ASCII
        $clean = preg_replace("/[^a-zA-Z0-9\/_|+ -]/", '', $noURL);
        $clean = strtolower(trim($clean));
        $clean = preg_replace("/[\/_|+ -]+/", ' ', $clean);
        
        return $clean;
    }
    
    // Fungsi preproses data twitter
    public function actionPreprosesDataTwitter()
    {
        if (Yii::app()->request->isPostRequest){
            $modelTweet = Tweet_model::model()->findAllByAttributes(array('label'=>'mentah'));
            
            foreach ($modelTweet as $i => $tweet):
            
                // Ekstraksi Model TwOri 
                // Memanggil fungsi cleansing teks twitter
                $twClean = $this->cleansing($tweet->text_mentah);
                
                //Akhir Ekstraksi Model TwOri
                
                // Tokenisasi
                $isTokenise = $this->getTokens($twClean);
                
                // Ekstraksi Model TwRoot
                // Penggabungan kata-kata jadi kalimat
                /*foreach ($isTokenise as $i => $word):
                
                    // Stemming
                    if($this->stemmer->stemming($word))
                    {
                        $root = $this->stemmer->stemming($word);
                    }else{
                        $root = '';
                    }
                    
                    $isTokenise[$i] = trim($root);
                                    
                endforeach;*/
                $TwOriRoot = implode(' ', $isTokenise);
                
                Tweet_model::model()->updateByPk($tweet->tweet_id, array('hasil_proses1'=>$TwOriRoot, 'label'=>'bersih'));
                // Akhir Ekstraksi Model TwRoot
                //$this->simpan_tweet($tweet, $TwOriRoot, 'TwOriRoot', 'preproses');
                //echo 'Clean :' . implode(' ', $isTokenise) . $tweet->tweet_id.'<br>';
                
            endforeach;
            echo CJSON::encode(date('d-m-Y H:i:s'));
        }else
            throw new CHttpException(400,
                'Invalid request. Please do not repeat this request again.');
    }
    
    //Method tokenisasi
    protected function getTokens($string)
    {

        // Replace line endings with spaces
        $string = str_replace("\r\n\t", " ", $string);

        //Clean the string so is free from accents
        $string = $this->cleanString($string);

        //Make all texts lowercase as the database of words in in lowercase
        $string = strtolower($string);

        //Break string into individual words using explode putting them into an array
        $matches = explode(" ", $string);

        //Return array with each individual token
        return $matches;
    }

    
    protected function cleanString($string)
    {

        $diac = /* A */ chr(192) . chr(193) . chr(194) . chr(195) . chr(196) . chr(197) .
            /* a */ chr(224) . chr(225) . chr(226) . chr(227) . chr(228) . chr(229) .
            /* O */ chr(210) . chr(211) . chr(212) . chr(213) . chr(214) . chr(216) .
            /* o */ chr(242) . chr(243) . chr(244) . chr(245) . chr(246) . chr(248) .
            /* E */ chr(200) . chr(201) . chr(202) . chr(203) . /* e */ chr(232) . chr(233) .
            chr(234) . chr(235) . /* Cc */ chr(199) . chr(231) . /* I */ chr(204) . chr(205) .
            chr(206) . chr(207) . /* i */ chr(236) . chr(237) . chr(238) . chr(239) .
            /* U */ chr(217) . chr(218) . chr(219) . chr(220) . /* u */ chr(249) . chr(250) .
            chr(251) . chr(252) . /* yNn */ chr(255) . chr(209) . chr(241);

        return strtolower(strtr($string, $diac,
            'AAAAAAaaaaaaOOOOOOooooooEEEEeeeeCcIIIIiiiiUUUUuuuuyNn'));
    } 
    
	// Uncomment the following methods and override them if needed
	/*
	public function filters()
	{
		// return the filter configuration for this controller, e.g.:
		return array(
			'inlineFilterName',
			array(
				'class'=>'path.to.FilterClass',
				'propertyName'=>'propertyValue',
			),
		);
	}

	public function actions()
	{
		// return external action classes, e.g.:
		return array(
			'action1'=>'path.to.ActionClass',
			'action2'=>array(
				'class'=>'path.to.AnotherActionClass',
				'propertyName'=>'propertyValue',
			),
		);
	}
	*/
}