<?php
/**
 * This is the model class for table "order_list".
 *
 * @property string $order_id
 * @property string $check_in_clerk_name
 * @property string $order_date
 * @property string $client_name
 * @property string $client_sex
 * @property string $client_phone
 * @property string $client_source
 * @property string $bridegroom_name
 * @property string $bridegroom_phone
 * @property string $bride_name
 * @property string $bride_phone
 * @property string $wedding_date
 * @property int $wedding_session
 * @property string $bride_home_address
 * @property string $new_house_address
 * @property string $remarks
 */
class Order extends BaseModel
{
    /**
     * {@inheritdoc}
     */
    public function tableName()
    {
        return '{{order_list}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        /*return [
            [['order_date', 'wedding_date'], 'safe'],
            [['wedding_session'], 'integer'],
            [['check_in_clerk_name', 'client_name', 'client_source'], 'string', 'max' => 50],
            [['client_sex'], 'string', 'max' => 4],
            [['client_phone', 'bridegroom_phone', 'bride_phone'], 'string', 'max' => 11],
            [['bridegroom_name', 'bride_name'], 'string', 'max' => 30],
            [['bride_home_address', 'new_house_address'], 'string', 'max' => 100],
            [['remarks'], 'string', 'max' => 255],
        ];*/
        return array(
            array('check_in_clerk_name','required','message'=>'{attribute} 不能为空'),
            array('order_date','required','message'=>'{attribute} 不能为空'),
            array('client_name','required','message'=>'{attribute} 不能为空'),
            array('client_sex','required','message'=>'{attribute} 不能为空'),
            array('client_phone','required','message'=>'{attribute} 不能为空'),
            array('client_source','required','message'=>'{attribute} 不能为空'),
            array('bridegroom_name','required','message'=>'{attribute} 不能为空'),
            array('bridegroom_phone','required','message'=>'{attribute} 不能为空'),
            array('bride_name','required','message'=>'{attribute} 不能为空'),
            array('bride_phone','required','message'=>'{attribute} 不能为空'),
            array('wedding_date','required','message'=>'{attribute} 不能为空'),
            array('wedding_session','required','message'=>'{attribute} 不能为空'),
            array('bride_home_address','required','message'=>'{attribute} 不能为空'),
            array('new_house_address','required','message'=>'{attribute} 不能为空'),
            array('remarks','required','message'=>'{attribute} 不能为空'),
            //array('clerk_belong,clerk_type,clerk_name,clerk_phone,clerk_age,clerk_sex','safe'),
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
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'order_id',
            'check_in_clerk_name' => '登记人员',
            'order_date' => '登记日期',
            'client_name' => '客户姓名',
            'client_sex' => '客户性别',
            'client_phone' => '客户电话',
            'client_source' => '客户来源',
            'bridegroom_name' => '新郎姓名',
            'bridegroom_phone' => '新郎电话',
            'bride_name' => '新娘姓名',
            'bride_phone' => '新娘电话',
            'wedding_date' => '婚礼日期',
            'wedding_session' => '举办场次',
            'bride_home_address' => '娘家地址',
            'new_house_address' => '新房地址',
            'remarks' => '备注',
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
