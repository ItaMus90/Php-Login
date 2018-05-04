<?php
/* Smarty version 3.1.32, created on 2018-05-02 23:26:44
  from '/opt/lampp/htdocs/projects/test-login/templates/login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5aea2d147387c4_41892835',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6a8aa34bafba07a1aa205826f04926fd41da59b2' => 
    array (
      0 => '/opt/lampp/htdocs/projects/test-login/templates/login.tpl',
      1 => 1525294257,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5aea2d147387c4_41892835 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->configLoad->_loadConfigFile($_smarty_tpl, "test.conf", "setup", 0);
?>

<?php $_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>"Login Page"), 0, false);
?>
    <div class="container">
        <section class="col col-lg-7">
                <h2>Login Form</h2>
                <div>
                    <?php if (isset($_smarty_tpl->tpl_vars['result']->value)) {
echo $_smarty_tpl->tpl_vars['result']->value;
}?>
                    <?php echo $_smarty_tpl->tpl_vars['errors']->value;?>

                </div>
                <div class="clearfix"></div>
                <form action="" method="post">
                        <div class="form-group">
                          <label for="usernameField">Username</label>
                          <input type="text" class="form-control" name="username" id="usernameField" placeholder="Username">
                        </div>
                        <div class="form-group">
                          <label for="passwordField">Password</label>
                          <input type="password" class="form-control" name="password" id="passwordField" placeholder="Password">
                        </div>
                        <div class="checkbox">
                          <label>
                            <input name="remember" value="yes" type="checkbox"> Remember Me
                          </label>
                        </div>
                        <a href="<?php echo $_smarty_tpl->tpl_vars['forgot_password']->value;?>
">Forgot Password?</a>
                        <button type="submit" class="btn btn-primary pull-right" name="loginBtn">Sign in</button>
                      </form>
        </section>
        <p><a href="<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
">Back</a></p>
    </div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> 
<?php }
}
