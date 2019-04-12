<?php
/**
 * Created by PhpStorm.
 * User: yudanyuan
 * Date: 12/26/18
 * Time: 8:05 PM
 */

class Indent extends BaseModel {

    /**
     * @return bool|string
     */
    public function tableName()
    {
        return '{{indent_list}}';
    }

    /**
     * 模型验证规则
     */
    public function rules()
    {
        return array(
            array('order_date','required','message'=>'{attribute} 不能为空'),
            array('bridegroom_name','required','message'=>'{attribute} 不能为空'),
            array('bridegroom_phone','required','message'=>'{attribute} 不能为空'),
            array('bride_name','required','message'=>'{attribute} 不能为空'),
            array('bride_phone','required','message'=>'{attribute} 不能为空'),
            array('wedding_date','required','message'=>'{attribute} 不能为空'),
            array('hold_time','required','message'=>'{attribute} 不能为空'),
            array('bride_address','required','message'=>'{attribute} 不能为空'),
            array('new_house_address','required','message'=>'{attribute} 不能为空'),
            array('hotel_address','required','message'=>'{attribute} 不能为空'),
            array('order_date,bridegroom_name,bridegroom_phone,bride_name,bride_phone,wedding_date,hold_time,bride_address,new_house_address,hotel_address','safe'),
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
            'order_date' => '订单日期',
            'bridegroom_name' => '新郎姓名',
            'brideg_name' => '新娘姓名',
            'bridegroom_phone' => '新郎电话',
            'brideg_phone' => '新娘电话',
            'wedding_date' => '婚礼日期',
            'hold_time' => '举办场次',
            'brideg_address' => '娘家地址',
            'new_house_address' => '新房地址',
            'hotel_address' => '酒店地址',


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