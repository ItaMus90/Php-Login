<?php
/* Smarty version 3.1.32, created on 2018-05-03 14:52:34
  from '/home/cryingabout/public_html/test-login/templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5aeb2232879729_77021071',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '16170a5253e91519e58d5db5f9ae088adb04c365' => 
    array (
      0 => '/home/cryingabout/public_html/test-login/templates/index.tpl',
      1 => 1525283378,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5aeb2232879729_77021071 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->configLoad->_loadConfigFile($_smarty_tpl, "test.conf", "setup", 0);
?>

<?php $_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>"User Authentication - Homepage"), 0, false);
?>
        
    <div class="container">
    
        <div class="flag">
            <h1>User Authentication System</h1>

            <?php if (!isset($_smarty_tpl->tpl_vars['username']->value)) {?>
                <p class="lead">
                    You are currently not signin
                    <a href=<?php echo $_smarty_tpl->tpl_vars['login']->value;?>
>Login</a>
                    Not yet a member? 
                    <a href="<?php echo $_smarty_tpl->tpl_vars['signup']->value;?>
">Singup</a>
                </p> 
                <?php } else { ?>
                <p class="lead">You are logged in as  <a href="<?php echo $_smarty_tpl->tpl_vars['logout']->value;?>
">Logout</a></p>
            <?php }?>
        </div>
        
    </div><!-- /.container -->

    <?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> 


<?php }
}
