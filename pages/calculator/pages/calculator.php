<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Informations</title>

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

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body style="background-image:url('../img/dd.svg')">

<?php
session_start();
error_reporting(0);
$con = new mysqli('localhost','root','','ensaevent');
?>
    <!-- Navigation -->
    <nav class="navbar navbar-custom " role="navigation" style="background-color: #292c2f;border-bottom: red;">

<div class="container navigation">

<div class="navbar-header page-scroll">
  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
    <i class="fa fa-bars"></i>
  </button>
  <a class="navbar-brand" href="../../index/index2.php">
    <h4 style="margin-left: -80px;
margin-top: -8px;
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
    <div class="collapse navbar-collapse navbar-right navbar-main-collapse" style="margin-right: -30px;">
        <ul class="nav navbar-nav"style="margin-top: 9px;">
        
<?php
$idParticip=$_SESSION['id_particip'];?>

<li><a href="../../index/tuto.php" style="color: #f5f5f5;
FONT-FAMILY: cabin;
letter-spacing: 1px;
font-size: 13px;"><img src="../img/admiine.png" style="width: 25px;
height: 25px;
margin-top: -5px;
margin-right: 3px;">TUTORIAL</a></li>

<li><a href="../../exercice/pages/exo1.php" style="color: #f5f5f5;
FONT-FAMILY: cabin;
letter-spacing: 1px;
font-size: 13px;"><img src="../img/admiine.png" style="width: 25px;
height: 25px;
margin-top: -5px;
margin-right: 3px;">EXERCICE</a></li>


<li><a href="../../calculator/pages/calculator.php" style="color: #f5f5f5;
FONT-FAMILY: cabin;
letter-spacing: 1px;
font-size: 14px;"><img src="../img/admiine.png" style="width: 25px;
height: 25px;
margin-top: -5px;
margin-right: 3px;">CALCULATOR</a></li>

<li><a href="../../quiz/pages/quiz1.php" style="color: #f5f5f5;
FONT-FAMILY: cabin;
letter-spacing: 1px;
font-size: 14px;"><img src="../img/admiine.png" style="width: 25px;
height: 25px;
margin-top: -5px;
margin-right: 3px;">QUIZ</a></li>

<li>
<a href="../../profile/pages/participant.php" style="color: #f5f5f5;
FONT-FAMILY: cabin;
letter-spacing: 1px;
font-size: 14px;"><img src="../img/admiine.png" style="width: 25px;
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


    <div id="page-wrapper" style="background-image:url('../img/dd.svg');margin:0 0 0 0;background-color: #9bbb9f;">


      <form method="POST" class="form-horizontal" action="calculator.php" enctype="multipart/form-data">
      <div style="display:flex">  

        <div class="row" style="padding-left: 0px;
    padding-right: 0px;
    margin-left: 26px;
    margin-top: 59px;
    width: 800px;">

            <div style="font-family: cabin;
    font-weight: 600;
    font-size: 18px;
    color: black;
    background: white;
    padding: 10px;
    width: 828px;
    position: absolute;
    margin-top: -24px;
    margin-left: -14px;
    padding-left: 14px;">Charger un algorithme :
            </div>
            <br>

            <div class="form-group">
                <textarea class="form-control" name="eventDescription" rows="17"></textarea>
            </div>

        <!-- /.row -->
        <div class="btn-group" role="group" aria-label="Basic example" style="float: left;
    margin-left: 273px;
    margin-top: 12px;">
                <input type="reset" class="btn btn-outline-primary" style="margin-right:15px;width: 100px;"
                    value="Annuler">
                <input type="submit" name="ikhano" class="btn btn-primary" value="Sauvegarder">
            </div>
            
        </div>

        <div class="row" style="background: #292c2f;
    padding: 50px;
    padding-top:85px;
    margin-left: 30px;
    margin-top: 80px;
    width: 511px;
    height: 353px;
    display: flex;
    color: white;">
            <div>
            <p style="font-family: cairo;font-weight: 600;font-size: 15px;">Nombre d'instructions : </p>

            <p style="font-family: cairo;font-weight: 600;font-size: 15px;padding-top:35px">Equation T(n) :</p>

            <p style="font-family: cairo;font-weight: 600;font-size: 15px;padding-top:35px">Complexity :</p>

            </div>
            <div style="text-align:right;    margin-left: 150px;">
            <?php
  if (isset($_POST['ikhano'])) {//$nom="Hassan"; $email="Hassan@gmail.fr";
    $eventDescription = $_POST["eventDescription"];
    $fp = fopen("fichier.txt","w"); // ouverture du fichier en écriture à la fin
    fputs($fp, $eventDescription); // on écrit le nom et email dans le fichier
    fclose($fp);



if (!$fp = fopen("fichier.txt","r+"))
{echo "Echec de l'ouverture
du fichier";}
else { $file="";
$i=0;
$k=0;
$j=0;
$l=0;
$n=0;
$woord;
while(!feof($fp)) {
// On récupère une ligne
$Ligne = fgets($fp,255);

// On stocke l'ensemble des lignes dans une variable
$file .= $Ligne. "<BR>";
//echo $Ligne;
$woord = explode(" ",$Ligne);
//echo "<br><br>".$woord[0]."<br>";
$i++;

    if (stristr($woord[0],"pour"))
    {
    $k=$i;
    $g=$woord[5];
    }

    if (stristr($woord[0],"fin") && stristr($woord[1],"pour"))
    {
    $j=$i;
    }

    for($m=0;$m<count($woord);$m++)
    {
        if (stristr($woord[$m],";"))
        {
        $l++;
        }
    }

}

$n=$j-$k;
$c=$l-$n+3;
$v=$n*$g+$c;

echo    "<p style='font-family: cairo;font-weight: 600;font-size: 15px;'>".$i++." Instructions</p>";
echo "<p style='font-family: cairo;font-weight: 600;font-size: 15px;padding-top:35px'>T(n)=".$n."n+".$c."</p>";
echo "<p style='font-family: cairo;font-weight: 600;font-size: 15px;padding-top:35px'>".$v."</p>";
fclose($fp);
}}?>
            
            
            </div>
            
            
            <br>

        </div>

</div>

</form>




<form method="POST" class="form-horizontal" action="calculator.php" enctype="multipart/form-data">



<br>






        <div style="display:flex">  

<div class="row" style="padding-left: 0px;
padding-right: 0px;
margin-left: 26px;
margin-top: 32px;
width: 800px;">

    <div style="font-family: cabin;
font-weight: 600;
font-size: 18px;
color: black;
background: white;
padding: 10px;
width: 828px;
position: absolute;
margin-top: -24px;
margin-left: -14px;
padding-left: 14px;">Charger une expression de complexité :
    </div>
    <br>

    <div class="form-group">
        <textarea class="form-control" name="eventDescription2" id="idd" rows="3"></textarea>
    </div>

<!-- /.row -->
<div class="btn-group" role="group" aria-label="Basic example" style="float: left;
margin-left: 273px;
margin-top: 12px;">
        <input type="reset" class="btn btn-outline-primary" style="margin-right:15px;width: 100px;"
            value="Annuler">
        <input type="submit" name="ikhani" class="btn btn-primary" value="Sauvegarder">
    </div>
    
</div>

<div class="row" style="background: #292c2f;
    padding: 50px;
    margin-left: 30px;
    margin-top: 53px;
    width: 511px;
    height: 12px;
    display: flex;
    color: white;
    padding-top: 28px;
    padding-bottom: 45px;">
    
    <div>
    <p style="font-family: cairo;font-weight: 600;font-size: 15px;padding-top:0px">Valeur O :</p>
    </div>
    <div style="text-align:right;    margin-left: 310px;">

<?php
    $eventDescription2 = $_POST["eventDescription2"];
    if (isset($_POST['ikhani'])) 
{

if (strstr($eventDescription2,"nn"))
{echo" <p style='font-family: cairo;font-weight: 600;font-size: 15px;'>O(n<sup>n</sup>)</p>";exit(0);
?>
<script>
document.getElementById("idd").innerHTML("sss");
</script>
<?php
} 
if (strstr($eventDescription2,"n!"))
{echo" <p style='font-family: cairo;font-weight: 600;font-size: 15px;'>O(n!</p>";exit(0);}  
if (strstr($eventDescription2,"nc"))
{echo" <p style='font-family: cairo;font-weight: 600;font-size: 15px;'>O(n<sup>c</sup>)</p>";exit(0);}
if (strstr($eventDescription2,"n"))
{echo" <p style='font-family: cairo;font-weight: 600;font-size: 15px;'>O(n)</p>";exit(0);}
if (strstr($eventDescription2,"vn"))
{echo" <p style='font-family: cairo;font-weight: 600;font-size: 15px;'>O(vn)</p>";} 
if (strstr($eventDescription2,"log2n"))
{echo" <p style='font-family: cairo;font-weight: 600;font-size: 15px;'>O(log(n))</p>";} 
if (strstr($eventDescription2,"loglog2n"))
{echo" <p style='font-family: cairo;font-weight: 600;font-size: 15px;'>O(loglog(n))</p>";} 
else
{echo" <p style='font-family: cairo;font-weight: 600;font-size: 15px;'>O(1)</p>";} 

}

?>



    </div>
    
    
    <br>

</div>









            
            
        </form>
        </div>



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

    $idEvent=$_SESSION['id_event'];

    $eventDescription = $_POST["eventDescription"];
  	// Get image name
  	$image = $_FILES['eventImg']['name'];
  	// image file directory
  	$target = "../../../cover_imgs/".basename($image);
      $upd_req = "update evenement set event_img ='$image',event_description ='$eventDescription' where id_event=$idEvent";
      $upd = $con->query($upd_req);
  	move_uploaded_file($_FILES['eventImg']['tmp_name'], $target);

      if(!$upd)
      {
          echo"Probleme d'insertion<br>";
      }
      else
      echo "<script> window.location.assign('billets.php')</script>";

}

         
  $con->close();
/*UPDATE `evenement` SET `event_img`= null WHERE id_event = 1;*/
?>



</body>

</html>