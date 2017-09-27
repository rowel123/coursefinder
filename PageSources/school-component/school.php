<!DOCTYPE html>
<html lang="en">

    <?php include('../header/header.php'); ?>
            <?php
$con=mysqli_connect("localhost","root","","coursefinderdb");


  ?>
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
@media (min-width: 991px){
header .header-content {
    position: absolute;
    top: 40%
}
}
  th{
    text-align: center;
  }
     </style>
        <div class="header-content">
            <div class="header-content-inner">
                <h1 id="homeHeading">Schools</h1>
                <hr>
                <p>We deliver the best choices for you!</p>
    
<!––  Search START  --!>


 <div  class="row" style="width:100%;">

<!––  Search END  --!>




  <div class="input-group" style="width: 100%">
  <form action="" method="POST">
    <input id="msg" type="text" class="form-control" name="searchtext" placeholder="Search schools" style="width: 80%">
         <button type="submit" class="btn btn-success" name="search" >Search</button>
<a href="school.php"> Show All</a>
   </form> 
  </div>

            <table width="100%" class="table">
            <tr>
             <th> School </th>
             <th> Address</th>
             <th> Contact No. </th>
            </tr>
                 <?php
                if(!isset($_GET['name'])){

                                $fetchCourses = mysqli_query($con,"SELECT * FROM tbl_courses inner join tbl_schools on 
                 tbl_courses.school_id=tbl_schools.school_id"); 
                        while($row2 = mysqli_fetch_array($fetchCourses)) {
                     ?>
                     <tr> 
                      <td><a href=<?php echo "tschool.php?id=" . $row2['school_id'] . "&name=" . $row2['school_name'] ?>>  <?php echo $row2['school_name']; ?> </a> </td>
                      <td>  <?php echo $row2['address']; ?>  </td>
                      <td>  <?php echo $row2['phone']; ?> </td>
                      </tr>
                    
                
     
                    <?php  
                  } 
                      }else{
                        $fetchCourses = mysqli_query($con,"SELECT * FROM tbl_courses inner join tbl_schools on 
                 tbl_courses.school_id=tbl_schools.school_id where school_name like '%$_GET[name]%'"); 
                        while($row2 = mysqli_fetch_array($fetchCourses)) {
                     ?>
                     <tr> 
                      <td><a href=<?php echo "tschool.php?id=" . $row2['school_id'] . "&name=" . $row2['school_name'] ?>>    <?php echo $row2['school_name']; ?> </a> </td>
                      <td>  <?php echo $row2['address']; ?>  </td>
                      <td>  <?php echo $row2['phone']; ?> </td>
                      </tr>

                    <?php  
                      }}
                    ?>
          
            </table>

        </div>
        </div>
</div>

    </header>




</body>

</html>