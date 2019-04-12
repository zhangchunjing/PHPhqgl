<div class="box">
    <div class="box-title c"><h1><i class="fa fa-table"></i>服装信息</h1><span class="back"><a class="btn" href="javascript:;" onclick="we.back();"><i class="fa fa-reply"></i>返回</a></span></div><!--box-title end-->
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
                        <td colspan="2">信息填写</td>
                    </tr>
                    <tr>
                        <td  width="15%"><?php echo $form->labelEx($model, 'clothes_code'); ?></td>
                        <td width="85%">
                            <?php echo $form->textField($model, 'clothes_code', array('class' => 'input-text')); ?>
                            <?php echo $form->error($model, 'clothes_code', $htmlOptions = array()); ?>
                        </td>
                    </tr>
                    <tr>
                        <td width="30%"><?php echo $form->labelEx($model, 'clothes_type'); ?></td>
                        <td width="30%">
                            <?php echo $form->dropDownList($model, 'clothes_type', array('新郎服'=>'新郎服','新娘服'=>'新娘服','伴郎服'=>'伴郎服','伴娘服'=>'伴娘服'),
                                array('prompt'=>'请选择')); ?>
                            <?php echo $form->error($model, 'clothes_type', $htmlOptions = array()); ?>
                        </td>
                    </tr>
                    <tr>
                        <td  width="15%"><?php echo $form->labelEx($model, 'clothes_cost'); ?></td>
                        <td width="85%">
                            <?php echo $form->textField($model, 'clothes_cost', array('class' => 'input-text')); ?>
                            <?php echo $form->error($model, 'clothes_cost', $htmlOptions = array()); ?>
                        </td>
                    </tr>
                    <tr>
                        <td  width="15%"><?php echo $form->labelEx($model, 'clothes_num'); ?></td>
                        <td width="85%">
                            <?php echo $form->textField($model, 'clothes_num', array('class' => 'input-text')); ?>
                            <?php echo $form->error($model, 'clothes_num', $htmlOptions = array()); ?>
                        </td>
                    </tr>
                    <tr>
                        <td  width="15%"><?php echo $form->labelEx($model, 'clothes_rent'); ?></td>
                        <td width="85%">
                            <?php echo $form->textField($model, 'clothes_rent', array('class' => 'input-text')); ?>
                            <?php echo $form->error($model, 'clothes_rent', $htmlOptions = array()); ?>
                        </td>
                    </tr>
                </table>




            </div><!--box-detail-tab-item end   style="display:block;"-->

        </div><!--box-detail-bd end-->

        <div class="box-detail-submit"><button onclick="submitType='baocun'" class="btn btn-blue" type="submit">保存</button><button class="btn" type="button" onclick="we.back();">取消</button></div>

        <?php $this->endWidget(); ?>
    </div><!--box-detail end-->
</div><!--box end-->
