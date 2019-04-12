<?php
/**
 * Created by PhpStorm.
 * User: sara
 * Date: 10/24/18
 * Time: 9:17 AM
 */

class People extends BaseModel {

    /**
     * @return bool|string
     */
    public function tableName()
    {
        return '{{people_list}}';
    }

    /**
     * 模型验证规则
     */
    public function rules()
    {
        return array(
            array('clerk_belong','required','message'=>'{attribute} 不能为空'),
            array('clerk_type','required','message'=>'{attribute} 不能为空'),
            array('clerk_name','required','message'=>'{attribute} 不能为空'),
            array('clerk_phone','required','message'=>'{attribute} 不能为空'),
            array('clerk_age','required','message'=>'{attribute} 不能为空'),
            array('clerk_sex','required','message'=>'{attribute} 不能为空'),
            array('clerk_belong,clerk_type,clerk_name,clerk_phone,clerk_age,clerk_sex','safe'),
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
            'clerk_belong'=>'人员归属',
            'clerk_type' => '职务类型',
            'clerk_name' => '姓名',
            'clerk_phone' => '电话',
            'clerk_age' => '年龄',
            'clerk_sex' => '性别',

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