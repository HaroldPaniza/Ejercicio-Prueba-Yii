<?php

class ClientesController extends Controller{


    public function actionIndex()
	{
		$model=new Clientes;

		if(isset($_POST['Clientes']))
		{
			$model->attributes=$_POST['Clientes'];
			if($model->save())
				$this->redirect(array('comprar','id'=>$model->id));
		}

		$this->render('index',array(
			'model'=>$model,
		));
	}
    public function actionComprar($id)
	{
        $model=new Camposextras;
		$modeloCliente = Clientes::model()->findByPk($id);
       
		if(isset($_POST['Camposextras']))
		{
			$model->attributes=$_POST['Camposextras'];
			if($model->save()){
                $this->redirect(array('listar','id'=>$model->id));
				
				//render('listar',array('model'=>$model,'modeloCliente'=>$modeloCliente));  
                
            }
				
		}else{
            $this->render('comprar',array(
                'model'=>$model,'modeloCliente'=>$modeloCliente
            ));  
        }

		
	}

	public function actionListar(){
		$clientes=Clientes::model()->findAll();
		$this->render("listar",array("clientes"=>$clientes));
		
	}



}