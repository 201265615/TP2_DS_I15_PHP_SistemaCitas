<?php
/* @var $this CitasController */
/* @var $model Citas */

$this->breadcrumbs=array(
	'Citas'=>array('index'),
	$model->idCita,
);

$this->menu=array(
	array('label'=>'Ver Citas', 'url'=>array('index')),
	array('label'=>'Crear Citas', 'url'=>array('create')),
	//array('label'=>'Update Citas', 'url'=>array('update', 'id'=>$model->idCita)),
	array('label'=>'Eliminar Cita', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idCita),'confirm'=>'Esta seguro que desea eliminar esta cita?')),
	//array('label'=>'Manage Citas', 'url'=>array('admin')),
);
?>

<h1>Cita #<?php echo $model->idCita; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idCita',
		'Activo',
		'Usuarios_idUsuario',
		'HorariosDoctor_idHorarioDoctor',
	),
)); ?>
