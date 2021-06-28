<?php
if (isset($_POST['save'])) {

    if (empty($_POST['games'])) {
        echo "Phải chọn ít nhất một sở thích!";
    } else {
        // có thể sử dụng foreach() hoặc implode() để duyệt các phần tử trong mảng game
        // foreach ($_POST['games'] as $game) {
        //     echo $game . "<br>";
        // }
        $listGame =  implode(",", $_POST['games']);
        echo $listGame;
    }
}


?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List checkbox form</title>
</head>

<body>
    <form action="" method="POST">
        <!-- dùng mảng name để lưu trữ các sở thích, đây là một kĩ thuật nâng cao của php -->
        <h1>Sở thích</h1>
        <input type="checkbox" name="games[]" value="Đá bóng" id="daBong">
        <label for="daBong">Đá bóng</label> <br><br>

        <input type="checkbox" name="games[]" value="Cầu lông" id="cauLong">
        <label for="cauLong">Cầu lông</label> <br><br>

        <input type="checkbox" name="games[]" value="Bơi lội" id="boiLoi">
        <label for="boiLoi">Bơi lội</label> <br><br>

        <input type="submit" name="save" value="save">
    </form>
</body>

</html>