<?php
include ('assets/header.php');
?>

<h2>Login User</h2>
<form id="login_user" method="POST" onsubmit="return login_user()">

    <label>Email:</label><br>
    <input type="text"  name="user_email"><br>
    <!-- <input type="text"  name="admin_email"><br> -->

    <label>Password:</label><br>
    <input type="text"  name="user_password"><br>
    <!-- <input type="text"  name="admin_password"><br> -->

    <button type="submit" class="btn btn-primary">Login</button>

</form>

<h2>Login Admin</h2>
<form id="login_admin" method="POST" onsubmit="return login_admin()">

    <label>Email:</label><br>
    <input type="text"  name="admin_email"><br>
    <!-- <input type="text"  name="admin_email"><br> -->

    <label>Password:</label><br>
    <input type="text"  name="admin_password"><br>
    <!-- <input type="text"  name="admin_password"><br> -->

    <button type="submit" class="btn btn-primary">Login</button>

</form>

<br>
<button type="submit" class="btn btn-primary" onclick="logout()">Logout</button>

<?php
include ('assets/footer.php');
?>