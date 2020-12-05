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

<body style="background-color : #f3f3f3">
<div><img src="../../../DATABASE/lrvl.png" style="width: 80px;height:150px;
    position: fixed;
    margin-top: 630px;
    margin-left: 0px;"></div>

<div><a href="#"><img src="../../../DATABASE/9308.png" style="width: 50px;
    position: fixed;
    margin-top: 720px;
    margin-left: 1355px;"></a></div>
    
<?php
session_start();
error_reporting(0);
$con = new mysqli('localhost','root','','ensaevent');
$_SESSION['nbr_text']++;
?>


<nav class="navbar navbar-custom " role="navigation" style="background-color: #292c2f;border-bottom: red;">

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

    
    <div id="page-wrapper" style="margin:0 0 0 0px;background-image:url('../img/dd.svg');margin:0 0 0 0;background-color: rgb(132 155 197);">

            <form method="POST" class="form-horizontal" enctype="multipart/form-data">
            <div class="row" style=" padding-left: 230px; padding-right: 200px;padding-top:50px;padding-bottom:25px">
            <div style="background: #292c2f;
    color: white;
    font-family: cabin;
    font-size: 26px;
    padding: 9px;
    text-align: center;">Chapitre VI : Determination de Comlpexité Algorithmique</div>
            <div style="background: white">

                <img src="../../../DATABASE/38.png" style="width: 670px;margin-left: 152px;padding: 0px 40px;">
                <hr>
                <img src="../../../DATABASE/39.png" style="width: 670px;margin-left: 152px;padding: 0px 40px;">
                <hr>
                <img src="../../../DATABASE/40.png" style="width: 670px;margin-left: 152px;padding: 0px 40px;">
                <hr>
                <img src="../../../DATABASE/41.png" style="width: 670px;margin-left: 152px;padding: 0px 40px;">
                <hr>
                <img src="../../../DATABASE/42cp.png" style="width: 670px;margin-left: 152px;padding: 0px 40px;">
                <hr>
                <img src="../../../DATABASE/43cp.png" style="width: 670px;margin-left: 152px;padding: 0px 40px;">
                <hr>
                <img src="../../../DATABASE/44cp.png" style="width: 670px;margin-left: 152px;padding: 0px 40px;">
                <hr>
                <img src="../../../DATABASE/45cp.png" style="width: 670px;margin-left: 152px;padding: 0px 40px;">
                <hr>
                <img src="../../../DATABASE/46cp.png" style="width: 670px;margin-left: 152px;padding: 0px 40px;">
                <hr>
                <img src="../../../DATABASE/47.png" style="width: 670px;margin-left: 152px;padding: 0px 40px;">
                <hr>
                <img src="../../../DATABASE/48.png" style="width: 670px;margin-left: 152px;padding: 0px 40px;">
                <hr>
                <img src="../../../DATABASE/49.png" style="width: 670px;margin-left: 152px;padding: 0px 40px;">
                <hr>
                <img src="../../../DATABASE/50.png" style="width: 670px;margin-left: 152px;padding: 0px 40px;">
                <hr>
                <img src="../../../DATABASE/51.png" style="width: 670px;margin-left: 152px;padding: 0px 40px;">
                <hr>
                <img src="../../../DATABASE/52.png" style="width: 670px;margin-left: 152px;padding: 0px 40px;">
                <hr>
                <img src="../../../DATABASE/53cp.png" style="width: 670px;margin-left: 152px;padding: 0px 40px;">
                <hr>
                <img src="../../../DATABASE/54.png" style="width: 670px;margin-left: 152px;padding: 0px 40px;">
                <hr>
                <img src="../../../DATABASE/55.png" style="width: 670px;margin-left: 152px;padding: 0px 40px;">
                <hr>
                <img src="../../../DATABASE/56.png" style="width: 670px;margin-left: 152px;padding: 0px 40px;">
                <hr>
                <img src="../../../DATABASE/57.png" style="width: 670px;margin-left: 152px;padding: 0px 40px;">
                <hr>
                <img src="../../../DATABASE/58.png" style="width: 670px;margin-left: 152px;padding: 0px 40px;padding-bottom:10px;">
                <hr>
                </div>


            
            <div class="btn-group" role="group" aria-label="Basic example" style="float: right;margin-right: 0px;">
                <a class="btn btn-outline-primary" href ="text3.php" style="background: white;
    color: black;
    font-family: cabin;
    font-size: 15px;
    border: none;"><- Chapitre III</a>
            </div> 
            
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