 <!-- A vertical navbar -->
<nav class="navbar navbar-expand-sm bg-light" >

  <ul class="nav nav-pills nav-stacked">
            <!--<li class="active">
              <a class="nav-link" style="background-color:#555" href="./?menu=halaman1">
                <i style='font-size:24px' class='fas'>&#xf080;</i> MENU UATAMA</a>
            </li>-->
            

            <li class="active">
              <a class="nav-link" style="background-color:#555" href="#">
                <?=$_SESSION['username'];?></a>
            </li>

            <li class="active">
              <a class="nav-link" style="background-color:#555" href="./?menu=profil">
                <i style='font-size:24px' class='fab'>&#xf170;</i> PROFIL</a>
            </li>

            <li class="active">
              <a class="nav-link" style="background-color:#555" href="./?menu=pangkalan&p=1">
                <i style='font-size:24px' class='fab'>&#xf36a;</i> PANGKALAN</a>
            </li>

            <li class="active">
              <a class="nav-link" style="background-color:#555" href="./?menu=distribusi">
                <i style='font-size:24px' class='far'>&#xf044;</i> DISTRIBUSI</a>
            </li>

            <li class="active">
              <a class="nav-link" style="background-color:#555" href="../login/logout.php">
                <i style='font-size:24px' class='fas'>&#xf09c;</i> LOGOUT</a>            
            <li>
                  
          </ul>


</nav> 