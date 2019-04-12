<?php
/**
 * Created by PhpStorm.
 * User: Chun
 * Date: 2018/11/6
 * Time: 23:23
 */

class CarController extends BaseController
{

    protected $model = '';

    public function init() {
        $this->model = substr(__CLASS__, 0, -10);
        parent::init();
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
        put_msg('aaa');
        $model = $this->loadModel($id, $modelName);
        put_msg('bbb');
        if (!Yii::app()->request->isPostRequest) {
            $data = array();
            $data['model'] = $model;
            put_msg('ddd');
            $this->render('update', $data);
            put_msg('ccc');
        } else {
            put_msg($_POST);
            put_msg($modelName);
            $this-> saveData($model,$_POST[$modelName]);

        }
    }/*曾老师保留部份，---结束*/


    function saveData($model,$post) {
        put_msg('50');
        put_msg($post);

        $model->attributes =$post;
        show_status($model->save(),'保存成功', get_cookie('_currentUrl_'),'保存失败');
    }


    public function actionIndex( $input_owner='',$input_brand = '',$input_color='',$input_number='',$input_parknum='') {
        set_cookie('_currentUrl_', Yii::app()->request->url);
        $modelName = $this->model;
        $model = $modelName::model();
        $data = array();
        $criteria = new CDbCriteria;
        $criteria->order = 'id';
        $criteria->addSearchCondition('car_owner',$input_owner);
        $criteria->addSearchCondition('car_brand',$input_brand);
        $criteria->addSearchCondition('car_color',$input_color);
        $criteria->addSearchCondition('car_number',$input_number);
        $criteria->addSearchCondition('parking_number',$input_parknum);

        parent::_list($model, $criteria, 'index', $data);
    }

}