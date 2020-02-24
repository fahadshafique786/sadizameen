
    <!-- Page Header Start -->
    <div class="page-header" style="background: url(<?php echo ASSETS_URL; ?>img/banner1.jpg);">
      <div class="container">
        <div class="row">         
          <div class="col-md-12">
            <div class="breadcrumb-wrapper">
              <h2 class="page-title">Login to account</h2>
              <a href="<?php echo base_url();?>">Home</a>
              <span>/</span>
              <span class="current">Login</span>
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
          <div class="col-sm-6 col-sm-offset-4 col-md-4 col-md-offset-4">
            <div class="page-login-form box">
              <h3>
                Login
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
					
				<form class="login-form" method="POST" action="AuthProcess">
                <div class="form-group">
                  <div class="input-icon">
                    <i class="icon-user"></i>
                    <input type="text" id="username" class="form-control" name="username" placeholder="Username"	required >
                  </div>
                </div> 
                <div class="form-group">
                  <div class="input-icon">
                    <i class="icon-lock-open"></i>
                    <input type="password" class="form-control" name="password" placeholder="Password"	required >
                  </div>
                </div> 
                <div class="form-group">
                  <input type="checkbox" name="rememberme" value="forever"> Remember me 
                </div> 
                <button class="btn btn-common log-btn">Submit</button>
              </form>
              <ul class="form-links">
                <li class="text-center"><a href="signup.html">Don't have an account?</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Content section End --> 
    