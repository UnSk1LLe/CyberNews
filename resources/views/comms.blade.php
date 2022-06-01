<?php

$server = "localhost";
$username = "root";
$password = "";
$database = "cybernewsdb";

$conn = mysqli_connect($server, $username, $password, $database);
if(!$conn) {
    die("<script>alert('Connection Failed')</script>");
}


error_reporting(0);

if(isset($_GET['submit'])){
    $name = $_GET['name'];
    $email = $_GET['email'];
    $comment = $_GET['comment'];
    if($_FILES["image"]["error"] === 4) {
        echo "<script> alert('Image does not exist'); </script>";
    } else {
        $fileName = $_FILES["image"]["name"];
        $filesize = $_FILES["image"]["size"];
        $tmpName = $_FILES["image"]["tmp_name"];

        $validImageExtension = ['jpg', 'jpeg', 'png'];
        $imageExtension = explode('.', $fileName);
        $imageExtension = strtolower(end($imageExtension));
        /*if(!in_array($imageExtension, $validImageExtension)){
            echo "<script> alert('Invalid Image Extension'); </script>";
        } else if($filesize > 1000000) {
            echo "<script> alert('Image size is too large'); </script>";
        } else {*/
            $newImageName = uniqid();
            $newImageName .= '.' . $imageExtension;

            move_uploaded_file($tmpName, 'img/' . $newImageName);
       // }
    }

    $sql = "INSERT INTO comments (name, email, comment, image)
    VALUES ('$name', '$email', '$comment', '$newImageName')";

    $result = mysqli_query($conn, $sql);
    if($result) {
        echo "<script>alert('comment added')</script>";
    } else {
        echo "<script>alert('comment is not added')</script>";
    }
}
?>
    <!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="ST.css" rel="stylesheet" type="text/css">
</head>
<body>
<div class="background-object">

    <form action="" method="GET" style="margin-left: 20%; border-color: transparent" enctype="multipart/form-data">

        <div class="row" style="width: 100%; background-color: transparent">

            <div class="col" style="background-color: transparent; border-color: transparent">
        <div>
            <label for="name" class="description-header">Никнейм</label>
        </div>
        <div>
            <input type="text" name="name" id="name" placeholder="Введите имя" required>
        </div>
        </div>

            <div class="col" style="background-color: transparent; border-color: transparent">
        <div>
            <label for="email" class="description-header">Email</label>
        </div>
        <div>
            <input type="email" name="email" id="email" placeholder="Введите email" required>
        </div>

        </div>
            <div>
            <label for="comment" class="description-header">Комментарий</label>
            </div>

        <div>
            <textarea class="textarea" id="comment" name="comment" placeholder="Напишите комментарий" required></textarea>
        </div>
        <div>
            <button class="btn btn-info" name='submit' style="width: 25%; margin-right: 0px">Отправить</button>
                <input type="file" name="image" accept=".jpg, .jpeg, .png" value="" class="btn btn-secondary" style="height: 40px">



        </div>
            </div>
        <div class="border-line"></div>
    </form>


    <div class="">
        <?php

        $sql = "SELECT * FROM comments";
        $result = mysqli_query($conn, $sql);
        if(mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
        ?>
            <div class="container" style="align-self: center">
                <div class="row">
                    <div class="col"style="background-color: transparent; border-color: transparent">
                        <a class="avatar"><img src="user-icon.png" class="avatar"></a>
                        <a class="user-comment-text"><?php echo $row['name']; ?></a>
                    </div>
                </div>
                <p class="comment-text"><?php echo $row['comment']; ?></p>

                <div style="display: flex; flex-direction: row;">
                <button class="btn btn-primary like-btn" name='like'><img class="like-img" src="like.png"></button>
                    <p class="like-count"><?php echo $row['likes']; ?></p>
                <button class="btn btn-danger like-btn" name='dislike'><img class="like-img" src="dislike.png"></button>
                    <p class="like-count"><?php echo $row['dislikes']; ?></p>
                <p class="comment-add-info"><?php echo $row['date']; ?></p>
                    <button class="btn btn-light" name="reply" style="width: 100px; height: 40px; margin: 4px" onclick="">Ответить</button>
                </div>

                </div>
                <div class="border-line" style="width: 76%; margin-left: 12%"></div>
            <?php
            }
            }
            ?>
            </div>





    </div>
</div>
</div>
</body>


</html>
