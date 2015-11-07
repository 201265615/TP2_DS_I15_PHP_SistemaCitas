<?php
/* @var $this HorariosDoctorController */
/* @var $model HorariosDoctor */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'horarios-doctor-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'FechaHoraInicio'); ?>
		<?php echo $form->textField($model,'FechaHoraInicio'); ?>
		<?php echo $form->error($model,'FechaHoraInicio'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'FechaHoraFin'); ?>
		<?php echo $form->textField($model,'FechaHoraFin'); ?>
		<?php echo $form->error($model,'FechaHoraFin'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Doctores_idDoctor'); ?>
		<?php echo $form->textField($model,'Doctores_idDoctor'); ?>
		<?php echo $form->error($model,'Doctores_idDoctor'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'Disponible'); ?>
		<?php echo $form->textField($model,'Disponible'); ?>
		<?php echo $form->error($model,'Disponible'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->