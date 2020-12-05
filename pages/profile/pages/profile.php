<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Compte Utilisateur</title>

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

    <link href="../dist/css/component.css" rel="stylesheet">
    
    <link href="../dist/css/style2.css" rel="stylesheet">
    
    <link id="t-colors" href="../dist/css/default.css" rel="stylesheet">

    <style>
        a:hover
        {
            color:red;
        }
    </style>
    
</head>

<body >
<?php
session_start();
error_reporting(0);
$con = new mysqli('localhost','root','','ensaevent'); ?>

    <!-- Navigation -->
    <nav class="navbar navbar-custom " role="navigation" style="background-color: #292c2f;border:none;">

<div class="container navigation">

<div class="navbar-header page-scroll">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
            <i class="fa fa-bars"></i>
          </button>
          <a class="navbar-brand" href="../../index/index2.php">
            <h4 style="margin-left: -20px;
    margin-top: -7px;
    text-transform: initial;
    font-family: Cairo;
    font-weight: bold;
    font-size: 35.82px;
    color: #00a0dce3;">event<span style="font-family: Cairo;
    font-weight: bold;
    font-size: 32px;
    color: #ffffffe6;">UP<span></h4>
          </a>
        </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
        <ul class="nav navbar-nav" style="margin-top: 7px;">
        <li><a href="../../browse/pages/parcourir.php" style="color: #f5f5f5;
FONT-FAMILY: cabin;
letter-spacing: 1px;
font-size: 13px;">PARCOURIR</a></li>

        <li class="dropdown">
        <a href="#" class="dropdown-toggle" data-toggle="dropdown" style="color: #f5f5f5;
FONT-FAMILY: cabin;
letter-spacing: 1px;
font-size: 13px;">AIDE<b class="caret"></b></a>

        <ul class="dropdown-menu" style="background-color: #292c2f;border:none">
            <li style="border-bottom: none"><a href="#" style="color: #f5f5f5;
FONT-FAMILY: cabin;
letter-spacing: 0.5px;
font-size: 12px;">COMMENT CA MARCHE ?</a>
            </li>

            <li style="border-bottom: 0.2px solid #999999;"><a href="#" style="color: #f5f5f5;
FONT-FAMILY: cabin;
letter-spacing: 0.5px;
font-size: 12px;">OÙ SE TROUVE MES BILLETS ?</a></li>

            <li><a href="#" style="color: #f5f5f5;
FONT-FAMILY: cabin;
letter-spacing: 0.5px;
font-size: 12px;">HELP CENTER</a></li>

        </ul>
        </li>

        <li><a href="../../createevent/pages/infos.php" style="color: #f5f5f5;
FONT-FAMILY: cabin;
letter-spacing: 1px;
font-size: 14px;">CRÉE UN ÉVENEMENT</a></li>

<li class="dropdown">
    <a href="#" id="carettt" class="dropdown-toggle" data-toggle="dropdown" style="color: #f5f5f5;"><img src="../../browse/img/admiine.png" style="width: 25px;
        height: 25px;
        margin-top: -2px;
        margin-right: -3px;">
        <b class="caret"></b></a>
    <ul class="dropdown-menu" style="background-color: #292c2f;border:none">
        <li style="border-bottom: 0.1px solid #4f4f4f"><a href="../../browse/pages/parcourir.php" style="color: #f5f5f5;
FONT-FAMILY: cabin;
letter-spacing: 0.5px;
font-size: 12px;">PARCOURIR</a></li>

<?php
    $idParticip=$_SESSION['id_particip'];?>

        <li style="border-bottom: none"><a href="#" style="color: #f5f5f5;
FONT-FAMILY: cabin;
letter-spacing: 0.5px;
font-size: 12px;">
<?php echo"BILLETS (0)";
?></a></li>


        <li style="border-bottom: 0.1px solid #4f4f4f"><a href="#" style="color: #f5f5f5;
FONT-FAMILY: cabin;
letter-spacing: 0.5px;
font-size: 12px;">
<?php echo"AIMÉ (0)";?></a></li>

        <li style="border-bottom: none"><a href="../../createevent/pages/eventManager.php" style="color: #f5f5f5;
FONT-FAMILY: cabin;
letter-spacing: 0.5px;
font-size: 12px;">GÉRER LES ÉVENEMENS</a></li>

        <li style="border-bottom: 0.1px solid #4f4f4f"><a href="../../compte/pages/organisateur.php" style="color: #f5f5f5;
FONT-FAMILY: cabin;
letter-spacing: 0.5px;
font-size: 12px;">PROFILE D'ORGANISATEUR</a></li>

        <li style="border-bottom: none"><a href="../../compte/pages/participant.php" style="color: #f5f5f5;
FONT-FAMILY: cabin;
letter-spacing: 0.5px;
font-size: 12px;">PARAMÉTRES DE COMPTE</a></li>

        <li style="border-bottom: none"><a href="../../createevent/pages/infos.php" style="color: #f5f5f5;
FONT-FAMILY: cabin;
letter-spacing: 0.5px;
font-size: 12px;">CRÉE UN ÉVENEMENT</a></li>

        <li><a href="../../../login/login.php" style="color: #f5f5f5;
FONT-FAMILY: cabin;
letter-spacing: 0.5px;
font-size: 12px;">SE DÉCONNECTER</a></li>
    </ul>
    </li>

</ul>
</div>
<!-- /.navbar-collapse -->
</div>
<!-- /.container -->
</nav>
    <!-- /.navbar-header -->
    <!-- /.navbar-top-links -->


    <div id="page-wrapper" style="    padding-left: 76px;
    padding-right: 0px;
    background-color: transparent;
    min-height: 748px;">
        <form method="POST" class="form-horizontal" enctype="multipart/form-data">
        <div style="display:flex">
                            <div class="row" style="color: #292c2f;
    padding-left: 50px;
    padding-right: 25px;
    margin-top: 28px;
    width: 403px;
    height: 628px;
    border-radius: 28px;
    background: white;
    box-sizing: content-box;
    box-shadow: 0px 0px 7px -5px black;">
                                <div class="col-lg-12" style="display: inline-flex;margin-bottom: 33px;margin-left: 130px;">
                                    <img src="avv.png" style="width: 150px;
    color: rgba(233, 233, 233, 0.925);
    margin-left: -27px;
    padding-top: 34px;
    margin-bottom: -10px;
}" aria-hidden="true"></i>
                                </div>

                                <br><br><br><br><br><br>
                                <?php
                                    $sel_req = "SELECT * FROM participant where id_particip=1";
                                    $sel = $con->query($sel_req);
                                
                                    $row = $sel->fetch_array();
                                    
                                ?>

                                    <div class="form-group form-inline">
                                    <label>Photo de profil :</label>
                                    <input type="file" name="userProfimg" id="file-2" class="inputfile inputfile-2"
                                        data-multiple-caption="{count} files selected" multiple />
                                    <label for="file-2" class="form-control" style="margin-left: 34px;width: 60%;"><i
                                            class="fa fa-upload" aria-hidden="true"></i>
                                        <span style="padding-left: 7px;">Choiser une image &hellip;</span></label>
                                    </div>


                                <div class="form-group form-inline ">
                                    <label>Nom d'utilisateur :</label>
                                    <input type="text" class="form-control" name="userName" placeholder="Soyez clair et précis"
                                    value= "<?php echo $row['user_nam']; ?>"
                                    style="margin-left: 20px;width: 60%;">
                                </div>
                                <br>
                                <div class="form-group form-inline">
                                    <label>Mots de pass :</label>
                                    <input type="text" class="form-control" name="userPass" placeholder="Soyez clair et précis"
                                    value= "<?php echo $row['user_pass']; ?>"
                                    style="margin-left: 45px;width: 60%;">
                                </div>
                                <br>
                                <div class="form-group form-inline">
                                    <label>Adresse e-mail :</label>
                                    <input type="email" class="form-control" name="userMail" placeholder="Soyez clair et précis"
                                    value= "<?php echo $row['user_mail']; ?>"
                                    style="margin-left: 35px;width: 60%;">
                                </div>
                                <br>
                                <div class="form-group form-inline">
                                    <label>Téléphone :</label>
                                    <input type="text" class="form-control" name="userTel" placeholder="Soyez clair et précis"
                                    value= "<?php echo $row['user_tel']; ?>"
                                    style="margin-left: 64px;width: 60%;">
                                </div>

                                <br>

                                        <!-- /.row -->
                            <div class="btn-group" role="group" aria-label="Basic example"
                                style="float: right;
    margin-right: 97px;
    margin-top: 6px;
    margin-bottom: 20px;">
                                <input type="reset" class="btn btn-outline-primary" style="margin-right:15px;width: 100px;color:black"
                                    value="Annuler">
                                <input type="submit" name="ikhan" class="btn btn-primary" value="Sauvegarder">
                            </div>
                </div>






                <div class="row" style="margin-left: 78px;
    padding-left: 60px;
    padding-top: 23px;
    margin-top: 28px;
    width: 631px;
    height: 607px;
    border-radius: 28px;
    background: white;
    box-sizing: content-box;
    box-shadow: 0px 0px 7px -5px black;">
                <div class="col-lg-12" style="display: inline-flex;margin-bottom: 33px;margin-left: 130px;">

                </div>


                <?php
                    $sel_req = "SELECT * FROM participant where id_particip=1";
                    $sel = $con->query($sel_req);
                
                    $row = $sel->fetch_array();
                    
                ?>
                
                <div class="form-group form-inline " style="display:flex">
                    <label>Cours (Text) :</label><div style="margin-left: 46px;
    height: 30px;
    width: 63%;
    float: right;
    background: #eaeaea;
    border-radius: 20px;"></div>
    <div style="margin-left: 137px;
    height: 30px;
    width: 22%;
    float: right;
    background: #3d77a9;
    border-radius: 20px;
    position: absolute;
    border-bottom-right-radius: 0px;
    border-top-right-radius: 0px;"><div style="    margin-left: 425px;
    height: 31px;
    width: 10%;
    float: right;
    background: #eaeaea;
    border-radius: 20px;
    position: absolute;
    font-weight: 600;
    font-family: cursive;
    font-size: 11px;
    padding-bottom: 0px;
    padding-top: 7px;
    padding-left: 0px;
    text-align: center;">
    <?php 
    if($_SESSION['nbr_text']==4)
    echo "100%";
    if($_SESSION['nbr_text']==3)
    echo "75%";
    if($_SESSION['nbr_text']==2)
    echo "50%";
    if($_SESSION['nbr_text']==1)
    echo "25%";
    if($_SESSION['nbr_text']==0)
    echo "0%";
    ?>
    </div></div>
                </div>
                <br>


                <div class="form-group form-inline" style="display:flex">
                    <label>Cours (Video) :</label>
                    <div style="margin-left: 35px;
    height: 30px;
    width: 63%;
    float: right;
    background: #eaeaea;
    border-radius: 20px;"></div>
    <div style="margin-left: 136px;
    height: 30px;
    width: 22%;
    float: right;
    background: #3d77a9;
    border-radius: 20px;
    position: absolute;
    border-bottom-right-radius: 0px;
    border-top-right-radius: 0px;"><div style="    margin-left: 425px;
    height: 31px;
    width: 10%;
    float: right;
    background: #eaeaea;
    border-radius: 20px;
    position: absolute;
    font-weight: 600;
    font-family: cursive;
    font-size: 11px;
    padding-bottom: 0px;
    padding-top: 7px;
    padding-left: 0px;
    text-align: center;">25%</div></div>
                </div>
                <br>


                <div class="form-group form-inline" style="display:flex">
                    <label>Exercice :</label>
                                       <div style="margin-left: 69px;
    height: 30px;
    width: 63%;
    float: right;
    background: #eaeaea;
    border-radius: 20px;"></div>
    <div style="margin-left: 136px;
    height: 30px;
    width: 22%;
    float: right;
    background: #3d77a9;
    border-radius: 20px;
    position: absolute;
    border-bottom-right-radius: 0px;
    border-top-right-radius: 0px;"><div style="    margin-left: 425px;
    height: 31px;
    width: 10%;
    float: right;
    background: #eaeaea;
    border-radius: 20px;
    position: absolute;
    font-weight: 600;
    font-family: cursive;
    font-size: 11px;
    padding-bottom: 0px;
    padding-top: 7px;
    padding-left: 0px;
    text-align: center;">
    <?php 
    if($_SESSION['nbr_exo']==0)
    echo "0%";
    if($_SESSION['nbr_exo']==1)
    echo "8%";
    if($_SESSION['nbr_exo']==2)
    echo "16%";
    if($_SESSION['nbr_exo']==3)
    echo "24%";
    if($_SESSION['nbr_exo']==4)
    echo "32%";
    if($_SESSION['nbr_exo']==5)
    echo "40%";
    if($_SESSION['nbr_exo']==6)
    echo "48%";
    if($_SESSION['nbr_exo']==7)
    echo "56%";
    if($_SESSION['nbr_exo']==8)
    echo "64%";
    if($_SESSION['nbr_exo']==9)
    echo "72%";
    if($_SESSION['nbr_exo']==10)
    echo "80%";
    if($_SESSION['nbr_exo']==11)
    echo "88%";
    if($_SESSION['nbr_exo']==12)
    echo "100%";
    ?></div></div>
                </div>
                <br>


                <div class="form-group form-inline" style="display:flex">
                    <label>Quiz :</label>
                                    <div style="margin-left: 95px;
    height: 30px;
    width: 63%;
    float: right;
    background: #eaeaea;
    border-radius: 20px;"></div>
    <div style="margin-left: 135px;
    height: 30px;
    width: 22%;
    float: right;
    background: #3d77a9;
    border-radius: 20px;
    position: absolute;
    border-bottom-right-radius: 0px;
    border-top-right-radius: 0px;"><div style="    margin-left: 425px;
    height: 31px;
    width: 10%;
    float: right;
    background: #eaeaea;
    border-radius: 20px;
    position: absolute;
    font-weight: 600;
    font-family: cursive;
    font-size: 11px;
    padding-bottom: 0px;
    padding-top: 7px;
    padding-left: 0px;
    text-align: center;">
     <?php 
    if($_SESSION['nbr_quiz']==0)
    echo "0%";
    if($_SESSION['nbr_quiz']==1)
    echo "8%";
    if($_SESSION['nbr_quiz']==2)
    echo "16%";
    if($_SESSION['nbr_quiz']==3)
    echo "24%";
    if($_SESSION['nbr_quiz']==4)
    echo "32%";
    if($_SESSION['nbr_quiz']==5)
    echo "40%";
    if($_SESSION['nbr_quiz']==6)
    echo "48%";
    if($_SESSION['nbr_quiz']==7)
    echo "56%";
    if($_SESSION['nbr_quiz']==8)
    echo "64%";
    if($_SESSION['nbr_quiz']==9)
    echo "72%";
    if($_SESSION['nbr_quiz']==10)
    echo "80%";
    if($_SESSION['nbr_quiz']==11)
    echo "88%";
    if($_SESSION['nbr_quiz']==12)
    echo "100%";
    ?></div></div>
                </div>
                <br><br><br>                 
                <div class="form-group form-inline">
                                   
                                    <label>Chapitre I : Rappels sur l'algorithmique ............................................................................. 90%</label>
                                </div>                                <br>
                                <div class="form-group form-inline">
                                    <label>Chapitre II : Introduction à la complexité Algorithmique .................................................. 60%</label>

                                </div>                                <br>
                                <div class="form-group form-inline">
                                    <label>Chapitre III : Complexité Asymptotique .............................................................................. 50%</label>

                                </div>
                                <br>
                <div class="form-group form-inline">
                    <label>Chapitre VI : Determination de Comlpexité Algorithmique ............................................... 20%</label>

                </div>



            </div>





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
    <script src="../dist/js/custom-file-input.js"></script>

    <?php

if (isset($_POST['ikhan'])) {

    $userName=$_POST['userName'];
    $userPass=$_POST['userPass'];
    $userMail=$_POST['userMail'];
    $userTel=$_POST['userTel'];
    $userAddrs=$_POST['userAddrs'];

  	// Get image name
  	$image = $_FILES['userProfimg']['name'];
  	// image file directory
  	$target = "../../../user_imgs/".basename($image);
      $upd_req = "update participant
      set user_nam ='$userName',
      user_pass ='$userPass',
      user_mail ='$userMail',
      user_tel ='$userTel',
      user_addrs ='$userAddrs',
      user_profimg ='$image' where id_particip=$idParticip";

      
      $upd = $con->query($upd_req);
      move_uploaded_file($_FILES['userProfimg']['tmp_name'], $target);

      echo "<script> window.location.assign('participant.php')</script>";


}
$con->close();
?>






</body>

</html>