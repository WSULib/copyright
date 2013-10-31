<?php include('top.php'); ?>

<!-- Begin page content -->
<div class="page-header">
	<h1>Contact Us</h1>
</div>
<div class="container">
	<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 pull-left">
	  	<form method="post" action="contactengine.php">
		    <fieldset>
		      	<div class="form-group">
			        <label for="Name" class="pull-left">Name</label>
			        <input type="text" class="form-control" name="Name" id="Name" placeholder="Enter your name">
		      	</div>
		      	<div class="form-group">
		        	<label for="Email" class="pull-left">Email</label>
		        	<input type="email" class="form-control" name="Email" id="Email" placeholder="Enter your email">
		      	</div>
		      	<div class="form-group">
		        	<label for="Tel" class="pull-left">Phone</label>
		        	<input type="tel" class="form-control" name="Tel" id="Tel" placeholder="Enter your phone number">
		      	</div>            
			</div>  
			<div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 pull-right">
		      	<div class="form-group">
		        	<label for="Message" class="pull-left">Message</label>
		        	<textarea name="Message" id="Message" class="form-control" rows="9" placeholder="Enter your message"></textarea>
		      	</div>
		      	<button type="submit" class="btn btn-default pull-right">Submit</button>
		    </fieldset>
		</form>
	</div>
</div>

<?php include('bottom.php'); ?>