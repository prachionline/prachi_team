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
							<span class="inr-page-title"> Inner page Title </span>					
							<span class="services-bnr"> <img src="<?php echo base_url("public/images/services.jpg");?>"> </span>						
							<p>
								Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum. 
							</p> 					
							<p>
								Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting.
							</p> 					
						</div>
					</div>
					<?php $this->load->view('pages/rhs');?>
				</div>
			</div>
		</div>
	</div>
</div>
<?php $this->load->view("common/footer"); ?>