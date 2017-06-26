<?php $this->load->view("common/header"); ?>
<div class="mid-section"> 
	<div class="inr-title">
		<h3>services  </h3>
	</div>
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 inner-main-box">
				<div class="row">
					<div class="col-lg-8 col-md-8 col-sm-8 lhs-quad"> 
						<div class="row services-detail">
							<span class="inr-page-title"> contact Us </span>	
							<form>
								<div class="contact-quad"> 
									<label> Name: </label>
									<input type="text" class="">	
								</div>	
								<div class="contact-quad"> 
									<label>Email: </label>
									<input type="text" class="">	
								</div>	
								<div class="contact-quad"> 
									<label>Message: </label>
									<textarea></textarea>
								</div>
								<button class="contect-btn">submit</button>
							</form> 					
							<span class="inr-page-title"> Corporate Office:- </span>	
							<div class="col-md-6">
								<address>
									<strong><i class="fa fa-map-marker"></i>Prachi Online Services </strong>
									<p> 125, Scheme No 54, Vijay Nagar, Indore (M.P) </p>
								</address>
								<address>
									<p>
										<i class="fa fa-phone"></i>+ 91 1234567890 , 
										<br><br>
										<i class="fa fa-envelope"></i> <a href="">prachi.center@gmail.com</a>
									</p>
									<p> <i class="fa fa-globe"></i> <a href="">prachionline.co.in</a></p>
								</address>
								<hr>
							</div>
						</div>
					</div>
					<?php $this->load->view('pages/rhs');?>
				</div>
			</div>
		</div>
	</div>
</div>
<?php $this->load->view("common/footer"); ?>

