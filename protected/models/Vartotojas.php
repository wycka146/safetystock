<?php

/**
 * This is the model class for table "vartotojas".
 *
 * The followings are the available columns in table 'vartotojas':
 * @property integer $vartotojas_id
 * @property string $prisijungimas
 * @property string $slaptazodis
 * @property string $vardas
 * @property string $pavarde
 * @property string $role
 * @property string $telefono_numeris
 * @property string $epastas
 *
 * The followings are the available model relations:
 * @property Administratorius $administratorius
 * @property Darbininkas $darbininkas
 * @property Naujiena[] $naujienas
 * @property Pranesimas[] $pranesimases
 * @property Premija[] $premijas
 * @property Uzsakymas[] $uzsakymases
 * @property Vadybininkas $vadybininkas
 * @property VartotojoUzsakymas[] $vartotojoUzsakymases
 */
class Vartotojas extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Vartotojas the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	public function getRoleOptions() {
		return array(
			"darbininkas" => 'Darbininkas',
			"administratorius" => 'Administratorius',
			"vadybininkas" => 'Vadybininkas'
		);
	}
	
	public function getVartotojasOptions(){
		return CHtml::listData(Vartotojas::model()->findAll(), 'vartotojas_id', 'prisijungimas');
	}
	
	public function getDarbuotojasOptions(){
		$darbininkai = Darbininkas::model()->findAll();
		$data = array();
		$darb = new Darbininkas;
		
		foreach($darbininkai as $darbininkas){
			$data[$darbininkas->vartotojas] = $darbininkas->vartotojas0->prisijungimas;
		}
		
		return $data;
	}
	
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'vartotojas';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('prisijungimas, epastas', 'unique'),
			array('epastas', 'email'),
			array('prisijungimas, slaptazodis, vardas, pavarde, telefono_numeris, epastas', 'required'),
			array('prisijungimas, slaptazodis, vardas, pavarde, role, telefono_numeris', 'length', 'max'=>45),
			array('epastas', 'length', 'max'=>255),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('vartotojas_id, prisijungimas, slaptazodis, vardas, pavarde, role, telefono_numeris, epastas', 'safe', 'on'=>'search'),
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
			'administratorius' => array(self::HAS_ONE, 'Administratorius', 'vartotojas'),
			'darbininkas' => array(self::HAS_ONE, 'Darbininkas', 'vartotojas'),
			'naujienas' => array(self::HAS_MANY, 'Naujiena', 'autorius'),
			'pranesimases' => array(self::HAS_MANY, 'Pranesimas', 'gavejas'),
			'premijas' => array(self::HAS_MANY, 'Premija', 'vartotojas'),
			'uzsakymases' => array(self::HAS_MANY, 'Uzsakymas', 'vartotojas'),
			'vadybininkas' => array(self::HAS_ONE, 'Vadybininkas', 'vartotojas'),
			'vartotojoUzsakymases' => array(self::HAS_MANY, 'VartotojoUzsakymas', 'vartotojas'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'vartotojas_id' => 'Vartotojas',
			'prisijungimas' => 'Prisijungimas',
			'slaptazodis' => 'Slaptazodis',
			'vardas' => 'Vardas',
			'pavarde' => 'Pavarde',
			'role' => 'Role',
			'telefono_numeris' => 'Telefono Numeris',
			'epastas' => 'Epastas',
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

		$criteria->compare('vartotojas_id',$this->vartotojas_id);
		$criteria->compare('prisijungimas',$this->prisijungimas,true);
		$criteria->compare('slaptazodis',$this->slaptazodis,true);
		$criteria->compare('vardas',$this->vardas,true);
		$criteria->compare('pavarde',$this->pavarde,true);
		$criteria->compare('role',$this->role,true);
		$criteria->compare('telefono_numeris',$this->telefono_numeris,true);
		$criteria->compare('epastas',$this->epastas,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}