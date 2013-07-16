<?php

/**
 * This is the model class for table "crawler".
 *
 * The followings are the available columns in table 'crawler':
 * @property integer $crawler_id
 * @property string $waktu_mulai
 * @property string $waktu_berhenti
 * @property string $nama_akun_twitter
 * @property integer $crawler_aktif
 * @property string $create_time
 */
class Crawler_model extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Crawler_model the static model class
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
		return 'crawler';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('waktu_mulai, waktu_berhenti, crawler_aktif, create_time', 'required'),
			array('crawler_aktif', 'numerical', 'integerOnly'=>true),
			array('nama_akun_twitter', 'length', 'max'=>50),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('crawler_id, waktu_mulai, waktu_berhenti, nama_akun_twitter, crawler_aktif, create_time', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'crawler_id' => 'ID',
			'waktu_mulai' => 'Waktu Mulai',
			'waktu_berhenti' => 'Waktu Berhenti',
			'nama_akun_twitter' => 'Nama Akun Twitter',
			'crawler_aktif' => 'Crawler Aktif',
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

		$criteria->compare('crawler_id',$this->crawler_id);
		$criteria->compare('waktu_mulai',$this->waktu_mulai,true);
		$criteria->compare('waktu_berhenti',$this->waktu_berhenti,true);
		$criteria->compare('nama_akun_twitter',$this->nama_akun_twitter,true);
		$criteria->compare('crawler_aktif',$this->crawler_aktif);
		$criteria->compare('create_time',$this->create_time,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}