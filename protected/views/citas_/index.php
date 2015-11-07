<?php
/* @var $this CitasController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Citases',
);

$this->menu=array(
	array('label'=>'Create Citas', 'url'=>array('create')),
	array('label'=>'Manage Citas', 'url'=>array('admin')),
);
?>

<h1>Citases</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
