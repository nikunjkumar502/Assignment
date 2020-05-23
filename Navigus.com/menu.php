
			
			<div class="col-md-12">
				<nav class="navbar navbar-expand-lg navbar-light bg-light">
				  <a class="navbar-brand" href="./">Shopify</a>
				  
				  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				    <span class="navbar-toggler-icon"></span>
				  </button>

				  <div class="collapse navbar-collapse" id="navbarSupportedContent">
				    <ul class="navbar-nav mr-auto">
				      <li class="nav-item ">
				        <a class="nav-link" href="index.php">Home</span></a>
				      </li>
				  
				      <li class="nav-item">
				        <a class="nav-link" href="slotbook.php">Slot Booking</a>
				      </li>
				    </ul>
				    <form class="form-inline my-2 my-lg-0">
				      
				      <a  class="btn btn-outline-secondary" href="login.php">Login</a>&nbsp;
				      <a  class="btn btn-outline-primary" href="signuppage.php">Signup</a>

					<?php 
						
						if(isset($_SESSION["logged_in"])){
							?>
							&nbsp;
					      <a class="btn btn-outline-danger my-2 my-sm-0" href="logout.php"> Log out</a>


							<?php 
						}
						else{
							}

					?>
				    </form>
				  </div>
				</nav>
			</div>
	