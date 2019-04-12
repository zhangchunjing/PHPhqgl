<div class="box">
    <div class="box-content">
        <div class="box-header">
            <a class="btn" href="<?php echo $this->createUrl('create');?>"><i class="fa fa-plus"></i>添加预约</a>
            <a class="btn" href="javascript:;" onclick="we.reload();"><i class="fa fa-refresh"></i>刷新</a>
            <a style="display:none;" id="j-delete" class="btn" href="javascript:;" onclick="we.dele(we.checkval('.check-item input:checked'), deleteUrl);"><i class="fa fa-trash-o"></i>删除</a>
        </div><!--box-header end-->
        <div class="box-search">
            <table>
                <form action="<?php echo Yii::app()->request->url;?>" method="get">
                    <input type="hidden" name="r" value="<?php echo Yii::app()->request->getParam('r');?>">
                    <tr>
                        <td>
                            <label style="margin-right:30px;">
                                <span>登记人员：</span>
                                <input style="width:200px;" class="input-text" type="text" name="input_name" value="<?php echo Yii::app()->request->getParam('check_in_clerk_name');?>">
                            </label>
                        </td>

                        <td>
                            <label style="margin-right:50px;">
                                <span>登记日期：</span>
                                <input style="width:200px;" class="input-text" type="text" name="input_age" value="<?php echo Yii::app()->request->getParam('order_date');?>">
                            </label>
                        </td>
                        <td>
                            <label style="margin-right:50px;">
                                <span>客户姓名：</span>
                                <input style="width:200px;" class="input-text" type="text" list="typelist" name="input_type" value="<?php /*/*echo Yii::app()->request->getParam('client_name');*/?>">

                            </label>

                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label style="margin-right:30px;">
                                <span>客户性别：</span>
                                <input style="width:200px;" class="input-text" type="text" list="sexlist" name="input_phone" value="<?php echo Yii::app()->request->getParam('client_sex');?>">
                                <datalist id="sexlist">
                                    <option>男</option>
                                    <option>女</option>
                                </datalist>
                            </label>
                        </td>
                        <td>
                            <label style="margin-right:50px;">
                                <span>客户电话：</span>
                                <input style="width:200px;" class="input-text" type="text"  name="input_sex" value="<?php echo Yii::app()->request->getParam('client_phone');?>">

                            </label>
                        </td>
                        <td>
                            <label style="margin-right:50px;">
                                <span>客户来源：</span>
                                <input style="width:200px;" class="input-text" type="text" name="input_belong" value="<?php echo Yii::app()->request->getParam('client_source');?>">
                            </label>
                        </td>
                        <td>
                            <button class="btn btn-blue" type="submit">查询</button>
                        </td>
                    </tr>

                </form>
            </table>

        </div><!--box-search end-->

        <div class="box-table">
            <table class="list">
                <thead>
                <tr>
                    <th class="check"><input id="j-checkall" class="input-check" type="checkbox"></th>
                    <th><?php echo $model->getAttributeLabel('check_in_clerk_name');?></th>
                    <th><?php echo $model->getAttributeLabel('order_date');?></th>
                    <th><?php echo $model->getAttributeLabel('client_name');?></th>
                    <th><?php echo $model->getAttributeLabel('client_sex');?></th>
                    <th><?php echo $model->getAttributeLabel('client_phone');?></th>
                    <th><?php echo $model->getAttributeLabel('client_source');?></th>
                    <th><?php echo $model->getAttributeLabel('bridegroom_name');?></th>
                    <th><?php echo $model->getAttributeLabel('bridegroom_phone');?></th>
                    <th><?php echo $model->getAttributeLabel('bride_name');?></th>
                    <th><?php echo $model->getAttributeLabel('bride_phone');?></th>
                    <th><?php echo $model->getAttributeLabel('wedding_date');?></th>
                    <th><?php echo $model->getAttributeLabel('wedding_session');?></th>
                    <th><?php echo $model->getAttributeLabel('bride_home_address');?></th>
                    <th><?php echo $model->getAttributeLabel('new_house_address');?></th>
                    <th><?php echo $model->getAttributeLabel('remarks');?></th>
                    <th>操作</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach($arclist as $v){ ?>
                    <tr>
                        <td class="check check-item"><input class="input-check" type="checkbox" value="<?php echo CHtml::encode($v->id); ?>"></td>
                        <td><?php echo CHtml::link($v->check_in_clerk_name, array('update', 'id'=>$v->id)); ?></td>
                        <td><?php echo $v->order_date;?></td>
                        <td><?php echo $v->client_name;?></td>
                        <td><?php  echo $v->client_sex;?></td>
                        <td><?php echo $v->client_phone;?></td>
                        <td><?php echo $v->client_source;?></td>
                        <td><?php echo $v->bridegroom_name;?></td>
                        <td><?php echo $v->bridegroom_phone;?></td>
                        <td><?php echo $v->bride_name;?></td>
                        <td><?php echo $v->bride_phone;?></td>
                        <td><?php echo $v->wedding_date;?></td>
                        <td><?php echo $v->wedding_session;?></td>
                        <td><?php echo $v->bride_home_address;?></td>
                        <td><?php echo $v->new_house_address;?></td>
                        <td><?php echo $v->remarks;?></td>
                        <td>
                            <a class="btn" href="<?php echo $this->createUrl('update', array('id'=>$v->id));?>" title="编辑"><i class="fa fa-edit"></i></a>
                            <a class="btn" href="javascript:;" onclick="we.dele('<?php echo $v->id;?>', deleteUrl);" title="删除"><i class="fa fa-trash-o"></i></a>
                        </td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
        </div><!--box-table end-->
        <div class="box-page c"><?php $this->page($pages); ?></div>
    </div><!--box-content end-->
</div><!--box end-->
<script>
    var deleteUrl = '<?php echo $this->createUrl('delete', array('id'=>'ID')); ?>';
</script>
