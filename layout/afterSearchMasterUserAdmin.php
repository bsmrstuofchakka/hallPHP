<?php
if (!isset($_SESSION['student_id']))
    header('location:index.php');
$std=$_SESSION['student_id'];
//print_r($std);
$connn=mysqli_connect("localhost","root","640087@m","hallphp");
$querya = "select * from student where student_id='$std'";

$resulta = mysqli_query($connn,$querya);

$rowa = mysqli_fetch_assoc($resulta);

//print_r($row);


?>
<ul class="header-account dropdown default-dropdown" xmlns:color="http://www.w3.org/1999/xhtml.php">
     <div class="login" role="button" data-toggle="dropdown" aria-expanded="true">

<?php

if(isset($_SESSION['student_id'])) {
              echo '<strong class="text-lowercase">'.  $_SESSION['student_id'].'</strong>';
}
?>


     </div>


    <ul class="custom-menu">

            <li>
                <a href="logout.php" ><i class="fa fa-unlock-alt"></i> Logout</a>
            </li>
        </ul>

</ul>
<!-- /Account -->







</div>

<div class="row justify-content-colter">
    <div class="col-lg-2 col-md-3 col-12 menu_block">



        <!--main menu -->
        <div class="side_menu_section">
            <ul class="menu_navCocoon">

                <li class="active" >
                    <a  href="welcomeUserAdmin.php">
                        Dashboard
                    </a>
                </li>
                <?php if ( $rowa['userType']=='User' ){ ?>

                    <li>


                        <a  href="reportAddEdit.php">
                            Add Complain
                        </a>


                    </li>
                <?php } ?>

                <li>

                    <a href="profile.php">
                        Profiles
                    </a>
                </li>

                <?php if ( $rowa['userType']=='Admin' ){ ?>

                    <li>


                        <a href="reportList.php">
                            ComplainList
                        </a>


                    </li>
                <?php } ?>


                <?php if ( $rowa['userType']=='Admin' ){ ?>

                    <li>


                    <a href="userDetailsAddEdit.php">
                        Add Student
                    </a>


                </li>
                <?php } ?>

                <?php if ( $rowa['userType']=='Admin' ){ ?>

                    <li>


                        <a href="userDetailslist.php">
                            StudentList
                        </a>


                    </li>
                <?php } ?>
                <?php if ( $rowa['userType']=='Admin' ){ ?>

                    <li>


                        <a href="set_token_date.php">
                            Token List
                        </a>


                    </li>
                <?php } ?>
                <?php if ( $rowa['userType']=='User' ){ ?>

                    <li>


                        <a href="buy_meal.php">
                            Buy Meal Token
                        </a>


                    </li>
                <?php } ?>
                <li>
                    <a href="list_meal.php">
                        List Meal Token
                    </a>
                </li>
                <?php if ( $rowa['userType']=='Admin' ){ ?>

                    <li>


                        <a href="addAmount.php">
                            Add Amount
                        </a>


                    </li>
                <?php } ?>
                <li>


                    <a href="amountList.php">
                        Amount List
                    </a>


                </li>

<!--                --><?php //if ( $rowa['userType']=='Admin' ){ ?>

                    <li>


                        <a href="update_meal_cost.php">
                            Meal Cost
                        </a>


                    </li>
<!--                --><?php //} ?>



            </ul>
        </div>
        <!--main menu end -->


    </div>
    <script>

        $('.li').on('click','li', function(){
            $(this).addClass('active').siblings().removeClass('active');
        });
    </script>

