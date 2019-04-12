<?php
/**
 * Created by PhpStorm.
 * User: sara
 * Date: 10/24/18
 * Time: 9:17 AM
 */

class Finance extends BaseModel {

    /**
     * @return bool|string
     */
    public  $people_list='';
    public function tableName()
    {
        return '{{finance_list}}';
    }

    /**
     * 模型验证规则
     */
    public function rules()
    {
        return array(
            array('finance_salary','required','message'=>'{attribute} 不能为空'),

            array('clerk_belong,clerk_type,clerk_name,clerk_phone,finance_salary','safe'),
        );
    }

    /**
     * 模型关联规则
     */
    public function relations()
    {
        return array(
            'people_list' => array(self::BELONGS_TO, 'People', 'people_id,clerk_belong,clerk_type,clerk_name,clerk_phone'),
        );
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
            'finance_salary' =>'工资',

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