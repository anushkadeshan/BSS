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
    <link href="<?php echo base_url() ?>vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

    <link href="<?php echo base_url() ?>build/css/animate.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>build/css/hover.css" rel="stylesheet">     


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
                    <h2>Student All Information </h2>
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
					<div class="" role="tabpanel" data-example-id="togglable-tabs">
                      <ul id="myTab" class="nav nav-tabs bar_tabs" role="tablist">
					
                        <li role="presentation" class="active"><a href="#tab_content1" id="home-tab" role="tab" data-toggle="tab" aria-expanded="true">Personal Info</a>
                        </li>
					<li role="presentation" class=""><a href="#tab_content2" role="tab" id="profile-tab" data-toggle="tab" aria-expanded="false">Scholar Info</a>
                        </li>
					<li role="presentation" class=""><a href="#tab_content3" role="tab" id="profile-tab2" data-toggle="tab" aria-expanded="false">OL Info</a>
                        </li>	
					
                       <?php  switch($status_id){
						case "9":   
						case "2":
						case "3":
						case "4":
						case "5":
						case "6":
						case "8":
					?> 
					<li role="presentation" class=""><a href="#tab_content4" role="tab" id="profile-tab3" data-toggle="tab" aria-expanded="false">AL 1st Attempt</a>
                        </li>
					<?php 
					
					} ?>
					<?php  switch($status_id){
						case "2":
						case "3":
						case "4":
						case "5":
						case "6":
						case "8":
					?> 
					<li role="presentation" class=""><a href="#tab_content5" role="tab" id="profile-tab4" data-toggle="tab" aria-expanded="false">AL 2nd Attempt</a>
                        </li>
					<?php
					
					} ?>
					<?php  switch($status_id){
						case "5":
					?>
					<li role="presentation" class=""><a href="#tab_content6" role="tab" id="profile-tab5" data-toggle="tab" aria-expanded="false">VT Info</a>
                        </li>
					<?php
					
					} ?>
					<?php  switch($status_id){
						case "4":
					?>
					<li role="presentation" class=""><a href="#tab_content7" role="tab" id="profile-tab6" data-toggle="tab" aria-expanded="false">Prof: Course Info</a>
                        </li>
					<?php 
					
					} ?>
					<?php  switch($status_id){
						case "6":
					?>
					<li role="presentation" class=""><a href="#tab_content8" role="tab" id="profile-tab7" data-toggle="tab" aria-expanded="false">Job Info</a>
                        </li>
					<?php } ?>
					<?php  switch($status_id){
						case "8":
					?>
					<li role="presentation" class=""><a href="#tab_content9" role="tab" id="profile-tab8" data-toggle="tab" aria-expanded="false">University Info</a>
                        </li>
					<?php
					
					} ?>
					<?php  switch($status_id){
						case "3":
					?>
					<li role="presentation" class=""><a href="#tab_content10" role="tab" id="profile-tab9" data-toggle="tab" aria-expanded="false">No Job Reason</a>
                        </li>
					<?php
					
					} ?>
					<?php  switch($status_id){
						case "2":
					?>
					<li role="presentation" class=""><a href="#tab_content11" role="tab" id="profile-tab10" data-toggle="tab" aria-expanded="false">Drop Out Reason</a>
                        </li>
					<?php
					
					} ?>
                      </ul>
                      <div id="myTabContent" class="tab-content">
					
                        <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="home-tab">
						<div id="personal" style="margin-top:25px;">
						<?php foreach($st_data as $st): ?>
						<div class="row">
						<div class="col-md-6 col-sm-6 col-xs-12">
							<table class="table table-striped table-responsive table-hover table-bordered">
								<tr>
									<td style="font-weight:bold;">Student Name :</td>
									<td><?php echo $st->ST_Name; ?></td>
								</tr>
								<tr>
									<td style="font-weight:bold;" >Gender :</td>
									<td><?php echo $st->Gender; ?></td>
								</tr>
								<tr>
									<td style="font-weight:bold;">NIC :</td>
									<td><?php echo $st->NIC; ?></td>
								</tr>
								<tr>
									<td style="font-weight:bold;">Ethnicity :</td>
									<td><?php echo $st->Ethnicity; ?></td>
								</tr>
								<tr>
									<td style="font-weight:bold;">Date of Birth :</td>
									<td><?php echo $st->DOB; ?></td>
								</tr>
								<tr>
									<td style="font-weight:bold;">Address :</td>
									<td><?php echo $st->Address; ?></td>
								</tr>
								<tr>
									<td style="font-weight:bold;">Contact No :</td>
									<td><?php echo $st->Contact_No; ?></td>
								</tr>
								<tr>
									<td style="font-weight:bold;">Gurdian Name :</td>
									<td><?php echo $st->Guardian_Name; ?></td>
								</tr>
								<tr>
									<td style="font-weight:bold;">Relationship to Student :</td>
									<td><?php echo $st->Relationship; ?></td>
								</tr>
							</table>
						</div>
						<div class="col-md-6 col-sm-6 col-xs-12">
							<table class="table table-striped table-responsive table-hover table-bordered">
								
								<tr>
									<td style="font-weight:bold;">DS Division :</td>
									<td><?php echo $st->DSD_Name; ?></td>
								</tr>
								<tr>
									<td style="font-weight:bold;">GN Division :</td>
									<td><?php echo $st->GN_Office; ?></td>
								</tr>
								<tr>
									<td style="font-weight:bold;">Sector :</td>
									<td><?php echo $st->Sector_ID; ?></td>
								</tr>
								<tr>
									<td style="font-weight:bold;">Is Samurdi Directed ? :</td>
									<td> <?php  if($st->samurdi==0){ echo "NO"; } else{ echo "YES"; } ?></td>
								</tr>
								<tr>
									<td style="font-weight:bold;">Is Low Income Directed ? :</td>
									<td><?php  if($st->LowIncome==0){ echo "NO"; } else{ echo "YES"; }?></td>
								</tr>
								<tr>
									<td style="font-weight:bold;">Is Directed by BMI :</td>
									<td><?php  if($st->Direct_BMI==0){ echo "NO"; } else{ echo "YES"; }?></td>
								</tr>
								<tr style="<?php  if($st->Direct_BMI==0){ echo "display:none"; } else{ echo "display:inline-block"; }?>">
									<td style="font-weight:bold;">BMI Client Code :</td>
									<td><?php  if($st->Direct_BMI==0){ echo ""; } else{ echo $st->client_code; }?></td>
								</tr>
								<tr>
									<td style="font-weight:bold;"><?php  if($st->Direct_BMI==0){ echo "PCI"; } else{ echo "BMI PCI"; }?></td>
									<td><?php  if($st->Direct_BMI==0){ echo $st->noneBmiPci; } else{ echo $st->BmiPci; }?></td>
								</tr>
								<tr>
									<td style="font-weight:bold;">Current Status :</td>
									<td style="color:green;"><?php echo $st->status; ?></td>
								</tr>
								
							</table>
						</div>
						
						</div>
						</div>
                        </div>
						
					<div role="tabpanel" class="tab-pane fade active in" id="tab_content2" aria-labelledby="home-tab">
                          <div id="scholar" style="margin-top:25px; display:none;">
						
						<div class="row">
						<div class="col-md-6 col-sm-6 col-xs-12">
							<table class="table table-striped table-responsive table-hover table-bordered">
								<tr>
									<td style="font-weight:bold;">Scholar Amount :</td>
									<td>LKR <?php echo $st->Scholar_Amount; ?></td>
								</tr>
								<tr>
									<td style="font-weight:bold;" >Payment Started Year :</td>
									<td> <?php echo $st->Payment_Start_Year; ?></td>
								</tr>
								<tr>
									<td style="font-weight:bold;">Payment Start Month :</td>
									<td><?php echo $st->Payment_Start_Month; ?></td>
								</tr>
								<tr>
									<td style="font-weight:bold;">Renewel Document :</td>
									<td><?php  if($st->Renewal_Document==0){ echo "NO"; } else{ echo "YES"; }?></td>
								</tr>
								
							</table>
						</div>
						
						</div>
						</div>
                       </div>
					   
					<div role="tabpanel" class="tab-pane fade active in" id="tab_content3" aria-labelledby="home-tab">
                          <div id="ol" style="margin-top:25px; display:none;">
						
						<div class="row">
						<div class="col-md-6 col-sm-6 col-xs-12">
							<table class="table table-striped table-responsive table-hover table-bordered">
								<tr>
									<td style="font-weight:bold;">Results :</td>
									<td>
										<table class="table table-striped table-responsive table-hover table-bordered" style="text-align:center">
											<tr>
												<td>A</td>
												<td>B</td>
												<td>C</td>
												<td>S</td>
												<td>W</td>
											</tr>
											<tr>
												<td height="30"><?php echo $st->OL_A; ?></td>
												<td><?php echo $st->OL_B; ?></td>
												<td><?php echo $st->OL_C; ?></td>
												<td><?php echo $st->OL_S; ?></td>
												<td><?php echo $st->OL_W; ?></td>
											</tr>
										</table>
									</td>
								</tr>
								<tr>
									<td style="font-weight:bold;" >Maths Result :</td>
									<td> <?php echo $st->Maths_Result; ?></td>
								</tr>
								<tr>
									<td style="font-weight:bold;">Exam Year :</td>
									<td><?php echo $st->Exam_Year; ?></td>
								</tr>
								<tr>
									<td style="font-weight:bold;">Medium :</td>
									<td><?php echo $st->Medium; ?></td>
								</tr>
								
							</table>
						</div>
						
						</div>
						</div>
                       </div>   
					
                       <?php  switch($status_id){
						case "2":
						case "3":
						case "4":
						case "5":
						case "6":
						case "8":
						case "9":
					?> 
					<div role="tabpanel" class="tab-pane fade active in" id="tab_content4" aria-labelledby="home-tab">
                          <div id="al" style="margin-top:25px; display:none;">
						
						<div class="row">
						<div class="col-md-6 col-sm-6 col-xs-12">
							<table class="table table-striped table-responsive table-hover table-bordered">
								<tr>
									<td style="font-weight:bold;">Results :</td>
									<td>
										<table class="table table-striped table-responsive table-hover table-bordered" style="text-align:center">
											<tr>
												<td>A</td>
												<td>B</td>
												<td>C</td>
												<td>S</td>
												<td>W</td>
											</tr>
											<tr>
												<td height="30"><?php if($st->Attempt==1) { echo $st->AL_A; } else { echo ""; } ?></td>
												<td><?php if($st->Attempt==1) { echo $st->AL_B; } else { echo ""; } ?></td>
												<td><?php if($st->Attempt==1) { echo $st->AL_C; } else { echo ""; } ?></td>
												<td><?php if($st->Attempt==1) { echo $st->AL_S; } else { echo ""; } ?></td>
												<td><?php if($st->Attempt==1) { echo $st->AL_W; } else { echo ""; } ?></td>
											</tr>
										</table>
									</td>
								</tr>
								<tr>
									<td style="font-weight:bold;" >School :</td>
									<td> <?php if($st->Attempt==1) { echo $st->School; } else { echo ""; } ?></td>
								</tr>
								<tr>
									<td style="font-weight:bold;" >Index No :</td>
									<td> <?php if($st->Attempt==1) { echo $st->Index_No; } else { echo ""; } ?></td>
								</tr>
								<tr>
									<td style="font-weight:bold;">Exam Year :</td>
									<td><?php if($st->Attempt==1) { echo $st->Year; } else { echo ""; } ?></td>
								</tr>
								<tr>
									<td style="font-weight:bold;">Pass/Fail :</td>
									<td><?php if($st->Attempt==1) { if($st->Pass_Fail==1){echo "Yes";} if($st->Pass_Fail==0){echo "No";} if($st->Pass_Fail==2){ echo "Not Submited";}  } else { echo ""; } ?></td>
								</tr>
								<tr>
									<td style="font-weight:bold;">Z-Score :</td>
									<td><?php if($st->Attempt==1) { echo $st->Z_Score; } else { echo ""; } ?></td>
								</tr>
								<tr>
									<td style="font-weight:bold;">Distric Rank :</td>
									<td><?php if($st->Attempt==1) { echo $st->District_Rank; } else { echo ""; } ?></td>
								</tr>
								<tr>
									<td style="font-weight:bold;">Island Rank :</td>
									<td><?php if($st->Attempt==1) { echo $st->Island_Rank; } else { echo ""; } ?></td>
								</tr>
								
							</table>
						</div>
						
						
						</div>
						</div>
                       </div>
					<?php
					
					} ?> 
					<?php  switch($status_id){
						case "2":
						case "3":
						case "4":
						case "5":
						case "6":
						case "8":
						case "9":
					?> 
					<div role="tabpanel" class="tab-pane fade active in" id="tab_content5" aria-labelledby="home-tab">
					<div id="al_2" style="margin-top:25px; display:none;">
						
						<div class="row">
						<div class="col-md-6 col-sm-6 col-xs-12">
							<table class="table table-striped table-responsive table-hover table-bordered">
								<tr>
									<td style="font-weight:bold;">Results :</td>
									<td>
										<table class="table table-striped table-responsive table-hover table-bordered" style="text-align:center">
											<tr>
												<td>A</td>
												<td>B</td>
												<td>C</td>
												<td>S</td>
												<td>W</td>
											</tr>
											<tr>
												<td height="30"><?php if($st->Attempt==2) { echo $st->AL_A; } else { echo ""; } ?></td>
												<td><?php if($st->Attempt==2) { echo $st->AL_B; } else { echo ""; } ?></td>
												<td><?php if($st->Attempt==2) { echo $st->AL_C; } else { echo ""; } ?></td>
												<td><?php if($st->Attempt==2) { echo $st->AL_S; } else { echo ""; } ?></td>
												<td><?php if($st->Attempt==2) { echo $st->AL_W; } else { echo ""; } ?></td>
											</tr>
										</table>
									</td>
								</tr>
								<tr>
									<td style="font-weight:bold;" >Index No :</td>
									<td> <?php if($st->Attempt==2) { echo $st->School; } else { echo ""; } ?></td>
								</tr>
								<tr>
									<td style="font-weight:bold;" >Index No :</td>
									<td> <?php if($st->Attempt==2) { echo $st->Index_No; } else { echo ""; } ?></td>
								</tr>
								<tr>
									<td style="font-weight:bold;">Exam Year :</td>
									<td><?php if($st->Attempt==2) { echo $st->Year; } else { echo ""; } ?></td>
								</tr>
								<tr>
									<td style="font-weight:bold;">Pass/Fail :</td>
									<td><?php if($st->Attempt==2) {  if($st->Pass_Fail==1){echo "Yes";} if($st->Pass_Fail==0){echo "No";} if($st->Pass_Fail==2){ echo "Not Submited";}   } else { echo ""; } ?></td>
								</tr>
								<tr>
									<td style="font-weight:bold;">Z-Score :</td>
									<td><?php if($st->Attempt==2) { echo $st->Z_Score; } else { echo ""; } ?></td>
								</tr>
								<tr>
									<td style="font-weight:bold;">Distric Rank :</td>
									<td><?php if($st->Attempt==2) { echo $st->District_Rank; } else { echo ""; } ?></td>
								</tr>
								<tr>
									<td style="font-weight:bold;">Island Rank :</td>
									<td><?php if($st->Attempt==2) { echo $st->Island_Rank; } else { echo ""; } ?></td>
								</tr>
								
							</table>
						</div>
                       </div>
					</div>
					</div>
					<?php
					
					} ?> 
					<?php  switch($status_id){
					case "5":
					?>
					<div role="tabpanel" class="tab-pane fade active in" id="tab_content6" aria-labelledby="home-tab">
					<div id="vt" style="margin-top:25px; display:none;">
						
						<div class="row">
						<div class="col-md-6 col-sm-6 col-xs-12">
							<table class="table table-striped table-responsive table-hover table-bordered">
								<tr>
									<td style="font-weight:bold;">Course Name :</td>
									<td><?php if($st->Category=='Vocational Training') { echo $st->VT_Name; } else { echo ""; } ?></td>
								</tr>
								<tr>
									<td style="font-weight:bold;" >Institute :</td>
									<td> <?php if($st->Category=='Vocational Training') { echo $st->Institute; } else { echo ""; } ?></td>
								</tr>
								<tr>
									<td style="font-weight:bold;" >Year Completion :</td>
									<td><?php if($st->Category=='Vocational Training') { echo $st->Year_Completion; } else { echo ""; } ?></td>
								</tr>
							</table>
						</div>
						
						</div>
						</div>                      
						</div>
					<?php
					
					} ?>
					<?php  switch($status_id){
					case "4":
					?>
					<div role="tabpanel" class="tab-pane fade active in" id="tab_content7" aria-labelledby="home-tab">
                          <div id="prof" style="margin-top:25px; display:none;">
						
						<div class="row">
						<div class="col-md-6 col-sm-6 col-xs-12">
							<table class="table table-striped table-responsive table-hover table-bordered">
								<tr>
									<td style="font-weight:bold;">Course Name :</td>
									<td><?php if($st->Category=='Proffesional') { echo $st->VT_Name; } else { echo ""; } ?></td>
								</tr>
								<tr>
									<td style="font-weight:bold;" >Institute :</td>
									<td> <?php if($st->Category=='Proffesional') { echo $st->Institute; } else { echo ""; } ?></td>
								</tr>
								<tr>
									<td style="font-weight:bold;" >Year Completion :</td>
									<td><?php if($st->Category=='Proffesional') { echo $st->Year_Completion; } else { echo ""; } ?></td>
								</tr>
							</table>
						</div>
						
						</div>
						</div>
                       </div>
					<?php
					
					} ?>
					<?php  switch($status_id){
						case "6":
					?>
					<div role="tabpanel" class="tab-pane fade active in" id="tab_content8" aria-labelledby="home-tab">
                          <div id="job" style="margin-top:25px; display:none;">
						
						<div class="row">
						<div class="col-md-6 col-sm-6 col-xs-12">
							<table class="table table-striped table-responsive table-hover table-bordered">
								<tr>
									<td style="font-weight:bold;">Job Position :</td>
									<td><?php echo $st->Job_Position; ?></td>
								</tr>
								<tr>
									<td style="font-weight:bold;" >Company :</td>
									<td> <?php echo $st->Company; ?></td>
								</tr>
								
							</table>
						</div>
						
						</div>
						</div>
                       </div>
					<?php
					
					} ?>
					<?php  switch($status_id){
						case "8":
					?>
					<div role="tabpanel" class="tab-pane fade active in" id="tab_content9" aria-labelledby="home-tab">
                          <div id="uni" style="margin-top:25px; display:none;">
						
						<div class="row">
						<div class="col-md-6 col-sm-6 col-xs-12">
							<table class="table table-striped table-responsive table-hover table-bordered">
								<tr>
									<td style="font-weight:bold;">University :</td>
									<td><?php echo $st->Name; ?></td>
								</tr>
								<tr>
									<td style="font-weight:bold;" >Faculty :</td>
									<td> <?php echo $st->Faculty; ?></td>
								</tr>
								
							</table>
						</div>
						
						</div>
						</div>
                       </div>
					<?php
					
					} ?>
					<?php  switch($status_id){
						case "3":
					?>
					<div role="tabpanel" class="tab-pane fade active in" id="tab_content10" aria-labelledby="home-tab">
                          <div id="nojob" style="margin-top:25px; display:none;">
						
						<div class="row">
						<div class="col-md-6 col-sm-6 col-xs-12">
							<table class="table table-striped table-responsive table-hover table-bordered">
								<tr>
									<td style="font-weight:bold;">Reason for No Job :</td>
									<td><?php echo $st->reason; ?></td>
								</tr>
								
							</table>
						</div>
						
						</div>
						</div>
                       </div>
					<?php
					
					} ?>
					<?php  switch($status_id){
						case "2":
					?>
					<div role="tabpanel" class="tab-pane fade active in" id="tab_content11" aria-labelledby="home-tab">
                          <div id="drop" style="margin-top:25px; display:none;">
						
						<div class="row">
						<div class="col-md-6 col-sm-6 col-xs-12">
							<table class="table table-striped table-responsive table-hover table-bordered">
								<tr>
									<td style="font-weight:bold;">Reason for Dropout :</td>
									<td><?php echo $st->Reason; ?></td>
								</tr>
								
							</table>
						</div>
						
						</div>
						</div>
                       </div>
					<?php
					
					} ?>
                      </div>
					  <?php endforeach; ?>
                    </div>
                  </div>
                </div>
              </div>
</div>     

</div>             

</div>

        <!-- /page content -->
        <!-- footer content -->
</div>
        <footer>
          <div class="pull-right">
            BSS Infomation System By <a target="_blank" href="https://www.dsoftweb.net"> Deshan Dharmasena</a>
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
    <!-- bootstrap-daterangepicker -->
    <script src="<?php echo base_url() ?>vendors/moment/min/moment.min.js"></script>
    <script src="<?php echo base_url() ?>vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
    <!-- jQuery Smart Wizard -->
    <script src="<?php echo base_url() ?>vendors/jQuery-Smart-Wizard/js/jquery.smartWizard.js"></script>
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
<script>
    $("#profile-tab").click(function() {
    $("#scholar").css("display","block");
});

$("#profile-tab2").click(function() {
    $("#ol").css("display","block");
});

$("#profile-tab3").click(function() {
    $("#al").css("display","block");
});

$("#profile-tab4").click(function() {
    $("#al_2").css("display","block");
});

$("#profile-tab5").click(function() {
    $("#vt").css("display","block");
});

$("#profile-tab6").click(function() {
    $("#prof").css("display","block");
});
$("#profile-tab7").click(function() {
    $("#job").css("display","block");
});

$("#profile-tab8").click(function() {
    $("#uni").css("display","block");
});

$("#profile-tab9").click(function() {
    $("#nojob").css("display","block");
});

$("#profile-tab10").click(function() {
    $("#drop").css("display","block");
});
</script>
  </body>

</html>


