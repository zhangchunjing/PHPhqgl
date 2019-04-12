<?php
/**
 * Created by PhpStorm.
 * User: sara
 * Date: 10/12/18
 * Time: 8:39 AM
 */
class ClientListController extends BaseController {
    protected $model = '';
    public function init()
    {
        $this->model =substr(__CLASS__,0,-10);
        parent::init(); // TODO: Change the autogenerated stub
    }

    public function actionDelete($id) {
        parent::_clear($id);
    }

    public function actionCreate() {
        $modelName = $this->model;
        $model = new $modelName('create');
        $data = array();
        if(!Yii::app()->request->isPostRequest) {
            $data['model'] = $model;
            $this->render('update',$data);
        }
        else{
            $this->savaData($model,$_POST[$modelName]);
        }
    }

    public function actionUpdate($id) {
        $modelName = $this->model;
        $model = $this->loadModel($id,$modelName);
        if(!Yii::app()->requset->isPostRequst)
        {
            $data=array();
            $data['model'] = $model;
            $this->render('update',$data);
        }
        else{
            $this->saveData($model,$_POST[$modelName]);
        }
    }

    function saveData($model,$post) {
        $model->attributes=$post;
        show_status($model->save(),'保存成功',get_cookie('_currentUrl_'),'保存失败');
    }

    public function actionIndex($keywords = '')
    {
        set_cookie('_currentUrl_',Yii::app()->request->url);
        $modelName=$this->model;
        $model = $modelName::model();
        $criteria=new CDbCriteria;
        $criteria->order='order_num';
        $data=array();
        parent::_list($model,$criteria,'index',$data);
    }
}