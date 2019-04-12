<div class="box">
    <div class="box-title c"><h1><i class="fa fa-table"></i>人员信息</h1><span class="back"><a class="btn" href="javascript:;" onclick="we.back();"><i class="fa fa-reply"></i>返回</a></span></div><!--box-title end-->
    <div class="box-detail">
        <?php $form = $this->beginWidget('CActiveForm',get_form_list());?>
        <div class="box-detail-tab">
            <ul class="c">
                <li class="current">基本信息</li>
            </ul>
        </div><!--box-detail-tab end-->


        <div class="box-detail-bd">
            <div style="display:block;" class="box-detail-tab-item">
                <table>
                    <tr class="table-title">
                        <td colspan="2">职务部门分类</td>
                    </tr>
                    <tr>
                        <td width="30%"><?php echo $form->labelEx($model, 'clerk_belong'); ?></td>
                        <td width="30%">
                            <?php echo $form->dropDownList($model, 'clerk_belong', array('内部员工'=>'内部员工','外部雇员'=>'外部雇员'),
                                array('prompt'=>'请选择')); ?>
                            <?php echo $form->error($model, 'clerk_belong', $htmlOptions = array()); ?>
                        </td>
                    </tr>
                    <tr>
                        <td><?php echo $form->labelEx($model, 'clerk_type'); ?></td>
                        <td>
                            <?php echo $form->dropDownList($model, 'clerk_type',
                                array('接待'=>'接待','策划'=>'策划','主持'=>'主持','化妆'=>'化妆','摄影'=>'摄影','跟拍'=>'跟拍','司机'=>'司机','其他'=>'其他'),
                                array('prompt'=>'请选择')); ?>
                            <?php echo $form->error($model, 'clerk_type', $htmlOptions = array()); ?>
                        </td>
                    </tr>
                </table>

                <div class="mt15">
                    <table>
                        <tr class="table-title">
                            <td colspan="2">人员资料填写</td>
                        </tr>
                        <tr>
                            <td  width="15%"><?php echo $form->labelEx($model, 'clerk_name'); ?></td>
                            <td width="85%">
                                <?php echo $form->textField($model, 'clerk_name', array('class' => 'input-text')); ?>
                                <?php echo $form->error($model, 'clerk_name', $htmlOptions = array()); ?>
                            </td>
                        </tr>
                        <tr>
                            <td><?php echo $form->labelEx($model, 'clerk_phone'); ?></td>
                            <td>
                                <?php echo $form->textField($model, 'clerk_phone', array('class' => 'input-text')); ?>
                                <?php echo $form->error($model, 'clerk_phone', $htmlOptions = array()); ?>
                            </td>
                        </tr>
                        <tr>
                            <td><?php echo $form->labelEx($model, 'clerk_age'); ?></td>
                            <td>
                                <?php echo $form->textField($model, 'clerk_age', array('class' => 'input-text')); ?>
                                <?php echo $form->error($model, 'clerk_age', $htmlOptions = array()); ?>
                            </td>
                        </tr>

                        <tr>
                            <td><?php echo $form->labelEx($model, 'clerk_sex'); ?></td>
                            <td>
                                <?php echo $form->dropDownList($model, 'clerk_sex', array('男'=>'男','女'=>'女'),array('prompt'=>'请选择')); ?>
                                <?php echo $form->error($model, 'clerk_sex', $htmlOptions = array()); ?>
                            </td>
                        </tr>
                    </table>
                </div>


            </div><!--box-detail-tab-item end   style="display:block;"-->

        </div><!--box-detail-bd end-->

        <div class="box-detail-submit"><button onclick="submitType='baocun'" class="btn btn-blue" type="submit">保存</button><button class="btn" type="button" onclick="we.back();">取消</button></div>

        <?php $this->endWidget(); ?>
    </div><!--box-detail end-->
</div><!--box end-->
