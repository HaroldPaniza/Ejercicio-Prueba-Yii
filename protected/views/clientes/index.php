<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Crear</title>
	
</head>
<body>

<div class="form">
<?php $form=$this->beginWidget("CActiveForm")?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'cedula'); ?>
		<?php echo $form->textField($model,'cedula'); ?>
		<?php echo $form->error($model,'cedula'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'nombre_cliente'); ?>
		<?php echo $form->textField($model,'nombre_cliente',array('size'=>40,'maxlength'=>40)); ?>
		<?php echo $form->error($model,'nombre_cliente'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'telefono'); ?>
		<?php echo $form->textField($model,'telefono'); ?>
		<?php echo $form->error($model,'telefono'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'email'); ?>
		<?php echo $form->textField($model,'email',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'email'); ?>
	</div>


	<div class="row">
		<?php echo $form->labelEx($model,'genero'); ?>
		<?php echo $form->dropDownList($model,'genero',array('m'=>'Masculino','f'=>'Femenino'),array('empty'=>'seleccione')); ?>
		<?php echo $form->error($model,'genero'); ?>
	</div>

	<div class="row buttons">
        <?php echo CHtml::submitButton("Crear",array("class"=>"btn btn-primary btn-large"))?>   
	</div>

<?php $this->endWidget(); ?>

</body>
</html>

