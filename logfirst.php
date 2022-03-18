<?php
 include "header.php"
 ?> 
 <div class="logfirstcon">
  <img src="images/formbg.jpg">
 <div id="first">LOG IN FIRST</div>
 <div id="do"><a href="log in.php">LOG IN</a></div>
 </div>
<?php
      if( isset($_SESSION["user"]) ){
         header("location:stories.php");
      }
?>

<?php
 include "footer.php"
 ?> 
 </body>
</html>   