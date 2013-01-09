<?php

/**
 * This is the model class for table "pardavimas".
 *
 * The followings are the available columns in table 'pardavimas':
 * @property integer $pardavimas_id
 * @property integer $filialas
 * @property integer $preke
 * @property integer $kiekis
 * @property string $kaina
 * @property string $data
 *
 * The followings are the available model relations:
 * @property Filialas $filialas0
 * @property Preke $preke0
 */
class Pardavimas extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Pardavimas the static model class
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
		return 'pardavimas';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('filialas, preke, kiekis, kaina', 'required'),
			array('filialas, preke, kiekis', 'numerical', 'integerOnly'=>true),
			array('kaina', 'length', 'max'=>2),
			array('data', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('pardavimas_id, filialas, preke, kiekis, kaina, data', 'safe', 'on'=>'search'),
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
			'filialas0' => array(self::BELONGS_TO, 'Filialas', 'filialas'),
			'preke0' => array(self::BELONGS_TO, 'Preke', 'preke'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'pardavimas_id' => 'Pardavimas',
			'filialas' => 'Filialas',
			'preke' => 'Preke',
			'kiekis' => 'Kiekis',
			'kaina' => 'Kaina',
			'data' => 'Data',
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

		$criteria->compare('pardavimas_id',$this->pardavimas_id);
		$criteria->compare('filialas',$this->filialas);
		$criteria->compare('preke',$this->preke);
		$criteria->compare('kiekis',$this->kiekis);
		$criteria->compare('kaina',$this->kaina,true);
		$criteria->compare('data',$this->data,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}