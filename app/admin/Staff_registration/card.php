
<?php
session_start();
$db=mysqli_connect("localhost", "root", "","src_db");
require "vendor/autoload.php";
//if(!isset($_COOKIE['adminid'])&&$_COOKIE['adminemail']){ header('location:index.php');
  //    exit;}
	

$serial="0001";
$Bar = new Picqer\Barcode\BarcodeGeneratorHTML();
$code = $Bar->getBarcode($serial, $Bar::TYPE_CODE_128);
?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
	<head>
		<title>card</title>
<style>
  body{
		  	background:#008080;
		  }
#bg {
  width: 1000px;
  height: 450px;
 
  margin:60px;
 	float: left; 
 		
}

#id {
  width:250px;
  height:450px;
  position:absolute;
  opacity: 0.88;
font-family: sans-serif;

		  	transition: 0.4s;
		  	background-color: #FFFFFF;
		  	border-radius: 2%;
		}

#id::before {
  content: "";
  position: absolute;
  width: 100%;
  height: 100%;
  background: url('images/malawi.png');   /*if you want to change the background image replace logo.png*/
  background-repeat:repeat-x;
  background-size: 250px 450px;
  opacity: 0.2;
  z-index: -1;
  text-align:center;
 
}
 .container{
		  	font-size: 12px;
		  	font-family: sans-serif;
		    
		  }
		 .id-1{
		  	transition: 0.4s;
		  	width:250px;
		  	height:450px;
		  	background: #FFFFFF;
		  	text-align:center;
		  	font-size: 16px;
		  	font-family: sans-serif;
		  	float: left;
		  	margin:auto;		  	
		  	margin-left:270px;
		  	border-radius:2%;

		  	
		  }
</style>
	</head>
<?php 
include_once("db_connect.php");

$sqluse ="SELECT * FROM Inorg WHERE id=1 ";
$retrieve = mysqli_query($db,$sqluse);
    $numb=mysqli_num_rows($retrieve); 
	while($foundk = mysqli_fetch_array($retrieve))
	                                     {
                                              $profile= $foundk['pname'];
											  $name = $foundk['name'];
		                                  }
?>
	<body>
		<script type="text/javascript">	
 		
 	window.print();
 </script>
 
      <div id="bg">
            <div id="id">
            	 <table>
        <tr> <td>
        	<?php if($numb!=0 ){
                                    if($profile!=""){echo"<img src='../../image/yess.png'  width='70px' height='70px' alt=''>";}
									else{
										 echo "<img src='../../image/yess.png' alt='Avatar'  width='70px' height='70px'>";
									    }	   
                               }else{
			?>
        	<img src="../../image/yess.png" alt="Avatar"  width="70px" height="70px"> <?php }?>
        	</td>
        <td><h4><b>Mashonaland East YES Games</b></h4></td>
        </tr>
		             <tr><td></td><td colspan="4"><h6><b>05 - 12 DECEMBER 2019</b></h6></td>
       </tr>
    </table><center>
        <?php  
     $idx = $_GET['id'];
      $sqlmember ="SELECT * FROM players WHERE id='$idx' ";
			       $retrieve = mysqli_query($db,$sqlmember);
				                    $count=0;
                     while($found = mysqli_fetch_array($retrieve))
	                 {
                      // $title=$found['title'];
                       $firstname=$found['fname'];
                       $sirname=$found['sname'];
                       $rank='Zone 8';
                       $id=$found['id'];
                     $dept=$found['province'];
                     $bacode=$found['player'];
			                $count=$count+1;
			              //  $get_time=$found['Time'];
			                $time=time();
			            $pass=$found['idno'];
			              $names=$firstname." ".$sirname;
						  $profile= $found['image'];
					 }  	 

             	 	
             	 	if($profile!=""){          
										   echo"<img src='../../masheast/$profile' height='175px' width='200px' alt='' style='border: 2px solid black;'>";
									    }
								else{
									echo"<img src='../../image/yess.png' height='175px' width='200px' alt='' style='border: 2px solid black;'>";
														     	
									} 
             	 	 ?>   </center>              <div class="container" align="center">
      
      	<h2 style="margin-top:2%">Name:
      	<?php if(isset($names)){echo $names;} ?></h2>
      	<h2 style="margin-top:-4%">Role :<?php if(isset($rank)){ echo 'Player';} ?></h2>
       <h2 style="margin-top:-4%">NATIONAL ID:<?php if(isset($pass)){ echo$pass;} ?></h2>
      	<h2 style="margin-top:-4%">PROVINCE:<?php if(isset($dept)){ echo$dept;} ?></h2>
      </div>
            </div>
            <div class="id-1">
    	 
                     	 <center><img src="images/malawi.png" alt="Avatar" width="200px" height="175px" >        
       <div class="container" align="center">
      <p style="margin:auto">The bearer whose photograph appears overleaf is a staff of</p>
      	<h2 style="color:#00BFFF;margin-left:2%">Mashonaland East YES Games</h2>
      <p style="margin:auto">If lost and found please return to the nearest police station</p>
        <hr align="center" style="border: 1px solid black;width:80%;margin-top:13%"></hr> 

      	<p align="center" style="margin-top:-2%">Authorised Signature</p>
      		<p> <?php if(isset($code)){ echo$code;}?>
                <?php if(isset($bacode)){ echo$bacode;}?>

	        </p>
      		 <?php if(isset($name)){ echo"Property of ".$name;}?> </center>
     </div>
</div>

        </div>
	</body>
</html>
