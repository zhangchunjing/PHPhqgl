<div class="box">
    <div class="box-title c"><h1><i class="fa fa-table"></i>汽车信息</h1><span class="back"><a class="btn" href="javascript:;" onclick="we.back();"><i class="fa fa-reply"></i>返回</a></span></div><!--box-title end-->
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
                            <td  width="15%"><?php echo $form->labelEx($model, 'car_owner');?></td>
                            <td width="85%">
                                <?php echo $form->textField($model, 'car_owner', array('class' => 'input-text'));?>
                                <?php echo $form->error($model, 'car_owner', $htmlOptions = array());?>
                            </td>
                        </tr>

                        <tr>
                        <td><?php echo $form->labelEx($model, 'car_brand');?></td>
                        <td>
                            <?php echo $form->textField($model, 'car_brand', array('class' => 'input-text'));?>
                            <?php echo $form->error($model, 'car_brand', $htmlOptions = array());?>
                        </td>
                    </tr>
                    <tr>
                        <td><?php echo $form->labelEx($model, 'car_color'); ?></td>
                        <td>
                            <?php echo $form->textField($model, 'car_color', array('class' => 'input-text')); ?>
                            <?php echo $form->error($model, 'car_color', $htmlOptions = array()); ?>
                        </td>
                    </tr>
                    <tr>
                        <td><?php echo $form->labelEx($model, 'car_number'); ?></td>
                        <td>
                            <?php echo $form->textField($model, 'car_number', array('class' => 'input-text')); ?>
                            <?php echo $form->error($model, 'car_number', $htmlOptions = array()); ?>
                        </td>
                    </tr>
                    <tr>
                        <td><?php echo $form->labelEx($model, 'parking_number'); ?></td>
                        <td>
                            <?php echo $form->textField($model, 'parking_number', array('class' => 'input-text')); ?>
                            <?php echo $form->error($model, 'parking_number', $htmlOptions = array()); ?>
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
