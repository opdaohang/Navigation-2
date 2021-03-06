<?php
/**
 *
 * author Cary
 * contact QQ : 373889161($S$-memory)
 *
 */
use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Goods */

$this->title = '添加分类';

?>
<?=Html::cssFile(['@web/css/style.css'])?>
<?= Html::a('返回列表', ['index'], ['class' => 'link_btn']) ?>
<div class="admin-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <div class="admin-form">

        <?php $form = ActiveForm::begin(); ?>
        <div class="nav-1 lab">
            <?= $form->field($model, 'cat_name')->textInput() ?>
        </div>
        <div class="nav-3 lab">
            <?php echo $form->field($model, 'parent_id')->dropDownList($listData,['prompt'=>'顶级分类','style'=>'width:auto']) ?>
        </div>
        <div class="nav-2 lab">
            <?= $form->field($model, 'keywords')->textInput() ?>
        </div>
        <div class="nav-4 lab">
            <?= $form->field($model, 'cat_desc')->textarea(['rows'=>5]) ?>
        </div>


        <div class="form-group">
            <?= Html::submitButton('提交', ['class' => 'btn btn-primary']) ?>
        </div>

        <?php ActiveForm::end(); ?>

    </div>

</div>
