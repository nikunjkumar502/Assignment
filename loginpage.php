			<div class="col-md-2"></div>
			<div id="loginbox" class="mainbox col-md-8 " style=" padding-top:20px;padding-bottom:20px;margin-top:50px; border:2px solid #f0f0f0; ">
				<?php 
			 		if(isset($_GET["m"])){
			 			if($_GET["m"]=="3"){
			 			?>
							<div class=" col-md-12 alert alert-danger alert-dismissible fade show" role="alert" style="background-color: #fdfafac7; margin-top:10px; color: #000; ">
							  <strong>Error!</strong> Account doesn't exist ! Try again or Contact admin from contact page.
							  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
							    <span aria-hidden="true">&times;</span>
							  </button>
							</div>	

			 			 <?php 
			 			}
			 		}
			 	
			 	?>
				<h2>
					Login 
				</h2>
				<form action="loginprocess.php" method="_GET">
				  <div class="form-group">
				    <label for="exampleInputEmail1">Email address</label>
				    <input type="email" name="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email" required="">
				    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
				  </div>
				  <div class="form-group">
				    <label for="exampleInputPassword1">Password</label>
				    <input type="password" class="form-control" id="password" required="" name="password" placeholder="Password">
				  </div>
				  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
				</form>
			</div>