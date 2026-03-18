<?php
include ("db.php");

if(isset($_POST['contentId'])) // ✅ only run if movie was actually sent
{
    $user_id = $_SESSION['id'];
    $contentId=mysqli_real_escape_string($conn, $_POST['contentId']);
    $movie   = mysqli_real_escape_string($conn, $_POST['name']);
    $type   = mysqli_real_escape_string($conn, $_POST['type']);

    $query  = "SELECT * FROM favorites WHERE user_id = '$user_id' AND contentid = '$contentId' AND type = '$type' ";
    $result = mysqli_query($conn, $query);

    if(mysqli_num_rows($result) > 0) 
    {
        $query = "DELETE FROM favorites WHERE user_id = '$user_id' AND contentid = '$contentId' AND type = '$type'";
        mysqli_query($conn, $query);
        echo json_encode(['status' => 'removed']);
    } 
    else 
    {
        $query = "INSERT INTO favorites (user_id, contentid,type) VALUES ('$user_id', '$contentId', '$type')";
        mysqli_query($conn, $query);
        echo json_encode(['status' => 'added']);
    }
}
?>