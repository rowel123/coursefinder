<?php
 if(isset($_POST['addSchoolDetails'])){
   $name = $_POST['name'];
   $address = $_POST['address'];
   $contact_number = $_POST['contact_number']; 
   $details = $_POST['details'];
$sql = "UPDATE tbl_schools set school_name='$name',address='$address',phone='$contact_number',details='$details'";

   if (mysqli_query($con, $sql)) {
    header("Refresh:0");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($con);
}
}

 if(isset($_POST['updateCourse'])){
   $name = $_POST['name'];
   $name_alias = $_POST['name_alias'];
   $priority = $_POST['priority']; 

$sql = "UPDATE tbl_courses set name='$name',name_alias='$name_alias',priority='$priority' where course_id='$_GET[id]'";

   if (mysqli_query($con, $sql)) {
    header("Refresh:0");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($con);
}
}

if($_SESSION['logged']!=2){
    echo "<script> alert('Please log in first') </script>";
 
    header("Location: school-sign-in.php");
}

?>