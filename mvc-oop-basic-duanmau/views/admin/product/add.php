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
        <form action="?mode=admin&act=addproduct" method="POST" enctype="multipart/form-data">
            <input type="text" name="name" placeholder="ten an pham">
            <label for="">Chon danh muc</label>
            <!-- du lieu dong lay tu database -->
            <select name="category_id" id="">
                <option value="0">Chon danh muc</option>
                <?php
                    foreach($category as $key => $value){
                        echo '<option value="'.$value['id'].'">'.$value['name'].'</option>';
                    }
                ?>
            </select>
            <label for="">Anh San Pham</label>
            <input type="file" name="image">
            <label for="">Gia</label>
            <input type="number" name="price">
            <label for="">Mo ta</label>
            <textarea name="description" id=""></textarea>
            <button type="submit">them moi</button>
        </form>
    </main>
</div>
<?php
require_once __DIR__.'/../footer.php';
?>