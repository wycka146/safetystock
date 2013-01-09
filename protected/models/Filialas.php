<?php

/**
 * This is the model class for table "filialas".
 *
 * The followings are the available columns in table 'filialas':
 * @property integer $filialas_id
 * @property string $pavadinimas
 * @property string $adresas
 *
 * The followings are the available model relations:
 * @property Pardavimas[] $pardavimases
 * @property Planas[] $planases
 * @property PrekeFiliale[] $prekeFiliales
 * @property Uzsakymas[] $uzsakymases
 */
class Filialas extends CActiveRecord
{

	public static function getFilialasOptions() 
	{
		return CHtml::listData(Filialas::model()->findAll(), 'filialas_id', 'pavadinimas');
	}

	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Filialas the static model class
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
		return 'filialas';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('pavadinimas, adresas', 'required'),
			array('pavadinimas', 'length', 'max'=>100),
			array('adresas', 'length', 'max'=>255),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('filialas_id, pavadinimas, adresas', 'safe', 'on'=>'search'),
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
			'pardavimases' => array(self::HAS_MANY, 'Pardavimas', 'filialas'),
			'planases' => array(self::HAS_MANY, 'Planas', 'filialas'),
			'prekeFiliales' => array(self::HAS_MANY, 'PrekeFiliale', 'filialas'),
			'uzsakymases' => array(self::HAS_MANY, 'Uzsakymas', 'filialas'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'filialas_id' => 'Filialas',
			'pavadinimas' => 'Pavadinimas',
			'adresas' => 'Adresas',
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

		$criteria->compare('filialas_id',$this->filialas_id);
		$criteria->compare('pavadinimas',$this->pavadinimas,true);
		$criteria->compare('adresas',$this->adresas,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}