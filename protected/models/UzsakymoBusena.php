<?php

/**
 * This is the model class for table "uzsakymo_busenos_tipas".
 *
 * The followings are the available columns in table 'uzsakymo_busenos_tipas':
 * @property integer $busena_id
 * @property string $pavadinimas
 *
 * The followings are the available model relations:
 * @property Uzsakymas[] $uzsakymases
 */
class UzsakymoBusena extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return UzsakymoBusena the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
	
	public static function getUzsakymoBusenaOptions()
	{
		return CHtml::listData(UzsakymoBusena::model()->findAll(), 'busena_id', 'pavadinimas');
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'uzsakymo_busenos_tipas';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('pavadinimas', 'required'),
			array('pavadinimas', 'length', 'max'=>100),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('busena_id, pavadinimas', 'safe', 'on'=>'search'),
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
			'uzsakymases' => array(self::HAS_MANY, 'Uzsakymas', 'busena'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'busena_id' => 'Busena',
			'pavadinimas' => 'Pavadinimas',
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

		$criteria->compare('busena_id',$this->busena_id);
		$criteria->compare('pavadinimas',$this->pavadinimas,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}