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
                  <div class="x_title">
                    <h2>Update O/L Infomation <?php foreach($ol_data as $oas): echo $oas->ST_Name ?>   <small><?php echo $oas->Ref_No; endforeach;?></small></h2>
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

                   <?php
                   
                   $status = $this->session->userdata('status');

                   switch ($status) {
                      case '1':
                      case "3":
                      case "4":
                      case "5":
                      case "6":
                      case "8": 
                      case "9";

                      foreach($ol_data as $oas):
                      ?>
                      
                      <!-- students/After AL -->

                      
                      
                      <form class="form-horizontal" data-parsley-validate action="<?php echo base_url() ?>Update_Progress_Controller/update_3" method="post">
                      <div class="row" style="border: 2px #E6E9ED solid;">
                      <div class="x_title">
                      <h4 style="font-weight: bold;">Student O\L Infomation</h4>
                      </div>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="form-group">
                            
                            <div class="col-md-12 col-sm-12 col-xs-12">
                            <label>Number of A</label>
                              <input placeholder="Number of A Grades" value="<?php echo $oas->OL_A ?>"  type="text" id="first-name" name="a" class="form-control col-md-7 col-xs-12">
                             
                            </div>
                      </div>

                      <div class="form-group">
                            
                            <div class="col-md-12 col-sm-12 col-xs-12">
                            <label>Number of B</label>

                              <input placeholder="Number of B Grades" value="<?php echo $oas->OL_B ?>" data-parsley-type="integer"  type="text" id="first-name" name="b" class="form-control col-md-7 col-xs-12">
                             
                            </div>
                      </div>

                      <div class="form-group">
                            
                            <div class="col-md-12 col-sm-12 col-xs-12">
                            <label>Number of C</label>
                              <input placeholder="Number of C Grades" value="<?php echo $oas->OL_C ?>" data-parsley-type="integer" type="text" id="first-name" name="c" class="form-control col-md-7 col-xs-12">
                             
                            </div>
                      </div>
                      <div class="form-group">
                            
                            <div class="col-md-12 col-sm-12 col-xs-12">
                            <label>Number of S</label>
                              <input placeholder="Number of S Grades" value="<?php echo $oas->OL_S ?>" data-parsley-type="integer" type="text" id="first-name" name="s" class="form-control col-md-7 col-xs-12">
                             
                            </div>
                      </div>
                      <div class="form-group">
                            
                            <div class="col-md-12 col-sm-12 col-xs-12">
                            <label>Number of W</label>
                              <input placeholder="Number of W Grades" value="<?php echo $oas->OL_W ?>" data-parsley-type="integer" type="text" id="first-name" name="w" class="form-control col-md-7 col-xs-12">
                             
                            </div>
                      </div>
                      </div>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                      <div class="form-group">
                            
                            <div class="col-md-12 col-sm-12 col-xs-12">
                            <label>Maths Result</label>

                            <select class="form-control" name="maths" required="required">
                            <option value="">Choose Maths Result</option>
                            <option <?php if($oas->Maths_Result=='A'){?> selected="selected" <?php }?> value="A">A</option>
                            <option <?php if($oas->Maths_Result=='B'){?> selected="selected" <?php }?> value="B">B</option>
                            <option <?php if($oas->Maths_Result=='C'){?> selected="selected" <?php }?> value="C">C</option>
                            <option <?php if($oas->Maths_Result=='S'){?> selected="selected" <?php }?> value="S">S</option>
                            <option <?php if($oas->Maths_Result=='W'){?> selected="selected" <?php }?> value="W">W</option>

                            
                          </select>
                        </div>
                          </div>
                      <div class="form-group">
                            
                            <div class="col-md-12 col-sm-12 col-xs-12">
                            <label>Exam Year</label>
                              <input placeholder="Exam Year" value="<?php echo $oas->Exam_Year ?>"  type="text" id="first-name" data-parsley-type="integer" name="year" required="required" class="form-control col-md-7 col-xs-12">
                             
                            </div>
                      </div>
                      <div class="form-group">
                            
                            <div class="col-md-12 col-sm-12 col-xs-12">

                            <label>Medium</label>
                            <select class="form-control" name="medium" required="required">
                            <option value="">Choose Medium</option>
                            <option <?php if($oas->Medium=='Sinhala'){?> selected="selected" <?php }?> value="Sinhala">Sinhala</option>
                            <option <?php if ($oas->Medium=='Tamil'){?> selected="selected" <?php }?> value="Tamil">Tamil</option>
                            <option <?php if($oas->Medium=='English'){?> selected="selected" <?php }?> value="English">English</option>
                            
                          </select>
                        </div>
                      </div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
                          <a href="<?php echo base_url() ?>Update_Progress_Controller/load_select_page" title=""><button class="btn btn-primary" type="button">Back</button></a>
                          <button name="submit" type="submit" class="btn btn-success">Update O/L Data</button>
                        </div>
                    </div>
                      
                      </div>
                      </div>
                      </form>
                      <!-- finish students/After AL -->

                      <?php 
                      endforeach;
                       ?>
                     
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
  var choice_combo = document.getElementById('second');
  choice_combo.onclick = function() {
    
        document.getElementById("2nd").style.display = 'block';
        document.getElementById("stream2").setAttribute ('required','required');
        document.getElementById("school2").setAttribute ('required','required');
        document.getElementById("year2").setAttribute ('required','required');
        document.getElementById("index2").setAttribute ('required','required');
        document.getElementById("pass2").setAttribute ('required','required');
        document.getElementById("a_al2").setAttribute ('data-parsley-type','integer');
        document.getElementById("b_al2").setAttribute ('data-parsley-type','integer');
        document.getElementById("c_al2").setAttribute ('data-parsley-type','integer');
        document.getElementById("s_al2").setAttribute ('data-parsley-type','integer');
        document.getElementById("w_al2").setAttribute ('data-parsley-type','integer');
        document.getElementById("no_attempt").setAttribute ('value','2');
        document.getElementById("no_attempt").setAttribute ('type','hidden');

       
}
</script>
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
        
        break;

    }
}
</script>

<script type="text/javascript">
  var choice_combo1 = document.getElementById('pass2');
choice_combo1.onchange = function() {
    switch (this.value.toLowerCase()) {
    case '1':
        
        document.getElementById("z2").style.display = 'block';
        document.getElementById("d_rank2").style.display = 'block';
        document.getElementById("i_rank2").style.display = 'block';
        document.getElementById("z22").setAttribute ('required','required');
        document.getElementById("d_rank22").setAttribute ('required','required');
        document.getElementById("i_rank22").setAttribute ('required','required');

        

        break;
    case '0':
        document.getElementById("z2").style.display = 'none';
        document.getElementById("d_rank2").style.display = 'none';
        document.getElementById("i_rank2").style.display = 'none';
        
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


