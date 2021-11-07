<?php

//add_comment.php

$conn = mysqli_connect("localhost","root","","food_and_health");

$kosong = '';
$comment_name = '';
$comment_content = '';
$blog_name = '';


if(empty($_POST["comment_name"]))
{
 $kosong = "1";
}
else
{
 $comment_name = $_POST["comment_name"];
}

if(empty($_POST["comment_content"]))
{
 $kosong = "1";
}
else
{
 $comment_content = $_POST["comment_content"];
}

if($kosong == '')
{
 $query = "INSERT INTO tbl_comment (parent_comment_id, comment, comment_sender_name, blog_name) 
 VALUES (?, ?, ?, ?)";
 $statement = $conn->prepare($query);
 $statement->bind_param("ssss", $parent_comment_id, $comment, $comment_sender_name, $blog_name);

$parent_comment_id = $_POST["comment_id"];
$comment = $comment_content;
$comment_sender_name = $comment_name;
$blog_name = $_POST["blog_name"];
$statement->execute();

}

$data = array('kosong1'  => $kosong);

echo json_encode($data);




?>