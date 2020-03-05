

    <!-- Main content -->
    <section class="content">


    <div class="row">
        <div class="col-md-6">

		  <div class="box box-default">
			<div class="box-header with-border">
			  <h3 class="box-title">Add New Category </h3>

			  <div class="box-tools pull-right">
				<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
				<button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
			  </div>
			</div>
			<!-- /.box-header -->
			<div class="box-body">
				<div class="row">
					<div class="col-md-6">
						<?php
							if($this->session->flashdata('error')) :
						?>
						<div class="alert alert-danger alert-dismissible">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
							<h4><i class="icon fa fa-ban"></i> <?php  echo $this->session->flashdata('error');?> </h4>
							
						</div>
						<?php
							endif;
						?>

						<?php
							if($this->session->flashdata('success')) :
						?>
						<div class="alert alert-success alert-dismissible">
							<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
							<h4><i class="icon fa fa-check"></i> <?php  echo $this->session->flashdata('success');?> </h4>
							
						</div>
					  
						<?php
							endif;
						?>				
					</div>
				</div>
			  <div class="row">
				<div class="col-md-12">

					<form id="city_form" class="" method="POST" action="save_city">
					  <div class="form-group">
					  
						<label>Name</label>
						<input class="form-control " name="name" type="text" placeholder="" required="required" />
					  
					  </div>
					  <!-- /.form-group -->
					  <div class="form-group text-right">
					  
						<label></label>
						<input type="button" class="btn btn-danger" name="cancel" value="Cancel"/> 
						<input type="submit" class="btn btn-success" name="submit" value="Save"/> 
					  
					  </div>
					  <!-- /.form-group -->
					</form>

				</div>
				<!-- /.col -->


			  </div>
			  <!-- /.row -->
			</div>
			<!-- /.box-body -->
			<div class="box-footer">
			</div>
		  </div>
		  <!-- /.box -->


		</div>    
		<div class="col-md-6">

		  <div class="box box-default">
			<div class="box-header with-border">
			  <h3 class="box-title">Add New Category </h3>

			  <div class="box-tools pull-right">
				<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
				<button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
			  </div>
			</div>
			<!-- /.box-header -->
			<div class="box-body">
			  <div class="row">
 

				<div class="col-md-12">

				  <table id="example2" class="table table-bordered table-hover">
					<thead>
					<tr>
					  <th>Sr#</th>
					  <th>Category</th>
					  
					</tr>
					</thead>
					<tbody>
					<?php 
						foreach($list as $index => $row) : 
							$index++;
							echo '
							<tr>
							  <td>'.$index.'</td>
							  <td>'.$row["name"].'</td>
							 
							</tr>
							';
						endforeach;
					?>
					</tbody>
				  </table>



				</div>
				<!-- /.col -->

			  </div>
			  <!-- /.row -->
			</div>
			<!-- /.box-body -->
			<div class="box-footer">
			</div>
		  </div>
		  <!-- /.box -->


		</div>
	</div>
      <!-- /.row -->

    </section>
    <!-- /.content -->
  </div>