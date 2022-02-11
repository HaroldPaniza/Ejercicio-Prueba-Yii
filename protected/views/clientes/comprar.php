<h1>BIENVENIDO</h1>
<div class="form">
<?php
$htmlOptions = array(
'ajax'=>array(

),
'empty'=>'Seleccione..'
)
?>
    <?php $form=$this->beginWidget("CActiveForm")?> 
    <?php echo $form->errorSummary($model);?>

        <div class="row">
            <?php echo $form->labelEx($model, 'realiza_compra' );?>
            <?php echo $form->dropDownList($model,'realiza_compra',array('s'=>'Comprar','n'=>'No Comprar'),$htmlOptions); ?>
        </div>


        <div id="sicompra" hidden>
            <?php echo $form->labelEx($model, 'articulo');?>
            <?php echo $form->dropDownList($model,'articulo',array('celular'=>'Celular','televisor'=>'Televisor'),array("empty"=>"Seleccione")); ?><br><br>
            <?php echo $form->labelEx($model, 'precio');?>
            <?php echo $form->dropDownList($model,'precio',array('350000'=>'350000','520000'=>'520000'),array("empty"=>"Seleccione")); ?><br><br>
            <?php echo $form->labelEx($model, 'metodo de pago');?>
            <?php echo $form->dropDownList($model,'metodo_pago',array('efectivo'=>'Efectivo','tarjeta_debito'=>'Tarjeta Debito','tarjeta_credito'=>'Tarjeta de Credito'),array("empty"=>"Seleccione")); ?><br><br>
            <?php echo CHtml::submitButton("Comprar",array("class"=>"btn btn-primary btn-large"))?>
            <?php echo $form->hiddenField($model, 'id_externo', array('value'=>$modeloCliente->id))?>

        </div>
            <div id="nocompra" hidden>
            <?php echo $form->labelEx($model,'no_compra');?>
            <?php echo $form->dropDownList($model, 'no_compra', array('muy caro'=>'Muy caro', 'se lo piensa mejor'=> 'Se
            lo piensa mejor', 'no le interesa'=>'No le interesa'),array('empty'=>'Selecciona'));
            ?>
            <?php echo $form->error($model, 'no_compra'); ?>
            <?php echo CHtml::submitButton("Enviar",array("class"=>"btn btn-primary btn-large"))?>          
            <?php echo $form->hiddenField($model, 'id_externo', array('value'=>$modeloCliente->id))?>
        </div>

    <?php $this->endWidget(); ?>

</div>

<script>
    $('#Camposextras_realiza_compra').change(function(){
            if($('#Camposextras_realiza_compra').val()=='s'){
                $('#sicompra').attr('hidden', false);
                $('#nocompra').attr('hidden', true);


            }else if ($('#Camposextras_realiza_compra').val()=='n'){
                $('#sicompra').attr('hidden', true);
                $('#nocompra').attr('hidden', false);
            }else{
                $('#sicompra').attr('hidden', true);
                $('#nocompra').attr('hidden', true);
            }
    });
</script>
