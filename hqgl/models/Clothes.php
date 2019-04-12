<?php

class Clothes extends BaseModel {

    /**
     * @return bool|string
     */
    public function tableName()
    {
        return '{{clothes_list}}';
    }

    /**
     * 模型验证规则
     */
    public function rules()
    {
        return array(
            array('clothes_code','required','message'=>'{attribute} 不能为空'),
            array('clothes_type','required','message'=>'{attribute} 不能为空'),
            array('clothes_num','required','message'=>'{attribute} 不能为空'),
            array('clothes_cost','required','message'=>'{attribute} 不能为空'),
            array('clothes_rent','required','message'=>'{attribute} 不能为空'),
            array('clothes_code,clothes_type,clothes_num,clothes_cost,clothes_rest,clothes_rent','safe'),
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
            'clothes_code'=>'服装编码',
            'clothes_type' => '服装类型',
            'clothes_num' => '库存',
            'clothes_cost' => '租赁价格',
            'clothes_rent' => '已借数量',

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