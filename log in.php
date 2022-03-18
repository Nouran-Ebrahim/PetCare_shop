 <?php
 include "header.php"
 ?>
            <div class="login_container">
              <img src="images/formbg.jpg">
                <form  method="post" id="form1" name="myForm"  >
                    <label class="lab"> Email:</label>
                    <input type="text" name="username" placeholder="full name " class="in" id="in1" required autocomplete="off" >
                    <label class="lab"> Password:</label>
                    <input type="password" name="pass" placeholder="password" class="in" required >
                    <?php
                     if( $_SERVER["REQUEST_METHOD"] == "POST"){
                        $user = $_POST['username'];
                        $pass = $_POST["pass"];
                        $_SESSION["user"] = $user;
                        $_SESSION["pass"] =$pass;
                        header("location:check.php");
                        exit();
                     }
                     ?>
                    <input type="submit" name="log" value="LOG IN" class="in">
                    <div>
                        Do'nt have an account ?
                        <a href="new.php">CREATE NEW ACCOUNT</a>
                    </div>
                </form>
              </div>
              <?php
 include "footer.php"
 ?>
        <script src="js/jquery-3.5.1.js"></script>
  <script src="js/stories.js"></script>
</body>
</html>   