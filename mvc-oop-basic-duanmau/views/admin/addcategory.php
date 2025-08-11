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
        <form action="?mode=admin&act=addcategory" method="POST">
            <input type="text" name="name" placeholder="ten danh muc">
            <label for="">Loai danh muc</label>
            <select name="type" id="">
                <option value="0">Blog</option>
                <option value="1">San pham</option>
            </select>
            <button type="submit">them moi</button>
        </form>
    </main>
</div>
<?php
require_once 'footer.php';
?>