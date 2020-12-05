<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Acceuill</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">
    

    <!-- DataTables CSS -->
    <link href="vendor/datatables-plugins/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="vendor/datatables-responsive/dataTables.responsive.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <link href="dist/css/stylefooter.css" rel="stylesheet">

    <link href="dist/css/stylecontactus.css" rel="stylesheet">

    <link href="dist/css/cardevntstyle.css" rel="stylesheet">

    <link id="t-colors" href="dist/css/default.css" rel="stylesheet">




</head>

<body style="background-image:url('img/dd.svg')" >

<?php
session_start();
error_reporting(0);
  $con = new mysqli('localhost','root','','ensaevent'); 
  ?>

<nav class="navbar navbar-custom " role="navigation" style="background-color: #292c2f;    height: 64px;">

        <div class="container navigation">

        <div class="navbar-header page-scroll">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
            <i class="fa fa-bars"></i>
          </button>
          <a class="navbar-brand" href="../../index/index2.php">
            <h4 style="margin-left: -80px;
    margin-top: -9px;
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
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse" style="margin-top: -6px;">
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












    <section id="boxes" class="home-section paddingtop-80" style="background: transparent;">
    <form method="POST">
      <div class="container">
        <div class="row" id="evntrow" style="margin-top: 225px;margin-left:65px">



          <div id="cardevnt">
          <a href="../../pages/tutorial/pages/text.php">
          <?php
                $sel_req = "SELECT * FROM evenement where id_event=2";
                $sel = $con->query($sel_req);
            
                $row = $sel->fetch_array();
                    echo "<img src='../../cover_imgs/".$row['event_img']."' id='evntimg'>";
                    ?></a>


          </div>

          <div id="cardevnt" style="margin-left:150px">
          <a href="../../pages/tutorial/pages/video.php">
          <?php
                $sel_req = "SELECT * FROM evenement where id_event=3";
                $sel = $con->query($sel_req);
            
                $row = $sel->fetch_array();
                    echo "<img src='../../cover_imgs/".$row['event_img']."' id='evntimg'>";
                    ?></a>

        </div>
      </div>
    </form>
    </section>

  



    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Morris Charts JavaScript -->

    <!-- Custom Theme JavaScript -->
    <script src="dist/js/sb-admin-2.js"></script>

    <?php



if(isset($_GET ['eventID']))
{

  $id_EV = $_GET ['eventID'];
$ins_req = "insert into favoris values ($idParticip,$id_EV)";
$ins = $con->query($ins_req);
//    echo "<script> window.location.assign('index.php')</script>";   
}
 $con->close();
 ?>

</body>

</html>