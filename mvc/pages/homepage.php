

<?php include 'header.php'; ?>

<h1>
    <?php

    //this how to print some data;
    echo $data['site_name'];

    ?> </h1>

 <!-- <h1><a href="index.php?page=accounts&action=all">Show All Accounts</a></h1> -->

<!-- <h1><a href="index.php?page=tasks&action=all">Show All Tasks</a></h1> -->

<form action="index.php?page=accounts&action=login" method="POST">

    <div class="container">
        <label><b>Username</b></label>
        <input type="text" placeholder="Enter Username" name="email" required>

        <label><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="password" required>

        <button type="submit">Login</button>
    </div>


</form>
<h1><a href="index.php?page=accounts&action=register">Register</a></h1>


<script src="js/scripts.js"></script>
</body>
</html>