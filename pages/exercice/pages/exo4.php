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
$_SESSION['nbr_exo']++;
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
                            <a href="exo1.php">
                            
                                <span style="
                            color: #585c60;
                            font-family: Trebuchet MS;
                            font-size: 14px;
                            font-weight: 600;">Exercice 01</span></a>
                        </li>
                        <li>
                            <a href="exo2.php">

                                <span style="
                            color: #585c60;
                            font-family: Trebuchet MS;
                            font-size: 14px;
                            font-weight: 600;" >Exercice 02</span></a>
                        </li>
                        <li>
                            <a href="exo3.php">
                                <span style="
                        color: #585c60;
                        font-family: Trebuchet MS;
                        font-size: 14px;
                        font-weight: 600;">Exercice 03</span></a>
                        </li>

                        <li>
                            <a href="exo4.php" class="active">
                               
                                <span style="
                        color: #585c60;
                        font-family: Trebuchet MS;
                        font-size: 14px;
                        font-weight: 600;">Exercice 04</span></a>
                        </li>

                        <li>
                            <a style="cursor: not-allowed;">
                               
                                <span style="
                        color: #585c60;
                        font-family: Trebuchet MS;
                        font-size: 14px;
                        font-weight: 600;">Exercice 05</span></a>
                        </li>
                        <li>
                            <a style="cursor: not-allowed;">
                               
                                <span style="
                        color: #585c60;
                        font-family: Trebuchet MS;
                        font-size: 14px;
                        font-weight: 600;">Exercice 06</span></a>
                        </li>
                        <li>
                            <a style="cursor: not-allowed;">
                               
                                <span style="
                        color: #585c60;
                        font-family: Trebuchet MS;
                        font-size: 14px;
                        font-weight: 600;">Exercice 07</span></a>
                        </li>
                        <li>
                            <a style="cursor: not-allowed;">
                               
                                <span style="
                        color: #585c60;
                        font-family: Trebuchet MS;
                        font-size: 14px;
                        font-weight: 600;">Exercice 08</span></a>
                        </li>

                        <li>
                            <a style="cursor: not-allowed;">
                               
                                <span style="
                        color: #585c60;
                        font-family: Trebuchet MS;
                        font-size: 14px;
                        font-weight: 600;">Exercice 09</span></a>
                        </li>

                        <li>
                            <a style="cursor: not-allowed;">
                               
                                <span style="
                        color: #585c60;
                        font-family: Trebuchet MS;
                        font-size: 14px;
                        font-weight: 600;">Exercice 10</span></a>
                        </li>

                        <li>
                            <a style="cursor: not-allowed;">
                               
                                <span style="
                        color: #585c60;
                        font-family: Trebuchet MS;
                        font-size: 14px;
                        font-weight: 600;">Exercice 11</span></a>
                        </li>

                        <li>
                            <a style="cursor: not-allowed;">
                               
                                <span style="
                        color: #585c60;
                        font-family: Trebuchet MS;
                        font-size: 14px;
                        font-weight: 600;">Exercice 12</span></a>
                        </li>

                        
        
            </ul>
        </div>
        <!-- /.sidebar-collapse -->
    </div>

    <div id="page-wrapper" style="margin:0 0 0 320px">

      
            <form method="POST" class="form-horizontal" enctype="multipart/form-data">
            
            <div class="row" style=" padding-left: 140px; padding-right: 100px;">


           <div style="margin-top: 70px;font-family: cabin;font-size: 20px;">
           Calculer T(n) de l'algorithme suivant ? </div>
   <br><br>
   <div style="margin-left:250px;
   font-family: consolas;
   font-size: 16px;
   font-weight: 600;">
            début<br>
            Pour i ← 1 à n<br>
            Pour j ← 1 à i<br>
            afficher("hello");<br>
            j ← j+1;<br>
            i ← i+2;<br>
            fin pour<br>
            fin pour<br>
            fin</div>

            <br><br><br>
            <button name="reponse" style="    margin-left: 90px;
    border: none;
    padding: 9px 19px;
    border-radius: 2px;
    background: #337ab7;
    color: white;">Reponse ...</button>
           
        <br>
<br>

<?php 
             if (isset($_POST['reponse'])) 
             {  
             ?>
        <div style="margin-left: 253px;
    font-size: 19px;
    font-family: cabin;
    font-weight: 500;">T(n) = 6n<sup>2</sup>+2n+1</div>
             <?php
                }?>

            <!-- /.row -->
            <div class="btn-group" role="group" aria-label="Basic example" style="    float: right;
    margin-right: -48px;
    margin-top: 28px;">
                <a href="exo3.php"><img style="margin-right: 7px;width:32px" src="../img/previous.png"></a>
                <a href="exo5.php" ><img style="width:32px" src="../img/next.png"></a>
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