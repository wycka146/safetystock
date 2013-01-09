<?php

/**
 * This is the model class for table "premija".
 *
 * The followings are the available columns in table 'premija':
 * @property integer $premija_id
 * @property integer $vartotojas
 * @property string $komentaras
 *
 * The followings are the available model relations:
 * @property Vartotojas $vartotojas0
 */
class Premija extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Premija the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
	
	public function getUserOptions() {
		$usersArray = CHtml::listData(Vartotojas::model()->findAll(), 'vartotojas_id', 'prisijungimas');
		return $usersArray;
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'premija';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('vartotojas', 'required'),
			array('vartotojas', 'numerical', 'integerOnly'=>true),
			array('komentaras', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('premija_id, vartotojas, komentaras', 'safe', 'on'=>'search'),
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
			'premija_id' => 'Premija',
			'vartotojas' => 'Vartotojas',
			'komentaras' => 'Komentaras',
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

		$criteria->compare('premija_id',$this->premija_id);
		$criteria->compare('vartotojas',$this->vartotojas);
		$criteria->compare('komentaras',$this->komentaras,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}