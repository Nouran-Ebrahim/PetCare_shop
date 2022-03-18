<?php
 include "header.php"
 ?>           
            <div class="login_container">
              <img src="images/formbg.jpg">
                <form  method="post" id="form3" name="myForm">
                        <label class="label">First Name:</label>
                        <input type="text" name="fn" placeholder="First Name" required autocomplete="off" >
                        <label class="label">Lirst Name:</label>
                        <input type="text" name="ln" placeholder="Lirst Name" required autocomplete="off">
                      
                        <label class="label">type of user</label>
                        <select name="type_user">
                                <option value="1">user</option>
                                <option value="2">doctor</option>
                                <option value="3">admain</option>
                        </select>
                        <input type='file' name="inptfil" id="imgInp" />
                        <br>
                        <img id="blah" src="#" style="display: none;" />

                       <br>
                        <label class="label">Gendr:</label>
                        
                        <input type="radio" name="gender" required >
                        <label> Male</label>
                        
                        <input type="radio" name="gender" required>
                        <label>Female </label>
                        <br>
                        <label class="label">Birth day:</label>
                        <input type="date" name="date" required > 
                        <br>  
                        <label class="label">Phone:</label>
                        <input type="text" name="phone" placeholder="phone" required autocomplete="off">
                        <br>    
                         <label class="label">Email:</label>
                        <input type="email" name="mail" placeholder="email" required autocomplete="off">
                        <br>
                        <label class="label">Password:</label>
                        <input type="password" name="pass" placeholder="pass" autocomplete="off">
                        <br>
                        <?php
                    if ( $_SERVER['REQUEST_METHOD'] == "POST"){
                            $type = $_POST['type_user'];
                            $fn = $_POST['fn'];
                            $ln = $_POST['ln'];
                            $email = $_POST['mail'];
                            $birth = $_POST['date'];
                            $gender = $_POST['gender'];
                            $phone = $_POST['phone'];
                            $pass = $_POST['pass'];
                            $img = $_POST['inptfil'];
                               try{
                                    $servername = "localhost";
                                    $username = "root";
                                    $password = "";
                                    $dbname = "pet_care";
                                    $conn = new PDO("mysql:host=$servername;dbname=$dbname",$username,$password);
                                    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
                                    $sql = "INSERT INTO users (typee,first_name,last_name,email,birth_date,gender,phone,passwordd,imagee)
                                     VALUES ('$type','$fn','$ln','$email','$birth','$gender','$phone','$pass','$img')";
                                    $conn->exec($sql);
                                      //  echo "<span class=\"error\">data added sucessfully</span>";       
     
                               } 
                               catch(PDOException $e){
                                    echo "<span class=\"error\">Connection Failed or data already exists</span>";
                               }
                       
                    }
                ?>
                        <input type="submit" name="cr" value="CREATE" class="in">
                    </form>         
            </div>     
            <?php
 include "footer.php"
 ?>  
         <script src="js/jquery-3.5.1.js"></script>
  <script src="js/upload.js"></script>
</body>
</html>   