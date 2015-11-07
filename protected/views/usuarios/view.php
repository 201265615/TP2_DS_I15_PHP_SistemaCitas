<?php
/* @var $this UsuariosController */
/* @var $model Usuarios */

$this->breadcrumbs=array(
	'Usuarios'=>array('index'),
	$model->idUsuario,
);

//$this->menu=array(
//	array('label'=>'List Usuarios', 'url'=>array('index')),
//	array('label'=>'Create Usuarios', 'url'=>array('create')),
//	array('label'=>'Update Usuarios', 'url'=>array('update', 'id'=>$model->idUsuario)),
//	array('label'=>'Delete Usuarios', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idUsuario),'confirm'=>'Are you sure you want to delete this item?')),
//	array('label'=>'Manage Usuarios', 'url'=>array('admin')),
//);
?>

<h1>Usuario #<?php echo $model->idUsuario; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		//'idUsuario',
		'NombreCompleto',
		'Telefono',
		'CorreoElectronico',
		//'Contrasena',
		//'Activo',
		//'FechaRegistro',
	),
)); ?>
