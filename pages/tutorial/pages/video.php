<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Tutorial</title>

    <!-- Bootstrap Core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- DataTables CSS -->
    <link href="../vendor/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="../vendor/datatables-responsive/dataTables.responsive.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <link href="../dist/css/style2.css" rel="stylesheet">

    <link id="t-colors" href="../dist/css/default.css" rel="stylesheet">


</head>

<body style="background: #a2bbb9;">
<?php
session_start();
error_reporting(0);
$con = new mysqli('localhost','root','','ensaevent');
?>

<nav class="navbar navbar-custom " role="navigation" style="background-color: #292c2f;border-bottom:red">

<div class="container navigation">

<div class="navbar-header page-scroll">
  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
    <i class="fa fa-bars"></i>
  </button>
  <a class="navbar-brand" href="../../index/index2.php">
    <h4 style="margin-left: -80px;
margin-top: -7px;
text-transform: initial;
font-family: Cairo;
font-weight: bold;
font-size: 35.82px;
color: #00a0dce3;">Smart<span style="font-family: Cairo;
font-weight: bold;
font-size: 32px;
color: #ffffffe6;">Course<span></h4>
  </a>
</div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
        <ul class="nav navbar-nav">
        
<?php
$idParticip=$_SESSION['id_particip'];?>

<li><a href="../tutorial/pages/chap1.php" style="color: #f5f5f5;
FONT-FAMILY: cabin;
letter-spacing: 1px;
font-size: 13px;">TUTORIAL</a></li>


<li><a href="../calculator/pages/calculator.php" style="color: #f5f5f5;
FONT-FAMILY: cabin;
letter-spacing: 1px;
font-size: 14px;">CALCULATOR</a></li>

<li><a href="../quiz/pages/quiz1.php" style="color: #f5f5f5;
FONT-FAMILY: cabin;
letter-spacing: 1px;
font-size: 14px;">QUIZ</a></li>

<li>
<a href="../profile/pages/participant.php" style="color: #f5f5f5;
FONT-FAMILY: cabin;
letter-spacing: 1px;
font-size: 14px;"><img src="img/admiine.png" style="width: 25px;
height: 25px;
margin-top: -5px;
margin-right: 3px;">PROFILE</a></li>

        </ul>
    </div>
    <!-- /.navbar-collapse -->
</div>
<!-- /.container -->
</nav>
<!-- /.navbar-header -->


    <!-- /.navbar-top-links -->

    
    <div id="page-wrapper" style="background-image:url('../img/dd.svg');margin:0 0 0 0;background-color: rgb(220 154 128);">

            <form method="POST" class="form-horizontal" enctype="multipart/form-data">
            <div class="row" style="display: flex;padding-top: 30px;">
                
                <div>
                <video src="../../../DATABASE/Algorithm Analysis/1-introduction + definition.mp4" controls style="width: 400px;height:200px;
    margin-left: 35px;"> </video>
                <p style="margin-top: 10px;text-align:center;font-family: cabin;font-weight: 700;background: white;margin-left: 35px;">1-introduction + definition</p>
                </div>

                <div>
                <video src="../../../DATABASE/Algorithm Analysis/2-Find time equation of any algorithm [t(n)]).mp4" controls style="width:400px;height:200px;margin-left:60px;">
                </video>
                <p style="margin-top: 10px;text-align:center;font-family: cabin;font-weight: 700;background: white;margin-left: 60px;">2-Find time equation of any algorithm [t(n)])</p>
                </div>

                <div>
                 <video src="../../../DATABASE/Algorithm Analysis/3-Calculate t(n) using simple method.mp4" controls style="width:400px;height:200px;margin-left:60px;"> </video>
                 <p style="margin-top: 10px;text-align:center;font-family: cabin;font-weight: 700;background: white;margin-left: 60px;">3-Calculate t(n) using simple method</p>
                </div>
</div>
                <div class="row" style="display: flex;    margin-top: 30px;">

                <div>
                <video src="../../../DATABASE/Algorithm Analysis/4-Calculate t(n) using summation equation.mp4" controls style="width: 400px;height:200px;
    margin-left: 35px;"> </video>
                <P style="margin-top: 10px;text-align:center;font-family: cabin;font-weight: 700;background: white;margin-left: 35px;">4-Calculate t(n) using summation equation</P>
                </div>

                <div>
                <video src="../../../DATABASE/Algorithm Analysis/5-Asymptotic notations concept (Oh, Omega, Theta).mp4" controls style="width:400px;height:200px;margin-left:60px;"> </video>
                <P style="margin-top: 10px;text-align:center;font-family: cabin;font-weight: 700;background: white;margin-left: 60px;">5-Asymptotic notations concept (Oh, Omega, Theta)</P>
                </div>

                <div>
                <video src="../../../DATABASE/Algorithm Analysis/6-Asymptotic notations questions with different ideas.mp4" controls style="width: 400px;height:200px;margin-left: 60px;"> </video>
                <p style="margin-top: 10px;text-align:center;font-family: cabin;font-weight: 700;background: white;margin-left: 60px;">6-Asymptotic notations questions with different ideas</p>
                </div>

                </div>
                <div class="row" style="display: flex;    margin-top: 30px;">

                <div>
                <video src="../../../DATABASE/Algorithm Analysis/7-Growth rate concept + Asymptotic notations questions.mp4" controls style="width: 400px;height:200px;margin-left: 35px;"> </video>
                <p style="margin-top: 10px;text-align:center;font-family: cabin;font-weight: 700;background: white;margin-left: 35px;">7-Growth rate concept + Asymptotic notations questions</p>
                </div>

                <div>
                <video src="../../../DATABASE/Algorithm Analysis/8-Calculate t(n) for recursive function.mp4" controls style="width: 400px;height:200px;margin-left: 60px;"> </video>
                <p style="margin-top: 10px;text-align:center;font-family: cabin;font-weight: 700;background: white;margin-left: 60px;">8-Calculate t(n) for recursive function</p>
                </div>

                <div>
                <video src="../../../DATABASE/Algorithm Analysis/9-master method to solve recurrence equations.mp4" controls style="width: 400px;height:200px;margin-left: 60px;"> </video>
                <p style="margin-top: 10px;text-align:center;font-family: cabin;font-weight: 700;background: white;margin-left: 60px;">9-master method to solve recurrence equations</p>
                </div>
                </div>
                <div class="row" style="display: flex;">

                <div>
                <video src="../../../DATABASE/Algorithm Analysis/10-tree method to solve recurrence equations.mp4" controls style="width: 400px;height:200px;margin-left: 35px;"> </video>
                <p style="margin-top: 10px;text-align:center;font-family: cabin;font-weight: 700;background: white;margin-left: 35px;">10-tree method to solve recurrence equations</p>
                </div>

                <div>
                <video src="../../../DATABASE/Algorithm Analysis/11-tree method different examples in solve recurrence equations.mp4" controls style="width: 400px;height:200px;margin-left: 60px;"> </video>
                <p style="margin-top: 10px;text-align:center;font-family: cabin;font-weight: 700;background: white;margin-left: 60px;">11-tree method different examples in solve recurrence equations</p>
                </div>

                <div>
                <video src="../../../DATABASE/Algorithm Analysis/12-Substitution method (plug&chug) to solve recurrence.mp4" controls style="width: 400px;height:200px;margin-left: 60px;"> </video>
                <p style="margin-top: 10px;text-align:center;font-family: cabin;font-weight: 700;background: white;margin-left: 60px;">12-Substitution method (plug&chug) to solve recurrence</p>
                </div>
                </div>
                <div class="row" style="display: flex;    margin-top: 30px;">

                <div>
                <video src="../../../DATABASE/Algorithm Analysis/13-Substitution method (plug&chug) questions.mp4" controls style="width: 400px;height:200px;margin-left: 35px;"> </video>
                <p style="margin-top: 10px;text-align:center;font-family: cabin;font-weight: 700;background: white;margin-left: 35px;">13-Substitution method (plug&chug) questions</p>
                </div>

                <div>
                <video src="../../../DATABASE/Algorithm Analysis/14-Linear search algorithm-idea, example, algorithm, time complexity.mp4" controls style="width: 400px;height:200px;margin-left: 60px;"> </video>
                <p style="margin-top: 10px;text-align:center;font-family: cabin;font-weight: 700;background: white;margin-left: 60px;">14-Search algorithm-idea, example, algorithm, time complexity</p>
                </div>

                <div>
                <video src="../../../DATABASE/Algorithm Analysis/15-Binary search algorithm-idea, example, algorithm, time complexity.mp4" controls style="width: 400px;height:200px;margin-left: 60px;"> </video>
                <p style="margin-top: 10px;text-align:center;font-family: cabin;font-weight: 700;background: white;margin-left: 60px;">15-Binary search algorithm-idea, algorithm, time complexity</p>
                </div>
</div>
  
<br>
            </form>
      



    </div>
    <!-- /#page-wrapper -->



    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>

    <!-- DataTables JavaScript -->
    <script src="../vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="../vendor/datatables-plugins/dataTables.bootstrap.min.js"></script>
    <script src="../vendor/datatables-responsive/dataTables.responsive.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>



    <?php

$eventName = $_POST["eventName"];
$eventType = $_POST["eventType"];
$eventCategory = $_POST["eventCategory"];
$eventLieu = $_POST["eventLieu"];
$dateDebut = $_POST["dateDebut"];
$dateFin = $_POST["dateFin"];
$heureDebut = $_POST["heureDebut"];
$heureFin = $_POST["heureFin"];




  if (isset($_POST['ikhan'])) {

    $eventOrgan = $_POST["eventOrgan"];
$sel_req = "SELECT * FROM organisateur where organ_nam='$eventOrgan'";
$sel = $con->query($sel_req);
$row = $sel->fetch_array();
$organID=$row["id_organ"];


    $ins_req = "insert into evenement values
    (7,'$eventName','$eventType','$eventCategory','$eventLieu','$dateDebut','$dateFin','$heureDebut','$heureFin','','',$organID)";
    $ins = $con->query($ins_req);
    

    $sel_req2 = "SELECT * FROM evenement where 
    event_title='$eventName' 
    and event_type='$eventType'
    and id_organ=$organID";

    $sel2 = $con->query($sel_req2);
    $row2 = $sel2->fetch_array();

    $_SESSION['id_event']=$row2["id_event"];

    if(!$ins)
    {
        echo"Probleme d'insertion<br>";
    }
    else
    echo "<script> window.location.assign('informations.php')</script>";
    
        
    }
         
  $con->close();
  ?>




</body>

</html>