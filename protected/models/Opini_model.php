<?php

/**
 * This is the model class for table "opini".
 *
 * The followings are the available columns in table 'opini':
 * @property integer $opini_id
 * @property integer $tweet_id
 * @property string $idstr
 * @property string $screen_name
 * @property string $text
 * @property string $label
 * @property double $skor
 * @property integer $kategori_id
 * @property integer $kota_id
 * @property string $location
 * @property double $longitude
 * @property double $latitude
 * @property string $created_at
 * @property string $create_time
 */
class Opini_model extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Opini_model the static model class
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
		return 'opini';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('tweet_id, idstr, screen_name, create_time', 'required'),
			array('tweet_id, kategori_id, kota_id', 'numerical', 'integerOnly'=>true),
			array('skor, longitude, latitude', 'numerical'),
			array('idstr, location', 'length', 'max'=>60),
			array('screen_name', 'length', 'max'=>50),
			array('text', 'length', 'max'=>255),
			array('label', 'length', 'max'=>45),
			array('created_at', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('opini_id, tweet_id, idstr, screen_name, text, label, skor, kategori_id, kota_id, location, longitude, latitude, created_at, create_time', 'safe', 'on'=>'search'),
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
            'kota' => array(self::BELONGS_TO, 'Kota_model', 'kota_id'),
            'kategori' => array(self::BELONGS_TO, 'Kategori_model', 'kategori_id'),
            'tweet' => array(self::BELONGS_TO, 'Tweet_model', 'tweet_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'opini_id' => 'ID',
			'tweet_id' => 'Tweet',
			'idstr' => 'ID Str',
			'screen_name' => 'Screen Name',
			'text' => 'Text',
			'label' => 'Label',
			'skor' => 'Skor',
			'kategori_id' => 'Kategori',
			'kota_id' => 'Kota',
			'location' => 'Location',
			'longitude' => 'Longitude',
			'latitude' => 'Latitude',
			'created_at' => 'Created At',
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

		$criteria->compare('opini_id',$this->opini_id);
		$criteria->compare('tweet_id',$this->tweet_id);
		$criteria->compare('idstr',$this->idstr,true);
		$criteria->compare('screen_name',$this->screen_name,true);
		$criteria->compare('text',$this->text,true);
		$criteria->compare('label',$this->label,true);
		$criteria->compare('skor',$this->skor);
		$criteria->compare('kategori_id',$this->kategori_id);
		$criteria->compare('kota_id',$this->kota_id);
		$criteria->compare('location',$this->location,true);
		$criteria->compare('longitude',$this->longitude);
		$criteria->compare('latitude',$this->latitude);
		$criteria->compare('created_at',$this->created_at,true);
		$criteria->compare('create_time',$this->create_time,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}