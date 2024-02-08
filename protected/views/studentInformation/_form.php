<?php
/* @var $this StudentInformationController */
/* @var $model StudentInformation */
/* @var $form CActiveForm */

$controller = Yii::app()->getController();
 
    $actionId = $controller->getAction()->getId();
    $controllerId = $controller->getId();
?>

<div class="form">
 <?php echo CHtml::hiddenField('controllerId',$controllerId); ?>
<?php echo CHtml::hiddenField('actionId',$actionId); ?>
    
<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'student-information-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'student_id'); ?>
		<?php echo $form->textField($model,'student_id'); ?>
		<?php echo $form->error($model,'student_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'first_name'); ?>
		<?php echo $form->textField($model,'first_name',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'first_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'last_name'); ?>
		<?php echo $form->textField($model,'last_name',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'last_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'date_of_birth'); ?>
		<?php echo $form->textField($model,'date_of_birth'); ?>
		<?php echo $form->error($model,'date_of_birth'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'address'); ?>
		<?php echo $form->textField($model,'address',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'address'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'phone_number'); ?>
		<?php echo $form->textField($model,'phone_number',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'phone_number'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'email_address'); ?>
		<?php echo $form->textField($model,'email_address',array('size'=>60,'maxlength'=>255)); ?>
		<?php echo $form->error($model,'email_address'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'department_id'); ?>
		<?php echo $form->textField($model,'department_id'); ?>
		<?php echo $form->error($model,'department_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'course_type_id'); ?>
		<?php echo $form->textField($model,'course_type_id'); ?>
		<?php echo $form->error($model,'course_type_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'course_id'); ?>
		<?php echo $form->textField($model,'course_id'); ?>
		<?php echo $form->error($model,'course_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'major'); ?>
		<?php echo $form->textField($model,'major',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'major'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'academic_status'); ?>
		<?php echo $form->textField($model,'academic_status',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'academic_status'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'theme_ID'); ?>
		<?php echo $form->textField($model,'theme_ID'); ?>
		<?php echo $form->error($model,'theme_ID'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'emergency_contact_name'); ?>
		<?php echo $form->textField($model,'emergency_contact_name',array('size'=>60,'maxlength'=>100)); ?>
		<?php echo $form->error($model,'emergency_contact_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'emergency_contact_phone'); ?>
		<?php echo $form->textField($model,'emergency_contact_phone',array('size'=>20,'maxlength'=>20)); ?>
		<?php echo $form->error($model,'emergency_contact_phone'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'emergency_contact_relationship'); ?>
		<?php echo $form->textField($model,'emergency_contact_relationship',array('size'=>50,'maxlength'=>50)); ?>
		<?php echo $form->error($model,'emergency_contact_relationship'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->