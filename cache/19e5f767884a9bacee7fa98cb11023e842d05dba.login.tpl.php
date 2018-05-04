<?php
/* Smarty version 3.1.32, created on 2018-05-02 13:20:38
  from '/opt/lampp/htdocs/projects/test-login/templates/login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5ae99f0680a5e3_59445721',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6a8aa34bafba07a1aa205826f04926fd41da59b2' => 
    array (
      0 => '/opt/lampp/htdocs/projects/test-login/templates/login.tpl',
      1 => 1525259866,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 120,
),true)) {
function content_5ae99f0680a5e3_59445721 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Login Page</title>
</head>
<body>
   <h2>User Authentication System</h2><hr>
    <h3>Login Form</h3>
    <p style='color: red;'> There were 2 errors in the form <br>    <p><ul style='color: red;'><li> username is a required field </li><li> password is a required field </li></ul></p>
    <form action="" method="post">
        <table>
            <tr>
                <td>Username:</td>
                <td><input type="text" value="" name="username"></td>
            </tr>
            <tr>
                <td>Password:</td>
                <td><input type="password" value="" name="password"></td>
            </tr>
            <tr>
                <td></td>
                <td><input style="float: right;" type="submit" name="loginBtn" value="Signin"></td>
            </tr>
        </table>
    </form>
    <p><a href="index.php">Back</a></p>
</body>
</html>
<?php }
}
