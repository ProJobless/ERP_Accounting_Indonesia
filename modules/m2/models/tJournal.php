<?php

class tJournal extends BaseModel {

    public static function model($className = __CLASS__) {
        return parent::model($className);
    }

    public function tableName() {
        return 't_journal';
    }

    public function rules() {
        return array(
            array('input_date, yearmonth_periode', 'required'),
            array('entity_id, module_id, yearmonth_periode, journal_type_id, state_id, created_date, created_by, updated_date, updated_by, posted_date, posted_by', 'numerical', 'integerOnly' => true),
            array('user_ref, system_ref', 'length', 'max' => 100),
            array('cb_custom1', 'length', 'max' => 50),
            array('remark', 'safe'),
            array('id, entity_id, module_id, input_date, yearmonth_periode, user_ref, system_ref, remark, journal_type_id, state_id, cb_custom1, created_date, created_by, updated_date, updated_by', 'safe', 'on' => 'search'),
        );
    }

    public function relations() {
        return array(
            'journalCount' => array(self::STAT, 'tJournalDetail', 'parent_id'),
            'journalSum' => array(self::STAT, 'tJournalDetail', 'parent_id', 'select' => 'sum(debit)'),
            'journalSumCek' => array(self::STAT, 'tJournalDetail', 'parent_id', 'select' => 'sum(credit)'),
            'journalDetail' => array(self::HAS_MANY, 'tJournalDetail', 'parent_id'),
            'journal_many' => array(self::MANY_MANY, 'tAccount', 't_journal_detail(parent_id,account_no_id)'),
            'status' => array(self::HAS_ONE, 'sParameter', array('code' => 'state_id'), 'condition' => 'type = \'cStatusJ\''),
            'module' => array(self::HAS_ONE, 'sParameter', array('code' => 'module_id'), 'condition' => 'type = \'cModule\''),
            'entity' => array(self::BELONGS_TO, 'aOrganization', array('entity_id' => 'id')),
            'created' => array(self::BELONGS_TO, 'sUser', 'created_by'),
            'posted' => array(self::BELONGS_TO, 'sUser', 'posted_by'),
        );
    }

    public function attributeLabels() {
        return array(
            'id' => 'ID',
            'entity_id' => 'Entity',
            'module_id' => 'Module',
            'input_date' => 'Input Date',
            'yearmonth_periode' => 'Periode',
            'user_ref' => 'User Ref',
            'system_ref' => 'System Ref',
            'remark' => 'Remark / Tag',
            'journal_type_id' => 'Journal Type',
            'state_id' => 'State',
            'cb_custom1' => 'Receiver/Received From',
            'created_date' => 'Created Date',
            'created_by' => 'Created',
            'updated_date' => 'Updated Date',
            'updated_by' => 'Updated',
            'posted_date' => 'Posted Date',
            'posted_by' => 'Posted',
        );
    }

    public function search() {
        $criteria = new CDbCriteria;

        $criteria->compare('yearmonth_periode', Yii::app()->settings->get("System", "cCurrentPeriod"));
        $criteria->compare('state_id!', 4);
        $criteria->order = 'input_date';

        return new CActiveDataProvider($this, array(
            'criteria' => $criteria,
            'pagination' => array(
                'pageSize' => 50,
            ),
        ));
    }

    public function searchTagPurchasing($tag) {
        $criteria = new CDbCriteria;
        $criteria->compare('remark', $tag, true);
        $criteria->compare('journal_type_id', 1);

        $model = self::find($criteria);

        return $model;
    }

    public function searchTagPayment($tag) {
        $criteria = new CDbCriteria;
        $criteria->compare('remark', $tag);
        $criteria->compare('journal_type_id', 2);

        $model = self::find($criteria);

        return $model;
    }

    public static function getTopCreated($mid = null) {

        $criteria = new CDbCriteria;
        $criteria->limit = 10;
        $criteria->order = 'created_date DESC';
        $criteria->compare('module_id', $mid);
        if (Yii::app()->user->name != "admin") {
            $criteria->addInCondition('entity_id', sUser::model()->myGroupArray);
        }


        $models = self::model()->findAll($criteria);

        $returnarray = array();

        foreach ($models as $model) {
            $returnarray[] = array('id' => $model->system_ref, 'label' => $model->system_ref, 'description' => peterFunc::shorten_string($model->remark, 8), 'icon' => 'list-alt', 'url' => array('view', 'id' => $model->id));
        }

        return $returnarray;
    }

    public static function getTopUpdated($mid = null) {

        $criteria = new CDbCriteria;
        $criteria->limit = 10;
        $criteria->order = 'updated_date DESC';
        $criteria->compare('module_id', $mid);
        if (Yii::app()->user->name != "admin") {
            $criteria->addInCondition('entity_id', sUser::model()->myGroupArray);
        }


        $models = self::model()->findAll($criteria);

        $returnarray = array();

        foreach ($models as $model) {
            if ($model->module_id == 1) {
                $returnarray[] = array('id' => $model->system_ref, 'label' => $model->system_ref, 'description' => peterFunc::shorten_string($model->remark, 8), 'icon' => 'list-alt', 'url' => array('/m2/tJournal/view', 'id' => $model->id));
            } else {
                $returnarray[] = array('id' => $model->system_ref, 'label' => $model->system_ref, 'description' => peterFunc::shorten_string($model->remark, 8), 'icon' => 'list-alt', 'url' => array('/m2/uCashbank/view', 'id' => $model->id));
            }
        }

        return $returnarray;
    }

    public static function getTopRelated($name) {

        $_exp = explode(" ", $name);


        $criteria = new CDbCriteria;
        if (Yii::app()->user->name != "admin") {
            $criteria->addInCondition('entity_id', sUser::model()->myGroupArray);
        }


        if (isset($_exp[0]))
            $criteria->compare('user_ref', $_exp[0], true, 'OR');

        if (isset($_exp[1]))
            $criteria->compare('user_ref', $_exp[1], true, 'OR');

        $criteria->limit = 10;
        $criteria->order = 'updated_date DESC';

        $models = self::model()->findAll($criteria);

        $returnarray = array();

        foreach ($models as $model) {
            $returnarray[] = array('id' => $model->account_name, 'label' => $model->account_no . " " . $model->account_name, 'icon' => 'list-alt', 'url' => array('view', 'id' => $model->id));
        }

        return $returnarray;
    }

    protected function afterDelete() {
        $log = new zArLog;
        $log->description = 'User ' . Yii::app()->user->Name . ' deleted '
                . get_class($this->Owner)
                . '[' . $this->system_ref . '].';
        $log->action = 'DELETE';
        $log->model = get_class($this->Owner);
        $log->idModel = $this->Owner->getPrimaryKey();
        $log->field = '';
        $log->creationdate = new CDbExpression('NOW()');
        $log->userid = Yii::app()->user->id;
        $log->save();

        tJournalDetail::model()->deleteAll(array(
            'condition' => 'parent_id = :parent',
            'params' => array(':parent' => $this->id),
        ));
        return true;
    }

    public function journalSumF() {
        $_format = Yii::app()->numberFormatter->format("#,##0.00", $this->journalSum);

        return $_format;
    }

    public function getSystem_reff() {
        $_state = null;

        if ($this->state_id != 1)
            $_state = CHtml::tag("span", array('style' => 'font-size:inherit', 'class' => 'label label-info'), $this->status->name);

        $_format = $this->system_ref . " " . $_state;

        return $_format;
    }

    public function getUser_reff() {
        $_state = null;

        if ($this->journal_type_id == 2)
            $_state = "Received From";
		elseif ($this->journal_type_id == 3)
            $_state = "Receiver";
		else
			$_state = false;
			
        return $_state;
    }

    public function getLinkUrl() {
        if ($this->module_id == 1) {
            $_url = CHtml::link($this->system_reff, Yii::app()->createUrl("/m2/tJournal/view", array("id" => $this->id)));
        }
        else
            $_url = CHtml::link($this->system_reff, Yii::app()->createUrl("/m2/uCashbank/view", array("id" => $this->id)));

        return $_url;
    }

    public function getLinkUrlUpdate() {
        if ($this->module_id == 1) {
            $_url = Yii::app()->createUrl("/m2/tJournal/update", array("id" => $this->id));
        }
        else
            $_url = Yii::app()->createUrl("/m2/uCashbank/update", array("id" => $this->id));

        return $_url;
    }

    public function getLinkUrlDelete() {
        if ($this->module_id == 1) {
            $_url = Yii::app()->createUrl("/m2/tJournal/update", array("id" => $this->id));
        }
        else
            $_url = Yii::app()->createUrl("/m2/uCashbank/update", array("id" => $this->id));

        return $_url;
    }

}
