<div class="box">
    <div class="box-content">

        <div class="box-header">
            <a class="btn" href="<?php echo $this->createUrl('create');?>"><i class="fa fa-plus"></i>添加订单</a>
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
                                <span>新郎姓名：</span>
                                <input style="width:200px;" class="input-text" type="text" name="input_bridegroom_name" value="<?php echo Yii::app()->request->getParam('input_bridegroom_name');?>">
                            </label>
                        </td>
                        <td>
                            <label style="margin-right:50px;">
                                <span>新郎电话：</span>
                                <input style="width:200px;" class="input-text" type="text"  name="input_bridegroomphone" value="<?php echo Yii::app()->request->getParam('input_bridegroomphone');?>">
                            </label>
                        </td>
                        <td>
                            <label style="margin-right:50px;">
                                <span>婚礼日期：</span>
                                <input style="...;" class="input-text" type="text" name="input_weddingdate" value="<?php echo Yii::app()->request->getParam('input_weddingdate');?>">
                            </label>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label style="margin-right:30px;">
                                <span>新娘姓名：</span>
                                <input style="width:200px;" class="input-text" type="text" name="input_bridegname" value="<?php echo Yii::app()->request->getParam('input_bridegname');?>">
                            </label>
                        </td>
                        <td>
                            <label style="margin-right:50px;">
                                <span>新娘电话：</span>
                                <input style="width:200px;" class="input-text" type="text"  name="input_bridegphone" value="<?php echo Yii::app()->request->getParam('input_bridegphone');?>">
                            </label>
                        </td>
                        <td>
                            <label style="margin-right:30px;">
                                <span>订单日期：</span>
                                <input style="width:200px;" class="input-text" type="text" name="input_order_date" value="<?php echo Yii::app()->request->getParam('input_order_date');?>">
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
                    <th><?php echo $model->getAttributeLabel('');?></th>
                    <th><?php echo $model->getAttributeLabel('order_date');?></th>
                    <th><?php echo $model->getAttributeLabel('wedding_date');?></th>
                    <th><?php echo $model->getAttributeLabel('bridegroom_name');?></th>
                    <th><?php echo $model->getAttributeLabel('bridegroom_phone');?></th>
                    <th><?php echo $model->getAttributeLabel('brideg_name');?></th>
                    <th><?php echo $model->getAttributeLabel('brideg_phone');?></th>
                    <th><?php echo $model->getAttributeLabel('hold_time');?></th>
                    <th><?php echo $model->getAttributeLabel('brideg_address');?></th>
                    <th><?php echo $model->getAttributeLabel('new_house_address');?></th>
                    <th><?php echo $model->getAttributeLabel('hotel_address');?></th>
                    <th>操作</th>
                </tr>
                </thead>

                <tbody>
                <?php foreach($arclist as $v)
                { ?>

                    <tr>
                        <td class="check check-item"><input class="input-check" type="checkbox" value="<?php echo CHtml::encode($v->id); ?>"></td>
                        <td><?php echo CHtml::link($v->clerk_name, array('update', 'id'=>$v->id)); ?></td>
                        <td><?php echo $v->order_date;?></td>
                        <td><?php echo $v->wedding_date;?></td>
                        <td><?php  echo $v->bridegroom_name;?></td>
                        <td><?php echo $v->bridegroom_phone;?></td>
                        <td><?php echo $v->brideg_name;?></td>
                        <td><?php echo $v->brideg_phone;?></td>
                        <td><?php echo $v->brideg_name;?></td>
                        <td><?php echo $v->hold_time;?></td>
                        <td><?php echo $v->brideg_address;?></td>
                        <td><?php echo $v->new_house_address;?></td>
                        <td><?php echo $v->hotel_address;?></td>
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
