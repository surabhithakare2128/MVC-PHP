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

<form action="index.php?page=tasks&action=save&id=<?php  echo $data->id; ?>" method="post">
    id: <input type="text" name="id" value="<?php echo $data->id;?>"><br>
    owner email: <input type="text" name="owneremail" value="<?php echo $data->owneremail;?>"><br>
    owner id: <input type="text" name="ownerid" value="<?php echo $data->ownerid;?>"><br>
    created date: <input type="text" name="createddate" value="<?php echo $data->createddate;?>"><br>
    due date: <input type="text" name="duedate" value="<?php echo $data->duedate;?>"><br>
    message: <input type="text" name="message" value="<?php echo $data->message;?>"><br>
    is done: <input type="text" name="isdone" value="<?php echo $data->isdone;?>"><br>

    <input type="submit" value="Submit form">
</form>


<script src="js/scripts.js"></script>
</body>
</html>
