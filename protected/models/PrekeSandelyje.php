<?php

/**
 * This is the model class for table "preke_sandelyje".
 *
 * The followings are the available columns in table 'preke_sandelyje':
 * @property integer $preke
 * @property integer $sandelis
 * @property integer $kiekis
 *
 * The followings are the available model relations:
 * @property Preke $preke0
 * @property Sandelis $sandelis0
 */
class PrekeSandelyje extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return PrekeSandelyje the static model class
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
		return 'preke_sandelyje';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('preke, sandelis', 'required'),
			array('preke, sandelis, kiekis', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('preke, sandelis, kiekis', 'safe', 'on'=>'search'),
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
			'preke0' => array(self::BELONGS_TO, 'Preke', 'preke'),
			'sandelis0' => array(self::BELONGS_TO, 'Sandelis', 'sandelis'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'preke' => 'Preke',
			'sandelis' => 'Sandelis',
			'kiekis' => 'Kiekis',
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

		$criteria->compare('preke',$this->preke);
		$criteria->compare('sandelis',$this->sandelis);
		$criteria->compare('kiekis',$this->kiekis);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}