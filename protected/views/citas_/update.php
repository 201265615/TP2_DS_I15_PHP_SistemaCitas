<?php
/* @var $this CitasController */
/* @var $model Citas */

$this->breadcrumbs=array(
	'Citases'=>array('index'),
	$model->idCita=>array('view','id'=>$model->idCita),
	'Update',
);

$this->menu=array(
	array('label'=>'List Citas', 'url'=>array('index')),
	array('label'=>'Create Citas', 'url'=>array('create')),
	array('label'=>'View Citas', 'url'=>array('view', 'id'=>$model->idCita)),
	array('label'=>'Manage Citas', 'url'=>array('admin')),
);
?>

<h1>Update Citas <?php echo $model->idCita; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>