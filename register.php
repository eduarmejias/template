<?php include ('common/header.php') ?>

       </div>  
                
       <div class="row">

          <div class="col-xs-10 col-md-offset-1" id="center"> <!--center-->
          <br><br><div class="row">
            <div class="col-xs-5" id="reg_usuario">

             <form METHOD="post" ACTION="myprofile.php" name="frm">
                        <h3>Create Account </h3>
                        <div class="form-group">
                        <label for="exampleInputName2">Nombre</label>
                        <input type="text" class="form-control" name="name">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName2">Apellido</label>
                        <input type="text" class="form-control" name="lastname">
                      </div>    
                      <div class="form-group">
                        <label for="exampleInputEmail1">Email</label>
                        <input type="email" class="form-control" name="email">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName2">Telefono</label>
                        <input type="text" class="form-control" name="phone">
                      </div> 
                      <div class="form-group">
                        <label for="exampleInputName2">Password</label>
                        <input type="password" class="form-control" name="pw">
                      </div>   
                      <div class="form-group">
                        <label for="exampleInputFile">Confirm Password</label>
                        <input type="password" class="form-control" name="conpw">
                       <!--  <p class="help-block">Example block-level help text here.</p> -->
                      </div>
                       <div class="form-group">
                        <label for="exampleInputName2">Province</label>
                        <input type="text" class="form-control" name="province">
                      </div> 
                      <div class="form-group">
                        <label for="exampleInputName2">City</label>
                        <input type="text" class="form-control" name="city">
                      </div>   
                      <div class="form-group">
                        <label for="exampleInputFile">Postal Code</label>
                        <input type="text" class="form-control" name="postalcode">
                       <!--  <p class="help-block">Example block-level help text here.</p> -->
                      </div>
                      <div class="form-group">
                        <label for="exampleInputFile">Adress</label>
                        <input type="text" class="form-control" name="adress">
                       <!--  <p class="help-block">Example block-level help text here.</p> -->
                      </div>
                    <!-- <div class="checkbox">
                        <label>
                          <input type="checkbox"> I agree to the membership agreement 
                        </label>
                      </div>--> 
                     
                      <button type="submit" class="btn btn-default" id="btn_reg_user">Done</button>
                      <br><br>
                      <button type="reset" value="restablecer" class="btn btn-default" id="btn_reg_user">Reset</button>
                      <br><br>
                    </form>
            </div>     
             <div class="col-xs-4 col-md-offset-1" id="login">

             <form METHOD="post" ACTION="#" name="frm">
                        <h3>Log in </h3>
                        <div class="form-group">
                        <label for="exampleInputName2">User</label>
                        <input type="text" class="form-control" name="name">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputName2">Password</label>
                        <input type="text" class="form-control" name="lastname">
                      </div>    
                     
                     
                      <button type="submit" class="btn btn-default" id="btn_login">login</button>
                      <br><br>
                    </form>
            </div>  </div>                           
          </div><!--center-->

       <?php  include ('common/footer.php') ?>