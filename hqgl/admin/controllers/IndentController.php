<?php
/**
 * Created by PhpStorm.
 * User: yudanyuan
 * Date: 12/30/18
 * Time: 8:54 PM
 */

class IndentController extends BaseController {

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

    public function actionIndex( $input_bridegroom_name = '',$input_bridegname='',$input_bridegroomphone='',$input_bridegphone='',$input_order_date='',$input_weddingdate='') {
        set_cookie('_currentUrl_', Yii::app()->request->url);
        $modelName = $this->model;
        $model = $modelName::model();
        $data = array();
        $criteria = new CDbCriteria;
        $criteria->order = 'id';
        $criteria->addSearchCondition('bridegroom_name',$input_bridegroom_name);
        $criteria->addSearchCondition('brideg_name',$input_bridegname);
        $criteria->addSearchCondition('bridegroom_phone',$input_bridegroomphone);
        $criteria->addSearchCondition('brideg_phone',$input_bridegphone);
        $criteria->addSearchCondition('order_date',$input_order_date);
        $criteria->addSearchCondition('wedding_date',$input_weddingdate);


        parent::_list($model, $criteria, 'index', $data);
    }


}
