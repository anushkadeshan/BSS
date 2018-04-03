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
<form class="form-horizontal" data-parsley-validate action="<?php echo base_url() ?>Update_Progress_Controller/update_2" method="post">
<div class="row">
    <?php foreach($student as $s) :?>
    <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    
                    <h2>Student Personal Infomation of <?php echo $s->ST_Name ?>   <small><?php echo $s->Ref_No ?></small></h2>
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
                            <label>Student Name</label>
                              <input placeholder="Student Name" value="<?php echo $s->ST_Name ?>" type="text" id="first-name" name="name" required="required" class="form-control col-md-7 col-xs-12">
                             
                            </div>
                          </div>
                          <div class="form-group">
                           
                            <div class="col-md-12 col-sm-12 col-xs-12">
                            <label>NIC Number</label>
                              <input placeholder="NIC Number" value="<?php echo $s->NIC ?>" type="text" id="last-name" data-parsley-minlength="10" name="nic"  class="form-control col-md-7 col-xs-12">
                             
                            </div>
                          </div>
                          <div class="form-group">
                          
                            <div class="col-md-9 col-sm-9 col-xs-12">
                             <label>Date of Birth</label>
                              <input value="<?php echo $s->DOB ?>" placeholder="Date Of Birth" id="middle-name" class="form-control col-md-7 col-xs-12" type="date"   name="dob">
                              
                            </div>

                          </div>
                          <div class="form-group">
                            
                            <div class="col-md-12 col-sm-12 col-xs-12">
                            <label>Ethnicity</label>
                              <input id="middle-name" placeholder="Ethnicity" value="<?php echo $s->Ethnicity ?>" class="form-control col-md-7 col-xs-12" type="text" required="required" name="ethnicity">
                              
                            </div>
                          </div>
                          <div class="form-group">
                            
                            <div class="col-md-12 col-sm-12 col-xs-12">
                            <label>Gender</label>
                            <select class="form-control" name="gender" required="required">
                            <option value="">Choose Gender</option>
                            <option <?php if($s->Gender=='Male'){?> selected="selected" <?php }?> value="Male">Male</option>
                            <option <?php if($s->Gender=='Female'){?> selected="selected" <?php }?> value="Female">Female</option>
                            
                          </select>
                        </div>
                          </div>

                          <div class="form-group">
                            
                            <div class="col-md-12 col-sm-12 col-xs-12">
                            <label>Address</label>
                             <textarea placeholder="Address"  class="form-control col-md-7 col-xs-12" id="add" name="add" required="required" rows="4"><?php echo $s->Address ?></textarea>
                             
                            </div>
                          </div>

                          <div class="form-group">
                            
                            <div class="col-md-12 col-sm-12 col-xs-12">
                            <label>Contact No</label>
                              <input placeholder="Contanct No" id="middle-name" value="<?php echo $s->Contact_No ?>" class="form-control col-md-7 col-xs-12" type="text"   name="tp">
                              
                            </div>
                          </div>

                          <div class="form-group">
                           
                            <div class="col-md-12 col-sm-12 col-xs-12">
                            <label>Guardian Name</label>
                              <input placeholder="Guardian Name" id="middle-name" value="<?php echo $s->Guardian_Name ?>" class="form-control col-md-7 col-xs-12" type="text" required="required" name="gName">
                              
                            </div>
                          </div>

                          <div class="form-group">
                            
                            <div class="col-md-12 col-sm-12 col-xs-12">
                            <label>Relationship to Child</label>
                              <input placeholder="Relationship to the Child" value="<?php echo $s->Relationship ?>" id="middle-name" class="form-control col-md-7 col-xs-12" type="text" required="required" name="rel">
                              
                            </div>
                          </div>

                          
        
                  </div>

                  <div class="col-md-6 col-sm-6 col-xs-12">
                          <div class="form-group">
                            
                            <div class="col-md-12 col-sm-12 col-xs-12">
                              <label>A/L 1st Attempt Year</label>
                              <input value="<?php echo $s->al_year ?>" id="middle-name" class="form-control col-md-7 col-xs-12" type="text" required="required" name="al_year">
                              
                            </div>
                          </div>
                  
                          <div class="form-group">
                            
                            <div class="col-md-12 col-sm-12 col-xs-12">
                            <label>DS Division</label>
                             <select class="form-control" name="dsd" required="required">
                            <option value="">Choose DS Division</option>
                            <?php foreach($dsd as $d){ ?>
                               <option <?php if($s->DSD_ID==$d->ID){ echo "selected='selected'"; } ?> 
                                   value="<?php echo $d->ID?>"><?php echo $d->DSD_Name?></option>
                             <?php }?>
            
                          </select>
                              <input type="hidden" name="dsd_name" value="<?php echo $d->DSD_Name ?>">
                              <input type="hidden" name="dis" value="<?php echo $d->District ?>">
                            </div>
                          </div>

                          <div class="form-group">
                            <div class="col-md-12 col-sm-12 col-xs-12">
                             <label>GN Division</label>
                             <select class="form-control" name="gn" required="required">
                            <option value="">Choose GN Division</option>
                            <?php foreach($gn as $g){ ?>
                               <option <?php if($s->GN_ID==$g->GN_ID){ echo "selected='selected'"; } ?> 
                                   value="<?php echo $g->GN_ID?>"><?php echo $g->GN_Office?></option>
                             <?php }?>
                          </select>
                             
                            </div>
                          </div>
                          <div class="form-group">
                            
                            <div class="col-md-12 col-sm-12 col-xs-12">
                            <label>Branch</label>
                             <select class="form-control" name="branch" required="required">
                            <option value="">Choose Branch</option>
                            <?php 
                            $branch_id = $this->session->userdata('branch_id');
                            foreach($branch as $b){ ?>
                              
                              <option <?php if($s->Branch_ID==$b->ID){ echo "selected='selected'"; } ?> 
                                   value="<?php echo $b->ID?>"><?php echo $b->Name?></option>
                             <?php }?>
                              
                                       
                          </select>
                              
                            </div>
                          </div>

                          <div class="form-group">
                           
                            <div class="col-md-12 col-sm-12 col-xs-12">
                            <label>Sector</label>
                            <select class="form-control" name="sector" required="required">
                            <option value="">Choose Sector</option>
                            <option  <?php if($s->Sector_ID=='Plantation'){?> selected="selected" <?php }?> value="Plantation">Plantation</option>
                            <option <?php if($s->Sector_ID=='Rural'){?> selected="selected" <?php }?> value="Rural">Rural</option>
                            
                          </select>
                        </div>
                          </div>

                    <div class="form-group">
                            
                            <div class="col-md-12 col-sm-12 col-xs-12">
                            <label>Is Student from Samurdhi</label>
                            <select class="form-control" name="samurdi" required="required">
                            <option value="">Select Option</option>
                            <option <?php if($s->samurdi=='1'){?> selected="selected" <?php }?> value="1">Yes</option>
                            <option <?php if($s->samurdi=='0'){?> selected="selected" <?php }?> value="0">No</option>
                            
                          </select>
                        </div>
                    </div>
                    
                    <div class="form-group"> 
                            <div class="col-md-12 col-sm-12 col-xs-12">
                            <label>Is Student From Low Income Family?</label>
                            <select class="form-control" name="low" required="required">
                            <option value="">Choose Option</option>
                            <option <?php if($s->LowIncome=='1'){?> selected="selected" <?php }?> value="1">Yes</option>
                            <option  <?php if($s->LowIncome=='0'){?> selected="selected" <?php }?> value="0">No</option>
                            
                          </select>
                        </div>
                    </div>
                    <div class="form-group">

                            <div class="col-md-12 col-sm-12 col-xs-12">
                            <label>Is Student from BMI Client Family?</label>
                            <select class="form-control" name="bmi" id="bmi" required="required">
                            <option value="">Is Student from BMI Client Family?</option>
                            <option <?php if($s->Direct_BMI=='1'){?> selected="selected" <?php }?> value="1">Yes</option>
                            <option <?php if($s->Direct_BMI=='0'){?> selected="selected" <?php }?> value="0">No</option>
                            
                          </select>
                        </div>
                  </div>
                  <div class="form-group" id="client_code" <?php if($s->Direct_BMI=='0'){?> style="display: none;" <?php }?> >
                            
                            <div class="col-md-12 col-sm-12 col-xs-12">
                            <label>BMI Client Code</label>
                              <input placeholder="BMI Client Code" <?php if($s->Direct_BMI=='1'){?> required="required" <?php }?> id="middle-name" value="<?php echo $s->client_code ?>" class="form-control col-md-7 col-xs-12" type="text"  name="client_code">
                              
                            </div>
                          </div>

                    <div class="form-group" id="bmipci" <?php if($s->Direct_BMI=='0'){?> style="display: none;" <?php }?>>
                           
                            <div class="col-md-12 col-sm-12 col-xs-12">
                            <label>BMI PCI</label>
                              <input placeholder="PCI- BMI" <?php if($s->Direct_BMI=='1'){?> required="required" <?php }?> value="<?php echo $s->BmiPci ?>" type="text" id="last-name" data-parsley-max="7500"  data-parsley-type="number" name="bmipci"  class="form-control col-md-7 col-xs-12">
                             
                            </div>
                     </div>
                     <div class="form-group" id="pci" <?php if($s->Direct_BMI=='1'){?> style="display: none;" <?php }?>>
                           
                            <div class="col-md-12 col-sm-12 col-xs-12">
                            <label>None BMI PCI</label>
                              <input placeholder="PCI- None BMI" <?php if($s->Direct_BMI=='0'){?> required="required" <?php }?> value="<?php echo $s->noneBmiPci ?>" type="text" id="last-name" data-parsley-max="5000" data-parsley-type="number" name="pci"  class="form-control col-md-7 col-xs-12">
                             
                            </div>
                     </div>
                     
                    <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
                          <input type="hidden" name="id" value="<?php echo $s->ST_ID ?>">
                          <input type="hidden" name="status" value="<?php echo $s->status_id ?>">
                          <a href="<?php echo base_url() ?>Update_Progress_Controller/index" title=""><button class="btn btn-primary" type="button">Back</button></a>
                          <button name="submit" type="submit" class="btn btn-success">Update Data</button>
                        </div>
                    </div>
                    </div>
                      
                  </div>

                  </div>
                </div>
              <?php endforeach; ?>
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
        document.getElementById("bmipci").setAttribute ('required','required');
        
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
  </body>

</html>


