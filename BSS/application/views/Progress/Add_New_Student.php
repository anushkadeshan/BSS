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

    <!-- Custom Theme Style -->
    <link href="<?php echo base_url() ?>build/css/custom.min.css" rel="stylesheet">
    
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
       <?php $this->view('sidebar'); ?> 
    <!-- page content -->
<div class="right_col" role="main">
<form id="myForm" class="form-horizontal" data-parsley-validate action="<?php echo base_url() ?>Student_Controller/save" method="post">
<div class="row">
    
    <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Student Personal Infomation <small>Enter all infomation</small></h2>
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
                    <br />
                    <div class="col-md-6 col-sm-6 col-xs-12">

                    <div class="form-group">
                            
                            <div class="col-md-12 col-sm-12 col-xs-12">
                              <input placeholder="BEC/Year/Name of District/Name of DSD /Name of GND/BSS/001" type="text" id="first-name" name="code" required="required" class="form-control col-md-7 col-xs-12">
                             
                            </div>
                          </div>

                          <div class="form-group">
                            
                            <div class="col-md-12 col-sm-12 col-xs-12">
                              <input placeholder="Student Name" type="text" id="first-name" name="name" required="required" class="form-control col-md-7 col-xs-12">
                             
                            </div>
                          </div>
                          <div class="form-group">
                           
                            <div class="col-md-12 col-sm-12 col-xs-12">
                              <input placeholder="NIC Number" type="text" id="last-name" data-parsley-minlength="10" name="nic"  class="form-control col-md-7 col-xs-12">
                             
                            </div>
                          </div>
                          <div class="form-group">
                            <span style="display: inline-block;">*Date of Birth</span>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                              <input style="display: inline-block;" placeholder="Date Of Birth" id="middle-name" class="form-control col-md-7 col-xs-12" type="date"  name="dob">
                              
                            </div>

                          </div>
                
                          <div class="form-group">
                            
                            <div class="col-md-12 col-sm-12 col-xs-12">

                            <select class="form-control" name="ethnicity" required="required">
                            <option value="">Choose Ethnicity</option>
                            <option value="Sinhala">Sinhala</option>
                            <option value="Tamil">Tamil</option>
                            <option value="Muslim">Muslim</option>
                            <option value="Other">Other</option>
                            
                          </select>
                        </div>
                          </div>
                          <div class="form-group">
                            
                            <div class="col-md-12 col-sm-12 col-xs-12">

                            <select class="form-control" name="gender" required="required">
                            <option value="">Choose Gender</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                            
                          </select>
                        </div>
                          </div>

                          <div class="form-group">
                            
                            <div class="col-md-12 col-sm-12 col-xs-12">
                             <textarea placeholder="Address" class="form-control col-md-7 col-xs-12" id="add" name="add" required="required" rows="4"></textarea>
                             
                            </div>
                          </div>

                          <div class="form-group">
                            
                            <div class="col-md-12 col-sm-12 col-xs-12">
                              <input placeholder="Telephone" id="middle-name" class="form-control col-md-7 col-xs-12" type="text"   name="tp">
                              
                            </div>
                          </div>

                          <div class="form-group">
                           
                            <div class="col-md-12 col-sm-12 col-xs-12">
                              <input placeholder="Guardian Name" id="middle-name" class="form-control col-md-7 col-xs-12" type="text" required="required" name="gName">
                              
                            </div>
                          </div>

                          <div class="form-group">
                            
                            <div class="col-md-12 col-sm-12 col-xs-12">
                              <input placeholder="Relationship to the Child" id="middle-name" class="form-control col-md-7 col-xs-12" type="text" required="required" name="rel">
                              
                            </div>
                          </div>

                          
        
                  </div>

                  <div class="col-md-6 col-sm-6 col-xs-12">
                          <div class="form-group">
                            
                            <div class="col-md-12 col-sm-12 col-xs-12">
                              <input placeholder="A/L 1st Attempt Year" id="middle-name" class="form-control col-md-7 col-xs-12" type="text" required="required" name="al_year">
                              
                            </div>
                          </div>
                  
                          <div class="form-group">
                            
                            <div class="col-md-12 col-sm-12 col-xs-12">
                             <select class="form-control" name="dsd" required="required" id="ds">
                            <option value="">Choose DS Division</option>
                            <?php foreach($dsd as $d){
                              echo "<option value='$d->ID'>$d->DSD_Name</option>";
                             }?>
            
                          </select>
                              <input type="hidden" name="dsd_name" value="<?php echo $d->DSD_Name ?>">
                              <input type="hidden" name="dis" value="<?php echo $d->District ?>">
                            </div>
                          </div>

                          <div class="form-group">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                             <select class="form-control" name="gn" required="required" id="gn">
                            <option value="">Choose GN Division</option>
                            
                          </select>
                             
                            </div>
                          </div>

                          
                          <div class="form-group">
                            
                            <div class="col-md-12 col-sm-12 col-xs-12">
                             <select class="form-control" name="branch" required="required">
                            <option value="">Choose Branch</option>
                            <?php 
                            $branch_id = $this->session->userdata('branch_id');
                            foreach($branch as $b){ ?>
                              
                              <option <?php if($branch_id==$b->ID){ echo "selected='selected'"; } ?> 
                                   value="<?php echo $b->ID?>"><?php echo $b->Name?></option>
                             <?php }?>
                              
                                       
                          </select>
                              
                            </div>
                          </div>

                          <div class="form-group">
                           
                            <div class="col-md-12 col-sm-12 col-xs-12">

                            <select class="form-control" name="sector" required="required">
                            <option value="">Choose Sector</option>
                            <option value="Plantation">Plantation</option>
                            <option value="Rural">Rural</option>
                            
                          </select>
                        </div>
                          </div>

                    <div class="form-group">
                            
                            <div class="col-md-12 col-sm-12 col-xs-12">

                            <select class="form-control" name="samurdi" required="required">
                            <option value="">Is Student From Samurdhi Family?</option>
                            <option value="1">Yes</option>
                            <option value="0">No</option>
                            
                          </select>
                        </div>
                    </div>
                    
                    <div class="form-group"> 
                            <div class="col-md-12 col-sm-12 col-xs-12">
                            <select class="form-control" name="low" required="required">
                            <option value="">Is Student From Low Income Family?</option>
                            <option value="1">Yes</option>
                            <option value="0">No</option>
                            
                          </select>
                        </div>
                    </div>
                    <div class="form-group">

                            <div class="col-md-12 col-sm-12 col-xs-12">

                            <select class="form-control" name="bmi" id="bmi" required="required">
                            <option value="">Is Student from BMI Client Family?</option>
                            <option value="1">Yes</option>
                            <option value="0">No</option>
                            
                          </select>
                        </div>
                  </div>
                  <div class="form-group" id="client_code" style="display: none;">
                            
                            <div class="col-md-12 col-sm-12 col-xs-12">
                              <input placeholder="BMI Client Code" id="middle-name" class="form-control col-md-7 col-xs-12" type="text"  name="client_code">
                              
                            </div>
                          </div>

                    <div class="form-group" id="bmipci" style="display: none;">
                           
                            <div class="col-md-12 col-sm-12 col-xs-12">
                              <input placeholder="PCI- BMI" type="text" id="last-name" data-parsley-max="7500"  data-parsley-type="number" name="bmipci"  class="form-control col-md-7 col-xs-12">
                             
                            </div>
                     </div>
                     <div class="form-group" id="pci" style="display: none;">
                           
                            <div class="col-md-12 col-sm-12 col-xs-12">
                              <input placeholder="PCI- None BMI" type="text" id="last-name" data-parsley-max="5000" data-parsley-type="number" name="pci"  class="form-control col-md-7 col-xs-12">
                             
                            </div>
                     </div>
                     <div class="form-group">
                           
                            <div class="col-md-12 col-sm-12 col-xs-12">
                             <select class="form-control" name="status" required="required">
                            <option value="">Select Current Status</option>
                            <?php foreach($status as $s){
                              
                              echo "<option value='$s->ID'>$s->status</option>";
                             }?>
                          </select>
                              
                            </div>
                          </div>
                    <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
                          <button class="btn btn-primary" type="reset">Reset</button>
                          <button name="submit" type="submit" class="btn btn-success">Save Data</button>
                        </div>
                    </div>
                    </div>
                      
                  </div>



                  </div>
                </div>

                <!-- second panel start-->
                
                <!-- second panel end -->
              </div>    
             
</form>
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
<script type="text/javascript">
  var choice_combo = document.getElementById('bmi');
choice_combo.onchange = function() {
    switch (this.value.toLowerCase()) {
    case '1':
        
        document.getElementById("client_code").style.display = 'block';
        document.getElementById("bmipci").style.display = 'block';
        document.getElementById("bmipci").setAttribute ('data-parsley-max','7500');
        document.getElementById("bmipci").setAttribute ('data-parsley-type','integer');
        document.getElementById("pci").style.display = 'none';
        

        break;
    case '0':
        document.getElementById("client_code").style.display = 'none';
        document.getElementById("pci").style.display = 'block';
        document.getElementById("pci").setAttribute ('data-parsley-max','5000');
        document.getElementById("pci").setAttribute ('data-parsley-type','integer');
        document.getElementById("pci").setAttribute ('required','required');

        document.getElementById("bmipci").style.display = 'none';

        
        break;

    }
}
</script>

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
        from: "bottom",
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
      enter: 'animated fadeInUp',
      exit: 'animated fadeOutDown'
      },
      });

  });
  //-->       
  </script>
<?php endif; ?>
<script>
	jQuery(document).ready(function(){
      $("#ds").change(function() {
        $.ajax({
          type: "POST",
          data: $('#myForm').serialize(),
          url: "<?= base_url() ?>Reports_Controller/dependent_ds",

          success: function(data){
		  $("#gn").html("");
		  $('#gn').append("<option value=''> Choose GN Division </option>");
            $.each(data, function(i, data){
            $('#gn').append("<option value='" + data.GN_ID + "'>" + data.GN_Office + "</option>");
		  
            });
           }
         });
       });
     });
	 
	 
</script>
</body>

</html>


