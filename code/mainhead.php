<div class="row">
    <div class="col-lg-2">
        <div class="img">
            <img src="imgs/avatar.png" alt="avatar" width="40%" class="img-rounded">
        </div>


    </div>
    <div class="col-lg-5">
        <div class="header">
            <a href="logout.php">Log out

                <?php

                if (isset($_SESSION['login']) && $_SESSION['login']==true) {
                    echo  $_SESSION['nom'] ;
                }
                ?>
            </a>

        </div>
    </div>
    <div class="col-lg-5">
        <div class="title" style="width: 50px">
            <h1>Ett Laderas</h1>
        </div>
    </div>



</div >