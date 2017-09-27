<?php 
session_start();

$con=mysqli_connect("localhost","root","","coursefinderdb");

$sql = "DELETE FROM tbl_courses
WHERE course_id ='$_GET[id]'";




   if (mysqli_query($con, $sql)) {
    header("location: school-index.php#section");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($con);
}

?>