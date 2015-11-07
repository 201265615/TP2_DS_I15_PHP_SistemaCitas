<?php
/* @var $this HorariosDoctorController */
/* @var $model HorariosDoctor */

$this->breadcrumbs=array(
	'Horarios Doctors'=>array('index'),
	$model->idHorarioDoctor,
);

$this->menu=array(
	array('label'=>'List HorariosDoctor', 'url'=>array('index')),
	array('label'=>'Create HorariosDoctor', 'url'=>array('create')),
	array('label'=>'Update HorariosDoctor', 'url'=>array('update', 'id'=>$model->idHorarioDoctor)),
	array('label'=>'Delete HorariosDoctor', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idHorarioDoctor),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage HorariosDoctor', 'url'=>array('admin')),
);
?>

<h1>View HorariosDoctor #<?php echo $model->idHorarioDoctor; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idHorarioDoctor',
		'FechaHoraInicio',
		'FechaHoraFin',
		'Doctores_idDoctor',
		'Disponible',
	),
)); ?>
