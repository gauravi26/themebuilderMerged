<?php
/* @var $this ReportController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Reports',
);

$this->menu=array(
	array('label'=>'Create Report', 'url'=>array('create')),
	array('label'=>'Manage Report', 'url'=>array('admin')),
);
?>

<h1>Reports</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>

<?php
include 'queryTesting.php'; 
?>
