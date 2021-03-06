<?php
/**
 *
 * author Cary
 * contact QQ : 373889161($S$-memory)
 *
 */
use yii\helpers\Html;
use yii\widgets\LinkPager;

$this->title='导航分类';

?>

<h1>导航分类</h1>

<?= Html::a('添加分类',['addsort'],['class'=>'link_btn']) ?>

    <table class="table">
        <tr>
            <th>ID</th>
            <th>分类名</th>
            <th>显示</th>
            <th>排序</th>
            <th>是否首页显示</th>
            <th>操作</th>
        </tr>
        <?php foreach ($countries as $navisort): ?>
            <tr>
                <td ><?= $navisort->id ?></td>
                <td><?= $navisort->name ?></td>
                <td id="<?=$navisort->id?>" class="number" style="cursor: pointer;"><?= $navisort->number ?></td>
                <td id="<?=$navisort->id?>" class="sort" style="cursor: pointer;"><?= $navisort->sort_id ?></td>
                <td id=<?=$navisort->id?>"" class="status" style="cursor: pointer;"><?= $navisort->status == 1 ? '有效':'无效' ?></td>
                <td>
                    <a href="/navigation/updata?id=<?= $navisort->id ?>"><span class="inner_btn">编辑</span></a>
                    <a href="/navigation/delete?id=<?= $navisort->id ?>" data-confirm="您确定要删除此项吗？"><span class="inner_btn">删除</span></a>
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
