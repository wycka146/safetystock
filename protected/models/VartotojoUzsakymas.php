<?php

/**
 * This is the model class for table "vartotojo_uzsakymas".
 *
 * The followings are the available columns in table 'vartotojo_uzsakymas':
 * @property integer $vartotojas
 * @property integer $uzsakymas
 * @property string $laikas
 *
 * The followings are the available model relations:
 * @property Vartotojas $vartotojas0
 * @property Uzsakymas $uzsakymas0
 */
class VartotojoUzsakymas extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return VartotojoUzsakymas the static model class
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
		return 'vartotojo_uzsakymas';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('vartotojas, uzsakymas', 'required'),
			array('vartotojas, uzsakymas', 'numerical', 'integerOnly'=>true),
			array('laikas', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('vartotojas, uzsakymas, laikas', 'safe', 'on'=>'search'),
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
			'uzsakymas0' => array(self::BELONGS_TO, 'Uzsakymas', 'uzsakymas'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'vartotojas' => 'Darbuotojas',
			'uzsakymas' => 'Uzsakymas',
			'laikas' => 'Laikas',
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
		$criteria->compare('uzsakymas',$this->uzsakymas);
		$criteria->compare('laikas',$this->laikas,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}