<h1><a href="index.php?page=accounts&action=all">All Accounts</a></h1>

<h1><a href="index.php?page=accounts&action=show">Your Profile</a></h1>

<h1><a href="index.php?page=tasks&action=create">Create Tasks</a></h1>


<h1>Tasks Created By You Are As Follows:</h1>

<?php
//this is how you print something
if($data == false){
    echo '<h3>You did not create any Task</h3>';
}else {
    print utility\htmlTable::genarateTableFromMultiArray($data);
}

?>

<h1><a href="index.php?page=accounts&action=logout">LOGOUT</a></h1>