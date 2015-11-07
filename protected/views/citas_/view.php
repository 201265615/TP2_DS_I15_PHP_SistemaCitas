<?php
/* @var $this CitasController */
/* @var $model Citas */

$this->breadcrumbs=array(
	'Citases'=>array('index'),
	$model->idCita,
);

$this->menu=array(
	array('label'=>'List Citas', 'url'=>array('index')),
	array('label'=>'Create Citas', 'url'=>array('create')),
	array('label'=>'Update Citas', 'url'=>array('update', 'id'=>$model->idCita)),
	array('label'=>'Delete Citas', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idCita),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Citas', 'url'=>array('admin')),
);
?>

<h1>View Citas #<?php echo $model->idCita; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idCita',
		'Activo',
		'Usuarios_idUsuario',
		'HorariosDoctor_idHorarioDoctor',
	),
)); ?>
