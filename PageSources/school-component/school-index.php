<!DOCTYPE html>
<html lang="en">

    <?php include('header.php');
    include('header-check.php'); ?>

<body id="page-top">

    <header>
<style type="text/css">
  th{
    text-align: center;
  }
  .btn:hover{
      background-color:#F05F40;
  }
</style>
<?php 

?>
        <div class="header-content" style="top:250px;">
            <div class="header-content-inner">
                <h1 id="homeHeading">School Index</h1>
                <hr>
                <p><?php echo $_SESSION['school_name']; ?></p>
                
<form action="" method="POST">

<div class="form-group">
  <label for="pwd" style="float:left;">Course:</label>
  <input type="text" name="name" class="form-control" id="pwd">
</div> 
<div class="form-group">
  <label for="phne" style="float:left;">Alias:</label>
  <input type="text" name="alias" class="form-control" id="phne">
</div> 
<div class="form-group">
  <label for="det" style="float:left;">Priority:</label>
      <select class="form-control" name="priority" id="sel1">
      <option value="1">Top</option>
      <option value="2">Normal</option>
    </select>

</div>
  <button type="submit" class="btn btn-default" name="addCourse">Add Course</button>
</form>


  <?php
    $con=mysqli_connect("localhost","root","","coursefinderdb");

     if(isset($_POST['addCourse'])){
   $name = $_POST['name'];
   $alias = $_POST['alias'];
   $priority = $_POST['priority']; 
   $schoolID = $_SESSION['school_id'];
$sql = "INSERT INTO tbl_courses (school_id,name,name_alias,priority)
VALUES ($schoolID,'$name','$alias',$priority)";

   if (mysqli_query($con, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($con);
}
}

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
