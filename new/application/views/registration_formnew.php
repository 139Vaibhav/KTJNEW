    <div id="form">
         <div class="center">REGISTER</div>
         <hr>
         <?php if (isset($message)) : ?>
              <div class="formgroup-error">
                   ERROR : <?= $message; ?>
              </div>
              </article>
         <?php endif; ?>
         <?= validation_errors('<div class="error">', '</div>'); ?>
         <?= form_open('register'); ?>

         <div>
              <div class="wrap-input100 validate-input">
                   <input id="name" class="input100" type="text" name="name" required placeholder="Name" class="ab">
                   <span class="focus-input100"></span>
                   <span class="symbol-input100">
                        <i class="fas fa-user" aria-hidden="true"></i>
                   </span>
              </div>
         </div>


         <div>
              <div class="wrap-input100 validate-input">

                   <input id="email" class="input100" placeholder="Email" type="email" name="email" required>
                   <span class="focus-input100"></span>
                   <span class="symbol-input100">
                        <i class="fas fa-envelope" aria-hidden="true"></i>
                   </span>
              </div>
         </div>



         <div>
              <div class="wrap-input100 validate-input">
                   <input id="password" class="input100" placeholder="Password" type="password" name="password" required>
                   <span class="focus-input100"></span>
                   <span class="symbol-input100">
                        <i class="fa fa-lock" aria-hidden="true"></i>
                   </span>
              </div>
         </div>

         <div>
              <div class="wrap-input100 validate-input">
                   <input type="password" class="input100" placeholder="Confirm Password" name="passconf" id="passwordconfirm" required>
                   <span class="focus-input100"></span>
                   <span class="symbol-input100">
                        <i class="fa fa-lock" aria-hidden="true"></i>
                   </span>
              </div>
         </div>



         <div>
              <div class="wrap-input100 validate-input">
                   <input type="text" class="input100" placeholder="Mobile Number" id="mobile" name="mobile" required>
                   <span class="focus-input100"></span>
                   <span class="symbol-input100">
                        <i class="fas fa-phone" aria-hidden="true"></i>
                   </span>
              </div>
         </div>

         <div>
         
              <div class="wrap-input100 validate-input">
              
                   <input type="date" class="input100" placeholder="Date of Birth" id="dob" name="dob" required>
                   <span class="focus-input100"></span>
                   <span class="symbol-input100">
                        <i class="fa fa-calendar" aria-hidden="true"></i>
                   </span>
              </div>
              <label for="dob">Date of Birth</label>
         </div>




         <div class="abcdef">
              <label for="gender">Gender</label><br>
              <input type="radio" name="gender" id="m" value="m" required>
              <label for="m">Male</label>&nbsp;&nbsp;
              <input type="radio" name="gender" id="f" value="f">
              <label for="f">Female</label>&nbsp;&nbsp;
              <input type="radio" name="gender" id="o" value="o">
              <label for="o">Others</label>
         </div>



         <div>
              <label for="college">College</label><br>
              <select id="college" class="abcde" name="college" class="dropdown1" required>
                   <option value="">Choose an option(If not found, choose Others)</option>
                   <?php foreach ($colleges as $college) : ?>
                        <option value="<?= $college->id; ?>"><?= $college->college_name; ?></option>
                   <?php endforeach; ?>
              </select>
         </div>








         <div>
              <label for="city">City</label><br>
              <select id="city" name="city" class="abcde" class="dropdown2" required>
                   <option value="">Choose an option(If not found, choose nearest)</option>
                   <?php foreach ($cities as $city) : ?>
                        <option value="<?= $city->id; ?>"><?= $city->name; ?></option>
                   <?php endforeach; ?>
              </select>
         </div>





         <div>
              <label for="state">State</label><br>
              <select id="state" name="state" class="abcde" class="dropdown3" required>
                   <option value="">Choose an option</option>
                   <?php foreach ($states as $state) : ?>
                        <option value="<?= $state->id; ?>"><?= $state->name; ?></option>
                   <?php endforeach; ?>
              </select>
         </div>



         <div>
              <div class="wrap-input100 validate-input">
                   <input type="text" class="input100" placeholder="Department" name="department" id="department" required>
                   <span class="focus-input100"></span>
                   <span class="symbol-input100">
                        <i class="fas fa-school" aria-hidden="true"></i>
                   </span>
              </div>
         </div>

         <div>
              <div class="wrap-input100 validate-input">

                   <input type="text" class="input100" placeholder="College ID" name="college_id" id="college_id" required>
                   <span class="focus-input100"></span>
                   <span class="symbol-input100">
                        <i class="fa fa-drivers-license" aria-hidden="true"></i>
                   </span>
              </div>
         </div>



         <div class="container-login100-form-btn">
              <!--<button class="login100-form-btn">
							Login
                              </button>-->
              <input type="submit" value="Register" name="submit" class="login100-form-btn">
         </div>
















         </form>
    </div>

    <canvas id="demo-canvas" style="display:none"></canvas>
    </div>


    <style>
    @media screen and (max-width: 600px)
    {
    .wrap-input100
          {
               width: 100%;
               position: relative;
               transform: translateX(-4%);
          }
          .abcdef
          {
               width: 90%;
               background-color: #e6e6e6;
               border-radius: 200px;
               text-align: center;
               position: relative;
               transform: translateX(1%);
          }
          .abcde
          {
               width: 100%;
               background-color: #e6e6e6;
               border-radius: 200px;
               text-align: center;
               position: relative;
               font-size: 70%;
               transform: translateX(1%);
          }
          .container-login100-form-btn
          {
               width: 50%;
               transform: translateX(40%);
               
          }


    }
    label
    {
         padding:0 0 0 0;
         margin: 0 0 0 0;
    }
    
    </style>