<?php

/**
 * This is the model class for table "prop_list".
 *
 * @property int $id
 * @property string $prop_type
 * @property string $prop_name
 * @property string $prop_size
 * @property string $purchase_date
 * @property string $unit_price
 * @property int $count
 * @property string $true_price
 */
class Prop extends BaseModel
{
    /**
     * {@inheritdoc}
     */
    public function tableName()
    {
        return '{{prop_list}}';
    }
    
    /**
     * 模型关联规则
     */
    public function relations()
    {
        return array();
    }
    
    
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
       /* return [
            [['purchase_date'], 'safe'],
            [['unit_price', 'true_price'], 'number'],
            [['count'], 'integer'],
            [['prop_type'], 'string', 'max' => 20],
            [['prop_name'], 'string', 'max' => 30],
            [['prop_size'], 'string', 'max' => 10],
        ];*/
        
        return array(
            array('prop_type','required','message'=>'{attribute} 不能为空'),
            array('prop_name','required','message'=>'{attribute} 不能为空'),
            array('prop_size','required','message'=>'{attribute} 不能为空'),
            array('purchase_date','required','message'=>'{attribute} 不能为空'),
            array('unit_price','required','message'=>'{attribute} 不能为空'),
            array('count','required','message'=>'{attribute} 不能为空'),
            array('true_price','required','message'=>'{attribute} 不能为空'),
           // array('clerk_belong,clerk_type,clerk_name,clerk_phone,clerk_age,clerk_sex','safe'),
        );
    }
    
    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'prop_type' => '道具类型',
            'prop_name' => '道具名称',
            'prop_size' => '道具规格',
            'purchase_date' => '采购日期',
            'unit_price' => '采购单价',
            'count' => '采购数量',
            'true_price' => '采购实价',
        ];
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
