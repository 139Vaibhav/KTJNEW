<!DOCTYPE html>

	
	<div class="limiter">
		
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
						MEMBER LOGIN
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
     
     <style>
          @media screen and (max-width: 600px)
    {
     .wrap-input1001
          {
               width: 100% !important;
               position: relative;
               transform: translateX(-4%);
               
          }

          .container-login100-form-btn
          {
               width: 50%;
               transform: translateX(40%);
               
          }
          .container-login1001
          {
               width: 100%;
               position: relative;
               left:50%;
               margin-top:17%;
               transform: translateX(-40%);
               
          }
          body{
         overflow: hidden;
     }


    }


    
    .wrap-login100
    {
         margin-left: 10%;
    }
          </style>
	
	

	


