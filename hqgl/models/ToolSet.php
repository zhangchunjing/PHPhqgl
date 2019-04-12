<?php
/**
 * Created by PhpStorm.
 * User: sara
 * Date: 10/24/18
 * Time: 9:17 AM
 */

class ToolSet extends BaseModel {

    /**
     * @return bool|string
     */
    public function tableName()
    {
        return '{{toolset_list}}';
    }

    /**
     * 模型验证规则
     */
    public function rules()
    {
        return array(
            array('clerk_type','required','message'=>'{attribute} 不能为空'),
            array('clerk_name','required','message'=>'{attribute} 不能为空'),
            array('clerk_size','required','message'=>'{attribute} 不能为空'),
            array('clerk_price','required','message'=>'{attribute} 不能为空'),
            array('clerk_type,clerk_name,clerk_size,clerk_price','safe'),
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
            'clerk_type'=>'道具类型',
            'clerk_name' => '道具名称',
            'clerk_size' => '道具规格',
            'clerk_price' => '道具租金',
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
