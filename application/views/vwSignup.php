

   <!-- Page Header Start -->
    <div class="page-header" style="background: url(<?php echo ASSETS_URL; ?>img/banner1.jpg);">
      <div class="container">
        <div class="row">         
          <div class="col-md-12">
            <div class="breadcrumb-wrapper">
              <h2 class="page-title">Join Us</h2>
              <a href="<?php echo base_url();?>">Home</a>
              <span>/</span>
              <span class="current">Singup</span>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Page Header End --> 

    <!-- Content section Start --> 
    <section id="content">
      <div class="container">
        <div class="row">
          <div class="col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
            <div class="page-login-form box">
              <h3>
                Register
              </h3>
			  
				<?php
				if($this->session->flashdata('error')) :
				?>
					<span class="alert-danger alert d-block">
						<?php  echo $this->session->flashdata('error');?>
					</span>
				<?php
				endif;
				?>

              <form class="login-form" method="POST" action = "createAccount" >
                <div class="form-group">
                  <div class="input-icon">
                    <i class="icon-user"></i>
                    <input type="text" class="form-control" name="first_name" placeholder="First Name"	required >
                  </div>
                </div>
				<div class="form-group">
                  <div class="input-icon">
                    <i class="icon-user"></i>
                    <input type="text" class="form-control" name="username" placeholder="Username"	required >
                  </div>
                </div> 
                <div class="form-group">
                  <div class="input-icon">
                    <i class="icon-envelope"></i>
                    <input type="text" class="form-control" name="email" placeholder="Email Address"	required >
                  </div>
                </div> 
                <div class="form-group">
                  <div class="input-icon">
                    <i class="icon-lock"></i>
                    <input type="password" name="password"  class="form-control" placeholder="Password"	required >
                  </div>
                </div>  
                <div class="form-group">
                  <div class="input-icon">
                    <i class="icon-lock-open"></i>
                    <input type="password" class="form-control" placeholder="Retype Password">
                  </div>
                </div>                 
                <button class="btn btn-common log-btn">Register</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Content section End -->     