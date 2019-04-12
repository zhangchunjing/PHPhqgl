<div class="box">
    <div class="box-title c"><h1><i class="fa fa-table"></i>订单信息</h1><span class="back"><a class="btn" href="javascript:;" onclick="we.back();"><i class="fa fa-reply"></i>返回</a></span></div><!--box-title end-->
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
                        <td colspan="2">婚礼资料填写</td>
                    </tr>
                    <tr>
                        <td  width="15%"><?php echo $form->labelEx($model, 'order_date'); ?></td>
                        <td width="85%">
                            <?php echo $form->textField($model, 'order_date', array('class' => 'input-text')); ?>
                            <?php echo $form->error($model, 'order_date', $htmlOptions = array()); ?>
                        </td>
                    </tr>
                    <tr>
                        <td  width="15%"><?php echo $form->labelEx($model, 'wedding_date'); ?></td>
                        <td width="85%">
                            <?php echo $form->textField($model, 'wedding_date', array('class' => 'input-text')); ?>
                            <?php echo $form->error($model, 'wedding_date', $htmlOptions = array()); ?>
                        </td>
                    </tr>
                    <tr>
                        <td  width="15%"><?php echo $form->labelEx($model, 'hold_time'); ?></td>
                        <td width="85%">
                            <?php echo $form->textField($model, 'hold_time', array('class' => 'input-text')); ?>
                            <?php echo $form->error($model, 'hold_time', $htmlOptions = array()); ?>
                        </td>
                    </tr>
                    <tr>
                        <td  width="15%"><?php echo $form->labelEx($model, 'brideg_address'); ?></td>
                        <td width="85%">
                            <?php echo $form->textField($model, 'brideg_address', array('class' => 'input-text')); ?>
                            <?php echo $form->error($model, 'brideg_address', $htmlOptions = array()); ?>
                        </td>
                    </tr>
                    <tr>
                        <td  width="15%"><?php echo $form->labelEx($model, 'new_house_address'); ?></td>
                        <td width="85%">
                            <?php echo $form->textField($model, 'new_house_address', array('class' => 'input-text')); ?>
                            <?php echo $form->error($model, 'new_house_address', $htmlOptions = array()); ?>
                        </td>
                    </tr>
                    <tr>
                        <td  width="15%"><?php echo $form->labelEx($model, 'hotel_address'); ?></td>
                        <td width="85%">
                            <?php echo $form->textField($model, 'hotel_address', array('class' => 'input-text')); ?>
                            <?php echo $form->error($model, 'hotel_address', $htmlOptions = array()); ?>
                        </td>
                    </tr>
                </table>

                <div class="mt15">
                    <table>
                        <tr class="table-title">
                            <td colspan="2">人员资料填写</td>
                        </tr>
                        <tr>
                            <td  width="15%"><?php echo $form->labelEx($model, 'bridegroom_name'); ?></td>
                            <td width="85%">
                                <?php echo $form->textField($model, 'bridegroom_name', array('class' => 'input-text')); ?>
                                <?php echo $form->error($model, 'bridegroom_name', $htmlOptions = array()); ?>
                            </td>
                        </tr>
                        <tr>
                            <td><?php echo $form->labelEx($model, 'bridegroom_phone'); ?></td>
                            <td>
                                <?php echo $form->textField($model, 'bridegroom_phone', array('class' => 'input-text')); ?>
                                <?php echo $form->error($model, 'bridegroom_phone', $htmlOptions = array()); ?>
                            </td>
                        </tr>
                        <tr>
                            <td><?php echo $form->labelEx($model, 'brideg_name'); ?></td>
                            <td>
                                <?php echo $form->textField($model, 'brideg_name', array('class' => 'input-text')); ?>
                                <?php echo $form->error($model, 'brideg_name', $htmlOptions = array()); ?>
                            </td>
                        </tr>

                        <tr>
                            <td><?php echo $form->labelEx($model, 'brideg_phone'); ?></td>
                            <td>
                                <?php echo $form->dropDownList($model, 'brideg_phone', array('class' => 'input-text')); ?>
                                <?php echo $form->error($model, 'brideg_phone', $htmlOptions = array()); ?>
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
