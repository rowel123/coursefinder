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
        <div class="header-content" style="top:250px;">
            <div class="header-content-inner">
                <h1 id="homeHeading">Schools</h1>
                <hr>
                <p>We deliver the best choices for you!</p>
    
<!––  Search START  --!>
<label for="basic-url">Search Schools</label>
<div class="input-group" >
  <span class="input-group-addon" id="basic-addon3">Schools:</span>
  <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
</div>
</div class="searchText">
 <div  style="width:100%;">

<!––  Search END  --!>

            <?php
$con=mysqli_connect("localhost","root","","coursefinderdb");


$fetchSchools = mysqli_query($con,"SELECT * FROM tbl_schools");
while($row = mysqli_fetch_array($fetchSchools)) {

//        echo "<tr>
//                 <td> " . $row['name'] . "</td>
//                 <td> " . $row['address'] . "</td>
//                 <td> " . $row['phone'] . "</td>             
//               </tr>";
       
    
  ?>




      <div class="col-md-2 schoolBox"> <?php echo $row['name'] ?>  <br>
       <div class="input-group-btn">
                <button type="button" 
                        class="awesomeButton" 
                        data-toggle="dropdown">Courses  Available<span class="caret"></span></button>
                <ul class="dropdown-menu">
                 <?php $fetchCourses = mysqli_query($con,"SELECT * FROM tbl_courses where school_id=$row[school_id]"); 
                        while($row2 = mysqli_fetch_array($fetchCourses)) {
                     ?>
                    <li><a href="#"> <?php echo $row2['name'] . " " . $row2['name_alias']; ?> </a></li>
                
     
                    <?php  } ?>
                </ul>
            </div>
     </div>     


</div>

<?php    
       }
mysqli_close($con);
?>
        </div>


    </header>




</body>

</html>
