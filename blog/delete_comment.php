<?php 

$conn = mysqli_connect("localhost","root","","food_and_health");

if ($_POST["trigger"]==1){
    $target = $_POST["id"];
    $delete_comment = "DELETE FROM tbl_comment WHERE comment_id='$target' OR parent_comment_id='$target'";
    $conn->query($delete_comment);
    unset($_POST["trigger"]);
}


?>