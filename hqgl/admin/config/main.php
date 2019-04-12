<?php

$config = require(ROOT_PATH . "/include/config.php");
$params = array_merge($config['params'], array('administrator' => array('admin'),));
$st="";

    $params['roleItem'] = array(
    array(
     '管理操作',
        array(
            'award_index1' => array('预约管理', 'order/index'),
            'award_index2' => array('订单管理', 'indent/index'),
            'award_index3' => array('财务管理','finance/index'),
            'award_index4' => array('酒店管理','hotel/index'),
            'award_index5' => array('人员管理','people/index'),
            'award_index6' => array('服装管理','clothes/index'),
            'award_index7' => array('道具管理','prop/index'),
            'award_index8' => array('车辆管理','car/index'),
            //'award_index9' => array('基础设置','toolset/index'),

            ),
            ),
            array(
            '基础设置',
            array(
                'award_index1' => array('道具基础设置', 'toolset/index'),
                'award_index2' => array('职务价格设置', 'jobprice/index'),
                'award_index3' => array('车辆款式与租金设置', 'carset/index'),
                'award_index4' => array('员工薪资设置', 'staffmoney/index'),
                'award_index5' => array('服装租金设置', 'clothesset/index'),


            ),
    )
  );






$main = array(
    'basePath' => ROOT_PATH . '/admin',
    'runtimePath' => ROOT_PATH . '/runtime/admin',
    'name' => '',
    'defaultController' => 'index',
    'components' => array(
        'db' => $config['components']['db'],
        'log' => array(
            'class' => 'CLogRouter',
            'routes' => array(
                array(
                    'class' => 'CFileLogRoute',
                    'levels' => 'info,error, warning'
                ),
                array(
                    'class' => 'CWebLogRoute',
                    'levels' => 'trace'
                ),
            ),
        ),
    ),
    'params' => $params,
);

return array_merge($config, $main);
?>

<ul class="sidebar-menu">            
<li class="treeview">               
    <a href="#">                    
        <i class="fa fa-gears"></i> <span>权限控制</span>
        <i class="fa fa-angle-left pull-right"></i>               
    </a>               
    <ul class="treeview-menu">                   
        <li class="treeview">                        
            <a href="/admin">管理员</a>
            <ul class="treeview-menu">                            
                <li><a href="/user"><i class="fa fa-circle-o"></i> 后台用戶</a></li>
                <li class="treeview">                                
                    <a href="/admin/role"> <i class="fa fa-circle-o"></i> 权限 <i class="fa fa-angle-left pull-right"></i>
                    </a>                                
                    <ul class="treeview-menu">                                    
                        <li><a href="/admin/route"><i class="fa fa-circle-o"></i> 路由</a></li>
                        <li><a href="/admin/permission"><i class="fa fa-circle-o"></i> 权限</a></li>
                        <li><a href="/admin/role"><i class="fa fa-circle-o"></i> 角色</a></li>
                        <li><a href="/admin/assignment"><i class="fa fa-circle-o"></i> 分配</a></li>
                        <li><a href="/admin/menu"><i class="fa fa-circle-o"></i> 菜單</a></li>
                    </ul>                           
                </li>                        
            </ul>                    
        </li>                
    </ul>            
    </li>        
</ul>