<?php
/**
 * Created by PhpStorm.
 * User: sara
 * Date: 10/24/18
 * Time: 9:17 AM
 */

class JobPrice extends BaseModel {

    /**
     * @return bool|string
     */
    public function tableName()
    {
        return '{{jobprice_list}}';
    }

    /**
     * 模型验证规则
     */
    public function rules()
    {
        return array(
            array('clerk_type','required','message'=>'{attribute} 不能为空'),
            array('clerk_price','required','message'=>'{attribute} 不能为空'),
            array('clerk_type,clerk_price','safe'),
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
            'clerk_type' => '职务类型',
            'clerk_price' => '职务价格',

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