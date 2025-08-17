<?php
 require_once 'header.php';
 ?>
 

<section class="productdetail">
    <div class="grid gird-cols-2">
        <div class="image">
            <img src="<?=$image?>" alt="">
        </div>
        <div class="info">
            <h1><?=$name?></h1>
            <p>gia: <?=$price?></p>

        </div>
    </div>
    <div class="description">
        <?=$description ?>
    </div>
</section>
 <?php
 require_once 'footer.php';
?>