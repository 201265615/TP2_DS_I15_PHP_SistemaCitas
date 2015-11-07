<?php
/* @var $this CitasController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Citas',
);

$this->menu=array(
	array('label'=>'Crear Citas', 'url'=>array('create')),
	//array('label'=>'Manage Citas', 'url'=>array('admin')),
);
?>

<h1>Citas</h1>

<?php 
//$this->widget('zii.widgets.CListView', array(
//	'dataProvider'=>$dataProvider,
//	'itemView'=>'_view',
//)); 
?>



<?php 

$resultado = $this->obtenerCitasUsuarioActual();

//print_r($resultado);

$this->widget('ext.EFullCalendar.EFullCalendar', array(
    'lang'=>'es',
    'themeCssFile'=>'cupertino/jquery-ui.min.css',
    'options'=>array(
        'header'=>array(
            'left'=>'prev,next',
            'center'=>'title',
            'right'=>'today'
        ),
        //'events'=>$this->createUrl('SiteController/calendarEvents'),
        //'events'=> Yii::app()->getUrlManager()->createUrl('site/calendar-events'), //$calendarEventsUrl, // action URL for dynamic events, or
       
       'events' => $resultado
        /*array(
        array(
          'title' => 'All Day Event',
          'start' => '2015-02-01',
        ),
        array(
          'title' => 'Long Event',
          'start' => '2015-02-07',
          'end' => '2015-02-10',
        ),
        array(
          'id' => 999,
          'title' => 'Repeating Event',
          'start' => '2015-02-09T16:00:00',
        ),
        array(
          'id' => 999,
          'title' => 'Repeating Event',
          'start' => '2015-02-16T16:00:00',
        ),
        array(
          'title' => 'Conference',
          'start' => '2015-02-11',
          'end' => '2015-02-13',
        )
           )
        
        
        
       
        
    */)));
?>