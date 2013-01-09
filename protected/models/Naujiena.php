<?php

/**
 * This is the model class for table "naujiena".
 *
 * The followings are the available columns in table 'naujiena':
 * @property integer $naujiena_id
 * @property string $pavadinimas
 * @property integer $autorius
 * @property string $tekstas
 * @property string $laikas
 *
 * The followings are the available model relations:
 * @property Vartotojas $autorius0
 */
class Naujiena extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Naujiena the static model class
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
		return 'naujiena';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('pavadinimas, autorius', 'required'),
			array('autorius', 'numerical', 'integerOnly'=>true),
			array('pavadinimas', 'length', 'max'=>255),
			array('tekstas, laikas', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('naujiena_id, pavadinimas, autorius, tekstas, laikas', 'safe', 'on'=>'search'),
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
			'autorius' => array(self::BELONGS_TO, 'Vartotojas', 'autorius'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'naujiena_id' => 'Naujiena',
			'pavadinimas' => 'Pavadinimas',
			'autorius' => 'Autorius',
			'tekstas' => 'Tekstas',
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

		$criteria->compare('naujiena_id',$this->naujiena_id);
		$criteria->compare('pavadinimas',$this->pavadinimas,true);
		$criteria->compare('autorius',$this->autorius);
		$criteria->compare('tekstas',$this->tekstas,true);
		$criteria->compare('laikas',$this->laikas,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}