<?php

/**
 * This is the model class for table "pranesimas".
 *
 * The followings are the available columns in table 'pranesimas':
 * @property integer $pranesimas_id
 * @property integer $gavejas
 * @property integer $autorius
 * @property integer $pranesimo_tipas
 * @property string $tekstas
 * @property string $laikas
 * @property integer $ar_perskaitytas
 *
 * The followings are the available model relations:
 * @property Vartotojas $gavejas0
 * @property PranesimoTipas $pranesimoTipas
 */
class Pranesimas extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Pranesimas the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
	
	public static function getNumberOfUnread(){
		return Pranesimas::model()->countByAttributes(array(
				'gavejas' => Yii::app()->user->id,
				'ar_perskaitytas' => 0
				));
	}
	
	public static function getUnreadString(){
		$nr = Pranesimas::getNumberOfUnread();
		if($nr > 0) {
			return ' <span style="color:#f83">('.$nr.')</span> ';
		}
		return "";
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'pranesimas';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('gavejas, autorius, pranesimo_tipas, tekstas, laikas', 'required'),
			array('gavejas, autorius, pranesimo_tipas, ar_perskaitytas', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('pranesimas_id, gavejas, autorius, pranesimo_tipas, tekstas, laikas, ar_perskaitytas', 'safe', 'on'=>'search'),
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
			'gavejas0' => array(self::BELONGS_TO, 'Vartotojas', 'gavejas'),
			'pranesimoTipas' => array(self::BELONGS_TO, 'PranesimoTipas', 'pranesimo_tipas'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'pranesimas_id' => 'Pranesimas',
			'gavejas' => 'Gavejas',
			'autorius' => 'Autorius',
			'pranesimo_tipas' => 'Pranesimo Tipas',
			'tekstas' => 'Tekstas',
			'laikas' => 'Laikas',
			'ar_perskaitytas' => 'Ar Perskaitytas',
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

		$criteria->compare('pranesimas_id',$this->pranesimas_id);
		$criteria->compare('gavejas',$this->gavejas);
		$criteria->compare('autorius',$this->autorius);
		$criteria->compare('pranesimo_tipas',$this->pranesimo_tipas);
		$criteria->compare('tekstas',$this->tekstas,true);
		$criteria->compare('laikas',$this->laikas,true);
		$criteria->compare('ar_perskaitytas',$this->ar_perskaitytas);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}