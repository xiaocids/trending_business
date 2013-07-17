<?php

/**
 * This is the model class for table "trending".
 *
 * The followings are the available columns in table 'trending':
 * @property integer $trending_id
 * @property integer $kota_id
 * @property integer $posisi
 * @property integer $kategori_id
 * @property string $periode_bulan
 * @property string $periode_tahun
 * @property integer $total_tweet
 * @property integer $total_tweet_neg
 * @property integer $total_tweet_pos
 * @property string $create_time
 */
class Trending_model extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Trending_model the static model class
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
		return 'trending';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('kota_id, kategori_id, create_time', 'required'),
			array('kota_id, posisi, kategori_id, total_tweet, total_tweet_neg, total_tweet_pos', 'numerical', 'integerOnly'=>true),
			array('periode_bulan', 'length', 'max'=>25),
			array('periode_tahun', 'length', 'max'=>5),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('trending_id, kota_id, posisi, kategori_id, periode_bulan, periode_tahun, total_tweet, total_tweet_neg, total_tweet_pos, create_time', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'trending_id' => 'ID',
			'kota_id' => 'Kota',
			'posisi' => 'Posisi',
			'kategori_id' => 'Kategori',
			'periode_bulan' => 'Periode Bulan',
			'periode_tahun' => 'Periode Tahun',
			'total_tweet' => 'Total Tweet',
			'total_tweet_neg' => 'Total Tweet Neg',
			'total_tweet_pos' => 'Total Tweet Pos',
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

		$criteria->compare('trending_id',$this->trending_id);
		$criteria->compare('kota_id',$this->kota_id);
		$criteria->compare('posisi',$this->posisi);
		$criteria->compare('kategori_id',$this->kategori_id);
		$criteria->compare('periode_bulan',$this->periode_bulan,true);
		$criteria->compare('periode_tahun',$this->periode_tahun,true);
		$criteria->compare('total_tweet',$this->total_tweet);
		$criteria->compare('total_tweet_neg',$this->total_tweet_neg);
		$criteria->compare('total_tweet_pos',$this->total_tweet_pos);
		$criteria->compare('create_time',$this->create_time,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}