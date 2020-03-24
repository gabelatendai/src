<footer class="br-footer">
	<div class="footer-left">
		<div class="mg-b-2">Copyright &copy;<script>document.write(new Date().getFullYear());</script>
				All rights reserved |
				MASHONALAND EAST YES GAMES</div>
		<div>Attentively and carefully made by MASHEAST ACCREDITATION TEAM</div>
	</div>
	<div class="footer-right d-flex align-items-center">
		<span class="tx-uppercase mg-r-10">Share:</span>
		<a target="_blank" class="pd-x-5" href="https://www.facebook.com/sharer/sharer.php?u=http%3A//themepixels.me/bracketplus/intro"><i class="fab fa-facebook tx-20"></i></a>
		<a target="_blank" class="pd-x-5" href="https://twitter.com/home?status=Bracket%20Plus,%20your%20best%20choice%20for%20premium%20quality%20admin%20template%20from%20Bootstrap.%20Get%20it%20now%20at%20http%3A//themepixels.me/bracketplus/intro"><i class="fab fa-twitter tx-20"></i></a>
	</div>
</footer>
</div><!-- br-mainpanel -->
<!-- ########## END: MAIN PANEL ########## -->

<script src="../lib/jquery/jquery.min.js"></script>
<script src="../lib/jquery-ui/ui/widgets/datepicker.js"></script>
<script src="../lib/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="../lib/perfect-scrollbar/perfect-scrollbar.min.js"></script>
<script src="../lib/moment/min/moment.min.js"></script>
<script src="../lib/peity/jquery.peity.min.js"></script>
<script src="../lib/highlightjs/highlight.pack.min.js"></script>
<script src="../lib/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="../lib/datatables.net-dt/js/dataTables.dataTables.min.js"></script>
<script src="../lib/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
<script src="../lib/datatables.net-responsive-dt/js/responsive.dataTables.min.js"></script>
<script src="../lib/select2/js/select2.min.js"></script>

<script src="../js/bracket.js"></script>
<script>
	$(function(){
		'use strict';

		$('#datatable1').DataTable({
			responsive: true,
			language: {
				searchPlaceholder: 'Search...',
				sSearch: '',
				lengthMenu: '_MENU_ items/page',
			}
		});

		$('#datatable2').DataTable({
			bLengthChange: false,
			searching: false,
			responsive: true
		});

		// Select2
		$('.dataTables_length select').select2({ minimumResultsForSearch: Infinity });

	});
</script>
</body>
</html>
