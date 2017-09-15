<!DOCTYPE html>
<html lang="en">

    <?php include('../header/header.php'); ?>

<body id="page-top">

    <header>
     <style type="text/css">
        .schoolBox{

            height: 100px;
            margin: 15px;
            -webkit-border-radius: 10px 10px 10px 10px;
            border-radius: 10px 10px 10px 10px;
            -webkit-box-shadow: 1px 1px 10px 10px #9C9C9C;
            box-shadow: 1px 1px 5px 5px #9C9C9C;
            padding-top:15px;
        }
        .searchText{
            margin-bottom:100px;
        }
        .awesomeButton{
  -webkit-border-radius: 2;
  -moz-border-radius: 2;
  border-radius: 2px;
  font-family: Georgia;
  color: #ffffff;
  font-size: 20px;
background-color:rgba(0, 0, 0, .03);
  padding: 1px 5px 1px 5px;
  text-decoration: none;
        }
        .awesomeButton:hover{
background-color:rgba(0, 0, 0, 0.2);
  text-decoration: none;
        }
     </style>
        <div class="header-content">
            <div class="header-content-inner">
                <h1 id="homeHeading">Assessment</h1>
                <hr>
                <p>Please answer the following: </p>
    
<form action="" method="POST">
            <?php

$_SESSION['SCIENCE']=array(0,'SCIENCE');
$_SESSION['MATH']=array(0,'Math');;
$_SESSION['VERBAL']=array(0,'Verbal');;
$_SESSION['ENTREPRENUERSHIP']=array(0,'ENTREPRENUERSHIP');;
$_SESSION['CLERICAL']=array(0,'CLERICAL');;

$con=mysqli_connect("localhost","root","","coursefinderdb");

if(isset($_POST['submit'])){
    $fetchArray= mysqli_query($con,"SELECT * FROM tbl_question inner join tbl_category on 
      tbl_question.category_id=tbl_category.category_id");
    $counter = 1;

    while($row = mysqli_fetch_array($fetchArray)) {

      if($row['answer']==$_POST[$counter]){
        $a = $row['category_name'];
        $_SESSION[$a][0]++;
           echo $_SESSION[$a][0];
      }
            // echo $row['answer'] . $_POST[$counter] . $_SESSION['SCIENCE'];

              $counter++;    

     
        
    }

     echo "<script>window.location = 'result.php'; </script>";

}

$fetchSchools = mysqli_query($con,"SELECT * FROM tbl_question");
while($row = mysqli_fetch_array($fetchSchools)) {
       
    
  ?>

	
      <div> <?php echo $row['content'] ?>  <br>
  <div>
    <input type="radio" id="genderChoice1"
     name=<?php echo "'" . $row['question_id'] . "'"; ?> value=<?php echo "'" . $row['choiceA'] . "'"; ?> required>
    <label for="genderChoice1"><?php echo $row['choiceA'];?></label>

   <input type="radio" id="genderChoice1"
     name=<?php echo "'" . $row['question_id'] . "'"; ?> value=<?php echo "'" . $row['choiceB'] . "'"; ?> >
    <label for="genderChoice1"><?php echo $row['choiceB'];?></label>

  <input type="radio" id="genderChoice1"
     name=<?php echo "'" . $row['question_id'] . "'"; ?> value=<?php echo "'" . $row['choiceC'] . "'"; ?> >
    <label for="genderChoice1"><?php echo $row['choiceC'];?></label>

  <input type="radio" id="genderChoice1"
     name=<?php echo "'" . $row['question_id'] . "'"; ?> value=<?php echo "'" . $row['choiceD'] . "'"; ?> >
    <label for="genderChoice1"><?php echo $row['choiceD'];?></label>

  </div>

    
      
 

                
     
                    <?php  } ?>
    <div>
     <button type="submit" class="btn btn-default" name="submit">Submit</button>
  </div>
     </div>    
      </form>




<?php    
       
mysqli_close($con);
?>
        </div>
        </div>


    </header>




</body>

</html>
