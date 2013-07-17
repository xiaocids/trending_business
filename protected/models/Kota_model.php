<?php

/**
 * This is the model class for table "kota".
 *
 * The followings are the available columns in table 'kota':
 * @property integer $kota_id
 * @property string $nama_kota
 * @property double $sw_long
 * @property double $sw_lat
 * @property double $ne_long
 * @property double $ne_lat
 * @property integer $kota_aktif
 * @property string $create_time
 */
class Kota_model extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Kota_model the static model class
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
		return 'kota';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nama_kota, kota_aktif, create_time', 'required'),
			array('kota_aktif', 'numerical', 'integerOnly'=>true),
			array('sw_long, sw_lat, ne_long, ne_lat', 'numerical'),
			array('nama_kota', 'length', 'max'=>45),
			array('create_time', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('kota_id, nama_kota, sw_long, sw_lat, ne_long, ne_lat, kota_aktif, create_time', 'safe', 'on'=>'search'),
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
			'kota_id' => 'ID',
			'nama_kota' => 'Nama Kota',
			'sw_long' => 'SW Corner',
			'sw_lat' => 'SW Lat',
			'ne_long' => 'NE Corner',
			'ne_lat' => 'NE Lat',
			'kota_aktif' => 'Kota Aktif',
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

		$criteria->compare('kota_id',$this->kota_id);
		$criteria->compare('nama_kota',$this->nama_kota,true);
		$criteria->compare('sw_long',$this->sw_long);
		$criteria->compare('sw_lat',$this->sw_lat);
		$criteria->compare('ne_long',$this->ne_long);
		$criteria->compare('ne_lat',$this->ne_lat);
		$criteria->compare('kota_aktif',$this->kota_aktif);
		$criteria->compare('create_time',$this->create_time,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}