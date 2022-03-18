<?php
 include "header.php"
 ?>

        <ul class="nav nav-tabs abc4">
          <li class="nav-item">
            <a class="nav-link abc5" id="A1" href="#">CATS</a>
          </li>
          <li class="nav-item">
            <a class="nav-link abc5" id="A2" href="#">DOGS</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link abc5 " id="A3" href="#">BIRDS</a>
          </li>
        </ul>
        <div class="container-pet">
          <div id="left">
            <a href="#" >ACCESORIES</a>
            <a href="#" >FOODS</a>
          </div>
          <div id="rigth"></div>
          
        </div>
        <nav aria-label="Page navigation example" class="pagi">
          <ul class="pagination">
            <li class="page-item" id="prev">
              <a class="page-link" href="#" aria-label="Previous">
                <span aria-hidden="true">&laquo;</span>
              </a>
            </li>
            <li class="page-item" id="pagi_1"><a class="page-link" href="#">1</a></li>
            <li class="page-item" id="pagi_2"><a class="page-link" href="#">2</a></li>
            <li class="page-item"id="pagi_3"><a class="page-link" href="#">3</a></li>
            <li class="page-item" id="nex">
              <a class="page-link" href="#" aria-label="Next">
                <span aria-hidden="true">&raquo;</span>
              </a>
            </li>
          </ul>
        </nav>
        <?php
 include "footer.php"

 ?>
      <script src="js/jquery-3.5.1.js"></script>
  <script src="js/petsserv.js"></script>
</body>
</html>   