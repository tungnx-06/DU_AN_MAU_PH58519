<?php
 require_once 'header.php';
 ?>

<main>
    <div class="container">
        <div class="login">
            <h1>dang ki tai khoan</h1>
            <form action="?act=register" method="POST">
                <input type="text" name="username" id="" placeholder="ten tai khoan">
                <input type="password" name="password" id="" placeholder="mat khau">
                <input type="text" name="fullname" id="" placeholder="HO va Ten">
                <input type="date" name="birth" id="" placeholder="ngay sinh">
                <button type="submit">Dang Ki</button>
            </form>
        </div>
    </div>
</main>
 <?php
 require_once 'footer.php';
?>