<h2>Photo Album</h2>
<div class="row">
    <div class="span9">

        <?php
        $form = $this->beginWidget('TbActiveForm', array(
            'id' => 'module-matrix-form',
            'type' => 'horizontal',
            'enableAjaxValidation' => false,
            'htmlOptions' => array('enctype' => 'multipart/form-data'),
        ));
        ?>

        <?php echo $form->errorSummary($model); ?>

        <?php echo $form->textFieldRow($model, 'title', array('class' => 'span5')); ?>

<?php $this->widget('bootstrap.widgets.TbFileUpload', array(
    //'url' => $this->createUrl("my/upload"),
    'model' => $model,
    'attribute' =>'images', // see the attribute?
    'multiple' => true,
    'options' => array(
    'maxFileSize' => 2000000,
    'acceptFileTypes' => 'js:/(\.|\/)(gif|jpe?g|png)$/i',
))); ?>
<?php /*
        <div class="control-group">
            <label class="control-label required">Upload Files</label>
            <div class="controls">
                <?php
                $this->widget('CMultiFileUpload', array(
                    'model' => $model,
                    'attribute' => 'images',
                    'accept' => 'jpg',
                    'options' => array(
                    ),
                ));
                ?>
            </div>
        </div>
*/ ?>
        <div class="form-actions">
            <?php echo CHtml::htmlButton('<i class="icon-ok"></i> Upload', array('class' => 'btn', 'type' => 'submit')); ?>
        </div>

        <?php $this->endWidget(); ?>

    </div>
</div>
