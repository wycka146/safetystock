<?php

/**
 * This is the model class for table "pranesimo_tipas".
 *
 * The followings are the available columns in table 'pranesimo_tipas':
 * @property integer $tipas_id
 * @property string $pavadinimas
 *
 * The followings are the available model relations:
 * @property Pranesimas[] $pranesimases
 */
class PranesimoTipas extends CActiveRecord
{
	
	public static function getTipasOptions()
	{
		return CHtml::listData(PranesimoTipas::model()->findAll(), 'tipas_id', 'pavadinimas');
	}
	
	public static function getTipasClass($id)
	{
		switch($id){
			case 1: return "pranesimas-asmeninis"; break;
			case 2: return "pranesimas-ispejimas"; break;
		}
	}
	
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return PranesimoTipas the static model class
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
		return 'pranesimo_tipas';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('pavadinimas', 'length', 'max'=>45),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('tipas_id, pavadinimas', 'safe', 'on'=>'search'),
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
			'pranesimases' => array(self::HAS_MANY, 'Pranesimas', 'pranesimo_tipas'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'tipas_id' => 'Tipas',
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

		$criteria->compare('tipas_id',$this->tipas_id);
		$criteria->compare('pavadinimas',$this->pavadinimas,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}