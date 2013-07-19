<?php

/**
 * This is the model class for table "data_latih".
 *
 * The followings are the available columns in table 'data_latih':
 * @property integer $datalatih_id
 * @property string $teks
 * @property string $kelas
 */
class Datalatih_model extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Datalatih_model the static model class
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
		return 'data_latih';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('teks', 'required'),
			array('teks', 'length', 'max'=>255),
			array('kelas', 'length', 'max'=>45),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('datalatih_id, teks, kelas', 'safe', 'on'=>'search'),
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
			'datalatih_id' => 'ID',
			'teks' => 'Teks',
			'kelas' => 'Kelas',
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

		$criteria->compare('datalatih_id',$this->datalatih_id);
		$criteria->compare('teks',$this->teks,true);
		$criteria->compare('kelas',$this->kelas,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}