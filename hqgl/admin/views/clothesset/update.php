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
                        <td colspan="2">服装与租金设置</td>
                    </tr>
                    <tr>
                        <td><?php echo $form->labelEx($model, 'clerk_type'); ?></td>
                        <td>
                            <?php echo $form->textField($model, 'clerk_type', array('class' => 'input-text')); ?>
                            <?php echo $form->error($model, 'clerk_type', $htmlOptions = array()); ?>
                        </td>
                    </tr>
                    <tr>
                        <td><?php echo $form->labelEx($model, 'clerk_rent'); ?></td>
                        <td>
                            <?php echo $form->textField($model, 'clerk_rent', array('class' => 'input-text')); ?>
                            <?php echo $form->error($model, 'clerk_rent', $htmlOptions = array()); ?>
                        </td>
                    </tr>

                </table>
                <div class="mt15">
                </div>

            </div><!--box-detail-tab-item end   style="display:block;"-->

        </div><!--box-detail-bd end-->

        <div class="box-detail-submit"><button onclick="submitType='baocun'" class="btn btn-blue" type="submit">保存</button><button class="btn" type="button" onclick="we.back();">取消</button></div>

        <?php $this->endWidget(); ?>
    </div><!--box-detail end-->
</div><!--box end-->
