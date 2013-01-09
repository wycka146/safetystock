<?php

/**
 * This is the model class for table "administratorius".
 *
 * The followings are the available columns in table 'administratorius':
 * @property integer $vartotojas
 * @property integer $vadovas
 *
 * The followings are the available model relations:
 * @property Vartotojas $vartotojas0
 */
class Administratorius extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Administratorius the static model class
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
		return 'administratorius';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('vartotojas, vadovas', 'required'),
			array('vartotojas, vadovas', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('vartotojas, vadovas', 'safe', 'on'=>'search'),
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
			'vartotojas0' => array(self::BELONGS_TO, 'Vartotojas', 'vartotojas'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'vartotojas' => 'Vartotojas',
			'vadovas' => 'Vadovas',
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

		$criteria->compare('vartotojas',$this->vartotojas);
		$criteria->compare('vadovas',$this->vadovas);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}