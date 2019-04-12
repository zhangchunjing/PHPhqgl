<?php
/**
 * Created by PhpStorm.
 * User: sara
 * Date: 10/28/18
 * Time: 7:32 PM
 */

class HotelController extends BaseController {

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
        if (!Yii::app()->request->isPostRequest) {
            $data = array();
            $data['model'] = $model;
            $this->render('update', $data);
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


    public function actionIndex( $input_name = '',$input_address='',$input_phone='',$input_deposit='') {
        set_cookie('_currentUrl_', Yii::app()->request->url);
        $modelName = $this->model;
        $model = $modelName::model();
        $data = array();
        $criteria = new CDbCriteria;
        $criteria->order = 'id';
        $criteria->addSearchCondition('hotel_name',$input_name);
        $criteria->addSearchCondition('hotel_address',$input_address);
        $criteria->addSearchCondition('hotel_phone',$input_phone);
        $criteria->addSearchCondition('hotel_deposit',$input_deposit);

        parent::_list($model, $criteria, 'index', $data);
    }


}

