<?php
    session_start();
if (!isset($_SESSION['student_id']))
    header('location:index.php');
    $conn=mysqli_connect("localhost","root","640087@m","hallphp");
    $query = "select * from student";
    $result = mysqli_query($conn,$query);

   // print_r($result);


     if (isset($_GET['id'])) {
        $id=$_GET['id'];
         //print_r($id);

          $query ="DELETE FROM student where id='$id' ";
         $result= mysqli_query($conn,$query);
           header("location:userDetailsList.php");


     }

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
                       Student List
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
                        <th>Student ID</th>
                        <th>EMAIL</th>
                        <th>Password</th>
                        <th>User Type</th>
                        <th>Name</th>
                        <th>Father Name</th>
                        <th>Mother Name</th>
                        <th>Address</th>
                        <th>Department & Year </th>
                        <th>Contact Number</th>
                        <th>Guardiant Contact Number</th>
                        <th>Room No.</th>
                        <th>Blood Group</th>
                        <th>Photo</th>
                        <th>ACTION</th>
                    </tr>
                    </thead>
                    <?php 
                $i=1;
                while ($row = mysqli_fetch_assoc($result)) { ?>

                    <tr>
                        <th><?php echo $row['id']; ?></th>
                        <th><?php echo $row['student_id']; ?></th>
                        <th><?php echo $row['email']; ?></th>
                        <th><?php echo $row['password']; ?></th>
                        <th><?php echo $row['userType']; ?></th>
                        <th><?php echo $row['name']; ?></th>
                        <th><?php echo $row['fname']; ?></th>
                        <th><?php echo $row['mname']; ?></th>
                        <th><?php echo $row['address']; ?></th>
                        <th><?php echo $row['department']; ?></th>
                        <th><?php echo $row['cnumber']; ?></th>
                        <th><?php echo $row['gnumber']; ?></th>
                        <th><?php echo $row['roomno']; ?></th>
                        <th><?php echo $row['blood_group']; ?></th>

                      

                        


                       <td style="word-wrap: break-word;"><img width="100px" src="<?php echo $row['image'] ?>"/> </td>



                        <th>
                            <a href="userupdate.php?id=<?php echo $row['id']; ?>">Edit /</a>
                        <a href="userDetailsList.php?id=<?php echo $row['id']; ?>">Delete</a>
                        </th>
                    </tr>
                     <?php  ++$i; } ?>


                </table>
            </div>
            </div>
</div>




<?php include("layout/beforePagination.php");?>
<?php include("layout/afterPagination.php");?>


