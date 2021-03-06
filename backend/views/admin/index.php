<?php
/**
 *
 * author Cary
 * contact QQ : 373889161($S$-memory)
 *
 */
use yii\helpers\Html;
use yii\widgets\LinkPager;

$this->title = '管理员列表';
?>

<div class="admin-index">

    <p>
        <?= Html::a('添加管理员', ['create'], ['class' => 'link_btn']) ?>
    </p>
    <table class="table">
        <tr>
            <th>ID</th>
            <th>用户名</th>
            <th>邮箱地址</th>
            <th>是否有效</th>
            <th>操作</th>
        </tr>
        <?php foreach ($countries as $admin): ?>
            <tr style="text-align: center;">
                <td style="width:65px;"><?= $admin->id ?></td>
                <td><?= $admin->username ?></td>
                <td><?= $admin->email ?></td>
                <td><?php if($admin->status){echo '无效';}else{echo '有效';} ?></td>
                <td>
                    <a href="/admin/update?id=<?= $admin->id ?>" class="inner_btn">编辑</a>
                    <a href="/admin/delete?id=<?= $admin->id ?>" data-confirm="您确定要删除此项吗？" class="inner_btn">删除</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</div>
<?= LinkPager::widget([
    'pagination' => $pagination,
    'firstPageLabel'=>"首页",
    'prevPageLabel'=>'上一页',
    'nextPageLabel'=>'下一页',
    'lastPageLabel'=>'末页',])
?>