<?php
/**
 * Created by PhpStorm.
 * User: sara
 * Date: 10/24/18
 * Time: 3:21 PM
 */


class FinanceController extends BaseController {

    protected $model = '';

    public function init() {
        $this->model = substr(__CLASS__, 0, -10);
        parent::init();
        //dump(Yii::app()->request->isPostRequest);
    }

    public function actionDelete($id) {
        parent::_clear($id);
    }


    public function actionCreate() {
        $modelName = $this->model;
        $model = new $modelName('create');
        $data = array();
        if (!Yii::app()->request->isPostRequest) {
            $data['model'] = $model;
            $this->render('update', $data);
        }else{
            $this-> saveData($model,$_POST[$modelName]);
        }
    }

    public function actionUpdate($id) {
        $modelName = $this->model;
        $model = $this->loadModel($id, $modelName);
        if (!Yii::app()->request->isPostRequest) {
            $data = array();
            $data['model'] = $model;
            $this->render('update', $data);
        } else {
            $this-> saveData($model,$_POST[$modelName]);
        }
    }/*曾老师保留部份，---结束*/

    function saveData($model,$post) {
        $model->attributes =$post;
        show_status($model->save(),'保存成功', get_cookie('_currentUrl_'),'保存失败');
    }

    public function actionIndex( $input_name = '',$input_belong='',$input_type='',$input_phone='',$input_basesalary='',$input_choucheng='',$input_salary='',$input_finsalary='') {
        set_cookie('_currentUrl_', Yii::app()->request->url);
        $modelName = $this->model;
        $model = $modelName::model();
        $data = array();
        $criteria = new CDbCriteria;
        $criteria->order = 'id';
        $criteria->addSearchCondition('finance_name',$input_name);
        $criteria->addSearchCondition('finance_belong',$input_belong);
        $criteria->addSearchCondition('finance_type',$input_type);
        $criteria->addSearchCondition('finance_phone',$input_phone);
        $criteria->addSearchCondition('finance_basesalary',$input_basesalary);
        $criteria->addSearchCondition('finance_choucheng',$input_choucheng);
        $criteria->addSearchCondition('finance_salary',$input_salary);
        $criteria->addSearchCondition('finance_finsalary',$input_finsalary);

        parent::_list($model, $criteria, 'index', $data);
    }


}
