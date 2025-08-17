<?php
 require_once 'header.php';
 ?>

<main>
    <div class="container">
        <div class="login">
            <h1>dang nhap tai khoan</h1>
            <form action="?act=login" method="POST">
                <input type="text" name="username" id="" placeholder="ten tai khoan">
                <input type="password" name="password" id="" placeholder="mat khau">
                <button type="submit">Dang nhap</button>
            </form>
            <?php if(!empty($error)) echo "<p class='error-message'>$error</p>"; ?>
            <div class="register-link">
                chua co tai khoan <a href="?act=register">Dang ki ngay</a>
            </div>
        </div>
    </div>
</main>
 <?php
 require_once 'footer.php';
?>