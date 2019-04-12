<div class="box">
    <div class="box-title c"><h1><i class="fa fa-table"></i>道具信息</h1><span class="back"><a class="btn" href="javascript:;" onclick="we.back();"><i class="fa fa-reply"></i>返回</a></span></div><!--box-title end-->
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
                        <td colspan="2">道具</td>
                    </tr>
                    <tr>
                        <td width="30%"><?php echo $form->labelEx($model, 'prop_type'); ?></td>
                        <td width="30%">
                            <?php echo $form->textField($model, 'prop_type', array('class' => 'input-text')); ?>
                            <?php echo $form->error($model, 'prop_type', $htmlOptions = array()); ?>
                        </td>
                    </tr>
                    <tr>
                        <td><?php echo $form->labelEx($model, 'prop_name'); ?></td>
                        <td>
                            <?php echo $form->textField($model, 'prop_name', array('class' => 'input-text')); ?>
                            <?php echo $form->error($model, 'prop_name', $htmlOptions = array()); ?>
                        </td>
                    </tr>
                    <tr>
                        <td  width="15%"><?php echo $form->labelEx($model, 'prop_size'); ?></td>
                        <td width="85%">
                            <?php echo $form->textField($model, 'prop_size', array('class' => 'input-text')); ?>
                            <?php echo $form->error($model, 'prop_size', $htmlOptions = array()); ?>
                        </td>
                    </tr>
                </table>
                <div class="mt15">
                    <table>
                        <tr class="table-title">
                            <td colspan="2">采购信息</td>
                        </tr>

                        <tr>
                            <td><?php echo $form->labelEx($model, 'purchase_date'); ?></td>
                            <td>
                                <?php echo $form->textField($model, 'purchase_date', array('class' => 'input-text')); ?>
                                <?php echo $form->error($model, 'purchase_date', $htmlOptions = array()); ?>
                            </td>
                        </tr>
                        <tr>
                            <td><?php echo $form->labelEx($model, 'unit_price'); ?></td>
                            <td>
                                <?php echo $form->textField($model, 'unit_price', array('class' => 'input-text')); ?>
                                <?php echo $form->error($model, 'unit_price', $htmlOptions = array()); ?>
                            </td>
                        </tr>

                        <tr>
                            <td><?php echo $form->labelEx($model, 'count'); ?></td>
                            <td>
                                <?php echo $form->textField($model, 'count', array('class' => 'input-text')); ?>
                                <?php echo $form->error($model, 'count', $htmlOptions = array()); ?>
                            </td>
                        </tr>
                        <tr>
                            <td><?php echo $form->labelEx($model, 'true_price'); ?></td>
                            <td>
                                <?php echo $form->textField($model, 'true_price', array('class' => 'input-text')); ?>
                                <?php echo $form->error($model, 'true_price', $htmlOptions = array()); ?>
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
