<?php
 include "header.php"
 ?> 

              <div id="stories_container">
                  <div class="srories_title">MAKE FUN !</div>
                  <div id="user"> <?php
                      if( isset($_SESSION["user"]) ){
                          echo "HELLO " . $_SESSION["user"];
                       }
                  ?>
                  </div>
                  <form action="sh.html"  method="get" id="form2">
                    <textarea >
                        write your story
                    </textarea><br>
                    <input type="file" name="up2" multiple id="upload2" value="UPLOAD">
                    <input type="submit" value="SHARE" id="share">
                </form>
              </div>
              <?php
 include "footer.php"
 ?> 

</body>
</html>   