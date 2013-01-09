<?php

/**
 * This is the model class for table "preke".
 *
 * The followings are the available columns in table 'preke':
 * @property integer $preke_id
 * @property string $pavadinimas
 * @property string $kaina
 * @property integer $atsargu_kiekis
 *
 * The followings are the available model relations:
 * @property Pardavimas[] $pardavimases
 * @property PrekeFiliale[] $prekeFiliales
 * @property PrekeSandelyje[] $prekeSandelyjes
 * @property Uzsakymas[] $uzsakymases
 */
class Preke extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Preke the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	public static function getPrekeOptions()
	{
		return CHtml::listData(Preke::model()->findAll(), 'preke_id', 'pavadinimas');
	}
	
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'preke';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('pavadinimas, kaina', 'required'),
			array('atsargu_kiekis', 'numerical', 'integerOnly'=>true),
			array('pavadinimas', 'length', 'max'=>100),
			array('kaina', 'length', 'max'=>10),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('preke_id, pavadinimas, kaina, atsargu_kiekis', 'safe', 'on'=>'search'),
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
			'pardavimases' => array(self::HAS_MANY, 'Pardavimas', 'preke'),
			'prekeFiliales' => array(self::HAS_MANY, 'PrekeFiliale', 'preke'),
			'prekeSandelyjes' => array(self::HAS_MANY, 'PrekeSandelyje', 'preke'),
			'uzsakymases' => array(self::HAS_MANY, 'Uzsakymas', 'preke'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'preke_id' => 'Preke',
			'pavadinimas' => 'Pavadinimas',
			'kaina' => 'Kaina',
			'atsargu_kiekis' => 'Atsargu Kiekis',
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

		$criteria->compare('preke_id',$this->preke_id);
		$criteria->compare('pavadinimas',$this->pavadinimas,true);
		$criteria->compare('kaina',$this->kaina,true);
		$criteria->compare('atsargu_kiekis',$this->atsargu_kiekis);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}