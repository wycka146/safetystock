<?php

/**
 * This is the model class for table "statistika".
 *
 * The followings are the available columns in table 'statistika':
 * @property integer $statistika_id
 * @property integer $uzklausu_skaicius
 * @property integer $operaciju_skaicius
 * @property integer $pardavimu_skaicius
 * @property integer $prisijungimu_skaicius
 * @property string $data
 */
class Statistika extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Statistika the static model class
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
		return 'statistika';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('uzklausu_skaicius, operaciju_skaicius, pardavimu_skaicius, prisijungimu_skaicius', 'numerical', 'integerOnly'=>true),
			array('data', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('statistika_id, uzklausu_skaicius, operaciju_skaicius, pardavimu_skaicius, prisijungimu_skaicius, data', 'safe', 'on'=>'search'),
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
			'statistika_id' => 'Statistika',
			'uzklausu_skaicius' => 'Uzklausu Skaicius',
			'operaciju_skaicius' => 'Operaciju Skaicius',
			'pardavimu_skaicius' => 'Pardavimu Skaicius',
			'prisijungimu_skaicius' => 'Prisijungimu Skaicius',
			'data' => 'Data',
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

		$criteria->compare('statistika_id',$this->statistika_id);
		$criteria->compare('uzklausu_skaicius',$this->uzklausu_skaicius);
		$criteria->compare('operaciju_skaicius',$this->operaciju_skaicius);
		$criteria->compare('pardavimu_skaicius',$this->pardavimu_skaicius);
		$criteria->compare('prisijungimu_skaicius',$this->prisijungimu_skaicius);
		$criteria->compare('data',$this->data,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}