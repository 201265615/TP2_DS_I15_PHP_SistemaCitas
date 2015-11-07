<?php
/* @var $this CitasController */
/* @var $model Citas */

$this->breadcrumbs=array(
	'Citases'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Citas', 'url'=>array('index')),
	array('label'=>'Manage Citas', 'url'=>array('admin')),
);
?>

<h1>Create Citas</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>