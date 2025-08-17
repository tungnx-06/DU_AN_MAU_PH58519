<?php 
require_once __DIR__.'/../header.php';
?>
<div class="grid-main grid">
    <aside>
    <?php
    require_once __DIR__.'/../sidebar.php';
    ?>
    </aside>
    <main>
        <h1><?= $title ?></h1>
        <table border="1">
            <thead>
                <tr>
                    <th>STT</th>
                    <th>Ten san pham</th>
                    <th>anh</th>
                    <th>Gia</th>
                    <th>Danh muc</th>
                    <th>Mo ta</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($result as $key => $value) : ?>
                        <?php $type = ($value['name'] == 0)?'Blog':'Sanpham'; ?>
                    <tr>
                        <td><?= $key +1 ?></td>
                        <td><?= $value['name'] ?> </td>
                        <td><img src="<?= BASE_URL . $value['image'] ?>" alt="Cover Image" width="50" height="50"></td>
                        <td><?= $value['price'] ?></td>
                        <td><?= $value['category_id'] ?></td>
                        <td><?= $value['description'] ?></td>
                        <td>
                            <a href="">Sua</a>
                            <a href="?mode=admin&act=deletete&id=<?= $value['id'] ?>" onclick="return confirm('Bạn có chắc chắn muốn xóa không?')">Xoa</a>
                        </td>
                    </tr>
                <?php endforeach ?>

            </tbody>
        </table>
    </main>
</div>
<?php
require_once __DIR__.'/../footer.php';
?>