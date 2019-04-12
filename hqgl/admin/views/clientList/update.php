<div class="box">
    <div class="box-title c">
        <h1><i class="fa fa-table"></i>订单信息</h1>
        <span class="back">
            <a class="btn" href="javascript:;" onclick="we.back();"><i class="fa fa-reply"></i></a>
        </span>
    </div><!--box-title end-->
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
                        <td colspan="2">交易信息</td>
                    </tr>
                    <tr>
                        <td width="30%"><?php echo $form->labelEx($model,'order_num');?></td>
                        <td width="30%">
                            <?php echo $form->textField($model,'order_num',array('class'=>'input-text'));?>
                            <?php echo $form->error($model,'order_num',$htmlOptions=array());?>
                        </td>
                    </tr>
                    <tr>
                        <td><?php echo $form->labelEx($model,'pay_time');?></td>
                        <td>
                            <?php echo $form->textField($model,'pay_time',array('class'=>'input-text'));?>
                            <?php echo $form->error($model,'pay_time',$htmlOptions=array());?>
                        </td>
                    </tr>
                    <tr>
                        <td><?php echo $form->labelEx($model,'delivery_time');?></td>
                        <td>
                            <?php echo $form->textField($model,'delivery_time',array('class'=>'input-text'));?>
                            <?php echo $form->error($model,'delivery_time',$htmlOptions=array());?>
                        </td>
                    </tr>
                    <tr>
                        <td><?php echo $form->labelEx($model,'manager');?></td>
                        <td>
                            <?php echo $form->textField($model,'manager',array('class'=>'input-text'));?>
                            <?php echo $form->error($model,'manager',$htmlOptions=array());?>
                        </td>
                    </tr>
                </table>
                <div class="mt15">
                    <table>
                        <tr class="table-title">
                            <td colspan="2">客户信息</td>
                        </tr>
                        <tr>
                            <td width="15%"><?php echo $form->labelEx($model,'client_name');?></td>
                            <td width="85%">
                                <?php echo $form->textField($model,'client_name',array('class' => 'input-text'));?>
                                <?php echo $form->error($model,'client_name',$htmlOptions=array());?>
                            </td>
                        </tr>

                        <tr>
                            <td><?php echo $form->labelEx($model, 'client_phone'); ?></td>
                            <td>
                                <?php echo $form->textField($model, 'client_phone', array('class' => 'input-text')); ?>
                                <?php echo $form->error($model, 'client_phone', $htmlOptions = array()); ?>
                            </td>
                        </tr>

                        <tr>
                            <td><?php echo $form->labelEx($model, 'client_email'); ?></td>
                            <td>
                                <?php echo $form->textField($model, 'client_email', array('class' => 'input-text')); ?>
                                <?php echo $form->error($model, 'client_email', $htmlOptions = array()); ?>
                            </td>
                        </tr>
                    </table>
                </div>
            </div><!--box-detail-bd end-->
        </div><!--box-detail-bd end-->
        <div class="box-detail-submit">
            <button onclick="submitType='baocun'" class="btn btn-blue" type="submit">保存</button>
            <button class="btn" type="button" onclick="we.back();">取消</button>
        </div>
        <?php $this->endWidget();?>
    </div><!--box-detail end-->
</div><!--box end-->