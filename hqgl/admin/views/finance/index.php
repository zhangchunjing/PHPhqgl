<div class="box">
    <div class="box-content">
        <div class="box-header">
            <a class="btn" href="<?php echo $this->createUrl('create');?>"><i class="fa fa-plus"></i>添加人员</a>
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
                                <span>员工姓名：</span>
                                <input style="width:200px;" class="input-text" type="text" name="input_name" value="<?php echo Yii::app()->request->getParam('input_name');?>">
                            </label>
                        </td>
                        <td>
                            <label style="margin-right:30px;">
                                <span>人员归属：</span>
                                <input style="width:200px;" class="input-text" type="text" name="input_belong" value="<?php echo Yii::app()->request->getParam('input_belong');?>">
                            </label>
                        </td>

                        <td>
                            <label style="margin-right:50px;">
                                <span>职务类型：</span>
                                <input style="width:200px;" class="input-text" type="text" name="input_type" value="<?php echo Yii::app()->request->getParam('input_type');?>">
                            </label>
                        </td>

                    </tr>
                    <tr>
                        <td>
                            <label style="margin-right:50px;">
                                <span>电话：</span>
                                <input style="width:200px;" class="input-text" type="text" name="input_number" value="<?php echo Yii::app()->request->getParam('input_number');?>">
                            </label>
                        </td>
                        <td>
                            <label style="margin-right:30px;">
                                <span>员工底薪：</span>
                                <input style="width:200px;" class="input-text" type="text" name="input_basesalary" value="<?php echo Yii::app()->request->getParam('input_basesalary');?>">
                            </label>
                        </td>
                        <td>
                            <label style="margin-right:30px;">
                                <span>人员订单抽成金额：</span>
                                <input style="width:200px;" class="input-text" type="text" name="input_choucheng" value="<?php echo Yii::app()->request->getParam('input_choucheng');?>">
                            </label>
                        </td>
                    </tr>

                    <tr>
                        <td>
                            <label style="margin-right:50px;">
                                <span>当月工资：</span>
                                <input style="width:200px;" class="input-text" type="text" name="input_salary" value="<?php echo Yii::app()->request->getParam('input_salary');?>">
                            </label>
                        </td>
                        <td>
                            <label style="margin-right:30px;">
                                <span>当月实发工资：</span>
                                <input style="width:200px;" class="input-text" type="text" name="input_finsalary" value="<?php echo Yii::app()->request->getParam('input_finsalary');?>">
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

                    <th><?php echo $model->getAttributeLabel('finance_name');?></th>
                    <th><?php echo $model->getAttributeLabel('finance_belong');?></th>
                    <th><?php echo $model->getAttributeLabel('finance_type');?></th>
                    <th><?php echo $model->getAttributeLabel('finance_phone');?></th>
                    <th><?php echo $model->getAttributeLabel('finance_basesalary');?></th>
                    <th><?php echo $model->getAttributeLabel('finance_choucheng');?></th>
                    <th><?php echo $model->getAttributeLabel('finance_salary');?></th>
                    <th><?php echo $model->getAttributeLabel('finance_finsalary');?></th>
                    <th>操作</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach($arclist as $v){ ?>
                    <tr>
                        <td class="check check-item"><input class="input-check" type="checkbox" value="<?php echo CHtml::encode($v->id); ?>"></td>
                        <td><?php echo CHtml::link($v->finance_name, array('update', 'id'=>$v->id)); ?></td>
                        <td><?php echo $v->finance_belong;?></td>
                        <td><?php echo $v->finance_type;?></td>
                        <td><?php  echo $v->finance_phone;?></td>
                        <td><?php echo $v->finance_basesalary;?></td>
                        <td><?php echo $v->finance_choucheng;?></td>
                        <td><?php  echo $v->finance_salary;?></td>
                        <td><?php echo $v->finance_finsalary;?></td>
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
