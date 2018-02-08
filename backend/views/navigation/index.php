<?php
/**
 *
 * Author      : Cary
 * Contact QQ  : 373889161($S$-memory)
 * Email       : 373889161@qq.com
 *
 */
use yii\helpers\Html;
use yii\widgets\LinkPager;

$this->title='导航列表';

?>
<?=Html::cssFile('@web/css/style.css');?>

<form method="get" action="index" name="form1">
    <input id="_csrf" name="_csrf" type="hidden" value="<?=Yii::$app->request->csrfToken ;?>">
    <div style="margin-top:5px;">
        <div style="width:300px;float:left;">
            <table>
                <tr>
                    <td><input type="text" name="s" class="textbox"></td>
                    <td>
                        <select name="pid" class="select">
                            <option value="">所有分类</option>
                            <?php foreach ($sort as $item) : ?>
                                <option value="<?= $item->id ;?>" ><?=$item->name;?></option>
                            <?php endforeach ;?>
                        </select>
                    </td>
                    <td><input type="submit" value="搜索" class="group_btn" /></td>
                </tr>
            </table>
        </div>
    </div>
</form>

<form method="post" action="denav" name="form1">
    <!---csrf 表单验证规则--->
    <input name="_csrf" type="hidden" id="_csrf" value="<?= Yii::$app->request->csrfToken ?>">
    <div style="margin-top:5px;height:30px;">
        <div style="width:200px;float:left;">
            <table>
                <tr>
                    <td>移动到</td>
                    <td>
                        <select name="pid" class="select">
                            <option value="">所有分类</option>
                            <?php foreach ($sort as $item) : ?>
                                <option value="<?= $item->id ;?>" ><?=$item->name;?></option>
                            <?php endforeach ;?>
                        </select>
                    </td>
                    <td><input type="submit" name="dqpg" value="确定" class="group_btn" /></td>
                </tr>
            </table>
        </div>
        <input type="submit" name="submit" value="删除" class="link_btn" />
        <?= Html::a('添加导航',['create'],['class'=>'link_btn'])?>
    </div>

    <table class="table">
        <tr>
            <th><label style="cursor: pointer;"><input type="checkbox" style="display:none;" name="b">全选</label></th>
            <th>ID</th>
            <th>站点名称</th>
            <th>子站名称</th>
            <th>所属分类</th>
            <th>排序</th>
            <th>是否有效</th>
            <th>操作</th>
        </tr>
        <?php $i=1; foreach ($countries as $navigation): ?>
            <tr style="text-align: center;">
                <td style="width:55px;"><input type="checkbox" value="<?=$navigation->nav_id;?>" style="cursor:pointer;" name="navid[]"></td>
                <td ><?php echo $i++ .'-->'. $navigation->nav_id ?></td>
                <td><a href="<?=$navigation->nav_url?>" target="_blank"><?= $navigation->nav_name ?></a></td>
                <td ><a href="<?=$navigation->sun_url?>" target="_blank"><?= $navigation->sun_name ?></a> </td>
                <td><?= $navigation->navisort[0]['name'] ?></td>
                <td id="<?=$navigation->nav_id;?>" class="ordy" style="cursor: pointer;"><?= $navigation->ordery ?></td>
                <td class="show" id="<?=$navigation->nav_id;?>" style="cursor:pointer;"><?php if($navigation->is_show){echo '有效';}else{echo '无效';} ?></td>
                <td>
                    <a href="/navigation/edit?id=<?= $navigation->nav_id ?>" class="inner_btn">编辑</a>
                    <a href="/navigation/del?id=<?= $navigation->nav_id ?>" data-confirm="您确定要删除此项吗？" class="inner_btn">删除</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>

    <?= LinkPager::widget([
        'pagination' => $pagination,
        'firstPageLabel'=>"首页",
        'prevPageLabel'=>'上一页',
        'nextPageLabel'=>'下一页',
        'lastPageLabel'=>'末页',])
    ?>

</form>

