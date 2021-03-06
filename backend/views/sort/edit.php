<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Goods */

$this->title = '编辑分类';

?>
<?=Html::cssFile(['@web/css/style.css'])?>
<h1><?= Html::a('返回列表',['index'],['class'=>'link_btn'])?></h1>
<div class="admin-create">
    <div class="admin-form">
        <?php $form = ActiveForm::begin(); ?>
            <div class="nav-1 lab">
                <?= $form->field($model, 'sort_name')->textInput() ?>
            </div>
            <div class="nav-3 lab">
                <?php echo $form->field($model, 'pid')->dropDownList($listData,['prompt'=>'顶级分类','style'=>'width:120px']) ?>
            </div>
            <div class="nav-2 lab">
                <?= $form->field($model, 'keywords')->textInput(['placeholder'=>Yii::t('app','关键字')]) ?>
            </div>
            <div class="nav-4 lab">
                <?= $form->field($model, 'description')->textarea(['rows'=>3,'placeholder'=>Yii::t('app','分类描述')]) ?>
            </div>
            <div class="nav-1 lab">
                <?= $form->field($model, 'order')->textInput(['value'=>Yii::t('app','50')]) ?>
            </div>
            <div class="nav-3 lab">
                <?= $form->field($model, 'is_nav')->radioList(['0'=>'隐藏','1'=>'显示']) ?>
            </div>
            <div class="nav-3 lab">
                <?= $form->field($model, 'is_show')->radioList(['0'=>'隐藏','1'=>'显示']) ?>
            </div>
            <div class="form-group">
                <?= Html::submitButton('提交', ['class' => 'btn btn-primary']) ?>
            </div>
        <?php ActiveForm::end(); ?>

    </div>

</div>
