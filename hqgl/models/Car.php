<?php
/**
 * Created by PhpStorm.
 * User: sara
 * Date: 10/28/18
 * Time: 7:10 PM
 */

class Car extends BaseModel {

    /**
     * @return bool|string
     */
    public function tableName()
    {
        return '{{car_list}}';
    }

    /**
     * 模型验证规则
     */
    public function rules()
    {
        return array(
            array('car_owner','required','message'=>'{attribute} 不能为空'),
            array('car_brand','required','message'=>'{attribute} 不能为空'),
            array('car_color','required','message'=>'{attribute} 不能为空'),
            array('car_number','required','message'=>'{attribute} 不能为空'),
            array('parking_number','required','message'=>'{attribute} 不能为空'),
            array('car_owner,car_brand,car_color,car_number,parking_number','safe'),
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
            'car_owner'=>'车主',
            'car_brand'=>'车品牌',
            'car_color'=>'车颜色',
            'car_number'=>'车牌号',
            'parking_number'=>'停车位',
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