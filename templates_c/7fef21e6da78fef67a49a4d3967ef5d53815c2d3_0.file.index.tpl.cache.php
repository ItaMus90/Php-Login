<?php
/* Smarty version 3.1.32, created on 2018-05-02 14:51:09
  from '/opt/lampp/htdocs/projects/test-login/templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5ae9b43de89542_09691739',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7fef21e6da78fef67a49a4d3967ef5d53815c2d3' => 
    array (
      0 => '/opt/lampp/htdocs/projects/test-login/templates/index.tpl',
      1 => 1525265451,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5ae9b43de89542_09691739 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '4030958395ae9b43de5ede1_57251573';
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Homepage</title>
</head>
<body>
    <h2>User Authentication System</h2><hr>
    <?php if (!isset($_smarty_tpl->tpl_vars['username']->value)) {?>
       <p>
            <!-- <?php echo $_smarty_tpl->tpl_vars['username']->value;?>
 -->
           You are currently not signin
           <a href=<?php echo $_smarty_tpl->tpl_vars['login']->value;?>
>Login</a>
           Not yet a member? 
           <a href="signup.php">Singup</a>
       </p> 
       <?php } else { ?>
        <p>You are logged in as  <a href="logout.tpl">Logout</a></p>
    <?php }?>
</body>
</html>
<?php }
}
