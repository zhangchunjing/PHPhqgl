<div class="box">
    <div class="box-content">
        <div class="box-header">
            <a class="btn" href="<?php echo $this->createUrl('create');?>"><i class="fa fa-plus"></i>添加服装</a>
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
                                <span>服装编码：</span>
                                <input style="width:200px;" class="input-text" type="text" name="input_name" value="<?php echo Yii::app()->request->getParam('input_code');?>">
                            </label>
                        </td>


                        <td>
                            <label style="margin-right:50px;">
                                <span>职务类型：</span>
                                <input style="width:200px;" class="input-text" type="text" list="typelist" name="input_type" value="<?php /*/*echo Yii::app()->request->getParam('input_type');*/?>">
                                <datalist id="typelist">
                                    <option>新娘服</option>
                                    <option>新郎服</option>
                                    <option>伴娘服</option>
                                    <option>伴郎服</option>
                                </datalist>
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
                    <th><?php echo $model->getAttributeLabel('clothes_code');?></th>
                    <th><?php echo $model->getAttributeLabel('clothes_type');?></th>
                    <th><?php echo $model->getAttributeLabel('clothes_num');?></th>
                    <th><?php echo $model->getAttributeLabel('clothes_cost');?></th>
                    <th><?php echo $model->getAttributeLabel('clothes_rent');?></th>
                    <th>操作</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach($arclist as $v){ ?>
                    <tr>
                        <td class="check check-item"><input class="input-check" type="checkbox" value="<?php echo CHtml::encode($v->id); ?>"></td>
                        <td><?php echo CHtml::link($v->clothes_code, array('update', 'id'=>$v->id)); ?></td>
                        <td><?php echo $v->clothes_type;?></td>
                        <td><?php echo $v->clothes_num;?></td>
                        <td><?php  echo $v->clothes_cost;?></td>
                        <td><?php echo $v->clothes_rent;?></td>
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
