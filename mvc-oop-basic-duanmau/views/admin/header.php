<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="views/admin/style.css" type="text/css">
</head>
<style>
    /* Reset mặc định */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: Arial, sans-serif;
    background-color: #f5f6fa;
    color: #333;
}

/* ===== HEADER ===== */
header {
    background-color: #2c3e50;
    color: white;
    padding: 15px 20px;
    box-shadow: 0 2px 5px rgba(0,0,0,0.1);
}

header .flex {
    display: flex;
    justify-content: space-between;
    align-items: center;
}

header a {
    color: white;
    text-decoration: none;
    font-weight: bold;
    font-size: 18px;
}

header a:hover {
    color: #1abc9c;
}

/* ===== LAYOUT ===== */
.container {
    display: flex;
    flex-direction: row-reverse; /* Đảo vị trí: sidebar -> bên phải */
    min-height: calc(100vh - 60px);

}

/* ===== SIDEBAR ===== */
aside {
    width: 240px;
    background-color: #34495e;
    padding: 20px 0;
}

aside ul {
    list-style: none;
}

aside ul li {
    padding: 8px 20px;
}

aside ul li > a {
    color: white;
    text-decoration: none;
    display: block;
    padding: 10px;
    border-radius: 4px;
    transition: background 0.3s ease;
}

aside ul li > a:hover {
    background-color: #1abc9c;
}

aside ul li ul {
    padding-left: 15px;
    margin-top: 5px;
}

aside ul li ul li a {
    font-size: 14px;
    color: #ecf0f1;
}

aside ul li ul li a:hover {
    background-color: #16a085;
}

/* ===== MAIN CONTENT ===== */
main {
    flex: 1;
    padding: 20px;
    background-color: #fff;
}

main h1 {
    margin-bottom: 15px;
    font-size: 22px;
    color: #2c3e50;
}

main p {
    font-size: 16px;
    color: #555;
}

/* ===== TABLE ===== */
table {
    width: 100%;
    border-collapse: collapse;
    margin-top: 15px;
    background: white;
    box-shadow: 0 0 5px rgba(0,0,0,0.05);
}

th, td {
    border: 1px solid #ddd;
    padding: 10px;
    text-align: center;
}

th {
    background-color: #1abc9c;
    color: white;
}

tr:nth-child(even) {
    background-color: #f9f9f9;
}

/* ===== FORM ===== */
form {
    margin-top: 20px;
    background: #fff;
    padding: 15px;
    border-radius: 6px;
    box-shadow: 0 0 5px rgba(0,0,0,0.05);
}

input[type="text"], select {
    padding: 8px;
    margin-right: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
}

button {
    padding: 8px 15px;
    background-color: #1abc9c;
    border: none;
    color: white;
    border-radius: 4px;
    cursor: pointer;
    transition: 0.3s;
}

button:hover {
    background-color: #16a085;
}
</style>
<body>
    <header>
        <div class="flex">
            <div class="logo">
                <a href="/">ADMIN PANEL</a>
            </div>
            <nav>
                <ul class="flex">
                    <li>
                        <a href="#">HELLO ADMIN</a>
                    </li>
                    <li>
                        <a href="?act=logout" onclick="return confirm('Bạn có chắc chắn muốn đăng xuất không?')">Logout</a>
                    </li>
                </ul>
            </nav>
        </div>
    </header>
