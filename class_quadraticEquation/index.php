<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<form action="" method="post">
    <table>
        <tr>
            <td><h3><input type="text" name="a" placeholder="a" value="<?php echo $_POST['a']; ?>"> x<sup>2</sup>+</h3></td>
            <td><h3><input type="text" name="b" placeholder="b" value="<?php echo $_POST['b']; ?>"> x+</h3></td>
            <td><h3><input type="text" name="c" placeholder="c" value="<?php echo $_POST['c']; ?>"> =0</h3></td>
        </tr>
        <tr>
            <td>
                <button type="submit">Tìm Nghiệm</button>
            </td>
        </tr>
    </table>
    <h3><span><?php include "class_quadraticEquation.php"?></span></h3>
</form>
</body>
</html>