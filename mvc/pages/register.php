<?php include 'header.php'; ?>

<form action="index.php?page=accounts&action=register" method="post">
    First name: <input type="text" name="fname" required><br>
    Last name: <input type="text" name="lname" required><br>
    Email: <input type="email" name="email" required><br>
    Phone: <input type="text" name="phone"><br>
    Birthday: <input type="text" name="birthday" ><br>
    Gender: <input type="text" name="gender"><br>
    Password: <input type="password" name="password" required><br>
    <input type="submit" value="REGISTER">
</form>

<?php include 'footer.php'; ?>