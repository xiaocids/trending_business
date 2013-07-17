<?php

/**
 * This is the model class for table "tweet".
 *
 * The followings are the available columns in table 'tweet':
 * @property integer $tweet_id
 * @property string $idstr
 * @property string $screen_name
 * @property string $text_mentah
 * @property string $hasil_proses1
 * @property string $hasil_proses2
 * @property string $hasil_proses3
 * @property string $label
 * @property string $location
 * @property double $longitude
 * @property double $latitude
 * @property integer $crawler_id
 * @property string $create_at
 * @property string $create_time
 */
class Tweet_model extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Tweet_model the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'tweet';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('tweet_id, idstr, screen_name, crawler_id, create_at, create_time', 'required'),
			array('tweet_id, crawler_id', 'numerical', 'integerOnly'=>true),
			array('longitude, latitude', 'numerical'),
			array('idstr', 'length', 'max'=>60),
			array('screen_name', 'length', 'max'=>50),
			array('text_mentah, hasil_proses1, hasil_proses2, hasil_proses3', 'length', 'max'=>255),
			array('label, location', 'length', 'max'=>45),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('tweet_id, idstr, screen_name, text_mentah, hasil_proses1, hasil_proses2, hasil_proses3, label, location, longitude, latitude, crawler_id, create_at, create_time', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
            'crawler' => array(self::BELONGS_TO, 'Crawler_model', 'crawler_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'tweet_id' => 'ID',
			'idstr' => 'ID Str',
			'screen_name' => 'Screen Name',
			'text_mentah' => 'Text Mentah',
			'hasil_proses1' => 'Hasil Proses1',
			'hasil_proses2' => 'Hasil Proses2',
			'hasil_proses3' => 'Hasil Proses3',
			'label' => 'Label',
			'location' => 'Location',
			'longitude' => 'Longitude',
			'latitude' => 'Latitude',
			'crawler_id' => 'Crawler',
			'create_at' => 'Create At',
			'create_time' => 'Create Time',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('tweet_id',$this->tweet_id);
		$criteria->compare('idstr',$this->idstr,true);
		$criteria->compare('screen_name',$this->screen_name,true);
		$criteria->compare('text_mentah',$this->text_mentah,true);
		$criteria->compare('hasil_proses1',$this->hasil_proses1,true);
		$criteria->compare('hasil_proses2',$this->hasil_proses2,true);
		$criteria->compare('hasil_proses3',$this->hasil_proses3,true);
		$criteria->compare('label',$this->label,true);
		$criteria->compare('location',$this->location,true);
		$criteria->compare('longitude',$this->longitude);
		$criteria->compare('latitude',$this->latitude);
		$criteria->compare('crawler_id',$this->crawler_id);
		$criteria->compare('create_at',$this->create_at,true);
		$criteria->compare('create_time',$this->create_time,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
    
    
    public function searchTweetMentah()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('tweet_id',$this->tweet_id);
		$criteria->compare('idstr',$this->idstr,true);
		$criteria->compare('screen_name',$this->screen_name,true);
		$criteria->compare('text_mentah',$this->text_mentah,true);
		$criteria->compare('hasil_proses1',$this->hasil_proses1,true);
		$criteria->compare('hasil_proses2',$this->hasil_proses2,true);
		$criteria->compare('hasil_proses3',$this->hasil_proses3,true);
		$criteria->compare('label','mentah',true);
		$criteria->compare('location',$this->location,true);
		$criteria->compare('longitude',$this->longitude);
		$criteria->compare('latitude',$this->latitude);
		$criteria->compare('crawler_id',$this->crawler_id);
		$criteria->compare('create_at',$this->create_at,true);
		$criteria->compare('create_time',$this->create_time,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
    
     public function searchTweetBersih()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('tweet_id',$this->tweet_id);
		$criteria->compare('idstr',$this->idstr,true);
		$criteria->compare('screen_name',$this->screen_name,true);
		$criteria->compare('text_mentah',$this->text_mentah,true);
		$criteria->compare('hasil_proses1',$this->hasil_proses1,true);
		$criteria->compare('hasil_proses2',$this->hasil_proses2,true);
		$criteria->compare('hasil_proses3',$this->hasil_proses3,true);
		$criteria->compare('label','bersih',true);
		$criteria->compare('location',$this->location,true);
		$criteria->compare('longitude',$this->longitude);
		$criteria->compare('latitude',$this->latitude);
		$criteria->compare('crawler_id',$this->crawler_id);
		$criteria->compare('create_at',$this->create_at,true);
		$criteria->compare('create_time',$this->create_time,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}