<!DOCTYPE html>
<html lang="en">

    <?php include('headeradmin.php'); ?>
<body id="page-top">

    <header>
    <title> Zambales Course Finder</title>


<style>
  .btn:hover{
      background-color:#F05F40;
  }
</style>
<?php 
$con=mysqli_connect("localhost","root","","coursefinderdb");
  
     if(isset($_POST['login'])){
        $username = $_POST['username'];
         $password = $_POST['password'];
         $sql = mysqli_query($con,"SELECT * FROM tbl_user where username='$username' AND password='$password'");

          if(mysqli_num_rows($sql)>0) {
              $_SESSION['logged']=1;
               header("Location: admin-index.php");
                }else{
                 $_SESSION['logged']=0;   
                  echo "<script> alert('Invalid Admin Account') </script>";
                } 
    }
?>
       <div class="header-content">
            <div class="header-content-inner">
                <h1 id="homeHeading">Course Finder</h1>
                <hr>
                <p>Add School:</p>


<form action="" method="POST">
<div class="form-group">
  <label style="float:left;">Username:</label>
  <input type="text" name="username" class="form-control" id="usr">
</div>
<div class="form-group">
  <label for="pwd" style="float:left;">Password:</label>
  <input type="password" name="password" class="form-control" id="pwd">
</div> 


  <button type="submit" class="btn btn-default" name="login">Sign in</button>
</form>





      </div>
    </div>
    </header>

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
