<?php

require '../includes/functions.php';
require '../vendor/autoload.php';

use \RedBeanPHP\R as R;

R::setup('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PASSWORD);

$province =$_GET['province'];

include "header.php";

?>

<link rel="stylesheet" href="../css/dataTables.bootstrap.min.css">
    <!-- ########## START: MAIN PANEL ########## -->


      <div class="br-pagebody">
        <div class="br-section-wrapper">
          <h6 class="br-section-label">Registered Participants</h6>
          <p class="br-section-text">Searching, ordering and paging goodness will be immediately added to the table, as shown in this example.</p>

		        <a data-toggle='modal' href="#Taxreceipted" class="Open-Taxreceipted float-right"><i class='fa fa-print'></i>Bulk printing</a>

          <div class="table-wrapper">
	          <table cellpadding="0"  border="1"  style="width: 100%" class="table  table-striped table-condensed table-hover dataTables table-bordered" id="myTable">
	          <thead>
                <tr>
                  <th class="wd-15p">First name</th>
                  <th class="wd-15p">Last name</th>
                  <th class="wd-15p">Image</th>
                  <th class="wd-15p">Category</th>
                  <th class="wd-10p">ID Number</th>
                  <th class="wd-25p">Mobile</th>
                  <th class="wd-25p">Dob</th>
                  <th class="wd-25p">Action</th>
                </tr>
              </thead>
              <tbody>
              <?php
              $players = R::findAll('players','province=?',[$province]);


              foreach ($players as $player) {
                  $id = $player->id;
                  $sportcode_id = $player->sportcode;

                  $sport = R::findOne('sportcode','id=?', [$sportcode_id]);

                  ?>
	              <tr>
		              <td><?php echo $player->fname ?></td>
		              <td><?php echo $player->sname ?></td>
		              <td><img src="<?php echo $player->image ?>" width="20px" height="20px"></td>

		              <td><?php echo $sport->title ?></td>
		              <td><?php echo $player->idno ?></td>
		              <td><?php echo $player->mobile ?></td>
		              <td><?php echo $player->dob ?></td>
		               <td>
			               <a href="Staff_registration/card.php<?php echo  '?id='.$id;  ?>" class="btn btn-success"><i class="glyphicon glyphicon-pencil"></i>View Card 2</a>
		              </td>
	              </tr>
                  <?php
              }
              ?>
              </tbody>
            </table>
          </div><!-- table-wrapper -->

        </div><!-- br-section-wrapper -->
      </div><!-- br-pagebody -->
<!-- MODAL GRID -->
<div id="Taxreceipted" class="modal fade">
	<div class="modal-dialog modal-lg modal-dialog-centered" role="document">
		<div class="modal-content bd-0 bg-transparent rounded overflow-hidden">
			<div class="modal-body pd-0">
				<div class="row no-gutters">
					<div class="col-lg-6 bg-white">
						<div class="pd-30">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
							<form action="printbulk.php" method="post">
							<div class="pd-x-30 pd-y-10">
								<h3 class="tx-inverse  mg-b-5">BULK PRINTING!</h3>
								<p>Select SportCode</p>
								<br>
								<div class="form-group mg-b-20">
									<select class="form-control select2" data-placeholder="Choose country" name="sportcode" >
                                        <?php  $subs= R::findAll('sportcode');

                                        foreach ($subs as $row) {

                                            ?>

											<option value="<?php echo $row['id']; ?>"><?php echo $row['title']; ?></option>
                                        <?php } ?>
									</select>
								</div><!-- form-group -->
								<!-- form-group -->
								<!-- form-group -->

								<button class="btn btn-primary pd-y-12 btn-block" type="submit" name="Change">Submit</button>
							</div>
							</form>
						</div><!-- pd-20 -->
					</div><!-- col-6 -->
				</div><!-- row -->
			</div><!-- modal-body -->
		</div><!-- modal-content -->
	</div><!-- modal-dialog -->
</div><!-- modal -->
<?php

        include "../masheast/footer.php";
        ?>

<script src="../js/cdn/dataTables.buttons.min.js"></script>
<script src="../js/cdn/buttons.flash.min.js"></script>
<script src="../js/cdn/jszip.min.js"></script>
<script src="../js/cdn/pdfmake.min.js"></script>
<script src="../js/cdn/vfs_fonts.js"></script>
<script src="../js/cdn/buttons.html5.min.js"></script>
<script src="../js/cdn/buttons.print.min.js"></script>
<script>
	$(document).ready(function() {
		$('#myTable').DataTable( {
			dom: 'Bfrtip',
			buttons: [
				{
					extend: 'pdf',
					text: 'Pdf',
					orientation: 'portrait',
					title: "<?php echo $province; ?> Team List",
				},
				{
					extend: 'excel',
					text: 'Excel',
					orientation: 'portrait',
					title: "<?php echo $province; ?> Team List",

				},
				{
					extend: 'csv',
					text: 'CSV',
					orientation: 'portrait',
					title: "<?php echo $province; ?> Team List",
				},
				{
					extend: 'print',
					text: 'Print',
					orientation: 'portrait',
					title: "<?php echo $province; ?> Team List",

				},
				{
					extend: 'copy',
					text: 'Copy',
					orientation: 'portrait',
					title: "<?php echo $province; ?> Team List",

				}],
		} );
	} );
</script>