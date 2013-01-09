<?php

/**
 * This is the model class for table "planas".
 *
 * The followings are the available columns in table 'planas':
 * @property integer $planas_id
 * @property integer $filialas
 * @property integer $prekiu_patikros_daznis
 * @property integer $uzsakymo_kiekio_pokytis
 * @property integer $aptarnavimo_lygis
 * @property integer $galiojimo_laikas
 *
 * The followings are the available model relations:
 * @property Filialas $filialas0
 */
class Planas extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Planas the static model class
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
		return 'planas';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('filialas, galiojimo_laikas', 'required'),
			array('filialas, prekiu_patikros_daznis, uzsakymo_kiekio_pokytis, aptarnavimo_lygis, galiojimo_laikas', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('planas_id, filialas, prekiu_patikros_daznis, uzsakymo_kiekio_pokytis, aptarnavimo_lygis, galiojimo_laikas', 'safe', 'on'=>'search'),
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
			'filialas' => array(self::BELONGS_TO, 'Filialas', 'filialas'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'planas_id' => 'Planas',
			'filialas' => 'Filialas',
			'prekiu_patikros_daznis' => 'Prekiu Patikros Daznis',
			'uzsakymo_kiekio_pokytis' => 'Uzsakymo Kiekio Pokytis',
			'aptarnavimo_lygis' => 'Aptarnavimo Lygis',
			'galiojimo_laikas' => 'Galiojimo Laikas (dienomis)',
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

		$criteria->compare('planas_id',$this->planas_id);
		$criteria->compare('filialas',$this->filialas);
		$criteria->compare('prekiu_patikros_daznis',$this->prekiu_patikros_daznis);
		$criteria->compare('uzsakymo_kiekio_pokytis',$this->uzsakymo_kiekio_pokytis);
		$criteria->compare('aptarnavimo_lygis',$this->aptarnavimo_lygis);
		$criteria->compare('galiojimo_laikas',$this->galiojimo_laikas);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}