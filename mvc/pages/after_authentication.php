
<nav class="navbar navbar-expand-lg navbar-light bg-dark">
    <a class="navbar-brand" href="#"><font color=#87cefa about="">MYSITE&nbsp&nbsp</font></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
            <a class="nav-item nav-link active" href="https://web.njit.edu/~st638/project/mvc/index.php?page=tasks&action=all"><font color="#f5f5f5">HOME&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font><span class="sr-only">(current)</span></a>
            <a class="nav-item nav-link" href="index.php?page=accounts&action=all_1"><font color="#f5f5f5">ALL ACCOUNTS&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font></a>
            <a class="nav-item nav-link" href="index.php?page=tasks&action=create"><font color="#f5f5f5">CREATE TASK&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font></a>
            <a class="nav-item nav-link" href="index.php?page=accounts&action=show"><font color="#f5f5f5">YOUR PROFILE&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font></a>
            <a class="nav-item nav-link " href="index.php?page=accounts&action=logout"><font color="#f5f5f5">LOGOUT</font></a>
        </div>
    </div>
</nav>

<br><br>

<?php

    if($data == false){
        echo '<h3 align="center"></><b>You haven\'t created any Task</b></u></h3>';
        echo '<br><h5 align="center"><b>**Click on CREATE TASK to create a new task task**</b></h5>';
    }else {
        echo '<h1 align="center"><b><u>Tasks Created By You Are As Follows</u></b></h1><br>';
        print utility\htmlTable::genarateTableFromMultiArray($data);
        echo '<br><h5 align="center"><b>**Click on VIEW to update or delete task**</b></h5>';
    }

?>


