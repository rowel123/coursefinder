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
      <div class="input-group" style="width: 100%">
  <form action="" method="POST">
    <input id="msg" type="text" class="form-control" name="searchtext" placeholder="Search schools" style="width: 80%">
         <button type="submit" class="btn btn-success" name="search" >Search</button>
<a href="edit-schools.php"> Show All</a>
   </form> 
  </div>
        <table class="table">
          <tr>
           <th> Course Name</th>
             <th> Contact</th>
               <th> Address</th>
               <th> Actions</th>
          </tr>
       <?php 
           if(!isset($_GET['name'])){
       $fetchCourses = mysqli_query($con,"SELECT * FROM tbl_schools"); 
                        while($row2 = mysqli_fetch_array($fetchCourses)) {
                     ?>
                     <tr> 
                      <td><a href="school-assesment.php">  <?php echo $row2['school_name']; ?> </a> </td>
                      <td>  <?php echo $row2['phone']; ?>  </td>
                      <td>  <?php echo $row2['address']; ?> </td>
                      <td> <a href="editSchool.php?id=<?php echo $row2['school_id'] ?>" style="margin-right:5px;">Edit</a> <a href="deleteSchool.php?id=<?php echo $row2['school_id'] ?>">Delete</a> </td>
                     </tr>
                    
                
     
                    <?php  } 
                    }else{
                           $fetchCourses = mysqli_query($con,"SELECT * FROM tbl_schools where school_name like '%$_GET[name]%'"); 
                        while($row2 = mysqli_fetch_array($fetchCourses)) {
                     ?>
                     <tr> 
                      <td><a href="school-assesment.php">  <?php echo $row2['school_name']; ?> </a> </td>
                      <td>  <?php echo $row2['phone']; ?>  </td>
                      <td>  <?php echo $row2['address']; ?> </td>
                      <td> <a href="editSchool.php" style="margin-right:5px;">Edit</a> <a href="deleteSchool.php">Delete</a> </td>
                     </tr>
                    
                
                     <?php } }?>

      </table>








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
