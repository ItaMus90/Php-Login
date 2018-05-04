<?php
/* Smarty version 3.1.32, created on 2018-05-02 20:01:38
  from '/opt/lampp/htdocs/projects/test-login/templates/forgot_password.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5ae9fd028d6a94_97854253',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '259559e383442a57cb2b4e34e01ee17959d15e99' => 
    array (
      0 => '/opt/lampp/htdocs/projects/test-login/templates/forgot_password.tpl',
      1 => 1525284053,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5ae9fd028d6a94_97854253 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->configLoad->_loadConfigFile($_smarty_tpl, "test.conf", "setup", 0);
?>

<?php $_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>"Password Reset Page"), 0, false);
?>

    <div class="container">
            <section class="col col-lg-7">
                    <h2>Registration Form</h2><hr>
                    <div>
                        <?php if (isset($_smarty_tpl->tpl_vars['result']->value)) {
echo $_smarty_tpl->tpl_vars['result']->value;
}?>
                        <?php echo $_smarty_tpl->tpl_vars['errors']->value;?>

                    </div>
                    <div class="clearfix"></div>
                    <form action="" method="post">
                            <div class="form-group">
                                    <label for="emailField">Email Address</label>
                                    <input type="email" class="form-control" name="email" id="emailField" placeholder="Email">
                            </div>
                            <div class="form-group">
                                    <label for="passwordField">New Password</label>
                                    <input type="password" class="form-control" name="new_password" id="passwordField" placeholder="Password">
                            </div>
                            <div class="form-group">
                              <label for="passwordField">Confirm Password</label>
                              <input type="password" class="form-control" name="confirm_password" id="passwordField" placeholder="Password">
                            </div>
                            <button type="submit" class="btn btn-primary pull-right" name="passwordResetBtn">Reset Password</button>
                          </form>
            </section>
            <p><a href="<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
">Back</a></p>
        </div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> <?php }
}
