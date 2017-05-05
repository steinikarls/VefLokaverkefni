               <form class="pure-form pure-form-aligned" action="<?php echo URL; ?>Register/Register" method="POST">
                  <fieldset>
                  <div class="pure-control-group">
                     <label for="name">  Nafn  </label>
                     <input type="text" name="name" value="" placeholder="Name" required />
                  </div>

                  <div class="pure-control-group">
                     <label for="password">Password</label>
                     <input type="password" name="password" value="" placeholder="Password" required />
                  </div>

                  <div class="pure-control-group">
                     <label for="confirm password">Confirm Password  </label>
                     <input type="password" name="confpassword" value="" placeholder="confirm password" required />
                  </div>
                  <div class="pure-controls">
                     <button type="submit" name="register" value="Submit" class="pure-button pure-button-primary">Submit</button>
                  </div>
                  </fieldset>
               </form>