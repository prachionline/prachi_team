<?php $this->load->view("common/header"); ?>
<div class="mid-section"> 
    <div class="inr-title"><h3>Welcome login</h3></div>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 inner-main-box">
                <div class="login-box">   
                    <form action="<?php echo base_url('auth/verify');?>" method="post">
                        <div class="field-wrap">
                            <label>Email Address<span class="req">*</span></label>
                            <input type="text"  name="uname" />
                        </div>
                        <div class="field-wrap">
                            <label>Password<span class="req">*</span></label>
                            <input type="password" name="pass" />
                        </div>
                        <p class="forgot"><a href="#">Forgot Password?</a></p>
                        <button class="button button-block" type="submit" />Log In</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view("common/footer"); ?>