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
                    <h2>Futher Infomation <small>Required</small></h2>
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
                      
                      case "3":
                      case "4":
                      case "5":
                      case "6":
                      case "8": ?>
                      
                      <!-- students/After AL 2nd attempt -->

                      
                      
                      <form class="form-horizontal" data-parsley-validate action="<?php echo base_url() ?>Student_Controller/save_futher" method="post">
                      <div class="row" style="border: 2px #E6E9ED solid;">
                      <div class="x_title">
                      <h4 style="font-weight: bold;">Student O\L Infomation</h4>
                      </div>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="form-group">
                            
                            <div class="col-md-12 col-sm-12 col-xs-12">
                              <input placeholder="Number of A Grades"  type="text" id="first-name" name="a" class="form-control col-md-7 col-xs-12">
                             
                            </div>
                      </div>

                      <div class="form-group">
                            
                            <div class="col-md-12 col-sm-12 col-xs-12">
                              <input placeholder="Number of B Grades" data-parsley-type="integer"  type="text" id="first-name" name="b" class="form-control col-md-7 col-xs-12">
                             
                            </div>
                      </div>

                      <div class="form-group">
                            
                            <div class="col-md-12 col-sm-12 col-xs-12">
                              <input placeholder="Number of C Grades" data-parsley-type="integer" type="text" id="first-name" name="c" class="form-control col-md-7 col-xs-12">
                             
                            </div>
                      </div>
                      <div class="form-group">
                            
                            <div class="col-md-12 col-sm-12 col-xs-12">
                              <input placeholder="Number of S Grades" data-parsley-type="integer" type="text" id="first-name" name="s" class="form-control col-md-7 col-xs-12">
                             
                            </div>
                      </div>
                      <div class="form-group">
                            
                            <div class="col-md-12 col-sm-12 col-xs-12">
                              <input placeholder="Number of W Grades" data-parsley-type="integer" type="text" id="first-name" name="w" class="form-control col-md-7 col-xs-12">
                             
                            </div>
                      </div>
                      </div>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                      <div class="form-group">
                            
                            <div class="col-md-12 col-sm-12 col-xs-12">

                            <select class="form-control" name="maths" required="required">
                            <option value="">Choose Maths Result</option>
                            <option value="A">A</option>
                            <option value="B">B</option>
                            <option value="C">C</option>
                            <option value="S">S</option>
                            <option value="W">W</option>

                            
                          </select>
                        </div>
                          </div>
                      <div class="form-group">
                            
                            <div class="col-md-12 col-sm-12 col-xs-12">
                              <input placeholder="Exam Year"  type="text" id="first-name" data-parsley-type="integer" name="year" required="required" class="form-control col-md-7 col-xs-12">
                             
                            </div>
                      </div>
                      <div class="form-group">
                            
                            <div class="col-md-12 col-sm-12 col-xs-12">

                            <select class="form-control" name="medium" required="required">
                            <option value="">Choose Medium</option>
                            <option value="Sinhala">Sinhala</option>
                            <option value="Tamil">Tamil</option>
                            <option value="English">English</option>
                            
                          </select>
                        </div>
                      </div>

                      
                      </div>
                      </div>

                      <div class="row" style="border: 2px #E6E9ED solid;">
                      <div class="x_title">
                      <h4 style="font-weight: bold;">Student A\L Infomation</h4>
                      </div>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <h5>First Attempt</h5>
                        <div class="form-group">
                            <div class="col-md-12 col-sm-12 col-xs-12">

                            <select class="form-control" name="stream1" required="required">
                            <option value="">Choose Stream</option>
                            <option value="bio">Bio science</option>
                            <option value="arts">Arts </option>
                            <option value="com">Commerce and Technology  </option>
                            <option value="maths">Maththematics  </option>

                            
                          </select>
                        </div>
                          </div>

                      <div class="form-group">
                            
                            <div class="col-md-12 col-sm-12 col-xs-12">
                              <input placeholder="School Name"  required="required" type="year" id="first-name" name="school1" class="form-control col-md-7 col-xs-12">
                             
                            </div>
                      </div>

                      <div class="form-group">
                            
                            <div class="col-md-12 col-sm-12 col-xs-12">
                              <input placeholder="Exam Year" data-parsley-type="integer" data-parsley-minlength="4" required="required" type="text" id="first-name" name="year1" class="form-control col-md-7 col-xs-12">
                             
                            </div>
                      </div>
                      <div class="form-group">
                            
                            <div class="col-md-12 col-sm-12 col-xs-12">
                              <input placeholder="Index Number" data-parsley-type="integer"  type="text" id="first-name" name="index1" class="form-control col-md-7 col-xs-12">
                             
                            </div>
                      </div>
                      <div class="form-group">
                            
                            <div class="col-md-12 col-sm-12 col-xs-12">
                              <input placeholder="Number of A Grades"  type="text" id="first-name" name="a_al1" class="form-control col-md-7 col-xs-12">
                             
                            </div>
                      </div>

                      <div class="form-group">
                            
                            <div class="col-md-12 col-sm-12 col-xs-12">
                              <input placeholder="Number of B Grades" data-parsley-type="integer"  type="text" id="first-name" name="b_al1" class="form-control col-md-7 col-xs-12">
                             
                            </div>
                      </div>

                      <div class="form-group">
                            
                            <div class="col-md-12 col-sm-12 col-xs-12">
                              <input placeholder="Number of C Grades" data-parsley-type="integer" type="text" id="first-name" name="c_al1" class="form-control col-md-7 col-xs-12">
                             
                            </div>
                      </div>
                      <div class="form-group">
                            
                            <div class="col-md-12 col-sm-12 col-xs-12">
                              <input placeholder="Number of S Grades" data-parsley-type="integer" type="text" id="first-name" name="s_al1" class="form-control col-md-7 col-xs-12">
                             
                            </div>
                      </div>
                      <div class="form-group">
                            
                            <div class="col-md-12 col-sm-12 col-xs-12">
                              <input placeholder="Number of W Grades" data-parsley-type="integer" type="text" id="first-name" name="w_al1" class="form-control col-md-7 col-xs-12">
                             
                            </div>
                      </div>
                      <div class="form-group">
                            
                            <div class="col-md-12 col-sm-12 col-xs-12">

                            <select class="form-control" id="pass1" name="pass1" required="required">
                              <option value="">Pass / Fail </option>
                              <option value="1">Pass</option>
                              <option value="0">Fail</option>
                              <option value="2">Result/Index Number not submited</option>
                          </select>
                        </div>
                      </div>
                      <div class="form-group" id="z1" style="display: none">
                            
                            <div class="col-md-12 col-sm-12 col-xs-12">
                              <input placeholder="Z-Score" data-parsley-pattern="^[0-9]*\.[0-9]{4}$" type="text" id="z11" name="z1" class="form-control col-md-7 col-xs-12">
                             
                            </div>
                      </div>
                      <div class="form-group" id="d_rank1" style="display: none">
                            
                            <div class="col-md-12 col-sm-12 col-xs-12">
                              <input placeholder="Disrict Rank" data-parsley-type="integer" type="text" id="d_rank11" name="d_rank1" class="form-control col-md-7 col-xs-12">
                             
                            </div>
                      </div>
                      <div class="form-group" id="i_rank1" style="display: none" >
                            
                            <div class="col-md-12 col-sm-12 col-xs-12" >
                              <input placeholder="Island Rank" data-parsley-type="integer" type="text" id="i_rank11" name="i_rank1" class="form-control col-md-7 col-xs-12">
                             
                            </div>
                      </div>

                      </div>

                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <button id="second" type="button" class="btn btn-primary"><i id="second" class="fa fa-chevron-down"></i> Second Attempt</button>
                        <div id="2nd" style="display: none;">
                        <div class="form-group">
                            <div class="col-md-12 col-sm-12 col-xs-12">

                            <select class="form-control" name="stream2" id="stream2">
                            <option value="">Choose Stream</option>
                            <option value="bio">Bio science</option>
                            <option value="arts">Arts </option>
                            <option value="com">Commerce and Technology  </option>
                            <option value="maths">Maththematics  </option>
                            
                          </select>
                        </div>
                          </div>
                        
                      <div class="form-group">
                            
                            <div class="col-md-12 col-sm-12 col-xs-12">
                              <input placeholder="School Name"  type="year" id="school2" name="school2" class="form-control col-md-7 col-xs-12">
                             
                            </div>
                      </div>

                      <div class="form-group">
                            
                            <div class="col-md-12 col-sm-12 col-xs-12">
                              <input placeholder="Exam Year" data-parsley-minlength="4" data-parsley-type="integer"  type="text" id="year2" name="year2" class="form-control col-md-7 col-xs-12">
                             
                            </div>
                      </div>
                      <div class="form-group">
                            
                            <div class="col-md-12 col-sm-12 col-xs-12">
                              <input placeholder="Index Number" data-parsley-type="integer" type="text" id="index2" name="index2" class="form-control col-md-7 col-xs-12">
                             
                            </div>
                      </div>
                      <div class="form-group">
                            
                            <div class="col-md-12 col-sm-12 col-xs-12">
                              <input placeholder="Number of A Grades"  type="text" id="a_al2" name="a_al2" class="form-control col-md-7 col-xs-12">
                             
                            </div>
                      </div>

                      <div class="form-group">
                            
                            <div class="col-md-12 col-sm-12 col-xs-12">
                              <input placeholder="Number of B Grades" data-parsley-type="integer"  type="text" id="b_al2" name="b_al2" class="form-control col-md-7 col-xs-12">
                             
                            </div>
                      </div>

                      <div class="form-group">
                            
                            <div class="col-md-12 col-sm-12 col-xs-12">
                              <input placeholder="Number of C Grades" data-parsley-type="integer" type="text" id="c_al2" name="c_al2" class="form-control col-md-7 col-xs-12">
                             
                            </div>
                      </div>
                      <div class="form-group">
                            
                            <div class="col-md-12 col-sm-12 col-xs-12">
                              <input placeholder="Number of S Grades" data-parsley-type="integer" type="text" id="s_al2" name="s_al2" class="form-control col-md-7 col-xs-12">
                             
                            </div>
                      </div>
                      <div class="form-group">
                            
                            <div class="col-md-12 col-sm-12 col-xs-12">
                              <input placeholder="Number of W Grades" data-parsley-type="integer" type="text" id="w_al2" name="w_al2" class="form-control col-md-7 col-xs-12">
                             
                            </div>
                      </div>
                      <div class="form-group">
                            
                            <div class="col-md-12 col-sm-12 col-xs-12">

                            <select class="form-control" id="pass2" name="pass2">
                            <option value="">Pass / Fail </option>
                            <option value="1">Pass</option>
                            <option value="0">Fail</option>
                            <option value="2">Result/Index Number not submited</option>

                            
                            
                          </select>
                        </div>
                      </div>

                      <div class="form-group" id="z2" style="display: none">
                            
                            <div class="col-md-12 col-sm-12 col-xs-12">
                              <input placeholder="Z-Score" data-parsley-pattern="^[0-9]*\.[0-9]{4}$" type="text" id="z22" name="z2" class="form-control col-md-7 col-xs-12">
                             
                            </div>
                      </div>
                      <div class="form-group" id="d_rank2" style="display: none">
                            
                            <div class="col-md-12 col-sm-12 col-xs-12">
                              <input placeholder="Disrict Rank" data-parsley-type="integer" type="text" id="d_rank22" name="d_rank2" class="form-control col-md-7 col-xs-12">
                             
                            </div>
                      </div>
                      <div class="form-group" id="i_rank2" style="display: none">
                            
                            <div class="col-md-12 col-sm-12 col-xs-12">
                              <input placeholder="Island Rank" data-parsley-type="integer" type="text" id="i_rank22" name="i_rank2" class="form-control col-md-7 col-xs-12">
                             
                            </div>
                      </div>
                      
                      </div>
                      </div>

                      </div>


                      <div class="row" style="border: 2px #E6E9ED solid;">
                      <div class="x_title">
                      <h4 style="font-weight: bold;">Student Scholarship Details</h4>
                      </div>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="form-group">
                            
                            <div class="col-md-12 col-sm-12 col-xs-12">
                              <input placeholder="Scholarship Amount"  type="text" id="first-name" required="required" name="amount" class="form-control col-md-7 col-xs-12">
                             
                            </div>
                      </div>

                      <div class="form-group">
                            
                            <div class="col-md-12 col-sm-12 col-xs-12">
                              <input placeholder="Payment Started Year" data-parsley-type="integer" required="required" type="year" id="first-name" name="p_year" class="form-control col-md-7 col-xs-12">
                             
                            </div>
                      </div>

                      <div class="form-group">
                            
                            <div class="col-md-12 col-sm-12 col-xs-12">
                              <select name="month" class="form-control col-md-7 col-xs-12" required="required">
                              <option value=''>Select Payment Started Month</option>
                                  <option  value='1'>Janaury</option>
                                  <option value='2'>February</option>
                                  <option value='3'>March</option>
                                  <option value='4'>April</option>
                                  <option value='5'>May</option>
                                  <option value='6'>June</option>
                                  <option value='7'>July</option>
                                  <option value='8'>August</option>
                                  <option value='9'>September</option>
                                  <option value='10'>October</option>
                                  <option value='11'>November</option>
                                  <option value='12'>December</option>

                            </select>
                             
                            </div>
                      </div>
                      <div class="form-group">
                            
                            <div class="col-md-12 col-sm-12 col-xs-12">

                            <select class="form-control" name="renewel" required="required">
                            <option value="">Is Renewel Document Submitted </option>
                            <option value="1">Yes</option>
                            <option value="0">No</option>
                            
                            
                          </select>
                        </div>
                      </div>
                      <div class="form-group">
                            
                            <div class="col-md-12 col-sm-12 col-xs-12">
                              <select name="p_status" class="form-control col-md-7 col-xs-12" required="required">
                              <option value=''>Payment Status</option>
                                  <option  value='1'>Ongoing</option>
                                  <option value='2'>Finished</option>
                                  <option value='3'>Hold</option>
                                  <option value='4'>Drop out</option>
                            </select>
                             
                            </div>
                      </div>
                    <div class="form-group">
                            
                            <div class="col-md-12 col-sm-12 col-xs-12">
                              <input placeholder="Payment finished Year" data-parsley-type="integer" type="year" id="first-name" name="finished_year" class="form-control col-md-7 col-xs-12">
                             
                            </div>
                      </div>
                          <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="hidden" name="id" value="<?php echo $this->session->userdata('id'); ?>">
                          <input type="hidden" name="status" value="<?php echo $status ?>">
                          <input type="hidden" id="no_attempt" name="no_attempt" value="">
                          <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
                          <button class="btn btn-primary" type="reset">Reset</button>
                          <button name="submit" type="submit" class="btn btn-success">Save Data</button>
                        </div>
                    </div>

                      </div>

                      </div>
                      </form>
                      <!-- finish students/After AL -->

                      <?php break;
                      case "9": ?>
                        <!-- students/After 1st Attempt -->
                      
                      <form class="form-horizontal" data-parsley-validate action="<?php echo base_url() ?>Student_Controller/save_futher" method="post">
                      <div class="row" style="border: 2px #E6E9ED solid;">
                      <div class="x_title">
                      <h4 style="font-weight: bold;">Student O\L Infomation</h4>
                      </div>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="form-group">
                            
                            <div class="col-md-12 col-sm-12 col-xs-12">
                              <input placeholder="Number of A Grades"  type="text" id="first-name" name="a" class="form-control col-md-7 col-xs-12">
                             
                            </div>
                      </div>

                      <div class="form-group">
                            
                            <div class="col-md-12 col-sm-12 col-xs-12">
                              <input placeholder="Number of B Grades" data-parsley-type="integer"  type="text" id="first-name" name="b" class="form-control col-md-7 col-xs-12">
                             
                            </div>
                      </div>

                      <div class="form-group">
                            
                            <div class="col-md-12 col-sm-12 col-xs-12">
                              <input placeholder="Number of C Grades" data-parsley-type="integer" type="text" id="first-name" name="c" class="form-control col-md-7 col-xs-12">
                             
                            </div>
                      </div>
                      <div class="form-group">
                            
                            <div class="col-md-12 col-sm-12 col-xs-12">
                              <input placeholder="Number of S Grades" data-parsley-type="integer" type="text" id="first-name" name="s" class="form-control col-md-7 col-xs-12">
                             
                            </div>
                      </div>
                      <div class="form-group">
                            
                            <div class="col-md-12 col-sm-12 col-xs-12">
                              <input placeholder="Number of W Grades" data-parsley-type="integer" type="text" id="first-name" name="w" class="form-control col-md-7 col-xs-12">
                             
                            </div>
                      </div>
                      </div>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                      <div class="form-group">
                            
                            <div class="col-md-12 col-sm-12 col-xs-12">

                            <select class="form-control" name="maths" required="required">
                            <option value="">Choose Maths Result</option>
                            <option value="A">A</option>
                            <option value="B">B</option>
                            <option value="C">C</option>
                            <option value="S">S</option>
                            <option value="W">W</option>

                            
                          </select>
                        </div>
                          </div>
                      <div class="form-group">
                            
                            <div class="col-md-12 col-sm-12 col-xs-12">
                              <input placeholder="Exam Year"  type="text" id="first-name" data-parsley-type="integer" name="year" required="required" class="form-control col-md-7 col-xs-12">
                             
                            </div>
                      </div>
                      <div class="form-group">
                            
                            <div class="col-md-12 col-sm-12 col-xs-12">

                            <select class="form-control" name="medium" required="required">
                            <option value="">Choose Medium</option>
                            <option value="Sinhala">Sinhala</option>
                            <option value="Tamil">Tamil</option>
                            <option value="English">English</option>
                            
                          </select>
                        </div>
                      </div>

                      
                      </div>
                      </div>

                      <div class="row" style="border: 2px #E6E9ED solid;">
                      <div class="x_title">
                      <h4 style="font-weight: bold;">Student A\L Infomation</h4>
                      </div>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <h5>First Attempt Results</h5>
                        <div class="form-group">
                            <div class="col-md-12 col-sm-12 col-xs-12">

                            <select class="form-control" name="stream1" required="required">
                            <option value="">Choose Stream</option>
                            <option value="bio">Bio science</option>
                            <option value="arts">Arts </option>
                            <option value="com">Commerce and Technology  </option>
                            <option value="maths">Maththematics  </option>

                            
                          </select>
                        </div>
                          </div>

                      <div class="form-group">
                            
                            <div class="col-md-12 col-sm-12 col-xs-12">
                              <input placeholder="School Name"  required="required" type="year" id="first-name" name="school1" class="form-control col-md-7 col-xs-12">
                             
                            </div>
                      </div>

                      <div class="form-group">
                            
                            <div class="col-md-12 col-sm-12 col-xs-12">
                              <input placeholder="Exam Year" data-parsley-type="integer" data-parsley-minlength="4" required="required" type="text" id="first-name" name="year1" class="form-control col-md-7 col-xs-12">
                             
                            </div>
                      </div>
                      <div class="form-group">
                            
                            <div class="col-md-12 col-sm-12 col-xs-12">
                              <input placeholder="Index Number" data-parsley-type="integer"  type="text" id="first-name" name="index1" class="form-control col-md-7 col-xs-12">
                             
                            </div>
                      </div>
                      <div class="form-group">
                            
                            <div class="col-md-12 col-sm-12 col-xs-12">
                              <input placeholder="Number of A Grades"  type="text" id="first-name" name="a_al1" class="form-control col-md-7 col-xs-12">
                             
                            </div>
                      </div>

                      <div class="form-group">
                            
                            <div class="col-md-12 col-sm-12 col-xs-12">
                              <input placeholder="Number of B Grades" data-parsley-type="integer"  type="text" id="first-name" name="b_al1" class="form-control col-md-7 col-xs-12">
                             
                            </div>
                      </div>

                      <div class="form-group">
                            
                            <div class="col-md-12 col-sm-12 col-xs-12">
                              <input placeholder="Number of C Grades" data-parsley-type="integer" type="text" id="first-name" name="c_al1" class="form-control col-md-7 col-xs-12">
                             
                            </div>
                      </div>
                      <div class="form-group">
                            
                            <div class="col-md-12 col-sm-12 col-xs-12">
                              <input placeholder="Number of S Grades" data-parsley-type="integer" type="text" id="first-name" name="s_al1" class="form-control col-md-7 col-xs-12">
                             
                            </div>
                      </div>
                      <div class="form-group">
                            
                            <div class="col-md-12 col-sm-12 col-xs-12">
                              <input placeholder="Number of W Grades" data-parsley-type="integer" type="text" id="first-name" name="w_al1" class="form-control col-md-7 col-xs-12">
                             
                            </div>
                      </div>
                      <div class="form-group">
                            
                            <div class="col-md-12 col-sm-12 col-xs-12">

                            <select class="form-control" id="pass1" name="pass1" required="required">
                            <option value="">Pass / Fail </option>
                            <option value="1">Pass</option>
                            <option value="0">Fail</option>
                            <option value="2">Result/Index Number not submited</option>

                          </select>
                        </div>
                      </div>
                      <div class="form-group" id="z1" style="display: none">
                            
                            <div class="col-md-12 col-sm-12 col-xs-12">
                              <input placeholder="Z-Score" data-parsley-pattern="^[0-9]*\.[0-9]{4}$" type="text" id="z11" name="z1" class="form-control col-md-7 col-xs-12">
                             
                            </div>
                      </div>
                      <div class="form-group" id="d_rank1" style="display: none">
                            
                            <div class="col-md-12 col-sm-12 col-xs-12">
                              <input placeholder="Disrict Rank" data-parsley-type="integer" type="text" id="d_rank11" name="d_rank1" class="form-control col-md-7 col-xs-12">
                             
                            </div>
                      </div>
                      <div class="form-group" id="i_rank1" style="display: none" >
                            
                            <div class="col-md-12 col-sm-12 col-xs-12" >
                              <input placeholder="Island Rank" data-parsley-type="integer" type="text" id="i_rank11" name="i_rank1" class="form-control col-md-7 col-xs-12">
                             
                            </div>
                      </div>

                      </div>

                      </div>


                      <div class="row" style="border: 2px #E6E9ED solid;">
                      <div class="x_title">
                      <h4 style="font-weight: bold;">Student Scholarship Details</h4>
                      </div>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="form-group">
                            
                            <div class="col-md-12 col-sm-12 col-xs-12">
                              <input placeholder="Scholarship Amount"  type="text" id="first-name" required="required" name="amount" class="form-control col-md-7 col-xs-12">
                             
                            </div>
                      </div>

                      <div class="form-group">
                            
                            <div class="col-md-12 col-sm-12 col-xs-12">
                              <input placeholder="Payment Started Year" data-parsley-type="integer" required="required" type="year" id="first-name" name="p_year" class="form-control col-md-7 col-xs-12">
                             
                            </div>
                      </div>

                      <div class="form-group">
                            
                            <div class="col-md-12 col-sm-12 col-xs-12">
                              <select name="month" class="form-control col-md-7 col-xs-12" required="required">
                              <option value=''>Select Payment Started Month</option>
                                  <option  value='1'>Janaury</option>
                                  <option value='2'>February</option>
                                  <option value='3'>March</option>
                                  <option value='4'>April</option>
                                  <option value='5'>May</option>
                                  <option value='6'>June</option>
                                  <option value='7'>July</option>
                                  <option value='8'>August</option>
                                  <option value='9'>September</option>
                                  <option value='10'>October</option>
                                  <option value='11'>November</option>
                                  <option value='12'>December</option>

                            </select>
                             
                            </div>
                      </div>
                      <div class="form-group">
                            
                            <div class="col-md-12 col-sm-12 col-xs-12">

                            <select class="form-control" name="renewel" required="required">
                            <option value="">Is Renewel Document Submitted </option>
                            <option value="1">Yes</option>
                            <option value="0">No</option>
                            
                            
                          </select>
                        </div>
                      </div>
                      <div class="form-group">
                            
                            <div class="col-md-12 col-sm-12 col-xs-12">
                              <select name="p_status" class="form-control col-md-7 col-xs-12" required="required">
                              <option value=''>Payment Status</option>
                                  <option  value='1'>Ongoing</option>
                                  <option value='2'>Finished</option>
                                  <option value='3'>Hold</option>
                                  <option value='4'>Drop out</option>
                            </select>
                             
                            </div>
                      </div>
                    <div class="form-group">
                            
                            <div class="col-md-12 col-sm-12 col-xs-12">
                              <input placeholder="Payment finished Year" data-parsley-type="integer" type="year" id="first-name" name="finished_year" class="form-control col-md-7 col-xs-12">
                             
                            </div>
                      </div>
                          <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="hidden" name="id" value="<?php echo $this->session->userdata('id'); ?>">
                          <input type="hidden" name="status" value="<?php echo $status ?>">
                          <input type="hidden" id="no_attempt" name="no_attempt" value="">
                          <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
                          <button class="btn btn-primary" type="reset">Reset</button>
                          <button name="submit" type="submit" class="btn btn-success">Save Data</button>
                        </div>
                    </div>

                      </div>

                      </div>
                      </form>
                      <?php 
                      break;
                      case "2": ?>
                      <!-- start students/dropout -->

                      <form class="form-horizontal" data-parsley-validate action="<?php echo base_url() ?>Status_Controller/save_dropout" method="post">

                    <div class="form-group">
                            
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <textarea placeholder="Reasons for Dropout" class="form-control col-md-7 col-xs-12" id="add" name="reason" required="required" rows="4"></textarea>
                              
                      </div>
                    </div>
                    

                    <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
                          <input type="hidden" name="id" value="<?php  echo $this->session->userdata('id');  ?>">
                          <button class="btn btn-primary" type="reset">Reset</button>
                          <button name="submit" type="submit" class="btn btn-success">Submit Data</button>
                        </div>
                    </div>
                    </form>
                    <!-- finish students/dropout -->
                      <?php break;
                      case "7": ?>
                      echo "Before OL";


                     
                     <?php break;
                      case "1": ?>
                      <!-- AL Students -->
                      <h4 style="font-weight: bold;">Student O\L Infomation</h4>
                      
                      <form class="form-horizontal" data-parsley-validate action="<?php echo base_url() ?>Student_Controller/save_futher" method="post">
                      <div class="row">
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="form-group">
                            
                            <div class="col-md-12 col-sm-12 col-xs-12">
                              <input placeholder="Number of A Grades"  type="text" id="first-name" name="a" class="form-control col-md-7 col-xs-12">
                             
                            </div>
                      </div>

                      <div class="form-group">
                            
                            <div class="col-md-12 col-sm-12 col-xs-12">
                              <input placeholder="Number of B Grades" data-parsley-type="integer"  type="text" id="first-name" name="b" class="form-control col-md-7 col-xs-12">
                             
                            </div>
                      </div>

                      <div class="form-group">
                            
                            <div class="col-md-12 col-sm-12 col-xs-12">
                              <input placeholder="Number of C Grades" data-parsley-type="integer" type="text" id="first-name" name="c" class="form-control col-md-7 col-xs-12">
                             
                            </div>
                      </div>
                      <div class="form-group">
                            
                            <div class="col-md-12 col-sm-12 col-xs-12">
                              <input placeholder="Number of S Grades" data-parsley-type="integer" type="text" id="first-name" name="s" class="form-control col-md-7 col-xs-12">
                             
                            </div>
                      </div>
                      <div class="form-group">
                            
                            <div class="col-md-12 col-sm-12 col-xs-12">
                              <input placeholder="Number of W Grades" data-parsley-type="integer" type="text" id="first-name" name="w" class="form-control col-md-7 col-xs-12">
                             
                            </div>
                      </div>
                      </div>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                      <div class="form-group">
                            
                            <div class="col-md-12 col-sm-12 col-xs-12">

                            <select class="form-control" name="maths" required="required">
                            <option value="">Choose Maths Result</option>
                            <option value="A">A</option>
                            <option value="B">B</option>
                            <option value="C">C</option>
                            <option value="S">S</option>
                            <option value="W">W</option>

                            
                          </select>
                        </div>
                          </div>
                      <div class="form-group">
                            
                            <div class="col-md-12 col-sm-12 col-xs-12">
                              <input placeholder="Exam Year"  type="text" id="first-name" data-parsley-type="integer" name="year" required="required" class="form-control col-md-7 col-xs-12">
                             
                            </div>
                      </div>
                      <div class="form-group">
                            
                            <div class="col-md-12 col-sm-12 col-xs-12">

                            <select class="form-control" name="medium" required="required">
                            <option value="">Choose Medium</option>
                            <option value="Sinhala">Sinhala</option>
                            <option value="Tamil">Tamil</option>
                            <option value="English">English</option>
                            
                          </select>
                        </div>
                      </div>

                      
                      </div>
                      </div>
                      <div class="row">
                      <div class="x_title">
                      <h4 style="font-weight: bold;">Student Scholarship Details</h4>
                      </div>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="form-group">
                            
                            <div class="col-md-12 col-sm-12 col-xs-12">
                              <input placeholder="Scholarship Amount"  type="text" id="first-name" required="required" name="amount" class="form-control col-md-7 col-xs-12">
                             
                            </div>
                      </div>

                      <div class="form-group">
                            
                            <div class="col-md-12 col-sm-12 col-xs-12">
                              <input placeholder="Payment Started Year" data-parsley-type="integer" required="required" type="p_year" id="first-name" name="p_year" class="form-control col-md-7 col-xs-12">
                             
                            </div>
                      </div>

                      <div class="form-group">
                            
                            <div class="col-md-12 col-sm-12 col-xs-12">
                            <select name="month" class="form-control col-md-7 col-xs-12" required="required">
                              <option value=''>Select Payment Started Month</option>
                                  <option value='1'>Janaury</option>
                                  <option value='2'>February</option>
                                  <option value='3'>March</option>
                                  <option value='4'>April</option>
                                  <option value='5'>May</option>
                                  <option value='6'>June</option>
                                  <option value='7'>July</option>
                                  <option value='8'>August</option>
                                  <option value='9'>September</option>
                                  <option value='10'>October</option>
                                  <option value='11'>November</option>
                                  <option value='12'>December</option>

                            </select>
                            </div>  
                      </div>
                      <div class="form-group">
                            
                            <div class="col-md-12 col-sm-12 col-xs-12">

                            <select class="form-control" name="renewel" required="required">
                            <option value="">Is Renewel Document Submitted </option>
                            <option value="1">Yes</option>
                            <option value="0">No</option>
                            
                            
                          </select>
                        </div>
                      </div>
                      <div class="form-group">
                            
                            <div class="col-md-12 col-sm-12 col-xs-12">
                              <select name="p_status" class="form-control col-md-7 col-xs-12" required="required">
                              <option value=''>Payment Status</option>
                                  <option  value='1'>Ongoing</option>
                                  <option value='2'>Finished</option>
                                  <option value='3'>Hold</option>
                                  <option value='4'>Drop out</option>
                            </select>
                             
                            </div>
                      </div>
                    <div class="form-group">
                            
                            <div class="col-md-12 col-sm-12 col-xs-12">
                              <input placeholder="Payment finished Year" data-parsley-type="integer" type="year" id="first-name" name="finished_year" class="form-control col-md-7 col-xs-12">
                             
                            </div>
                      </div>
                          <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="hidden" name="id" value="<?php echo $this->session->userdata('id'); ?>">
                          <input type="hidden" name="status" value="<?php echo $status ?>">
                          <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
                          <button class="btn btn-primary" type="reset">Reset</button>
                          <button name="submit" type="submit" class="btn btn-success">Save Data</button>
                        </div>
                    </div>

                      </div>

                      </div>
                      </form>
                      <!-- Finish AL Students -->

                      
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
        document.getElementById("year2").setAttribute ('data-parsley-minlength','4');
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
        document.getElementById("z11").setAttribute ('value','');
        document.getElementById("d_rank11").setAttribute ('value','');
        document.getElementById("i_rank11").setAttribute ('value','');
        document.getElementById("z11").removeAttribute("required");
        document.getElementById("d_rank11").removeAttribute("required");
        document.getElementById("i_rank11").removeAttribute("required");
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
        

        

        break;
    case '0':
        document.getElementById("z2").style.display = 'none';
        document.getElementById("d_rank2").style.display = 'none';
        document.getElementById("i_rank2").style.display = 'none';
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


