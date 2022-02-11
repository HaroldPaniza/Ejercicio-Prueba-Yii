<?php

class Camposextras extends CActiveRecord
{
	
	public function tableName()
	{
		return 'camposextras';
	}

	public static function model($model=__CLASS__)
	{
		return parent::model($model);
	}


	public function rules()
	{

		return array(
			array('id_externo', 'numerical', 'integerOnly'=>true),
			array('realiza_compra', 'length', 'max'=>1),
			array('articulo', 'length', 'max'=>50),
			array('precio', 'length', 'max'=>19),
			array('metodo_pago, no_compra', 'length', 'max'=>30),
			array('id, realiza_compra, articulo, precio, metodo_pago, no_compra, id_externo', 'safe', 'on'=>'search'),
		);
	}

	public function relations()
	{
		return array(
			'idExterno' => array(self::BELONGS_TO, 'Clientes', 'id_externo'),
		);
	}


}
