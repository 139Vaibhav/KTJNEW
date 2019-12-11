<!DOCTYPE html>

	
	<div class="limiter">
		<div class="container-login1001">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="<?= base_url() ?>assets/logincss/images/img-01.png" alt="IMG">
                    </div>
                    <?php if(isset($message)):?>
<article class="message">
       <b> <?= $message; ?></b>
</article>
<?php endif;?>
<b>
<?php
echo validation_errors();
echo form_open('login'); ?><b>
                    
                   

				<form class="login100-form validate-form">
					<span class="login100-form-title">
						Member Login
					</span>
                         
					<div class="wrap-input100 wrap-input1001 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="email" placeholder="Email">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 wrap-input1001 validate-input" data-validate = "Password is required">
						<input class="input100" type="password" name="password" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					
					<div class="container-login100-form-btn">
						<!--<button class="login100-form-btn">
							Login
                              </button>-->
                              <input type="submit" value="Login" name="submit" class="login100-form-btn">
					</div>

                         <br>
                         <br>
                         <br>
                         <br>

					
				</form>
			</div>
		</div>
	</div>
	
	

	


