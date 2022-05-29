<?php
session_start();
include 'Koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body style="text-align: center;">
    <h2>Form Login</h2>
    <table border="1" style="margin:auto">
        <form action="Login.php" method="POST">
            <tr>
                <td>Nomor Member</td>
                <td><input type="text" name="nomor_member" autofocus></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" name="password"></td>
            </tr>
            <tr>
                <td></td>

                <td><button type="submit" name="login">Login</button></td>
            </tr>
        </form>
    </table>
</body>


</html>