<!DOCTYPE html>
<html lang="en">

    <?php include('headeradmin.php'); ?>
<body id="page-top">

    <header>
    <title> Zambales Course Finder</title>
        <div class="header-content">
            <div class="header-content-inner">
                <h1 id="homeHeading">Admin</h1>
                <hr>
                <p>Edit School:</p>
  <?php
     $sql = mysqli_query($con,"SELECT * FROM tbl_schools where school_id='$_GET[id]'");
     while($row=mysqli_fetch_array($sql)){
   ?>                 
<form action="" method="POST">
<div class="form-group">
  <label for="pwd" style="float:left;">Username:</label>
  <input type="text" name="username" class="form-control" id="pwd" value="<?php echo $row['username']; ?>">
</div> 
<div class="form-group">
  <label for="pwd" style="float:left;">Password:</label>
  <input type="text" name="password" class="form-control" id="pwd" value="<?php echo $row['password']; ?>">
</div> 
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

<!--     <section class="bg-primary" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <h2 class="section-heading">Pick the best school for your course!</h2>
                    <hr class="light">
                    <p class="text-faded"> We give you the best choices for your needs. So start searching now! </p>
                    <a href="#page-top" class="page-scroll btn btn-default btn-xl sr-button">Get Started!</a>
                </div>
            </div>
        </div>
    </section>

     -->


    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="vendor/scrollreveal/scrollreveal.min.js"></script>
    <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Theme JavaScript -->
     <script src="js/dropdownSelect.js"></script>
    <script src="js/creative.min.js"></script>

</body>

</html>
