<?php
/* @var $this CitasController */
/* @var $model Citas */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'citas-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'Activo'); ?>
		<?php echo $form->textField($model,'Activo'); ?>
		<?php echo $form->error($model,'Activo'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Usuarios_idUsuario'); ?>
		<?php echo $form->textField($model,'Usuarios_idUsuario'); ?>
		<?php echo $form->error($model,'Usuarios_idUsuario'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'HorariosDoctor_idHorarioDoctor'); ?>
		<?php echo $form->textField($model,'HorariosDoctor_idHorarioDoctor'); ?>
		<?php echo $form->error($model,'HorariosDoctor_idHorarioDoctor'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->