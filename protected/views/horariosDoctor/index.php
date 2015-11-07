<?php
/* @var $this HorariosDoctorController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Horarios Doctors',
);

$this->menu=array(
	array('label'=>'Create HorariosDoctor', 'url'=>array('create')),
	array('label'=>'Manage HorariosDoctor', 'url'=>array('admin')),
);
?>

<h1>Horarios Doctors</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
