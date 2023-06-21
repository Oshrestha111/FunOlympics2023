<?php 
$conn = mysqli_connect("localhost", "root", "", "sign");

if (isset($_POST['submit'])) {
    $pass=$_POST['pass'];
    $id = $_GET['id'];
    $q = "UPDATE users SET password='$pass' WHERE id ='$id'";
    $qu = mysqli_query($conn, $q);
    // header("location:index.php");
}

?>
<style>
.reset{
    width:200px;
    /* height:140px; */
    background-color: #1B1B1B;
    padding:16px;
    border-radius:6px;
}
#reset-heading{
    color:#fff;
}
#reset-btn{
    margin-top:8px;
    padding:4px;
    /* height:20px; */
    border-radius:4px;
    width:175px;
    background-color:#4cbb17;
    border:none;
    color:#fff;
}
label{
    color:#fff;
    font-weight:bold;
}

</style>

<!-- reset_password_form.php -->
<div class="reset">
<h3 id='reset-heading'>Reset Password</h3>
    <form method="POST" action="reset.php">
        <label for="email">Username:</label>
        <input type="username" name="uname" id="uname" required> <br>
        <label for="password">Password:</label>
        <input type="password" name="pass" id="pass" required> <br>
        <input type="submit" name="submit" value="Reset Password" id="reset-btn">
    </form>
</div>

