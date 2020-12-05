<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Quiz</title>

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
<?php
session_start();
error_reporting(0);
$con = new mysqli('localhost','root','','ensaevent');
$_SESSION['nbr_quiz']++;
?>

    <nav class="navbar navbar-custom " role="navigation" style="background-color: #292c2f;">

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

    <div class="navbar-default sidebar" role="navigation" style="width: 300px;
    margin-left: 10px;
    margin-top: 10px;">
        <div class="sidebar-nav navbar-collapse" style="background-color : #f3f3f3">
            <ul class="nav" id="side-menu">

            <li>
                            <a href="quiz1.php">        
                                <span style="
                            color: #585c60;
                            font-family: Trebuchet MS;
                            font-size: 14px;
                            font-weight: 600;">Quiz 01</span></a>
                        </li>
                        <li>
                            <a href="quiz2.php">
                                <span style="
                            color: #585c60;
                            font-family: Trebuchet MS;
                            font-size: 14px;
                            font-weight: 600;">Quiz 02</span></a>
                        </li>
                        <li>
                            <a href="quiz3.php">
                                <span style="
                        color: #585c60;
                        font-family: Trebuchet MS;
                        font-size: 14px;
                        font-weight: 600;">Quiz 03</span></a>
                        </li>

                        <li>
                            <a href="quiz4.php">
                               
                                <span style="
                        color: #585c60;
                        font-family: Trebuchet MS;
                        font-size: 14px;
                        font-weight: 600;">Quiz 04</span></a>
                        </li>

                        <li>
                            <a href="quiz5.php">
                               
                                <span style="
                        color: #585c60;
                        font-family: Trebuchet MS;
                        font-size: 14px;
                        font-weight: 600;">Quiz 05</span></a>
                        </li>
                        <li>
                            <a href="quiz6.php">
                               
                                <span style="
                        color: #585c60;
                        font-family: Trebuchet MS;
                        font-size: 14px;
                        font-weight: 600;">Quiz 06</span></a>
                        </li>
                        <li>
                            <a href="quiz7.php">
                               
                                <span style="
                        color: #585c60;
                        font-family: Trebuchet MS;
                        font-size: 14px;
                        font-weight: 600;">Quiz 07</span></a>
                        </li>
                        <li>
                            <a href="quiz8.php">
                               
                                <span style="
                        color: #585c60;
                        font-family: Trebuchet MS;
                        font-size: 14px;
                        font-weight: 600;">Quiz 08</span></a>
                        </li>

                        <li>
                            <a href="quiz9.php" class="active">
                               
                                <span style="
                        color: #585c60;
                        font-family: Trebuchet MS;
                        font-size: 14px;
                        font-weight: 600;">Quiz 09</span></a>
                        </li>

                        <li>
                            <a href="quiz10.php">
                               
                                <span style="
                        color: #585c60;
                        font-family: Trebuchet MS;
                        font-size: 14px;
                        font-weight: 600;">Quiz 10</span></a>
                        </li>

                        <li>
                            <a href="quiz11.php">
                               
                                <span style="
                        color: #585c60;
                        font-family: Trebuchet MS;
                        font-size: 14px;
                        font-weight: 600;">Quiz 11</span></a>
                        </li>

                        <li>
                            <a href="quiz12.php">
                               
                                <span style="
                        color: #585c60;
                        font-family: Trebuchet MS;
                        font-size: 14px;
                        font-weight: 600;">Quiz 12</span></a>
                        </li>

        
            </ul>
        </div>
        <!-- /.sidebar-collapse -->
    </div>

    <div id="page-wrapper" style="margin:0 0 0 320px">

            
    <form method="POST" class="form-horizontal" enctype="multipart/form-data">
            
            <div class="row" style=" padding-left: 140px; padding-right: 100px;">


           <div style="margin-top: 70px;font-family: cabin;font-size: 20px;">
           Choiser la bon reponse cette equation T(n)= 2<sup>n+1</sup> est vrais en utilisant les limites pour  ?
            </div>
   <br>

<br><br><br>
           <button style="    margin-left: 90px;
   border: none;
   padding: 9px 19px;
   border-radius: 20px;
   background: #d7d8cb;">Q(2<sup>n</sup>)
</button>
           <button style="    margin-left: 90px;
   border: none;
   padding: 9px 19px;
   border-radius: 20px;
   background: #d7d8cb;">O(2<sup>n+1</sup>)</button><br><br><br>
           <button style="    margin-left: 90px;
   border: none;
   padding: 9px 19px;
   border-radius: 20px;
   background: #d7d8cb;">W(2<sup>n</sup>)</button>
           <button style="    margin-left: 90px;
   border: none;
   padding: 9px 19px;
   border-radius: 20px;
   background: #d7d8cb;" >Tous</button>
            
              
           <br><br>
           <!-- /.row -->
           <div class="btn-group" role="group" aria-label="Basic example" style="    float: right;
   margin-right: -48px;
   margin-top: 28px;">
               <input type="reset" class="btn btn-outline-primary" style="margin-right: 14px;
   border-radius: 3px;"
                   value="<--">
               <input type="submit" name="ikhan" class="btn btn-primary" value="-->">
           </div>
           <br><br><br><br><br>
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