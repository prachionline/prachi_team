<!-- header part start here -->
<header>
	<nav>
		<nav class="navbar navbar-default">
			<div class="container">		  
				<div class="navbar-header">			    
					<a class="navbar-brand" href="#"> 
						<img src="<?php echo base_url("public/images/logo.png"); ?>" alt="Logo" title="Logo"> 
					</a>
				</div>		   
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<div class="help-line"> Help Line : +91 1234567890 </div>
					<ul class="nav navbar-nav navbar-right">
						<li><a href="<?php echo base_url("home/centers");?>"><span class="glyphicon glyphicon-user"></span> APPLY TO CENTER</a></li>
						<li><a href="<?php echo base_url("auth");?>"><span class="glyphicon glyphicon-lock"></span> LOGIN</a></li>
					</ul>
				</div>	
				<div class="nav-quad"> 			
					<ul class="menu">
						<li> <a href="<?php echo base_url();?>" class="active"> home  </a> </li>
						<li> <a href="<?php echo base_url("home/about_us");?>"> about Us </a> </li>
						<li> <a href="<?php echo base_url("home/service");?>"> services  </a> </li>
						<li> <a href="<?php echo base_url("home/centers");?>"> centers </a> </li>
						<li> <a href="<?php echo base_url("home/contact");?>"> contacts </a> </li>
					</ul>
				</div>		
			</div>
		</nav>
	</nav>
</header>
<!-- header part end here -->