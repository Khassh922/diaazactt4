<?php
$conn = mysqli_connect("localhost", "root", "", "diaz_db");
if (!$conn){
    die("connection faild");
}
$id = $_POST['id'];
$password = $_POST['password'];

$sql = "SELECT * FROM diaz WHERE id='$id' AND password='$password'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0){
    echo "success =)";
    exit();
} else{
    echo "login failed";
}

mysqli_close($conn);
?>
