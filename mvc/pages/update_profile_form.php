<h1><u>Email:</u>&emsp;&emsp;&emsp; <?php echo $data->email; ?></h1>
<h1><u>First Name:</u> <?php echo $data->fname; ?></h1>
<h1><u>Last Name:</u> <?php echo $data->lname; ?></h1><br>

<?php
print(utility\htmlTable::generateTableFromOneRecord($data));
?>

<form action="index.php?page=accounts&action=save&id=<?php echo $data->id; ?>" method="post">

    First name: <input type="text" name="fname" value="<?php echo $data->fname; ?>"><br>
    Last name: <input type="text" name="lname" value="<?php echo $data->lname; ?>"><br>
    <input type="hidden" name="email" value="<?php echo $data->email; ?>"> <br>
    Phone: <input type="text" name="phone" value="<?php echo $data->phone; ?>"><br>
    Birthday: <input type="text" name="birthday" value="<?php echo $data->birthday; ?>"><br>
    Gender: <input type="text" name="gender" value="<?php echo $data->gender; ?>"><br>
    <input type="submit" value="UPDATE PROFILE">

</form>




<h1 align="center"><b><u>EDIT TASK</u></b></h1><br>

<form action="index.php?page=tasks&action=save&id=<?php  echo $data->id; ?>" method="post">

    <div>
        <label form="updatingTask"><b>Created Date:</b></label>
        <input type="date" class="form-control" id="duedate"  name="createddate" value="<?php echo $data->createddate;?>" required >
    </div><br>

    <div>
        <label form="updatingTask"><b>Due Date:</b></label>
        <input type="date" class="form-control" id="duedate"  name="duedate" value="<?php echo $data->duedate;?>" required >
    </div><br>

    <div>
        <label form="updatingTask"><b>Message:</b></label>
        <input type="text" class="form-control" id="message" name="message" value="<?php echo $data->message;?>" required >
    </div><br>

    <div>
        <label form="updatingTask"><b>Is Done?</b></label>
        <input type="number" class="form-control" id="isdone"  name="isdone" value="<?php echo $data->isdone;?>" required >
    </div><br>

    <button type="submit" class="btn btn-primary">UPDATE TASK</button> <br><br>

</form>

<form action="index.php?page=accounts&action=delete&id=<?php echo $data->id; ?> " method="post" id="form1">
    <button type="submit" class="btn btn-primary" form="form1" value="delete">DELETE PROFILE</button>
</form>
