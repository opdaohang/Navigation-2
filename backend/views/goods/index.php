<?php
/**
 *
 * author Cary
 * contact QQ : 373889161($S$-memory)
 *
 *
 */
use yii\helpers\Html;
use yii\widgets\LinkPager;

$this->title = '商品列表';

?>

<h1>商品列表<?= $name ? '---->'.$name : '';?></h1>
    <form method="get" action="index" name="form1">
        <input id="_csrf" name="_csrf" type="hidden" value="<?=Yii::$app->request->csrfToken ;?>">
        <div style="margin-top:5px;">
            <div style="width:450px;float:left;">
                <table>
                    <tr>
                        <td><input type="text" name="s" class="textbox"></td>
                        <td>
                            <select name="pid" class="select">
                                <option value="">所有分类</option>
                                <?php foreach ($nav as $item) : ?>
                                    <option value="<?= $item['id'] ;?>" ><?=$item['name'];?></option>
                                <?php endforeach ;?>
                            </select>
                        </td>
                        <td>
                            <select name="chid" class="select">
                                <option value="">--请选择商品渠道--</option>
                                <option value="0">默认渠道</option>
                                <?php foreach ($channel as $item) : ?>
                                    <option value="<?= $item->id ;?>" ><?=$item->channel_name;?></option>
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
            <div style="width:300px;float:left;">
                <table>
                    <tr>
                        <td>
                            <input type="submit" name="submit" value="删除" class="link_btn" />
                        </td>
                        <td>
                            <?= Html::a('添加商品', ['create'], ['class' => 'link_btn']) ?>
                        </td>
                        <td>
                            <?= Html::a('批量导入', ['excel'], ['class' => 'link_btn']) ?>
                        </td>
                    </tr>
                </table>
            </div>


        </div>
    <table class="table">
        <tr>
            <th><label style="cursor: pointer;"><input type="checkbox" style="display:none;" name="b">全选</label></th>
            <th>ID</th>
            <th>商品名称</th>
            <th>卖家旺旺</th>
            <th>商品价格</th>
            <th>佣金</th>
            <th>商品月销量</th>
            <th>优惠券开始时间</th>
            <th>优惠券结束时间</th>
            <th>优惠券面额</th>
            <th>状态</th>
            <th>操作</th>
        </tr>
        <?php foreach ($countries as $goods): ?>
            <tr>
                <td style="width:55px;text-align: center;"><input type="checkbox" value="<?=$goods->id;?>" style="cursor:pointer;" name="navid[]"></td>
                <td style="width:55px;"><?= $goods->id ?></td>
                <td><?= Html::sub_utf8_string($goods->goods_name,10) ?></td>
                <td><?= $goods->shop_wan ?></td>
                <td><?php echo $goods->goods_prices ?></td>
                <td><?php echo $goods->commission ?></td>
                <td><?php echo $goods->goods_sales ?></td>
                <td><?php echo $goods->coupon_start ?></td>
                <td><?php echo $goods->coupon_end ?></td>
                <td><?php echo $goods->coupon_value ?></td>
                <td><?php if($goods->is_show){echo '无效';}else{echo '有效';} ?></td>
                <td>
                    <a href="/goods/edit?id=<?= $goods->id ?>" class="inner_btn">编辑</a>
                    <a href="/goods/delete?id=<?= $goods->id ?>" data-confirm="您确定要删除此项吗？" class="inner_btn">删除</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
    </form>

<?= LinkPager::widget([
    'pagination' => $pagination,
    'firstPageLabel'=>"首页",
    'prevPageLabel'=>'上一页',
    'nextPageLabel'=>'下一页',
    'lastPageLabel'=>'末页',])
?>