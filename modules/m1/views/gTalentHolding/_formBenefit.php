<?php
/* @var $this GPayrollBenefitController */
/* @var $model gPayrollBenefit */
/* @var $form CActiveForm */
?>

<div class="row">
    <div class="span9">

        <?php
        $form = $this->beginWidget('TbActiveForm', array(
            'id' => 'g-payroll-benefit-form',
            'enableAjaxValidation' => false,
        ));
        ?>

        <?php echo $form->errorSummary($model); ?>

        <?php echo $form->textFieldRow($model, 'yearmonth_start'); ?>
        <?php echo $form->textFieldRow($model, 'yearmonth_end'); ?>
        <?php echo $form->dropDownListRow($model, 'benefit_id', gParamBenefit::model()->benefitDropDown()); ?>
        <?php echo $form->textAreaRow($model, 'remark', array('class' => 'span4', 'rows' => 3)); ?>

        <div class="form-actions">
            <?php
            $this->widget('bootstrap.widgets.TbButton', array(
                'buttonType' => 'submit',
                'type' => 'primary',
                'label' => $model->isNewRecord ? 'Create' : 'Save',
            ));
            ?>
        </div>

        <?php $this->endWidget(); ?>

    </div>
</div>