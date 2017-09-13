<!DOCTYPE html>
<html lang="en">

    <?php include('headeradmin.php'); ?>
<body id="page-top">

    <header>
    <title> Zambales Course Finder</title>
        <div class="header-content">
            <div class="header-content-inner">
                <h1 id="homeHeading">Course Finder</h1>
                <hr>
                <p>Add course:</p>
    
<form action="" method="POST">
<div class="form-group">
  <label style="float:left;">School:</label>
    <div class="form-group">
  <label for="sel1">Select list:</label>
 
  <select class="form-control" name="category_id" id="sel1">
  <?php
  $con=mysqli_connect("localhost","root","","coursefinderdb");


$fetchSchools = mysqli_query($con,"SELECT * FROM tbl_category");
while($row = mysqli_fetch_array($fetchSchools)) {
   
   echo "<option value='" . $row['category_id'] . "'>" . $row['category_name'] . "</option>";

    } ?> 
  </select>
    </div>
    

</div>
<div class="form-group">
  <label for="pwd" style="float:left;">Content:</label>
  <input type="text" name="content" class="form-control" id="pwd">
</div> 
<div class="form-group">
  <label for="phne" style="float:left;">Answer:</label>
  <input type="text" name="answer" class="form-control" id="phne">
</div> 
<div class="form-group">
  <label for="phne" style="float:left;">a.</label>
  <input type="text" name="choiceA" class="form-control" id="phne">
</div>
<div class="form-group">
  <label for="phne" style="float:left;">b.</label>
  <input type="text" name="choiceB" class="form-control" id="phne">
</div>
<div class="form-group">
  <label for="phne" style="float:left;">c.</label>
  <input type="text" name="choiceC" class="form-control" id="phne">
</div>
<div class="form-group">
  <label for="phne" style="float:left;">d.</label>
  <input type="text" name="choiceD" class="form-control" id="phne">
</div>
  <button type="submit" class="btn btn-default" name="addQuestion">Add Question</button>
</form>


  <?php
    $con=mysqli_connect("localhost","root","","coursefinderdb");

     if(isset($_POST['addQuestion'])){
      echo "<script> alert('Hi, This is a POST Method Form that was clicked.') </script>";
   $choiceA = $_POST['choiceA'];
   $choiceB = $_POST['choiceB'];
   $choiceC = $_POST['choiceC']; 
   $choiceD = $_POST['choiceD'];
   $answer = $_POST['answer'];
   $content = $_POST['content'];
   $category_id = $_POST['category_id'];
$sql = "INSERT INTO tbl_question (content,answer,choiceA,choiceB,choiceC,choiceD,category_id)
VALUES ('$content','$answer','$choiceA','$choiceB','$choiceC','$choiceD',$category_id)";

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
