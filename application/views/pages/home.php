<?php $this->load->view("common/header"); ?>

<!-- header part end here -->
<div class="container">
	<section id="banner-slider">
		<ul class="bxslider">
			<li><img src="<?php echo base_url("public/images/banner.jpg");?>" /></li>
			<li><img src="<?php echo base_url("public/images/banner.jpg");?>" /></li>			  	
		</ul>
	</section>	
	<section class="services-container">
		<div class="service-header">
			<div class="services-title">
				<h3>OUR SERVICE</h3>
			</div>
		</div>
		<div class="row">
			<div class="col-md-3 col-xs-6 services-box">
				<div class="service-inner">
					<div class="service"> <img src="<?php echo base_url("public/images/tex.png");?>"> </div>
					<div class="service-heading"> <a href="<?php echo base_url("service/pancard");?>"> PAN CARD </a> </div>	
					<div class="service-desc">  Lorem Ispum is Dumy text </div>	
				</div>
			</div>

			<div class="col-md-3 col-xs-6 services-box">
				<div class="service-inner">
					<div class="service"> <img src="<?php echo base_url("public/images/pos.png");?>"> </div>
					<div class="service-heading"> <a href="<?php echo base_url("service/pos_machine");?>"> POS MACHINE </a> </div>	
					<div class="service-desc">  Lorem Ispum is Dumy text </div>	
				</div>
			</div>
			<div class="col-md-3 col-xs-6 services-box">
				<div class="service-inner">
					<div class="service"> <img src="<?php echo base_url("public/images/aadhaar.png");?>"> </div>
					<div class="service-heading"> <a href="<?php echo base_url("service/aadhar_card");?>"> AADHAR CARD </a> </div>	
					<div class="service-desc">  Lorem Ispum is Dumy text </div>	
				</div>
			</div>
			<div class="col-md-3 col-xs-6 services-box">
				<div class="service-inner">
					<div class="service"> <img src="<?php echo base_url("public/images/money.png");?>"> </div>
					<div class="service-heading"> <a href="<?php echo base_url("service/mone_transfer");?>"> MONEY TRANSFER </a> </div>	
					<div class="service-desc">  Lorem Ispum is Dumy text </div>	
				</div>
			</div>

		</div>
	</section>			
</div>		
<div class="home-vision-quad"> 
	<div class="container">
		<h3> VISION & MISSION </h3>
		<p> Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. </p>
		<a href="" class="more">  Read More... </a>
	</div>
</div>
<div class="gallery-quad"> 
	<div class="container">
		<div class="services-title">
			<h3>gallery</h3>
		</div>
		<div class="col-md-4 col-xs-12 gallery-main-box">
			<div class="gallery-inr-box">
				<ul class="da-thumbs">
					<li>
						<a href="https://www.google.co.in/" target="_blank"> 
							<span class="galllery-pic"><img src="<?php echo base_url("public/images/gallery-1.jpg");?>"/> </span> 
							<p>
								<i><img src="<?php echo base_url("public/images/gallery-icon.png");?>"></i>  
								Lorem Ispum is Dumy text the printing and typesetting industry the printing and typesetting industrys  
							</p>
							<article class="da-animate da-slideFromRight">
								<div class="g-hover"> <img src="<?php echo base_url("public/images/gallery-hover.png");?>"> </div>
								<span class="listing-overview-title"> SELECT YOUR GALLERY  </span>
							</article>
						</a>
					</li>
				</ul>
			</div>
		</div>

		<div class="col-md-4 col-xs-12 gallery-main-box">
			<div class="gallery-inr-box">
				<ul class="da-thumbs">
					<li>
						<a href="https://www.google.co.in/" target="_blank"> 
							<span class="galllery-pic"><img src="<?php echo base_url("public/images/gallery-2.jpg");?>"/> </span> 
							<p>
								<i><img src="<?php echo base_url("public/images");?>gallery-icon.png"></i>  
								Lorem Ispum is Dumy text the printing and typesetting industrys  
							</p>
							<article class="da-animate da-slideFromRight">
								<div class="g-hover"> <img src="<?php echo base_url("public/images/gallery-hover.png");?>"> </div>
								<span class="listing-overview-title"> SELECT YOUR GALLERY  </span>
							</article>
						</a>
					</li>
				</ul>
			</div>
		</div>		
		<div class="col-md-4 col-xs-12 gallery-main-box">
			<div class="gallery-inr-box">
				<ul class="da-thumbs">
					<li>
						<a href="https://www.google.co.in/" target="_blank"> 
							<span class="galllery-pic"><img src="<?php echo base_url("public/images/gallery-3.jpg");?>"/> </span> 
							<p>
								<i><img src="<?php echo base_url("public/images/gallery-icon.png");?>"></i>  
								Lorem Ispum is Dumy text the printing and 
							</p>
							<article class="da-animate da-slideFromRight">
								<div class="g-hover"> <img src="<?php echo base_url("public/images/gallery-hover.png");?>"> </div>
								<span class="listing-overview-title"> SELECT YOUR GALLERY  </span>
							</article>
						</a>
					</li>
				</ul>
			</div>
		</div>
	</div>
</div>
<?php $this->load->view("common/footer"); ?>