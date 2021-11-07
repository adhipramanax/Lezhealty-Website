<?php

$connect = mysqli_connect("localhost","root","","food_and_health");


$username = $_POST["username"];
$status = $_POST["status"];
$blog_name = $_POST["blog_name"];

echo $username;

$cari_username = "SELECT * FROM bookmark WHERE username = '$username'";
$cari_blog_name = "SELECT * FROM bookmark WHERE blog_name = '$blog_name'";
$result1 = $connect->query($cari_username);
$result2 = $connect->query($cari_blog_name);


//cek apakah username pernah ada di table
if(mysqli_num_rows($result1) == 0 || mysqli_num_rows($result2) == 0 )
{
 $query = "INSERT INTO bookmark (username, blog_name, status) VALUES (?, ?, ?)";
 $statement = $connect->prepare($query);
 $statement->bind_param("sss", $username, $blog_name, $status);

 $username = $_POST["username"];
 $blog_name = $_POST["blog_name"];
 $status = $_POST["status"];
 $statement->execute();
}
else
{
    $update = "UPDATE bookmark SET status='$status' WHERE username='$username' AND blog_name = '$blog_name'";
    $connect->query($update);
      

}

?>