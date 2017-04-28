         <table>
            <tbody>
               <form action="<?php echo URL; ?>Register/Register" method="POST">
                  <label>  Register  </label>
                  <br></br>
                  <label>  Nafn  </label>
                  <input type="text" name="name" value="" required />
                  <label>  Password  </label>
                  <input type="password" name="password" value="" required />
                  <label>   Confirm Password  </label>
                  <input type="password" name="confpassword" value="" required />
                  <input type="submit" name="register" value="Submit" />
               </form>
            </tbody>
         </table>