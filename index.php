<?php
session_start()
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Login</title>
</head>
<body>
<form action="/login.php" method="GET">
    <label for="uname">Username</form>
    <input type="text" name="uname" id="uname">
    <label for="pword">Password</form>
    <input type="password" name="pword" id="pword">
    <input type="submit">
</form>
</body>
</html>