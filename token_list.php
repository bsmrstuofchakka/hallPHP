<?php
session_start();
$conn=mysqli_connect("localhost","root","640087@m","hallphp");


if(isset($_POST['request_for_token_list']))
{
    $meal_time=$_POST['meal_time_quantity'];

    $token_date = $_POST['token_date'];
  //  print_r( $token_date);
   // print_r( $meal_time);
    if($meal_time=="morning_meal_quantity"){
      //  print_r('morning_meal_quantity');
        $query = "select * from buy_meal where  time='$token_date'  order by id DESC ";
    }elseif ($meal_time=="launch_meal_quantity"){
      //  print_r( 'launch_meal_quantity');
        $query = "select * from buy_meal where time='$token_date' order by id DESC ";
    }else{
      //  print_r( 'dinner_meal_quantity');
        $query = "select * from buy_meal where time='$token_date' order by id DESC ";
    }

    $result = mysqli_query($conn,$query);
    $count_morning=0;
    $count_launch=0;
    $count_dinner=0;
    foreach ($result as $row){
       // echo $row['id']." <br>";
       // echo $row['morning_meal_quantity']." <br>";
        $count_morning=$count_morning+$row['morning_meal_quantity'];
        $count_launch=$count_launch+$row['launch_meal_quantity'];
        $count_dinner=$count_dinner+$row['dinner_meal_quantity'];
       // echo $row['launch_meal_quantity']." <br>";
       // echo $row['dinner_meal_quantity']." <br>";
    }
//    while($karim = mysqli_fetch_array($result)){
//        echo $karim['id'];
//        echo $karim['morning_meal_quantity'];
//        echo $karim['launch_meal_quantity'];
//        echo $karim['dinner_meal_quantity'];
//    }
    //print_r( $result);
}

?>
               










<!DOCTYPE html>
<html>
<head>
    <link media="screen" href="{{asset('css/main.css')}}" />
    <link media="print" href="{{asset('css/print.css')}}" />
    <!--<link rel="stylesheet" type="text/css" href="{{asset('css/token_list.css')}}">-->
    <link type="text/css" rel="stylesheet" href="{{asset('/loginRegister/css/bootstrap.min.css')}}" />

    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="{{asset('/loginRegister/js/bootstrap.min.js')}}" type="text/javascript"></script>
</head>
<body>

    <?php

            function createPageStart(){
                echo '
                    <page size="A4">
                        <div class="container">
                ';
            }
            function createPageEnd(){
                echo '
                        </div>
                    </page>
                ';

    ?>

            <?php $num=1;$end_num=1;$token_per_page=2;?>
            <?php  foreach($result as $token) { ?>
                <?php
                    $user_info=DB::table('users')->where('student_id','=',$token->student_id)->get();$info=null;

                ?>
              <?php  foreach($user_info as $info) { ?>
             <?php  } ?>

                <?php $token_num=$token->$meal_time_quantity;

                if ($meal_time_quantity=="morning_meal_quantity")
                    {
                        $token_type="Morning Meal Token";
                    }
                elseif ($meal_time_quantity=="launch_meal_quantity")
                    {
                        $token_type="Launch Meal Token";
                    }
                else
                    {
                        $token_type="Dinner Meal Token";
                    }
                while($token_num!=0){

                    if ($num==1||($num/$token_per_page>=1&&$num%$token_per_page==0)){
                        $end_num=1;
                        createPageStart();
                    }
                    echo "
                        <h5 style='text-align: center'>".$num.".".$token_type."(".$token->date.") Sheikh Rehena Hall, BSMRSTU.  Student ID:".$info->student_id."</h5>

                    <hr>
                    ";

                    $end_num++;
                    if ($end_num/$token_per_page==1){
                        createPageEnd();
                    }

                    $num++;
                    $token_num=$token_num-1;
                }
                ?>
    <?php  } ?>

</body>

</html>