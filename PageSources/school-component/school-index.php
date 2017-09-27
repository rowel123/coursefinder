<!DOCTYPE html>
<html lang="en">

    <?php include('header.php');
    include('header-check.php'); ?>

<body id="page-top">

    <header>
<style type="text/css">

  .btn:hover{
      background-color:#F05F40;
  }
</style>
<?php 
   $con=mysqli_connect("localhost","root","","coursefinderdb");

     $sql = mysqli_query($con,"SELECT * FROM tbl_schools where school_id='$_SESSION[school_id]'");
     while($row=mysqli_fetch_array($sql)){


?>
        <div class="header-content" style="top:250px;">
            <div class="header-content-inner">
                <h1 id="homeHeading">School Admin</h1>
                <hr>
                <p><?php echo $_SESSION['school_name']; ?></p>
                
<form action="" method="POST">
<div class="form-group">
  <label for="pwd" style="float:left;">Name:</label>
  <input type="text" name="name" class="form-control" id="pwd" value="<?php echo $row['school_name']; ?>">
</div> 
<div class="form-group">
  <label for="phne" style="float:left;">Address:</label>
  <input type="text" name="address" class="form-control" id="phne"  value="<?php echo $row['address']; ?>">
</div> 
<div class="form-group">
  <label for="phne" style="float:left;">Number:</label>
  <input type="number" name="contact_number" class="form-control" id="phne"  value="<?php echo $row['phone']; ?>">
</div> 
<div class="form-group">
  <label for="phne" style="float:left;">Details:</label>
  <input type="text" name="details" class="form-control" id="phne"  value="<?php echo $row['details']; ?>">
</div> 

  <button type="submit" class="btn btn-default" name="addSchoolDetails">Update Information</button>
</form>


  <?php
    }


  ?>



  







            </div>
        </div>
    </header>






    <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Courses</h2>
                    <hr class="primary">
                </div>
            </div>
        </div>
        <div class="container">
        <table class="table">
          <tr>
           <th> Course Name</th>
             <th> Alias</th>
               <th> Priority</th>
               <th> Actions</th>
          </tr>
       <?php $fetchCourses = mysqli_query($con,"SELECT * FROM tbl_courses inner join tbl_schools on 
                 tbl_courses.school_id=tbl_schools.school_id where school_name='$_SESSION[school_name]'"); 
                        while($row2 = mysqli_fetch_array($fetchCourses)) {
                     ?>
                     <tr> 
                      <td><a href="school-assesment.php">  <?php echo $row2['name']; ?> </a> </td>
                      <td>  <?php echo $row2['name_alias']; ?>  </td>
                      <td>  <?php echo $row2['priority']; ?> </td>
                      <td> <a href="editCourse.php?id=<?php echo $row2['course_id']; ?>" style="margin-right:5px;">Edit</a> <a href="deleteCourse.php?id=<?php echo $row2['course_id']; ?>">Delete</a> </td>
                     </tr>
                    
                
     
                    <?php  } ?>

      </table>
        </div>
    </section>


</body>

</html>
