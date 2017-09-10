<!DOCTYPE html>
<html lang="en">

    <?php include('../header/header.php'); ?>

<body id="page-top">

    <header>
<style type="text/css">
  th{
    text-align: center;
  }
</style>
        <div class="header-content" style="top:250px;">
            <div class="header-content-inner">
                <h1 id="homeHeading">Courses</h1>
                <hr>
                <p>Learning is everything!</p>
    

<label for="basic-url">Available Schools</label>

     <?php
$con=mysqli_connect("localhost","root","","coursefinderdb");

$name_alias = $_GET['course'];
       
    
  ?>
  




      <div class=""> <?php echo $name_alias ?>  <br>
     
        
            <table width="100%" class="table">
             <th> School </th>
             <th> Address</th>
             <th> Contact No. </th>
                 <?php $fetchCourses = mysqli_query($con,"SELECT * FROM tbl_courses inner join tbl_schools on 
                 tbl_courses.school_id=tbl_schools.school_id where name_alias='$name_alias'"); 
                        while($row2 = mysqli_fetch_array($fetchCourses)) {
                     ?>
                     <tr> 
                      <td><a href="school-assesment.php">  <?php echo $row2['school_name']; ?> </a> </td>
                      <td>  <?php echo $row2['address']; ?>  </td>
                      <td>  <?php echo $row2['phone']; ?> </td>
                      </tr>
                    
                
     
                    <?php  } ?>
          
            </table>
     </div>     




<?php    
       
mysqli_close($con);
?>

            </div>
        </div>
    </header>






    <!-- <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">At Your Service</h2>
                    <hr class="primary">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-diamond text-primary sr-icons"></i>
                        <h3>Sturdy Templates</h3>
                        <p class="text-muted">Our templates are updated regularly so they don't break.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-paper-plane text-primary sr-icons"></i>
                        <h3>Ready to Ship</h3>
                        <p class="text-muted">You can use this theme as is, or you can make changes!</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-newspaper-o text-primary sr-icons"></i>
                        <h3>Up to Date</h3>
                        <p class="text-muted">We update dependencies to keep things fresh.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 text-center">
                    <div class="service-box">
                        <i class="fa fa-4x fa-heart text-primary sr-icons"></i>
                        <h3>Made with Love</h3>
                        <p class="text-muted">You have to make your websites with love these days!</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
 -->

</body>

</html>
