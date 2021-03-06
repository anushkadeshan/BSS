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
    

    <!-- Custom Theme Style -->
    <link href="<?php echo base_url() ?>build/css/custom.min.css" rel="stylesheet">
    
  </head>
  <body class="nav-md">
    <div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Edit Details</h4>
      </div>
      <div class="modal-body">
      <?php foreach ($gn as $g):
                        
                       ?>
      You are Trying to Edit <b><?php echo $g->GN_Office; ?></b>
        <div class="x_content">
                    <br />
                    
                    <form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="post" action="<?php echo base_url() ?>GN_Controller/update">

                      <div class="form-group">
                      
                        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="ds-name">GN Office Name<span class="required"></span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input name="gn" type="text" id="ds-name" value="<?php echo $g->GN_Office; ?>" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">DS Office</label>
                        <div class="col-md-9 col-sm-9 col-xs-12">
                        <?php ?>
                          <select class="form-control" name="ds" required="required">
                            <option value="">Choose option</option>
                            <?php 
                                
                                foreach($dsd as $d){ ?>
                                   <option <?php if($g->DSD_ID==$d->ID){ echo "selected='selected'"; } ?> 
                                   value="<?php echo $d->ID?>"><?php echo $d->DSD_Name?></option>
                                 <?php }
                                ?>
                                           
                          </select>
                        </div>
                      </div>
                      
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <button class="btn btn-primary" type="button">Cancel</button>
                          <button class="btn btn-primary" type="reset">Reset</button>
                          <input type="hidden" name="id" value="<?php echo $g->GN_ID; ?>">
                          <button name="submit" type="submit" class="btn btn-success">Update</button>
                          

                        </div>
                      </div>
                      <?php endforeach; ?>
                      <input type="hidden" name="<?php echo $this->security->get_csrf_token_name(); ?>" value="<?php echo $this->security->get_csrf_hash(); ?>">
                    </form>
                  </div>
      </div>
      <div class="modal-footer">
        <a href="<?php echo base_url() ?>GN_Controller/index"><button type="button" class="btn btn-default">Close</button></a>
      </div>
    </div>
  
  </div>
</div>


     <!-- jQuery -->
    <script src="<?php echo base_url() ?>vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="<?php echo base_url() ?>vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url() ?>vendors/parsleyjs/dist/parsley.min.js"></script>

    <script>
        $(document).ready(function () {

    $('#myModal').modal('show');

});
    </script>
  </body>
  </html>