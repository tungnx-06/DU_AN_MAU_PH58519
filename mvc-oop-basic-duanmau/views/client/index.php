<?php
 require_once 'header.php';
 ?>
 
<section id="slide">
    <img src="views/client/assets/images/slide.jpg" />
</section>
<section>
    <h2> Danh sach san pham</h2>
    <div class="grid gird-cols-4">
        <?php 
            foreach($products as $key =>$value){
                extract($value);
                include 'paths/product_item.php';
            }

        ?>
    </div>
</section>
 <?php
 require_once 'footer.php';
?>