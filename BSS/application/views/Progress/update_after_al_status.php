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
<?php
  $st_id =  $this->session->userdata('st_id');
  $status = $this->session->userdata('status');

  if($status==2){ 

      foreach($dropout as $d):
      ?>

     <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Reasons for Drop Out - <?php echo $d->ST_Name; ?> <small><?php echo $d->Ref_No; ?></small></h2>
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

                  <form class="form-horizontal" data-parsley-validate action="<?php echo base_url() ?>Update_Progress_Controller/update_after_al" method="post">

                    <div class="form-group">
                            
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <textarea placeholder="Reasons for Drop Out" class="form-control col-md-7 col-xs-12" id="reason" name="reason" required="required" rows="4"><?php echo $d->Reason ?></textarea>
                              
                      </div>
                    </div>


                    <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
                         
                          <a href="<?php echo base_url() ?>Update_Progress_Controller/load_select_page" title=""><button class="btn btn-primary" type="button">Back</button></a>
                          <button name="submit" type="submit" class="btn btn-success">Update Data</button>
                        </div>
                    </div>
                    </form>

                  </div>
                </div>
              </div>
      

    <?php 
    endforeach;
  } 

    if($status==3){ 

      foreach($no_job as $nj):
      ?>

     <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Reasons for No Job - <?php echo $nj->ST_Name; ?> <small><?php echo $nj->Ref_No; ?></small></h2>
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

                  <form class="form-horizontal" data-parsley-validate action="<?php echo base_url() ?>Update_Progress_Controller/update_after_al" method="post">

                    <div class="form-group">
                            
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <textarea placeholder="Reasons for No Job" class="form-control col-md-7 col-xs-12" id="reason" name="reason" required="required" rows="4"><?php echo $nj->reason ?></textarea>
                              
                      </div>
                    </div>


                    <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
                         
                          <a href="<?php echo base_url() ?>Update_Progress_Controller/load_select_page" title=""><button class="btn btn-primary" type="button">Back</button></a>
                          <button name="submit" type="submit" class="btn btn-success">Update Data</button>
                        </div>
                    </div>
                    </form>

                  </div>
                </div>
              </div>
      

    <?php 
    endforeach;
  } 
    if(($status==4)|| $status==5){ 
      foreach($vt as $v) :
      ?>

    <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Course Details - <?php echo $v->ST_Name; ?> <small><?php echo $v->Ref_No; ?></small></h2>
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

                  <form class="form-horizontal" data-parsley-validate action="<?php echo base_url() ?>Update_Progress_Controller/update_after_al" method="post">

                    <div class="form-group">
                            
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input placeholder="Course Name" id="middle-name" value="<?php echo $v->VT_Name ?>" class="form-control col-md-7 col-xs-12" type="text" required="required" name="course">
                              
                      </div>
                    </div>

                    <div class="form-group">
                           
                      <div class="col-md-6 col-sm-6 col-xs-12">

                        <select class="form-control" name="category" required="required">
                            <option value="">Choose Category</option>
                            <option <?php if($v->Category=='Proffesional'){?> selected="selected" <?php }?> value="Proffesional">Proffessional</option>
                            <option <?php if($v->Category=='Vocational Training'){?> selected="selected" <?php }?> value="Vocational Training">Vocational Training</option>
                            
                        </select>
                      </div>
                    </div>
                    <div class="form-group">
                            
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input placeholder="Institute" id="middle-name" value="<?php echo $v->Institute ?>" class="form-control col-md-7 col-xs-12" type="text" required="required" name="institute">
                              
                      </div>
                    </div>

                    <div class="form-group">
                            
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input placeholder="Year Completion" value="<?php echo $v->Year_Completion ?>" data-parsley-type="number" id="middle-name" class="form-control col-md-7 col-xs-12" type="text" required="required" name="year">
                              
                      </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
                         
                          <button class="btn btn-primary" type="reset">Reset</button>
                          <button name="submit" type="submit" class="btn btn-success">Save Data</button>
                        </div>
                    </div>
                    </form>

                  </div>
                </div>
              </div>

    <?php
    endforeach;
     }

    if($status==6){ 

      foreach($job_data as $jd):
      ?>
      <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Job Details - <?php echo $jd->ST_Name; ?> <small><?php echo $jd->Ref_No; ?></small></h2>
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

                  <form class="form-horizontal" data-parsley-validate action="<?php echo base_url() ?>Update_Progress_Controller/update_after_al" method="post">

                    <div class="form-group">
                            
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input placeholder="Job Position" id="middle-name" value="<?php echo $jd->Job_Position ?>" class="form-control col-md-7 col-xs-12" type="text" required="required" name="position">
                              
                      </div>
                    </div>

                    <div class="form-group">
                            
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input placeholder="Comapny" id="middle-name" value="<?php echo $jd->Company ?>" class="form-control col-md-7 col-xs-12" type="text" required="required" name="company">
                              
                      </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
                         
                          <button class="btn btn-primary" type="reset">Reset</button>
                          <button name="submit" type="submit" class="btn btn-success">Save Data</button>
                        </div>
                    </div>
                    </form>

                  </div>
                </div>
              </div>
      

    <?php
    endforeach;
     }

    if($status==8){

      foreach($university as $u)
     ?>

    <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>University Details of  - <?php echo $u->ST_Name; ?> <small><?php echo $u->Ref_No; ?></small></h2>
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

                  <form class="form-horizontal" data-parsley-validate action="<?php echo base_url() ?>Update_Progress_Controller/update_after_al" method="post">

                    <div class="form-group">
                            
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input placeholder="University Name" id="middle-name" value="<?php echo $u->Name ?>" class="form-control col-md-7 col-xs-12" type="text" required="required" name="uni">
                              
                      </div>
                    </div>

                    <div class="form-group">
                            
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input placeholder="Faculty Name" id="middle-name" value="<?php echo $u->Faculty ?>" class="form-control col-md-7 col-xs-12" type="text" required="required" name="fac">
                              
                      </div>
                    </div>

                    <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
                          
                          <button class="btn btn-primary" type="reset">Reset</button>
                          <button name="submit" type="submit" class="btn btn-success">Save Data</button>
                        </div>
                    </div>
                    </form>

                  </div>
                </div>
              </div>

    <?php }

    if($status==null){ ?>
      You don't have permission to access this content. Never refresh web page without submit.
    <?php }

?>
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
  </body>

</html>


