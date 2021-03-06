<?php //$this->widget('bootstrap.widgets.TbGridView',array(
	$this->widget('bootstrap.widgets.TbGroupGridView', array(
	'id'=>'g-target-setting-grid1',
	//'dataProvider'=>$model->search(),
    'dataProvider' => gTalentTargetSetting::model()->search($model->id),
	'type'=>'condensed',
	//'filter'=>$model,
	'template'=>'{items}',
	'extraRowColumns'=> array('strategic.name'),
	//'extraRowExpression' =>  '"<b style=\"padding:20px 0;\">".$data->strategic_objective."</b>"',
	'columns'=>array(
		//'strategic.name',
		array(
			'header'=>'Strategic Objective',
			'name'=>'strategic.name',
		),
		'weight',
		'kpi_desc',
		'target',
		'unit',
		'remark',
		'strategic_initiative',
        array(
            'class' => 'EJuiDlgsColumn',
            'template' => '{update}{delete}',
            'deleteButtonUrl' => 'Yii::app()->createUrl("m1/gTalent/deleteTargetSetting",array("id"=>$data->id))',
            'updateDialog' => array(
                'controllerRoute' => 'm1/gTalent/updateTargetSetting',
                'actionParams' => array('id' => '$data->id'),
                'dialogTitle' => 'Update Target Setting',
                'dialogWidth' => 512, //override the value from the dialog config
                'dialogHeight' => 530
            ),
        ),

	),

)); ?>

<?php
	echo $this->renderPartial('_formTargetSetting', array('model' => $modelTargetSetting));