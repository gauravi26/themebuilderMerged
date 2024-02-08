<?php
/* @var $this ThemesController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Themes',
);

$this->menu=array(
//	array('label'=>'Create Themes', 'url'=>array('create')),
//	array('label'=>'Manage Themes', 'url'=>array('admin')),
        array('label'=>'Tab Create Themes', 'url'=>array('cssinput')),
        array('label'=>'Tab Manage Themes', 'url'=>array('manage')),


);
?>

<h1>Themes</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
