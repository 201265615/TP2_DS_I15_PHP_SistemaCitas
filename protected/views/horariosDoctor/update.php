<?php
/* @var $this HorariosDoctorController */
/* @var $model HorariosDoctor */

$this->breadcrumbs=array(
	'Horarios Doctors'=>array('index'),
	$model->idHorarioDoctor=>array('view','id'=>$model->idHorarioDoctor),
	'Update',
);

$this->menu=array(
	array('label'=>'List HorariosDoctor', 'url'=>array('index')),
	array('label'=>'Create HorariosDoctor', 'url'=>array('create')),
	array('label'=>'View HorariosDoctor', 'url'=>array('view', 'id'=>$model->idHorarioDoctor)),
	array('label'=>'Manage HorariosDoctor', 'url'=>array('admin')),
);
?>

<h1>Update HorariosDoctor <?php echo $model->idHorarioDoctor; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>