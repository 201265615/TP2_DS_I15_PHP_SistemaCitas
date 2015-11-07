<?php
/* @var $this HorariosDoctorController */
/* @var $model HorariosDoctor */

$this->breadcrumbs=array(
	'Horarios Doctors'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List HorariosDoctor', 'url'=>array('index')),
	array('label'=>'Manage HorariosDoctor', 'url'=>array('admin')),
);
?>

<h1>Create HorariosDoctor</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>