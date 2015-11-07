<?php
/* @var $this CitasController */
/* @var $model Citas */

$this->breadcrumbs=array(
	'Citas'=>array('index'),
	'Crear',
);

$this->menu=array(
	array('label'=>'Ver Citas', 'url'=>array('index')),
	//array('label'=>'Manage Citas', 'url'=>array('admin')),
);
?>

<h1>Crear Citas</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>