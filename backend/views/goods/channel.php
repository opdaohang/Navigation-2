<?php
/**
 * Author      : Cary
 * Contact QQ  : 373889161($S$-memory)
 * Email       : 373889161@qq.com
 */
use yii\helpers\Html;

?>
<?= Html::cssFile('@web/css/style.css') ?>
<p>
    <?= Html::a('添加渠道', ['newchannel'], ['class' => 'link_btn']) ?>
</p>

<table class="table">
    <tr>
        <th>渠道名称</th>
        <th>操作</th>
    </tr>
    <tr>
    <?php foreach ($list as $key): ?>
    <tr>
        <td><?=$key->channel_name?></td>
        <td>
            <a href="/goods/edchannel?id=<?= $key->id ?>"  class="inner_btn">编辑</a>
            <a href="/goods/dech?id=<?= $key->id ?>" data-confirm="您确定要删除此项吗？" class="inner_btn">删除</a>
        </td>
    </tr>
    <?php endforeach; ?>
</table>