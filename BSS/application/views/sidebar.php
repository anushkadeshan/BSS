
<div class="col-md-3 left_col menu_fixed">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="<?php echo base_url() ?>Dashboard_Controller/index" class="site_title"><i class="fa fa-paw"></i> <span>BSS Information System</span></a>
            </div>

            <div class="clearfix"></div>

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">

              <div class="menu_section">
                <h3>Scolarship Progress</h3>
                <ul class="nav side-menu">
                <li><a href="<?php echo base_url() ?>Dashboard_Controller/index"><i class="fa fa-home"></i>Dashboard</a></li>
                  <li><a><i class="fa fa-users"></i> Bright Students <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?php echo base_url() ?>Student_Controller/index">View Bright Students</a></li>
                      <li><a href="<?php echo base_url() ?>Student_Controller/n_student">Add New Bright Student</a></li>
                      <li><a href="<?php echo base_url() ?>Update_Progress_Controller/index">Update Progress</a></li>
                      <li><a href="<?php echo base_url() ?>Student_Controller/delete_page">Delete Progress</a></li>
                      
                    </ul>
                  </li>
                  
                </ul>
              </div>

              <div class="menu_section">

                <ul class="nav side-menu">
                   
                  <?php if($this->session->userdata('user_id')==1 || $this->session->userdata('user_id')==2) {?><li><a href="<?php echo base_url() ?>DSD_Controller/index"><i class="fa fa-clone"></i>District Secretariats</a></li><?php } ?>
                   <?php if($this->session->userdata('user_id')==1|| $this->session->userdata('user_id')==2) {?><li><a href="<?php echo base_url() ?>GN_Controller/index"><i class="fa fa-clone"></i>GN Division</a></li><?php } ?>
                 
                  <?php if($this->session->userdata('user_id')==1) {?><li><a href="<?php echo base_url() ?>Branch_Controller/index"><i class="fa fa-clone"></i>Branch</a></li><?php } ?>
                  <?php if($this->session->userdata('user_id')==1) {?><li><a href="<?php echo base_url() ?>User_controller/index"><i class="fa fa-clone"></i>System Users</a></li><?php } ?>
			   <li><a href="<?php echo base_url() ?>Reports_Controller/index"><i class="fa fa-clone"></i>Reports</a></li>
         <?php if($this->session->userdata('user_id')==1) {?><li><a href="<?php echo base_url() ?>Dashboard_Controller/backup"><i class="fa fa-clone"></i>Backup Database</a></li><?php } ?>
			</ul>
              </div>
              

            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="<?php echo base_url() ?>Login_controller/Logout">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>
        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="<?php echo base_url()?>img/admin.png" alt=""><?php if(isset($_SESSION)){
                    	echo $this->session->userdata('username');
                    	} ?>
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    
                    <li><a href="javascript:;">Help</a></li>
                    <li><a href="<?php echo  base_url(); ?>Login_controller/Logout"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>  
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->
