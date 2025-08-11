<?php 
require_once 'header.php';
?>
<div class="grid-main grid">
    <aside>
    <?php
    require_once 'sidebar.php';
    ?>
    </aside>
    <main>
        <h1><?= $title ?></h1>
        <table border="1">
            <thead>
                <tr>
                    <th>STT</th>
                    <th>Ten danh muc</th>
                    <th>Loai danh muc</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($result as $key => $value) : ?>
                        <?php $type = ($value['name'] == 0)?'Blog':'Sanpham'; ?>
                    <tr>
                        <td><?= $key +1 ?></td>
                        <td><?= $value['name'] ?> </td>
                        <td><?= $type ?></td>
                        <td>
                            <a href="">Sua</a>
                            <a href="?mode=admin&act=delete&id=<?= $value['id'] ?>" onclick="return confirm('Bạn có chắc chắn muốn xóa không?')">Xoa</a>
                        </td>
                    </tr>
                <?php endforeach ?>

            </tbody>
        </table>
    </main>
</div>
<?php
require_once 'footer.php';
?>