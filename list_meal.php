<?php
    session_start();

if (!isset($_SESSION['student_id']))
    header('location:index.php');
$std=$_SESSION['student_id'];
$conn=mysqli_connect("localhost","root","640087@m","hallphp");
$querya = "select * from student where student_id='$std'";

$resulta = mysqli_query($conn,$querya);
$rowa = mysqli_fetch_assoc($resulta);
if($rowa['userType']=='User'){
    $query = "select * from buy_meal where bStudent_id='$std' order by id DESC ";
    $result = mysqli_query($conn,$query);
}
else{
    $query = "select * from buy_meal order by id DESC ";
    $result = mysqli_query($conn,$query);
}



   // print_r($result);
?>

<?php include ("layout/beforeSearchMaster.php");?>



<div class="social clear">
    <!-- <div class="searchbtn clear">

        <input type="text" name="search"   value="" placeholder="Search keyword..."/>
        <input type="submit" name="submit" value="Search"/>
    </div> -->
</div>


<?php include("layout/afterSearchMasterUserAdmin.php");?>



<link href="public/userDetails/css/style.css" rel="stylesheet" type="text/css" />




<div class="features_area section_gap_change">

                    <span class="contact100-form-title-1">
                       Meal Token List
                    </span>

        <div class="containerChange">

          <!--   <div class="col-12Change2">
                <a class="primary-btn text-uppercase"  href="userDetailsAddEdit.php">Add Student Form</a>
            </div> -->

        
                <div class="table-scrollable" >
                <table class="responstable" id="sample_1">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <?php if($rowa['userType']=='Admin'){?>
                            <th>Student Id</th>
                        <?php }?>
                        <th>Morning Meal</th>
                        <th>Launch Meal</th>
                        <th>Dinner Meal</th>
                        <th>Time</th>
                    </tr>
                    </thead>
                    <?php 
                $i=1;
                while ($row = mysqli_fetch_assoc($result)) { ?>

                    <tr>
                        <th><?php echo $i; ?></th>
                        <?php if($rowa['userType']=='Admin'){?>
                            <th><?php echo $row['bStudent_id']; ?></th>
                        <?php }?>
                        <th><?php echo $row['morning_meal_quantity']; ?></th>
                        <th><?php echo $row['launch_meal_quantity']; ?></th>
                        <th><?php echo $row['dinner_meal_quantity']; ?></th>
                        <th><?php echo $row['time']; ?></th>

                    </tr>
                     <?php  ++$i; } ?>


                </table>
            </div>
            </div>
</div>




<?php include("layout/beforePagination.php");?>
<?php include("layout/afterPagination.php");?>


