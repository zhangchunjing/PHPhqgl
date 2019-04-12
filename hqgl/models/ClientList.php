<?php
/**
 * Created by PhpStorm.
 * User: sara
 * Date: 10/11/18
 * Time: 12:39 PM
 */

class ClientList extends BaseModel {
    public $client_list_pic='';

    /**
     * @return bool|string
     */
    public function tableName()
    {
        return '{{client_list}}';
    }

    /**
     * 模型验证规则
     */
    public function rules()
    {
        return array(
            array('order_num','required','message'=>'{attribute} 不能为空'),
            array('client_name','required','message'=>'{attribute} 不能为空'),
            array('client_phone','required','message'=>'{attribute} 不能为空'),
            array('client_email','required','message'=>'{attribute} 不能为空'),
            array('pay_time','required','message'=>'{attribute} 不能为空'),
            array('delivery_time','required','message'=>'{attribute} 不能为空'),
            array('manager','required','message'=>'{attribute} 不能为空'),
            array('order_num,client_name,client_phone,client_email,pay_time,delivery_time,manager','safe'),
        );
    }

    /**
     * 模型关联规则
     */
    public function relations()
    {
        return array();
    }

    /**
     * 属性标签
     */
    public function attributeLabels()
    {
        return array(
            'id' => 'ID',
            'order_num'=>'订单号',
            'client_name' => '客户名称',
            'client_phone' => '客户电话',
            'client_email' => '客户邮箱',
            'pay_time' => '收款时间',
            'delivery_time' => '交货时间',
            'manager' => '负责人',

        );
    }

    /**
     * Return the static model of the specified AR class.
     */
    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }

    public function getCode()
    {
        return $this->findAll('1=1');
    }
}