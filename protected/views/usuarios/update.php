<?php
/* @var $this UsuariosController */
/* @var $model Usuarios */

$this->breadcrumbs=array(
	'Usuarios'=>array('index'),
	$model->idUsuario=>array('view','id'=>$model->idUsuario),
	'Update',
);

//$this->menu=array(
//	array('label'=>'List Usuarios', 'url'=>array('index')),
//	array('label'=>'Create Usuarios', 'url'=>array('create')),
//	array('label'=>'View Usuarios', 'url'=>array('view', 'id'=>$model->idUsuario)),
//	array('label'=>'Manage Usuarios', 'url'=>array('admin')),
//);
?>

<h1>Actualizar Usuario</h1>

<?php
$model->Contrasena = "";

$this->renderPartial('_form', array('model'=>$model)); ?>