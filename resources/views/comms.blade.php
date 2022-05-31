<?php

$server = "localhost";
$username = "root";
$password = "";
$database = "cybernewsdb";//s

$conn = mysqli_connect($server, $username, $password, $database);
if(!$conn) {
    die("<script>alert('Connection Failed')</script>");
}

if(isset($_POST['submit'])){
    echo "<script>alert('Connection Failed')</script>";
    $name = $_POST['name'];
    $email = $_POST['email'];
    $comment = $_POST['comment'];

    $sql = "INSERT INTO comments (name, email, comment)
    VALUES ('$name', '$email', '$comment')";

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

</head>
<body>
<div>

    <form action="" method="POST">
        @csrf
        @method('POST')
        <div>
            <label for="name">Name</label>
            <input type="text" name="name" id="name" placeholder="Enter name" required>
        </div>
        <div>
            <label for="email">Email</label>
            <input type="email" name="email" id="email" placeholder="Enter email" required>
        </div>
        <div>
            <label for="comment">Comment</label>
            <textarea id="comment" name="comment" placeholder="Enter comment" required></textarea>
        </div>
        <div>
            <button name='submit'>Post</button>
        </div>
    </form>

    <div>
        <div>
            <h4>Name</h4>
            <a></a>
        </div>
    </div>
</div>
</body>


</html>
