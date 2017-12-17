<!-- <form action="index.php?page=accounts&action=login" method="POST">

    <div class="container">
        <label><b>Username</b></label>
        <input type="text" placeholder="Enter Username" name="email" required>

        <label><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="password" required>

        <button type="submit">Login</button>
    </div>


</form>
<h1><a href="index.php?page=accounts&action=register">Register</a></h1>

-->



<form action="index.php?page=accounts&action=login" method="POST">
    <div class="form-group">
        <label for="exampleInputEmail1"><b>Email address</b></label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" name="email" required>
        <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
    </div>

    <div class="form-group">
        <label for="exampleInputPassword1"><b>Password</b></label>
        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password" required>
    </div>

    <button type="submit" class="btn btn-primary">LOGIN</button>
</form>

<h1><a href="index.php?page=accounts&action=register">Register</a></h1>