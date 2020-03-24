<head>	<script type="text/javascript" >
function printplayer(layer)
{
var generator =window.open(",'name,");
var layetext =document.getElementById(layer);
generator.document.write(layetext.innerHTML.replace("Print Me"));

generator.document.close();
generator.print();
generator.close();
}
</script></head>
<?php
require '../includes/functions.php';
require '../vendor/autoload.php';

use \RedBeanPHP\R as R;

R::setup('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASSWORD);


include 'header.php';
//include 'dbconn.php';
?>

   
   <h4 align="center">welcome hshshsh?></h4>

<title>player Info</title>
<body>
 
 <?php
$id = $_GET['id'];
 $row= R::load('volunteer',$id);
?>
 <div class="br-mainpanel">
	 <div class="br-pageheader">
		 <nav class="breadcrumb pd-0 mg-0 tx-12">
			 <a class="breadcrumb-item" href="index.html">Bracket</a>
			 <a class="breadcrumb-item" href="#">Tables</a>
			 <span class="breadcrumb-item active">Data Table</span>
		 </nav>
	 </div><!-- br-pageheader -->
	 <div class="br-pagetitle">
		 <i class="icon icon ion-ios-bookmarks-outline"></i>
		 <div>
			 <h4>Football</h4>
			 <p class="mg-b-0">MashEast</p>
		 </div>
	 </div><!-- d-flex -->
	 <div class="br-pagebody">
		 <div class="br-section-wrapper">
			<h4>
<a href="#" id="print" onClick="javascript:printplayer('div-id-name')">Print</a></h4>
				<div class="col-md-8 col-md-offset-3">

  <table class="table"   width="600px">
		   <div class="display">       
 <!--<tr><td><p align="center"> MASHEAST YES  GAMES</p></td></tr>-->
<p align="center"> 2019
</p>                 
			   <tr><td><img src="../image/eagle.png" height="50px" width="50px"></td><td>Zimbabwe National YES Games </td><td colspan=""><img width="50px" height="50px" src="../image/cort.png"></td></tr>
			  <tr><td colspan="6"><div class="panel panel-primary" id="div-id-name">        <div class="panel-heading" style="background-color:green;color: white">MashEast....football</div></td></tr>

 <tr align="center"><td rowspan="5">

<img  class="img-fluid rounded-circle" src="<?php echo ''. $row->image .'' ;?>" height="250px" width="250px"></td>
 </tr>
 <tr width="300"><td width="300">
  <strong> FullName </strong> : <span><?php echo '' . $row->fname . '   '.  $row->sname.'' ;?></span></td></tr>
<tr><td width="300">
   <b>ID Number  :</b>  <span><?php echo ''. $row->idno .''; ?></span>
  </td>
<tr><td width="300"> 
 <b>Organisation :</b> <span><?php echo 'Telone '; ?></span>
</td>
<tr><td width="300">
 <b> </b> <span><?php echo 'Zone Access' ?></span>
  </td>
			   <tr><td colspan="3"><img src="../image/yess.png" width="40px" height="40"></td><td colspan="3"><img width="40px" height="40" src="../image/yt.png"></td></tr>
			   <tr><td class="text-center" colspan="4"> #Child Rights,My Responsibilities</td></tr>

</div>


<style></style>


    </div><!-- br-section-wrapper -->
				</div><!-- br-pagebody -->
		 </div>
<?php

//include "footer.php";
?>