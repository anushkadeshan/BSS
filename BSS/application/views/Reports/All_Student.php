<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<!-- Meta, title, CSS, favicons, etc. -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>BSS-Admin Panels </title>
		<!-- Bootstrap -->
		<link href="<?php echo base_url() ?>vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
		<!-- Font Awesome -->
		<link href="<?php echo base_url() ?>vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
		<!-- NProgress -->
		<link href="<?php echo base_url() ?>vendors/nprogress/nprogress.css" rel="stylesheet">
		<!-- jQuery custom content scroller -->
		<link href="<?php echo base_url() ?>vendors/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.min.css" rel="stylesheet"/>
		<!-- Datatables -->
		<link href="<?php echo base_url() ?>vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
		<link href="<?php echo base_url() ?>vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
		<link href="<?php echo base_url() ?>vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
		<link href="<?php echo base_url() ?>vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
		<link href="<?php echo base_url() ?>vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">
		<link href="<?php echo base_url() ?>build/css/animate.css" rel="stylesheet">

		<!-- Custom Theme Style -->
		<link href="<?php echo base_url() ?>build/css/custom.min.css" rel="stylesheet">
		
	</head>

	<body class="nav-md">
		<div class="container body">
			<div class="main_container">
			 <?php $this->view('sidebar'); ?> 
		<!-- page content -->
				<div class="right_col" role="main">
					<div class="">
						<div class="page-title">
							<div class="title_left">
								<h3 style="display: inline-block;">BSS Students </h3>
								<a href="<?php echo base_url() ?>Reports_Controller/index"><button type="submit" class="btn btn-primary">Back</button></a>
							</div>
						</div>
					</div>
					<!-- Modal -->

<div class="clearfix"></div>
<hr>
<div class="row">
	
		<div class="col-md-12 col-sm-12 col-xs-12">
								<div class="x_panel">
									<div class="x_title">
										<h2>Results</h2>
										<ul class="nav navbar-right panel_toolbox">
											<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
											</li>
											<li class="dropdown">
												<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
												<ul class="dropdown-menu" role="menu">
													<li><a href="#">Settings 1</a>
													</li>
													<li><a href="#">Settings 2</a>
													</li>
												</ul>
											</li>
											<li><a class="close-link"><i class="fa fa-close"></i></a>
											</li>
										</ul>
										<div class="clearfix"></div>
									</div>
									<div class="x_content">
										
										<table id="datatable-buttons" class="table table-striped table-bordered">
											<thead>
												<tr>
													<th style="max-width: 10px;">#</th>
													<th>Ref No</th>
													<th>Name</th>
													<th>NIC</th>
													<th>Contact</th>
													<th>DS Division</th>
													<?php if($this->session->userdata('user_id')==1){ ?><th>Dictrict</th><?php } ?>
													<?php if($this->session->userdata('user_id')==1){ ?><th>Branch</th><?php } ?>
													<th>Status</th>
													<th></th>
													
													
												</tr>
											</thead>
											<?php foreach($student as $s){ ?>
												<tr>
													<td><?php echo $count++ ?></td>
													<td style="overflow:hidden; word-wrap: break-word; max-width:200px;"><?php echo $s->Ref_No; ?></td>
													<td><?php echo $s->ST_Name; ?></td>
													<td><?php echo $s->NIC; ?></td>
													<td><?php echo $s->Contact_No; ?></td>
													<td><?php echo $s->DSD_Name; ?></td>
													<?php if($this->session->userdata('user_id')==1){ ?><td><?php echo $s->District; ?></td> <?php } ?>
													<?php if($this->session->userdata('user_id')==1){ ?><td><?php echo $s->Name; ?></td><?php } ?>
													<td><?php echo $s->status; ?></td>
													<td> <a href="<?php echo base_url() ?>Reports_Controller/Single_student/<?php echo $s->ST_ID; ?>"><button class="btn btn-success"><i class="fa fa-eye-slash" aria-hidden="true"></i></button></a> </td>
													

												</tr>
											<?php }?>
											<tbody>
											
												
											</tbody>
										</table>
									</div>
								</div>
							</div>
	
	
</div>     

</div>
				<!-- /page content -->
				<!-- footer content -->
				<footer>
					<div class="pull-right">
						BSS Infomation System By<a href="https://www.dsoftweb.net">Deshan Dharmasena</a>
					</div>
					<div class="clearfix"></div>
				</footer>
				<!-- /footer content -->
			</div>
		</div>


	<!-- jQuery -->
		<script src="<?php echo base_url() ?>vendors/jquery/dist/jquery.min.js"></script>
		<!-- Bootstrap -->
		<script src="<?php echo base_url() ?>vendors/bootstrap/dist/js/bootstrap.min.js"></script>
		<!-- FastClick -->
		<script src="<?php echo base_url() ?>vendors/fastclick/lib/fastclick.js"></script>
		<!-- NProgress -->
		<script src="<?php echo base_url() ?>vendors/nprogress/nprogress.js"></script>
		<!-- jQuery custom content scroller -->
		<script src="<?php echo base_url() ?>vendors/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script>

		<script src="<?php echo base_url() ?>vendors/parsleyjs/dist/parsley.min.js"></script>
		<script src="<?php echo base_url() ?>vendors/datatables.net/js/jquery.dataTables.min.js"></script>
		<script src="<?php echo base_url() ?>vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
		<script src="<?php echo base_url() ?>vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
		<script src="<?php echo base_url() ?>vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
		<script src="<?php echo base_url() ?>vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
		<script src="<?php echo base_url() ?>vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
		<script src="<?php echo base_url() ?>vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
		<script src="<?php echo base_url() ?>vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
		<script src="<?php echo base_url() ?>vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
		<script src="<?php echo base_url() ?>vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
		<script src="<?php echo base_url() ?>vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
		<script src="<?php echo base_url() ?>vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
		<script src="<?php echo base_url() ?>vendors/jszip/dist/jszip.min.js"></script>
		<script src="<?php echo base_url() ?>vendors/pdfmake/build/pdfmake.min.js"></script>
		<script src="<?php echo base_url() ?>vendors/pdfmake/build/vfs_fonts.js"></script>
		<script src="<?php echo base_url() ?>build/js/bootstrap-notify.js"></script>
		<script src="<?php echo base_url() ?>build/js/bootstrap-confirmation.min.js"></script>
		<!-- Custom Theme Scripts -->
		<script src="<?php echo base_url() ?>build/js/custom.min.js"></script> 
		
		<script>
		//confirmation Script
			$('[data-toggle=confirmation]').confirmation();
			$('[data-toggle=confirmation-singleton]').confirmation({ singleton: true });
			$('[data-toggle=confirmation-popout]').confirmation({ popout: true });
		</script>
	<!-- Shoe Notification -->
	<?php if ($this->session->flashdata('msg','type','icon') != ''): ?>
	<script type="text/javascript">

	$(document).ready(function() {  
		 
		$.notify({
			icon: 'glyphicon glyphicon-<?php echo $this->session->flashdata('icon'); ?>',
			message: '<?php echo $this->session->flashdata('msg'); ?>',
		},
		{
	// settings
			element: 'body',
			position: null,
			type: "<?php echo $this->session->flashdata('type'); ?>",
			allow_dismiss: true,
			newest_on_top: false,
			showProgressbar: false,
			placement: {
				from: "top",
				align: "right"
			},
			offset: {
						x:20,
						y:70,
					},
			spacing: 10,
			z_index: 1031,
			delay: 5000,
			timer: 1000,
			animate: {
			enter: 'animated fadeInRight',
			exit: 'animated fadeOutRight'
			},
			});

	});
	//-->       
	</script>
<?php endif; ?>


	</body>

</html>


