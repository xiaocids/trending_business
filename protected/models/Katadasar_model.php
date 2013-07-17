<?php

/**
 * This is the model class for table "kata_dasar".
 *
 * The followings are the available columns in table 'kata_dasar':
 * @property integer $katadasar_id
 * @property string $kata_dasar_teks
 * @property string $kata_dasar_tipe
 */
class Katadasar_model extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Katadasar_model the static model class
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
		return 'kata_dasar';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('kata_dasar_teks', 'length', 'max'=>150),
			array('kata_dasar_tipe', 'length', 'max'=>50),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('katadasar_id, kata_dasar_teks, kata_dasar_tipe', 'safe', 'on'=>'search'),
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
			'katadasar_id' => 'ID',
			'kata_dasar_teks' => 'Kata Dasar',
			'kata_dasar_tipe' => 'Tipe',
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

		$criteria->compare('katadasar_id',$this->katadasar_id);
		$criteria->compare('kata_dasar_teks',$this->kata_dasar_teks,true);
		$criteria->compare('kata_dasar_tipe',$this->kata_dasar_tipe,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}