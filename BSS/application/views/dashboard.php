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
    <style type="text/css" media="screen">
      .holder { 
  width:300px;
  height:340px;
  overflow:hidden;
  padding:5px;
  font-family:Helvetica;
}
.holder .mask {
  position: relative;
  left: 0px;
  top: 10px;
  width:300px;
  height:340px;
  overflow: hidden;
}
.holder ul {
  list-style:none;
  margin:0;
  padding:0;
  position: relative;
}
.holder ul li {
  padding:10px 0px;
}
.holder ul li a {
  color:darkred;
  text-decoration:none;
}
    </style>
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
       <?php $this->view('sidebar'); ?> 
    <!-- page content -->
    
      <div class="right_col" role="main">
         <!-- top tiles -->
        <?php if($al_year>0){ ?>
              <div id="notifications">
                <div style="color: <?php echo $this->session->flashdata('color'); ?>">
                  <marquee> <?php echo $this->session->flashdata('msg'); ?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; <?php echo $this->session->flashdata('msg1'); ?></marquee> 
                </div>
              </div>
              <?php } ?>
          <div class="row tile_count">
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Total Students</span>
              <div class="count"><?php echo $total_students; ?></div>
              <span class="count_bottom"><i class="green"></i></span>
            </div>
            
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Total Males</span>
              <div class="count green"><?php echo $total_male; ?></div>
              
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Total Females</span>
              <div class="count"><?php echo $total_students-$total_male; ?></div>
              
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-clock-o"></i> BMI Students</span>
              <div class="count"><?php echo $total_bmi; ?></div>
              <span class="count_bottom"><i class="green"><i></i><?php echo $total_students-$total_bmi; ?> </i> Students are None-BMI</span>
            </div>

            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Total Samurdhi</span>
              <div class="count"><?php echo $total_samurdi; ?></div>
              <span class="count_bottom"><i class="green"><i></i><?php echo $total_students-$total_samurdi; ?> </i> for None-Samurdi</span>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-6 tile_stats_count">
              <span class="count_top"><i class="fa fa-user"></i> Total Low Income</span>
              <div class="count"><?php echo $total_low_income; ?></div>
             
            </div>
          </div>
          <!-- /top tiles -->   
          <!--charts -->
          <div class="row">
            
              <!-- bar chart -->
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Students by Status <small></small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <div id="graph" style="width:100%; height:280px;"></div>
                  </div>
                </div>
              
              <!-- /bar charts -->
            </div>
            <?php if($this->session->userdata('user_id')==1) { ?>
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Students by Branch <small></small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <div id="graph1" style="width:100%; height:280px;"></div>
                  </div>
                </div>
              
              <!-- /bar charts -->
            </div>
            <?php } ?> 
          </div>
          <!--finish charts -->
          <hr>
          <!--charts 2 -->
          <div class="row">
            
              <!-- pie chart -->
              <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Students by Gender <small></small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <div id="donut-example"></div>
                  </div>
                </div>
              
              <!-- /pie charts -->
            </div>

             <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Students by Sector <small></small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <div id="donut-example-2"></div>
                  </div>
                </div>
              
              <!-- /pie charts -->
            </div>

            <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Students by Samurdi <small></small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <div id="donut-example-3"></div>
                  </div>
                </div>
              
              <!-- /pie charts -->
            </div>
          </div>
          <!--finish charts 2 -->           

          <!--charts 3 -->
          <div class="row">
            
              <!-- pie chart -->
              <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Students by Low Income <small></small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <div id="donut-example-4"></div>
                  </div>
                </div>
              
              <!-- /pie charts -->
            </div>

             <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Students by BMI <small></small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <div id="donut-example-5"></div>
                  </div>
                </div>
              
              <!-- /pie charts -->
            </div>

            <div class="col-md-4 col-sm-4 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Branch Activities<small></small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content" style="max-height: 354px; min-height: 354px">
                  <div class="holder">
                  <ul id="ticker01">
                          <?php foreach($activity as $ac ){
                            $my = strtotime($ac->time);

                           ?>
                          <li style="border-bottom: 1px #4286f4 solid "><span style="color: #4286f4"><?php echo date('Y-m-d',$my); ?> <span style="color: #6c6d6d">at</span> <?php echo date('H:i A',$my); ?></span> <span style="font-weight: bold"> <?php echo $ac->message ?></span> by <?php echo $ac->username ?>  </li>

                      <?php } ?>    
                  </ul>
</div>
                   <ul>
                      
                   </ul>
                  </div>
                </div>
              
              <!-- /pie charts -->
            </div>
          </div>
          <!--finish charts 3 -->        
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
</body>

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
    <!-- morris.js -->
    <script src="<?php echo base_url() ?>vendors/raphael/raphael.min.js"></script>
    <script src="<?php echo base_url() ?>vendors/morris.js/morris.min.js"></script>
    <script>
      // Use Morris.Bar
        Morris.Bar({
          element: 'graph',
          data: [
          <?php foreach($count_status as $cs){ ?>

            {x: '<?php echo $cs->status; ?>', y: <?php echo $cs->total; ?>},
          <?php } ?>
          ],
          xkey: 'x',
          ykeys: ['y'],
          labels: ['Total'],
            barColors: function (row, series, type) {
                if (type === 'bar') {
                  var red = Math.ceil(100 * row.y / this.ymax);
                  return 'rgb(' + red + ',34,255)';
                }
                else {
                  return '#000';
                }
              }


        }).on('click', function(i, row){
          console.log(i, row);
        })

              Morris.Donut({
                element: 'donut-example',
                data: [
                  {label: "Male", value: <?php echo $total_male; ?>},
                  {label: "Female", value: <?php echo $total_students-$total_male; ?>}
                  
        ]
      });

              Morris.Donut({
                element: 'donut-example-2',
                data: [
                  {label: "Plantation", value: <?php echo $total_sector; ?>},
                  {label: "Rural", value: <?php echo $total_students-$total_sector; ?>}
                  
        ]
      });

              Morris.Donut({
                element: 'donut-example-3',
                data: [
                  {label: "Samurdhi", value: <?php echo $total_samurdi; ?>},
                  {label: "None-Samurdi", value: <?php echo $total_students-$total_samurdi; ?>}
                  
        ]
      });

              Morris.Donut({
                element: 'donut-example-4',
                data: [
                  {label: "Low Income", value: <?php echo $total_low_income; ?>},
                  {label: "None-Low", value: <?php echo $total_students-$total_low_income; ?>}
                  
        ]
      });

              Morris.Donut({
                element: 'donut-example-5',
                data: [
                  {label: "BMI", value: <?php echo $total_bmi; ?>},
                  {label: "None-BMI", value: <?php echo $total_students-$total_bmi; ?>}
                  
        ]
      });
    </script>
    <?php if($this->session->userdata('user_id')==1) { ?>
    <script>
      // Use Morris.Bar
        Morris.Bar({
          element: 'graph1',
          data: [
          <?php foreach($branch_count as $bc){ ?>

            {x: '<?php echo $bc->Name; ?>', y: <?php echo $bc->total; ?>},
          <?php } ?>
          ],
          xkey: 'x',
          ykeys: ['y'],
          labels: ['Total'],
            barColors: function (row, series, type) {
                if (type === 'bar') {
                  var red = Math.ceil(100 * row.y / this.ymax);
                  return 'rgb(' + red + ',200,150)';
                }
                else {
                  return '#000';
                }
              }


        }).on('click', function(i, row){
          console.log(i, row);
        })

        </script>
    <?php } ?>

    <!-- Custom Theme Scripts -->
    <script src="<?php echo base_url() ?>build/js/custom.min.js"></script> 
    
    <script>
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
      delay: 10000,
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

<?php if ($this->session->flashdata('msg1','type','icon') != ''): ?>
  <script type="text/javascript">

  $(document).ready(function() {  
     
    $.notify({
      icon: 'glyphicon glyphicon-<?php echo $this->session->flashdata('icon'); ?>',
      message: '<?php echo $this->session->flashdata('msg1'); ?>',
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
      z_index: 1032,
      delay: 10000,
      timer: 2000,
      animate: {
      enter: 'animated fadeInLeft',
      exit: 'animated fadeOutLeft'
      },
      });

  });
  //-->       
  </script>

  
<?php endif; ?>
<script>
    jQuery.fn.liScroll = function(settings) {
  settings = jQuery.extend({
    travelocity: 0.03
    }, settings);   
    return this.each(function(){
        var $strip = jQuery(this);
        $strip.addClass("newsticker")
        var stripHeight = 1;
        $strip.find("li").each(function(i){
          stripHeight += jQuery(this, i).outerHeight(true); // thanks to Michael Haszprunar and Fabien Volpi
        });
        var $mask = $strip.wrap("<div class='mask'></div>");
        var $tickercontainer = $strip.parent().wrap("<div class='tickercontainer'></div>");               
        var containerHeight = $strip.parent().parent().height();  //a.k.a. 'mask' width   
        $strip.height(stripHeight);     
        var totalTravel = stripHeight;
        var defTiming = totalTravel/settings.travelocity; // thanks to Scott Waye   
        function scrollnews(spazio, tempo){
        $strip.animate({top: '-='+ spazio}, tempo, "linear", function(){$strip.css("top", containerHeight); scrollnews(totalTravel, defTiming);});
        }
        scrollnews(totalTravel, defTiming);       
        $strip.hover(function(){
        jQuery(this).stop();
        },
        function(){
        var offset = jQuery(this).offset();
        var residualSpace = offset.top + stripHeight;
        var residualTime = residualSpace/settings.travelocity;
        scrollnews(residualSpace, residualTime);
        });     
    }); 
};

$(function(){
    $("ul#ticker01").liScroll();
});
  </script>
  </body>

</html>


