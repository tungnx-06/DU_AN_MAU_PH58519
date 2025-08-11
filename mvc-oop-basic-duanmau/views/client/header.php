<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link rel="stylesheet" href="views/client/style.css" type="text/css"> -->
     <style>
        * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: Arial, Helvetica, sans-serif;
}

body {
    background-color: #f4f4f4;
    color: #333;
    line-height: 1.5;
}

/* Container chung */
.container {
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 15px;
}

/* Flex tiện dụng */
.flex {
    display: flex;
    align-items: center;
    justify-content: space-between;
}

/* Header */
header {
    background-color: #222;
    color: #fff;
    padding: 15px 0;
}

#logo {
    font-size: 22px;
    font-weight: bold;
    color: #fff;
}

nav ul {
    list-style: none;
    display: flex;
    gap: 20px;
}

nav ul li a {
    color: #fff;
    text-decoration: none;
    font-weight: 500;
    transition: color 0.3s;
}

nav ul li a:hover {
    color: #ff9800;
}

/* Footer */
footer {
    background-color: #222;
    color: #fff;
    padding: 15px 0;
    margin-top: 30px;
}

footer .col {
    flex: 1;
    text-align: center;
}

/* Slide */
#slide img {
    width: 100%;
    height: auto;
    display: block;
}

/* Form đăng ký */
.login {
    background: #fff;
    max-width: 400px;
    margin: 40px auto;
    padding: 30px;
    border-radius: 10px;
    box-shadow: 0 4px 15px rgba(0,0,0,0.1);
}

.login h1 {
    text-align: center;
    margin-bottom: 20px;
    color: #333;
}

.login input {
    width: 100%;
    padding: 10px 12px;
    margin-bottom: 15px;
    border: 1px solid #ddd;
    border-radius: 5px;
    font-size: 14px;
    transition: 0.3s;
}

.login input:focus {
    border-color: #ff9800;
    outline: none;
    box-shadow: 0 0 5px rgba(255,152,0,0.4);
}

.login button {
    width: 100%;
    padding: 10px;
    background-color: #ff9800;
    color: #fff;
    font-size: 16px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background 0.3s;
}

.login button:hover {
    background-color: #e68900;
}
     </style>
</head>
<body>
    <header>
        <div class="container flex">
        <div id="logo">
            NGoxuantung
        </div>
        <nav>
            <ul class="flex">
                <li>
                    <a href="#">Trang chủ</a>
                </li>
                <li>
                    <a href="#">Sản phẩm</a>
                </li>
                <li>
                    <a href="#">Tin tức</a>
                </li>
                <li>
                    <a href="#">Giới thiệu</a>
                </li>
                <li>
                    <a href="#">Liên hệ</a>
                </li>
                <li>
                    <a href="?act=logout">Dang xuat</a>
                </li>
            </ul>
        </nav>
        </div>
    </header>
    
