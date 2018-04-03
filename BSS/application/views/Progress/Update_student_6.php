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

<div class="row">
    
    <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  
                  <div class="x_content">
                    <br />
                   <?php

                   $status = $this->session->userdata('status');

                   switch ($status) {
                      case "1":
                      case "2":
                      case "3": 
                      case "4":
                      case "5":
                      case "6":
                      case "7":
                      case "8": 
                      case "9":

                      ?>
                      
                      <!-- students/schoal data -->

                      <form class="form-horizontal" data-parsley-validate action="<?php echo base_url() ?>Update_Progress_Controller/update_scholar" method="post">
                      <div class="row" style="border: 2px #E6E9ED solid;">
                      <div class="x_title">
                      <h4 style="font-weight: bold;">Student Scholarship Details</h4>
                      </div>
                      <?php foreach($scholar as $s) :?> 
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="form-group">
                            
                            <div class="col-md-12 col-sm-12 col-xs-12">
                              <input placeholder="Scholarship Amount"  type="text" value="<?php echo $s->Scholar_Amount; ?>" id="first-name" required="required" name="amount" class="form-control col-md-7 col-xs-12">
                             
                            </div>
                      </div>

                      <div class="form-group">
                            
                            <div class="col-md-12 col-sm-12 col-xs-12">
                              <input placeholder="Payment Started Year" value="<?php echo $s->Payment_Start_Year; ?>" data-parsley-type="integer" required="required" type="year" id="first-name" name="p_year" class="form-control col-md-7 col-xs-12">
                             
                            </div>
                      </div>

                      <div class="form-group">
                            
                            <div class="col-md-12 col-sm-12 col-xs-12">
                              <select name="month" class="form-control col-md-7 col-xs-12" required="required">
                              <option value=''>Select Payment Started Month</option>
                                  <option <?php if($s->Payment_Start_Month==1){?> selected="selected" <?php }?>  value='1'>January</option>
                                  <option <?php if($s->Payment_Start_Month==2){?> selected="selected" <?php }?> value='2'>February</option>
                                  <option <?php if($s->Payment_Start_Month==3){?> selected="selected" <?php }?> value='3'>March</option>
                                  <option <?php if($s->Payment_Start_Month==4){?> selected="selected" <?php }?> value='4'>April</option>
                                  <option <?php if($s->Payment_Start_Month==5){?> selected="selected" <?php }?> value='5'>May</option>
                                  <option <?php if($s->Payment_Start_Month==6){?> selected="selected" <?php }?> value='6'>June</option>
                                  <option <?php if($s->Payment_Start_Month==7){?> selected="selected" <?php }?> value='7'>July</option>
                                  <option <?php if($s->Payment_Start_Month==8){?> selected="selected" <?php }?> value='8'>August</option>
                                  <option <?php if($s->Payment_Start_Month==9){?> selected="selected" <?php }?> value='9'>September</option>
                                  <option <?php if($s->Payment_Start_Month==10){?> selected="selected" <?php }?> value='10'>October</option>
                                  <option <?php if($s->Payment_Start_Month==11){?> selected="selected" <?php }?> value='11'>November</option>
                                  <option <?php if($s->Payment_Start_Month==12){?> selected="selected" <?php }?> value='12'>December</option>

                            </select>
                             
                            </div>
                      </div>
                      <div class="form-group">
                            
                            <div class="col-md-12 col-sm-12 col-xs-12">

                            <select class="form-control" name="renewel" required="required">
                            <option value="">Is Renewel Document Submitted </option>
                            <option <?php if($s->Renewal_Document==1){?> selected="selected" <?php }?> value="1">Yes</option>
                            <option <?php if($s->Renewal_Document==0){?> selected="selected" <?php }?> value="0">No</option>
                            
                            
                          </select>
                        </div>
                      </div>
                      <div class="form-group">
                            
                            <div class="col-md-12 col-sm-12 col-xs-12">
                              <select name="p_status" class="form-control col-md-7 col-xs-12" required="required">
                              <option value=''>Select Payment Started Month</option>
                                  <option <?php if($s->p_status==1){?> selected="selected" <?php }?>  value='1'>Ongoing</option>
                                  <option <?php if($s->p_status==2){?> selected="selected" <?php }?> value='2'>Finished</option>
                                  <option <?php if($s->p_status==3){?> selected="selected" <?php }?> value='3'>Hold</option>
                                  <option <?php if($s->p_status==4){?> selected="selected" <?php }?> value='4'>Drop out</option>
                                  
                            </select>
                             
                            </div>
                      </div>
                      <div class="form-group">
                            
                            <div class="col-md-12 col-sm-12 col-xs-12">
                              <option value="">Payment finished Year </option>
                              <input placeholder="" data-parsley-type="integer" type="year" value="<?php echo $s->finished_year; ?>" id="first-name" name="finished_year" class="form-control col-md-7 col-xs-12">
                             
                            </div>
                      </div>
                          <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          
                          <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
                          <a href="<?php echo base_url() ?>Update_Progress_Controller/load_select_page" title=""><button class="btn btn-primary" type="button">Back</button></a>
                          <button name="submit" type="submit" class="btn btn-success">Update Data</button>
                        </div>
                    </div>

                      </div>
                    <?php endforeach; ?>
                      </div>
                      </form>
                      <!-- finish students/After AL -->

                      <?php 
                      
                       
                      break;
                      default:
                      echo "You don't have permission to edit in this page";
                  }

                  ?>
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
  var choice_combo1 = document.getElementById('pass1');
choice_combo1.onchange = function() {
    switch (this.value.toLowerCase()) {
    case '1':
        
        document.getElementById("z1").style.display = 'block';
        document.getElementById("d_rank1").style.display = 'block';
        document.getElementById("i_rank1").style.display = 'block';
        document.getElementById("z11").setAttribute ('required','required');
        document.getElementById("d_rank11").setAttribute ('required','required');
        document.getElementById("i_rank11").setAttribute ('required','required');

        

        break;
    case '0':
        document.getElementById("z1").style.display = 'none';
        document.getElementById("d_rank1").style.display = 'none';
        document.getElementById("i_rank1").style.display = 'none';
        document.getElementById("z11").setAttribute ('value','');
        document.getElementById("d_rank11").setAttribute ('value','');
        document.getElementById("i_rank11").setAttribute ('value','');
        
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


