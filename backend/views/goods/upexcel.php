<?php
use yii\widgets\ActiveForm;

$this->title = '批量导入';
$this->params['breadcrumbs'][] = ['label' => '商品列表', 'url' => ['index']];
?>
<h1>批量导入</h1>
<?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]) ?>

    <ul class="ulColumn2">
        <li>
            <?php
            echo $form->field($model, 'channel_id')->dropDownList($channellist, ['prompt'=>'默认渠道','class'=>'select'])
            ?>
        </li>
        <li>
            <?php
            echo $form->field($model, 'cat_id')->dropDownList($listData, ['prompt'=>'请选择','class'=>'select'])
            ?>
        </li>
        <li>
            <label class="uploadImg">
                <?= $form->field($model, 'filename')->fileInput(['class'=>'uploadImg'])->label(false) ?>
                <span>上传excel文件</span>
            </label>
        </li>
        <li>
            <span class="item_name" style="width:120px;"></span>
            <input type="submit" class="link_btn"/>
        </li>
    </ul>

<?php ActiveForm::end() ?>