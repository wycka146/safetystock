<?php

/**
 * This is the model class for table "uzsakymas".
 *
 * The followings are the available columns in table 'uzsakymas':
 * @property integer $uzsakymas_id
 * @property integer $preke
 * @property integer $filialas
 * @property integer $vartotojas
 * @property integer $busena
 * @property integer $kiekis
 * @property integer $prioritetas
 *
 * The followings are the available model relations:
 * @property Preke $preke0
 * @property Filialas $filialas0
 * @property Vartotojas $vartotojas0
 * @property UzsakymoBusenosTipas $busena0
 * @property VartotojoUzsakymas[] $vartotojoUzsakymases
 */
class Uzsakymas extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Uzsakymas the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	public static function getPriorityOptions() {
		$data = array();
		for($i = 1; $i <= 10; $i++){
			$data[] = $i;
		}
		return $data;
	}
	
	public static function getNepatvirtintasOptions(){
		$data = array();	
		
		$uzsakymai = Uzsakymas::model()->findAll('busena = 1 OR busena = 4');
		
		
		foreach($uzsakymai as $uzsakymas){
			$data[$uzsakymas->uzsakymas_id] = 'ID:'.$uzsakymas->uzsakymas_id. ' ('.$uzsakymas->kiekis.' "'.$uzsakymas->preke0->pavadinimas.'" į "'. $uzsakymas->filialas0->pavadinimas.' filialą")';
		}
	
		return $data;
	}
	
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'uzsakymas';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('preke, filialas, vartotojas, busena, kiekis, prioritetas', 'required'),
			array('preke, filialas, vartotojas, busena, kiekis, prioritetas', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('uzsakymas_id, preke, filialas, vartotojas, busena, kiekis, prioritetas', 'safe', 'on'=>'search'),
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
			'filialas0' => array(self::BELONGS_TO, 'Filialas', 'filialas'),
			'vartotojas0' => array(self::BELONGS_TO, 'Vartotojas', 'vartotojas'),
			'busena0' => array(self::BELONGS_TO, 'UzsakymoBusena', 'busena'),
			'vartotojoUzsakymases' => array(self::HAS_MANY, 'VartotojoUzsakymas', 'uzsakymas'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'uzsakymas_id' => 'Uzsakymas',
			'preke' => 'Preke',
			'filialas' => 'Filialas',
			'vartotojas' => 'Vartotojas',
			'busena' => 'Busena',
			'kiekis' => 'Kiekis',
			'prioritetas' => 'Prioritetas',
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

		$criteria->compare('uzsakymas_id',$this->uzsakymas_id);
		$criteria->compare('preke',$this->preke);
		$criteria->compare('filialas',$this->filialas);
		$criteria->compare('vartotojas',$this->vartotojas);
		$criteria->compare('busena',$this->busena);
		$criteria->compare('kiekis',$this->kiekis);
		$criteria->compare('prioritetas',$this->prioritetas);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}