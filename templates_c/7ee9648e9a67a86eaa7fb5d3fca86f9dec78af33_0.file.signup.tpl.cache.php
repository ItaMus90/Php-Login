<?php
/* Smarty version 3.1.32, created on 2018-05-02 09:21:30
  from '/opt/lampp/htdocs/projects/test-login/templates/signup.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5ae966fad8d070_30231219',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7ee9648e9a67a86eaa7fb5d3fca86f9dec78af33' => 
    array (
      0 => '/opt/lampp/htdocs/projects/test-login/templates/signup.tpl',
      1 => 1525245622,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ae966fad8d070_30231219 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '14518812235ae966fad71fb5_97833643';
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Signup Page</title>
</head>
<body>
   <h2>User Authentication System</h2><hr>
    <h3>Register Form</h3>
    <?php if (isset($_smarty_tpl->tpl_vars['result']->value)) {
echo $_smarty_tpl->tpl_vars['result']->value;
}?>
    <form action="" method="post">
        <table>
            <tr>
                <td>Email:</td>
                <td><input type="email" value="" name="email"></td>
            </tr>
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
                <td><input style="float: right;" type="submit" value="Signup"></td>
            </tr>
        </table>
    </form>
    <p><a href="index.php">Back</a></p>
</body>
</html>
<?php }
}
