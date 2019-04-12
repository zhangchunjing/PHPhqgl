<div class="box">
    <div class="box-content">
        <div class="box-header">
            <a class="btn" href="<?php echo $this->createUrl('create');?>"><i class="fa fa-plus"></i>添加酒店</a>
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
                                <span>酒店名称：</span>
                                <input style="width:200px;" class="input-text" type="text" name="input_name" value="<?php echo Yii::app()->request->getParam('input_name');?>">
                            </label>
                        </td>

                        <td>
                            <label style="margin-right:50px;">
                                <span>酒店地址：</span>
                                <input style="width:200px;" class="input-text" type="text" name="input_address" value="<?php echo Yii::app()->request->getParam('input_address');?>">
                            </label>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <label style="margin-right:30px;">
                                <span>酒店电话：</span>
                                <input style="width:200px;" class="input-text" type="text" name="input_phone" value="<?php echo Yii::app()->request->getParam('input_phone');?>">
                            </label>
                        </td>
                        <td>
                            <label style="margin-right:50px;">
                                <span>预约定金：</span>
                                <input style="width:200px;" class="input-text" type="text" name="input_deposit" value="<?php echo Yii::app()->request->getParam('input_deposit');?>">

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
                    <th><?php echo $model->getAttributeLabel('hotel_name');?></th>
                    <th><?php echo $model->getAttributeLabel('hotel_address');?></th>
                    <th><?php echo $model->getAttributeLabel('hotel_phone');?></th>
                    <th><?php echo $model->getAttributeLabel('hotel_deposit');?></th>
                    <th>操作</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach($arclist as $v){ ?>
                    <tr>
                        <td class="check check-item"><input class="input-check" type="checkbox" value="<?php echo CHtml::encode($v->id); ?>"></td>
                        <td><?php echo CHtml::link($v->hotel_name, array('update', 'id'=>$v->id)); ?></td>
                        <td><?php echo $v->hotel_address;?></td>
                        <td><?php echo $v->hotel_phone;?></td>
                        <td><?php  echo $v->hotel_deposit;?></td>
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
