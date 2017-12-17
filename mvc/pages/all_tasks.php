<!doctype html>

<html lang="en">
<head>
    <meta charset="utf-8">

    <title>The HTML5 Herald</title>
    <meta name="description" content="The HTML5 Herald">
    <meta name="author" content="SitePoint">

    <link rel="stylesheet" href="css/styles.css?v=1.0">

    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script>
    <![endif]-->
</head>

<body>

    <!-- <h1><a href="index.php?page=accounts&action=all">All Accounts</a></h1> -->

    <h1><a href="index.php?page=accounts&action=show">Your Profile</a></h1>

    <h1><a href="index.php?page=tasks&action=create">Create Tasks</a></h1>

    <!-- <h1><a href="index.php?page=tasks&action=all">Tasks Created By You Are</a></h1> -->


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

    <script src="js/scripts.js"></script>

</body>
</html>