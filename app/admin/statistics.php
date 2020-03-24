<?php

require '../includes/functions.php';
require '../vendor/autoload.php';

use \RedBeanPHP\R as R;

R::setup('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASSWORD);


include "header.php";
 ?>

<link href="styling/external.css" rel="stylesheet">
<link href="styling/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="style.css">

<script src="styling/html5shiv.js"></script>
<script src="styling/respond.min.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

          <h1 align="center">Summary Statistics</h1>
<div class="br-pagebody">
		 <div class="br-section-wrapper">
	 <div class="col-xs-12 col-sm-12 col-md-12">
		 <div class="accordion accordion-1" id="accordion01">
			 <!-- Panel 01 -->
			 <div class="panel">
				 <div class="panel--heading" style="background-color: green">
					 <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion01" href="#collapse01-1" style="color: white">Mash East</a>
				 </div>
				 <div id="collapse01-1" class="panel--body panel-collapse collapse">
					 <div class="table-responsive">
						 <table id="datatable1" class="table display responsive nowrap"  width="auto">
							 <thead style="background-color:green">
							 <tr>
								 <th class="wd-15p">First name</th>
								 <th class="wd-15p">Last name</th>
								 <th class="wd-15p">Category</th>
								 <th class="wd-10p">ID Number</th>
								 <th class="wd-25p">Mobile</th>
								 <th class="wd-25p">Dob</th>
								 <th class="wd-25p">Action</th>
								 <th class="wd-25p">Action2</th>
							 </tr>
							 </thead>
							 <tbody>
                             <?php
                             $players = R::findAll('players','province=?',['Masheast']);


                             foreach ($players as $player) {
                                 $id = $player->id;
                                 $sportcode_id = $player->sportcode;

                                 $sport = R::findOne('sportcode','id=?', [$sportcode_id]);

                                 ?>
								 <tr>
									 <td><?php echo $player->fname ?></td>
									 <td><?php echo $player->sname ?></td>
									 <td><?php echo $sport->title ?></td>
									 <td><?php echo $player->idno ?></td>
									 <td><?php echo $player->mobile ?></td>
									 <td><?php echo $player->dob ?></td>
									 <td>
										 <a href="player_info.php<?php echo  '?id='.$id;  ?>" class="btn btn-success">Card 1</a>
									 </td>
									 <td>
										 <a href="Staff_registration/card.php<?php echo  '?id='.$id;  ?>" class="btn btn-success">Card 2</a>
									 </td>
								 </tr>
                                 <?php
                             }
                             ?>
							 </tbody>
						 </table>
					 </div>
				 </div>
			 </div>
			 <div class="panel">
				 <div class="panel--heading" style="background-color:red">
					 <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion01" href="#collapse01-2">MidLands</a>
				 </div>
				 <div id="collapse01-2" class="panel--body panel-collapse collapse">
					 <div class="table-responsive">
						 <table id="datatable1" class="table display responsive nowrap"  width="auto">
							 <thead style="background-color:red">
							 <tr>
								 <th class="wd-15p">First name</th>
								 <th class="wd-15p">Last name</th>
								 <th class="wd-15p">Category</th>
								 <th class="wd-10p">ID Number</th>
								 <th class="wd-25p">Mobile</th>
								 <th class="wd-25p">Dob</th>
								 <th class="wd-25p">Action</th>
								 <th class="wd-25p">Action2</th>
							 </tr>
							 </thead>
							 <tbody>
                             <?php
                             $players = R::findAll('players','province=?',['Midlands']);


                             foreach ($players as $player) {
                                 $id = $player->id;
                                 $sportcode_id = $player->sportcode;

                                 $sport = R::findOne('sportcode','id=?', [$sportcode_id]);

                                 ?>
								 <tr>
									 <td><?php echo $player->fname ?></td>
									 <td><?php echo $player->sname ?></td>
									 <td><?php echo $sport->title ?></td>
									 <td><?php echo $player->idno ?></td>
									 <td><?php echo $player->mobile ?></td>
									 <td><?php echo $player->dob ?></td>
									 <td>
										 <a href="player_info.php<?php echo  '?id='.$id;  ?>" class="btn btn-success">Card 1</a>
									 </td>
									 <td>
										 <a href="Staff_registration/card.php<?php echo  '?id='.$id;  ?>" class="btn btn-success">Card 2</a>
									 </td>
								 </tr>
                                 <?php
                             }
                             ?>
							 </tbody>
						 </table>
					 </div>
				 </div>
			 </div>
			 <div class="panel">
				 <div class="panel--heading" style="background-color: black">
					 <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion01" href="#collapse01-3" style="color: white">Bulawayo</a>
				 </div>
				 <div id="collapse01-3" class="panel--body panel-collapse collapse">
					 <div class="table-responsive">
						 <table id="datatable1" class="table display responsive nowrap"  width="auto">
							 <thead style="background-color:black">
							 <tr style="color: white">
								 <th class="wd-15p" style="color: white">First name</th>
								 <th class="wd-15p" style="color: white">Last name</th>
								 <th class="wd-15p" style="color: white">Category</th>
								 <th class="wd-10p" style="color: white">ID Number</th>
								 <th class="wd-25p" style="color: white">Mobile</th>
								 <th class="wd-25p" style="color: white">Dob</th>
								 <th class="wd-25p" style="color: white">Action</th>
								 <th class="wd-25p" style="color: white">Action2</th>
							 </tr>
							 </thead>
							 <tbody>
                             <?php
                             $players = R::findAll('players','province=?',['Bulawayo']);


                             foreach ($players as $player) {
                                 $id = $player->id;
                                 $sportcode_id = $player->sportcode;

                                 $sport = R::findOne('sportcode','id=?', [$sportcode_id]);

                                 ?>
								 <tr>
									 <td><?php echo $player->fname ?></td>
									 <td><?php echo $player->sname ?></td>
									 <td><?php echo $sport->title ?></td>
									 <td><?php echo $player->idno ?></td>
									 <td><?php echo $player->mobile ?></td>
									 <td><?php echo $player->dob ?></td>
									 <td>
										 <a href="player_info.php<?php echo  '?id='.$id;  ?>" class="btn btn-success">Card 1</a>
									 </td>
									 <td>
										 <a href="Staff_registration/card.php<?php echo  '?id='.$id;  ?>" class="btn btn-success">Card 2</a>
									 </td>
								 </tr>
                                 <?php
                             }
                             ?>
							 </tbody>
						 </table>
					 </div>
				 </div>
			 </div>
			 <div class="panel">
				 <div class="panel--heading" style="background-color:red">
					 <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion01" href="#collapse01-4">Masvingo</a>
				 </div>
				 <div id="collapse01-4" class="panel--body panel-collapse collapse">
					 <div class="table-responsive">
						 <table id="datatable1" class="table display responsive nowrap"  width="auto">
							 <thead style="background-color:red">
							 <tr>
								 <th class="wd-15p">First name</th>
								 <th class="wd-15p">Last name</th>
								 <th class="wd-15p">Category</th>
								 <th class="wd-10p">ID Number</th>
								 <th class="wd-25p">Mobile</th>
								 <th class="wd-25p">Dob</th>
								 <th class="wd-25p">Action</th>
								 <th class="wd-25p">Action2</th>
							 </tr>
							 </thead>
							 <tbody>
                             <?php
                             $players = R::findAll('players','province=?',['Masvingo']);


                             foreach ($players as $player) {
                                 $id = $player->id;
                                 $sportcode_id = $player->sportcode;

                                 $sport = R::findOne('sportcode','id=?', [$sportcode_id]);

                                 ?>
								 <tr>
									 <td><?php echo $player->fname ?></td>
									 <td><?php echo $player->sname ?></td>
									 <td><?php echo $sport->title ?></td>
									 <td><?php echo $player->idno ?></td>
									 <td><?php echo $player->mobile ?></td>
									 <td><?php echo $player->dob ?></td>
									 <td>
										 <a href="player_info.php<?php echo  '?id='.$id;  ?>" class="btn btn-success">Card 1</a>
									 </td>
									 <td>
										 <a href="Staff_registration/card.php<?php echo  '?id='.$id;  ?>" class="btn btn-success">Card 2</a>
									 </td>
								 </tr>
                                 <?php
                             }
                             ?>
							 </tbody>
						 </table>
					 </div>
				 </div>
			 </div>
			 <div class="panel">
				 <div class="panel--heading" style="background-color:skyblue">
					 <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion01" href="#collapse01-5">Mat South</a>
				 </div>
				 <div id="collapse01-5" class="panel--body panel-collapse collapse">
					 <div class="table-responsive">
						 <table id="datatable1" class="table display responsive nowrap"  width="auto">
							 <thead style="background-color:skyblue">
							 <tr>
								 <th class="wd-15p">First name</th>
								 <th class="wd-15p">Last name</th>
								 <th class="wd-15p">Category</th>
								 <th class="wd-10p">ID Number</th>
								 <th class="wd-25p">Mobile</th>
								 <th class="wd-25p">Dob</th>
								 <th class="wd-25p">Action</th>
								 <th class="wd-25p">Action2</th>
							 </tr>
							 </thead>
							 <tbody>
                             <?php
                             $players = R::findAll('players','province=?',['MatSouth']);


                             foreach ($players as $player) {
                                 $id = $player->id;
                                 $sportcode_id = $player->sportcode;

                                 $sport = R::findOne('sportcode','id=?', [$sportcode_id]);

                                 ?>
								 <tr>
									 <td><?php echo $player->fname ?></td>
									 <td><?php echo $player->sname ?></td>
									 <td><?php echo $sport->title ?></td>
									 <td><?php echo $player->idno ?></td>
									 <td><?php echo $player->mobile ?></td>
									 <td><?php echo $player->dob ?></td>
									 <td>
										 <a href="player_info.php<?php echo  '?id='.$id;  ?>" class="btn btn-success">Card 1</a>
									 </td>
									 <td>
										 <a href="Staff_registration/card.php<?php echo  '?id='.$id;  ?>" class="btn btn-success">Card 2</a>
									 </td>
								 </tr>
                                 <?php
                             }
                             ?>
							 </tbody>
						 </table>
					 </div>
				 </div>
			 </div>
			 <div class="panel">
				 <div class="panel--heading" style="background-color:darkblue">
					 <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion01" href="#collapse01-6" style="color: white">Mat North</a>
				 </div>
				 <div id="collapse01-6" class="panel--body panel-collapse collapse">
					 <div class="table-responsive">
						 <table id="datatable1" class="table display responsive nowrap"  width="auto">
							 <thead style="background-color:darkblue" >
							 <tr style="color: white">
								 <th class="wd-15p" style="color: white">First name</th>
								 <th class="wd-15p" style="color: white">Last name</th>
								 <th class="wd-15p" style="color: white">Category</th>
								 <th class="wd-10p" style="color: white">ID Number</th>
								 <th class="wd-25p" style="color: white">Mobile</th>
								 <th class="wd-25p" style="color: white">Dob</th>
								 <th class="wd-25p" style="color: white">Action</th>
								 <th class="wd-25p" style="color: white">Action2</th>
							 </tr>
							 </thead>
							 <tbody>
                             <?php
                             $players = R::findAll('players','province=?',['MatNorth']);


                             foreach ($players as $player) {
                                 $id = $player->id;
                                 $sportcode_id = $player->sportcode;

                                 $sport = R::findOne('sportcode','id=?', [$sportcode_id]);

                                 ?>
								 <tr>
									 <td><?php echo $player->fname ?></td>
									 <td><?php echo $player->sname ?></td>
									 <td><?php echo $sport->title ?></td>
									 <td><?php echo $player->idno ?></td>
									 <td><?php echo $player->mobile ?></td>
									 <td><?php echo $player->dob ?></td>
									 <td>
										 <a href="player_info.php<?php echo  '?id='.$id;  ?>" class="btn btn-success">Card 1</a>
									 </td>
									 <td>
										 <a href="Staff_registration/card.php<?php echo  '?id='.$id;  ?>" class="btn btn-success">Card 2</a>
									 </td>
								 </tr>
                                 <?php
                             }
                             ?>
							 </tbody>
						 </table>
					 </div>
				 </div>
			 </div>
			 <div class="panel">
				 <div class="panel--heading" style="background-color:lightgrey">
					 <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion01" href="#collapse01-7">Harare</a>
				 </div>
				 <div id="collapse01-7" class="panel--body panel-collapse collapse">
					 <div class="table-responsive">
						 <table id="datatable1" class="table display responsive nowrap"  width="auto">
							 <thead style="background-color:lightgrey">
							 <tr>
								 <th class="wd-15p">First name</th>
								 <th class="wd-15p">Last name</th>
								 <th class="wd-15p">Category</th>
								 <th class="wd-10p">ID Number</th>
								 <th class="wd-25p">Mobile</th>
								 <th class="wd-25p">Dob</th>
								 <th class="wd-25p">Action</th>
								 <th class="wd-25p">Action2</th>
							 </tr>
							 </thead>
							 <tbody>
                             <?php
                             $players = R::findAll('players','province=?',['Harare']);


                             foreach ($players as $player) {
                                 $id = $player->id;
                                 $sportcode_id = $player->sportcode;

                                 $sport = R::findOne('sportcode','id=?', [$sportcode_id]);

                                 ?>
								 <tr>
									 <td><?php echo $player->fname ?></td>
									 <td><?php echo $player->sname ?></td>
									 <td><?php echo $sport->title ?></td>
									 <td><?php echo $player->idno ?></td>
									 <td><?php echo $player->mobile ?></td>
									 <td><?php echo $player->dob ?></td>
									 <td>
										 <a href="player_info.php<?php echo  '?id='.$id;  ?>" class="btn btn-success">Card 1</a>
									 </td>
									 <td>
										 <a href="Staff_registration/card.php<?php echo  '?id='.$id;  ?>" class="btn btn-success">Card 2</a>
									 </td>
								 </tr>
                                 <?php
                             }
                             ?>
							 </tbody>
						 </table>
					 </div>
				 </div>
			 </div>
			 <div class="panel">
				 <div class="panel--heading" style="background-color:gold">
					 <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion01" href="#collapse01-8">ManicaLand</a>
				 </div>
				 <div id="collapse01-8" class="panel--body panel-collapse collapse">
					 <div class="table-responsive">
						 <table id="datatable1" class="table display responsive nowrap"  width="auto">
							 <thead style="background-color:gold">
							 <tr>
								 <th class="wd-15p">First name</th>
								 <th class="wd-15p">Last name</th>
								 <th class="wd-15p">Category</th>
								 <th class="wd-10p">ID Number</th>
								 <th class="wd-25p">Mobile</th>
								 <th class="wd-25p">Dob</th>
								 <th class="wd-25p">Action</th>
								 <th class="wd-25p">Action2</th>
							 </tr>
							 </thead>
							 <tbody>
                             <?php
                             $players = R::findAll('players','province=?',['Manicaland']);


                             foreach ($players as $player) {
                                 $id = $player->id;
                                 $sportcode_id = $player->sportcode;

                                 $sport = R::findOne('sportcode','id=?', [$sportcode_id]);

                                 ?>
								 <tr>
									 <td><?php echo $player->fname ?></td>
									 <td><?php echo $player->sname ?></td>
									 <td><?php echo $sport->title ?></td>
									 <td><?php echo $player->idno ?></td>
									 <td><?php echo $player->mobile ?></td>
									 <td><?php echo $player->dob ?></td>
									 <td>
										 <a href="player_info.php<?php echo  '?id='.$id;  ?>" class="btn btn-success">Card 1</a>
									 </td>
									 <td>
										 <a href="Staff_registration/card.php<?php echo  '?id='.$id;  ?>" class="btn btn-success">Card 2</a>
									 </td>
								 </tr>
                                 <?php
                             }
                             ?>
							 </tbody>
						 </table>
					 </div>
				 </div>
			 </div>
			 <div class="panel">
				 <div class="panel--heading" style="background-color:lightgreen">
					 <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion01" href="#collapse01-9">Mash Central</a>
				 </div>
				 <div id="collapse01-9" class="panel--body panel-collapse collapse">
					 <div class="table-responsive">
						 <table id="datatable1" class="table display responsive nowrap"  width="auto">
							 <thead style="background-color:lightgreen">
							 <tr>
								 <th class="wd-15p">First name</th>
								 <th class="wd-15p">Last name</th>
								 <th class="wd-15p">Category</th>
								 <th class="wd-10p">ID Number</th>
								 <th class="wd-25p">Mobile</th>
								 <th class="wd-25p">Dob</th>
								 <th class="wd-25p">Action</th>
								 <th class="wd-25p">Action2</th>
							 </tr>
							 </thead>
							 <tbody>
                             <?php
                             $players = R::findAll('players','province=?',['Mashcentral']);


                             foreach ($players as $player) {
                                 $id = $player->id;
                                 $sportcode_id = $player->sportcode;

                                 $sport = R::findOne('sportcode','id=?', [$sportcode_id]);

                                 ?>
								 <tr>
									 <td><?php echo $player->fname ?></td>
									 <td><?php echo $player->sname ?></td>
									 <td><?php echo $sport->title ?></td>
									 <td><?php echo $player->idno ?></td>
									 <td><?php echo $player->mobile ?></td>
									 <td><?php echo $player->dob ?></td>
									 <td>
										 <a href="player_info.php<?php echo  '?id='.$id;  ?>" class="btn btn-success">Card 1</a>
									 </td>
									 <td>
										 <a href="Staff_registration/card.php<?php echo  '?id='.$id;  ?>" class="btn btn-success">Card 2</a>
									 </td>
								 </tr>
                                 <?php
                             }
                             ?>
							 </tbody>
						 </table>
					 </div>
				 </div>
			 </div>
			 <div class="panel">
				 <div class="panel--heading" style="background-color:gold">
					 <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion01" href="#collapse01-10">MashWest</a>
				 </div>
				 <div id="collapse01-10" class="panel--body panel-collapse collapse">
					 <div class="table-responsive">
						 <table id="datatable1" class="table display responsive nowrap"  width="auto">
							 <thead style="background-color:gold">
							 <tr>
								 <th class="wd-15p">First name</th>
								 <th class="wd-15p">Last name</th>
								 <th class="wd-15p">Category</th>
								 <th class="wd-10p">ID Number</th>
								 <th class="wd-25p">Mobile</th>
								 <th class="wd-25p">Dob</th>
								 <th class="wd-25p">Action</th>
								 <th class="wd-25p">Action2</th>
							 </tr>
							 </thead>
							 <tbody>
                             <?php
                             $players = R::findAll('players','province=?',['Mashwest']);


                             foreach ($players as $player) {
                                 $id = $player->id;
                                 $sportcode_id = $player->sportcode;

                                 $sport = R::findOne('sportcode','id=?', [$sportcode_id]);

                                 ?>
								 <tr>
									 <td><?php echo $player->fname ?></td>
									 <td><?php echo $player->sname ?></td>
									 <td><?php echo $sport->title ?></td>
									 <td><?php echo $player->idno ?></td>
									 <td><?php echo $player->mobile ?></td>
									 <td><?php echo $player->dob ?></td>
									 <td>
										 <a href="player_info.php<?php echo  '?id='.$id;  ?>" class="btn btn-success">Card 1</a>
									 </td>
									 <td>
										 <a href="Staff_registration/card.php<?php echo  '?id='.$id;  ?>" class="btn btn-success">Card 2</a>
									 </td>
								 </tr>
                                 <?php
                             }
                             ?>
							 </tbody>
						 </table>
					 </div>
				 </div>
			 </div>
		 </div>
		 <!-- End .Accordion-->
	 </div>

	          <script src="styling/jquery-2.2.4.min.js"></script>
	          <script src="styling/plugins.js"></script>
	          <script src="styling/functions.js"></script>
             <?php

             include "../masheast/footer.php";
             ?>
