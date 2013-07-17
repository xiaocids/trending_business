<?php

/**
 * This is the model class for table "pengaturan".
 *
 * The followings are the available columns in table 'pengaturan':
 * @property integer $pengaturan_id
 * @property integer $kota_id
 * @property string $akun_twitter
 * @property string $password_twitter
 * @property integer $limit_crawler
 * @property string $method_api
 * @property string $consumer_key
 * @property string $consumer_secret
 * @property string $access_token
 * @property string $access_token_secret
 * @property string $filters
 * @property integer $pengaturan_aktif
 * @property string $create_time
 */
class Pengaturan_model extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Pengaturan_model the static model class
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
		return 'pengaturan';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('kota_id, akun_twitter, password_twitter, limit_crawler, method_api, consumer_key, consumer_secret, access_token, access_token_secret, filters, create_time', 'required'),
			array('kota_id, limit_crawler, pengaturan_aktif', 'numerical', 'integerOnly'=>true),
			array('akun_twitter', 'length', 'max'=>50),
			array('password_twitter', 'length', 'max'=>60),
			array('method_api', 'length', 'max'=>255),
			array('consumer_key, consumer_secret, access_token, access_token_secret', 'length', 'max'=>150),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('pengaturan_id, kota_id, akun_twitter, password_twitter, limit_crawler, method_api, consumer_key, consumer_secret, access_token, access_token_secret, filters, pengaturan_aktif, create_time', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'pengaturan_id' => 'ID',
			'kota_id' => 'Kota',
			'akun_twitter' => 'Akun Twitter',
			'password_twitter' => 'Password Twitter',
			'limit_crawler' => 'Limit Crawler',
			'method_api' => 'Method Api',
			'consumer_key' => 'Consumer Key',
			'consumer_secret' => 'Consumer Secret',
			'access_token' => 'Access Token',
			'access_token_secret' => 'Access Token Secret',
			'filters' => 'Filters',
			'pengaturan_aktif' => 'Pengaturan Aktif',
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

		$criteria->compare('pengaturan_id',$this->pengaturan_id);
		$criteria->compare('kota_id',$this->kota_id);
		$criteria->compare('akun_twitter',$this->akun_twitter,true);
		$criteria->compare('password_twitter',$this->password_twitter,true);
		$criteria->compare('limit_crawler',$this->limit_crawler);
		$criteria->compare('method_api',$this->method_api,true);
		$criteria->compare('consumer_key',$this->consumer_key,true);
		$criteria->compare('consumer_secret',$this->consumer_secret,true);
		$criteria->compare('access_token',$this->access_token,true);
		$criteria->compare('access_token_secret',$this->access_token_secret,true);
		$criteria->compare('filters',$this->filters,true);
		$criteria->compare('pengaturan_aktif',$this->pengaturan_aktif);
		$criteria->compare('create_time',$this->create_time,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}