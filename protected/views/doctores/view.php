<?php
/* @var $this DoctoresController */
/* @var $model Doctores */

$this->breadcrumbs=array(
	'Doctores'=>array('index'),
	$model->idDoctor,
);

$this->menu=array(
	array('label'=>'Ver Doctores', 'url'=>array('index')),
	//array('label'=>'Create Doctores', 'url'=>array('create')),
	//array('label'=>'Update Doctores', 'url'=>array('update', 'id'=>$model->idDoctor)),
	//array('label'=>'Delete Doctores', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idDoctor),'confirm'=>'Are you sure you want to delete this item?')),
	//array('label'=>'Manage Doctores', 'url'=>array('admin')),
);
?>

<h1>Doctor #<?php echo $model->idDoctor; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'NombreCompleto',
		'EspecialidadMedica',
	),
)); ?>
