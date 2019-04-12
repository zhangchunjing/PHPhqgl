<?php
/**
 * Created by PhpStorm.
 * User: sara
 * Date: 10/24/18
 * Time: 3:21 PM
 */


class PropController extends BaseController {

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

    public function actionIndex( $input_name = '',$input_belong='',$input_type='',$input_phone='',$input_sex='',$input_age='') {
        set_cookie('_currentUrl_', Yii::app()->request->url);
        $modelName = $this->model;
        $model = $modelName::model();
        $data = array();
        $criteria = new CDbCriteria;
        $criteria->order = 'id';
        $criteria->addSearchCondition('prop_type',$input_name);
        $criteria->addSearchCondition('prop_name',$input_belong);
        $criteria->addSearchCondition('prop_size',$input_type);
        $criteria->addSearchCondition('purchase_date',$input_phone);
        $criteria->addSearchCondition('unit_price',$input_sex);
        $criteria->addSearchCondition('count',$input_age);

        parent::_list($model, $criteria, 'index', $data);
    }


}
