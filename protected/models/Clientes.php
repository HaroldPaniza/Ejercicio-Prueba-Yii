<?php

class Clientes extends CActiveRecord{

    public function tableName(){

        return "clientes";
    }

    public static function model($model=__CLASS__){
        
        return parent::model($model);
    }
    
    public function rules(){
        return array(
			array('cedula, nombre_cliente, telefono, email, genero', 'required'),
			array('cedula, telefono', 'numerical', 'integerOnly'=>true),
			array('nombre_cliente', 'length', 'max'=>40),
			array('email', 'length', 'max'=>50),
			array('genero', 'length', 'max'=>1),
        );
    }

    public function relations()
	{
		return array(
			'camposextrases' => array(self::HAS_MANY, 'Camposextras', 'id_externo'),
		);
	}

    
}