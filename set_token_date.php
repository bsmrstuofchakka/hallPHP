
<?php
    session_start();
$conn=mysqli_connect("localhost","root","640087@m","hallphp");
//     if(isset($_POST['request_for_token_list']))
//            {
//              $meal_time=$_POST['meal_time_quantity'];
//
//                $token_date = $_POST['token_date'];
//                if($meal_time=="morning_meal_quantity"){
//                    $query = "select * from buy_meal where morning_meal_quantity='$meal_time' AND time='$token_date' order by id DESC ";
//                }elseif ($meal_time=="launch_meal_quantity"){
//                    $query = "select * from buy_meal where launch_meal_quantity='$meal_time' AND time='$token_date' order by id DESC ";
//                }else{
//                    $query = "select * from buy_meal where dinner_meal_quantity='$meal_time' AND time='$token_date' order by id DESC ";
//                }
//
//                $result = mysqli_query($conn,$query);
//                print_r( $result);
//            }
   // print_r($result);
?>


<?php include ("layout/beforeSearchMaster.php");?>
<div class="social clear">
    <div class="searchbtn clear">


    </div>
</div>





<?php include("layout/afterSearchMasterUserAdmin.php");?>




<div class="contentsection contemplete clear">
    <div class="maincontent clear" >
        <div style="text-align: center">
            <h2>Set Token Date</h2>
        </div>
        <br>
        <br>

         <form  method="POST" action="token_list.php" enctype="multipart/form-data">
        <div class="form-group">
            <label >Token Date</label>

            <input type="text" value="<?php $day=strtotime("today");echo date("Y-m-d",$day); ?>" name="token_date" placeholder="YYYY-MM-DD" required pattern="(?:19|20)[0-9]{2}-(?:(?:0[1-9]|1[0-2])-(?:0[1-9]|1[0-9]|2[0-9])|(?:(?!02)(?:0[1-9]|1[0-2])-(?:30))|(?:(?:0[13578]|1[02])-31))" title="Enter a date in this format YYYY-MM-DD"/>
        </div>
        <div class="form-group">

            <label>Meal Time</label>
            <select class="form-control" name="meal_time_quantity">
                <option value="morning_meal_quantity">Morning</option>
                <option value="launch_meal_quantity">Launch</option>
                <option value="dinner_meal_quantity">Dinner</option>
            </select>
        </div>

            <button href="token_list.php" type="submit" name="request_for_token_list"  class="btn btn-primary">Token List</button>
            </form>
        </div> 

    </div>

<script>
    $('#sample_1').DataTable({
        "iDisplayLength": 10,
        "aLengthMenu": [
            [10, 25, 50, -1],
            [10, 25, 50, "all"]
        ]
    });

    $(document).ready(function(){
        $('.form-horizontal').on('submit', function(e){
            $(this).css('opacity', '0.5');
            $('.submit').attr('disabled', true);
            $('#loader').removeClass('hide');
        });
    })


</script>




<?php include("layout/beforePagination.php");?>
<?php include("layout/afterPagination.php");?>


