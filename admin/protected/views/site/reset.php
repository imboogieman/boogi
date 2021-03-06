<?php
/* @var $this SiteController */
/* @var $error array */

$this->pageTitle = Yii::app()->name . ' - Reset password';
$this->breadcrumbs = array(
    'Reset password',
);
?>

<div id="reset-password" class="form">

    <h2>Reset password</h2>

    <?php $form = $this->beginWidget('CActiveForm', array(
        'id' => 'reset-password-form',
    )); ?>

    <?php echo CHtml::hiddenField('reset_hash', $hash); ?>

    <div class="row">
        <?php echo CHtml::label('Password', 'password'); ?>
        <?php echo CHtml::passwordField('password'); ?>
    </div>

    <div class="row">
        <?php echo CHtml::label('Repeat password', 'repeat_password'); ?>
        <?php echo CHtml::passwordField('repeat_password'); ?>
    </div>

    <div class="row buttons">
        <?php echo CHtml::submitButton('Reset'); ?>
    </div>

    <?php $this->endWidget(); ?>

</div><!-- form -->