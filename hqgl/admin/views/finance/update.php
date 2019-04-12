<div class="box">
    <div class="box-title c"><h1><i class="fa fa-table"></i>员工工资信息</h1><span class="back"><a class="btn" href="javascript:;" onclick="we.back();"><i class="fa fa-reply"></i>返回</a></span></div><!--box-title end-->
    <div class="box-detail">
        <?php $form = $this->beginWidget('CActiveForm',get_form_list());?>
        <div class="box-detail-tab">
            <ul class="c">
                <li class="current">基本信息</li>
            </ul>
        </div><!--box-detail-tab end-->
        <div class="box-detail-bd">
            <div style="display:block;" class="box-detail-tab-item">
                <div class="mt15">
                    <table>
                        <tr class="table-title">
                            <td colspan="2">资料填写</td>
                        </tr>
                        <tr>
                            <td  width="15%"><?php echo $form->labelEx($model, 'finance_name');?></td>
                            <td width="85%">
                                <?php echo $form->textField($model, 'finance_name', array('class' => 'input-text'));?>
                                <?php echo $form->error($model, 'finance_name', $htmlOptions = array());?>
                            </td>
                        </tr>

                        <tr>
                            <td><?php echo $form->labelEx($model, 'finance_belong');?></td>
                            <td>
                                <?php echo $form->textField($model, 'finance_belong', array('class' => 'input-text'));?>
                                <?php echo $form->error($model, 'finance_belong', $htmlOptions = array());?>
                            </td>
                        </tr>
                        <tr>
                            <td><?php echo $form->labelEx($model, 'finance_type'); ?></td>
                            <td>
                                <?php echo $form->textField($model, 'finance_type', array('class' => 'input-text')); ?>
                                <?php echo $form->error($model, 'finance_type', $htmlOptions = array()); ?>
                            </td>
                        </tr>
                        <tr>
                            <td><?php echo $form->labelEx($model, 'finance_phone'); ?></td>
                            <td>
                                <?php echo $form->textField($model, 'finance_phone', array('class' => 'input-text')); ?>
                                <?php echo $form->error($model, 'finance_phone', $htmlOptions = array()); ?>
                            </td>
                        </tr>
                        <tr>
                            <td><?php echo $form->labelEx($model, 'finance_basesalary'); ?></td>
                            <td>
                                <?php echo $form->textField($model, 'finance_basesalary', array('class' => 'input-text')); ?>
                                <?php echo $form->error($model, 'finance_basesalary', $htmlOptions = array()); ?>
                            </td>
                        </tr>
                        <tr>
                            <td><?php echo $form->labelEx($model, 'finance_choucheng'); ?></td>
                            <td>
                                <?php echo $form->textField($model, 'finance_choucheng', array('class' => 'input-text')); ?>
                                <?php echo $form->error($model, 'finance_choucheng', $htmlOptions = array()); ?>
                            </td>
                        </tr>
                        <tr>
                            <td><?php echo $form->labelEx($model, 'finance_salary'); ?></td>
                            <td>
                                <?php echo $form->textField($model, 'finance_salary', array('class' => 'input-text')); ?>
                                <?php echo $form->error($model, 'finance_salary', $htmlOptions = array()); ?>
                            </td>
                        </tr>
                        <tr>
                            <td><?php echo $form->labelEx($model, 'finance_finsalary'); ?></td>
                            <td>
                                <?php echo $form->textField($model, 'finance_finsalary', array('class' => 'input-text')); ?>
                                <?php echo $form->error($model, 'finance_finsalary', $htmlOptions = array()); ?>
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
