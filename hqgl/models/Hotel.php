<?php
/**
 * Created by PhpStorm.
 * User: sara
 * Date: 10/28/18
 * Time: 7:10 PM
 */

class Hotel extends BaseModel {

    /**
     * @return bool|string
     */
    public function tableName()
    {
        return '{{hotel_list}}';
    }

    /**
     * 模型验证规则
     */
    public function rules()
    {
        return array(
            array('hotel_name','required','message'=>'{attribute} 不能为空'),
            array('hotel_address','required','message'=>'{attribute} 不能为空'),
            array('hotel_phone','required','message'=>'{attribute} 不能为空'),
            array('hotel_deposit','required','message'=>'{attribute} 不能为空'),
            array('hotel_name,hotel_address,hotel_phone,hotel_deposit','safe'),
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
            'hotel_name'=>'酒店名称',
            'hotel_address'=>'酒店地址',
            'hotel_phone'=>'酒店电话',
            'hotel_deposit'=>'预约定金',
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