
    <!-- Page Header Start -->
    <div class="page-header" style="background: url(<?php echo ASSETS_URL; ?>img/banner1.jpg);">
      <div class="container">
        <div class="row">         
          <div class="col-md-12">            
            <div class="breadcrumb-wrapper">
              <h2 class="page-title">Dashboard</h2>
              <a href="<?php echo base_url();?>">Home</a>
              <span>/</span>
              <span class="current">Dashboard</span>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Page Header End --> 

    <!-- Start Content -->
    <div id="content">
      <div class="container">
        <div class="row">
			<?php
			if($this->session->flashdata('welcome')) :
			?>
				<span class="alert-success alert d-block">
					<?php  echo $this->session->flashdata('welcome');?>
				</span>
			<?php
			endif;
			?>
				<div class="col-sm-12 col-md-12 col-md-offset-0 page-content">
            <div class="inner-box">
              <div class="usearadmin">
               <h3><a href="#"><img class="userimg" src="assets/img/user.jpg" alt=""> Welcome </a></h3>
              </div>
            </div>
            <div class="inner-box">
              <div class="welcome-msg">
                <h3 class="page-sub-header2 no-padding"> <?php echo $this->session->userdata('username');?> </h3>
                <span class="page-sub-header-sub small"></span> 
              </div>
              <div id="accordion" class="panel-group">
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <h4 class="panel-title"> <a href="#collapseB1" data-toggle="collapse"> My details </a> </h4>
                  </div>
                  <div class="panel-collapse collapse in" id="collapseB1">
                    <div class="panel-body">
                      <form>
                        <div class="form-group">
                          <label class="control-label">First Name</label>
                          <input class="form-control" type="text">
                        </div>
                        <div class="form-group">
                          <label class="control-label">Last name</label>
                          <input class="form-control" type="text"	required >
                        </div>
                        <div class="form-group">
                          <label class="control-label">Email</label>
                          <input class="form-control" type="email">
                        </div>
                        <div class="form-group">
                          <label class="control-label">Address</label>
                          <input class="form-control" type="text">
                        </div>
                        <div class="form-group">
                          <label for="Phone" class="control-label">Phone</label>
                          <input class="form-control" id="Phone" type="text">
                        </div>
                        <div class="form-group">
                          <label class="control-label">Postcode</label>
                          <input class="form-control" type="text">
                        </div>
                        <div class="form-group hide">
                          <label class="control-label">Facebook account map</label>
                          <div class="form-control"> <a class="link" href="fb.com">Jhone.doe</a>
                            <a class=""> <i class="fa fa-minus-circle"></i></a>
                          </div>
                        </div>
                        <div class="form-group">
                          <button type="submit" class="btn btn-common">Update</button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <h4 class="panel-title"> <a aria-expanded="false" class="collapsed" href="#collapseB2" data-toggle="collapse"> Settings </a> </h4>
                  </div>
                  <div style="height: 0px;" class="panel-collapse collapse" id="collapseB2">
                    <div class="panel-body">
                      <form>
                        <div class="form-group">
                          <div class="checkbox">
                            <label><input type="checkbox">Comments are enabled on my ads </label>
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label">New Password</label>
                          <input class="form-control" placeholder="" type="password">
                        </div>
                        <div class="form-group">
                          <label class="control-label">Confirm Password</label>
                          <input class="form-control" placeholder="" type="password">
                        </div>
                        <div class="form-group">
                          <button type="submit" class="btn btn-common">Update</button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
                <div class="panel panel-default">
                  <div class="panel-heading">
                    <h4 class="panel-title"> <a aria-expanded="false" class="collapsed" href="#collapseB3" data-toggle="collapse"> Preferences </a> </h4>
                  </div>
                  <div style="height: 0px;" class="panel-collapse collapse" id="collapseB3">
                    <div class="panel-body">
                      <div class="form-group">
                        <div class="col-sm-12">
                          <div class="checkbox">
                            <label><input type="checkbox">I want to receive newsletter. </label>
                          </div>
                          <div class="checkbox">
                            <label><input type="checkbox">I want to receive advice on buying and selling. </label>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>  
      </div>      
    </div>
    <!-- End Content -->
