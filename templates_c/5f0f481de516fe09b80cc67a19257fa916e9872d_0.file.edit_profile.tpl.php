<?php
/* Smarty version 3.1.32, created on 2018-05-03 02:18:51
  from '/opt/lampp/htdocs/projects/test-login/templates/edit_profile.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5aea556be9f1c3_85301260',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5f0f481de516fe09b80cc67a19257fa916e9872d' => 
    array (
      0 => '/opt/lampp/htdocs/projects/test-login/templates/edit_profile.tpl',
      1 => 1525306721,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5aea556be9f1c3_85301260 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->configLoad->_loadConfigFile($_smarty_tpl, "test.conf", "setup", 0);
?>

<?php $_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>"Edit Profile"), 0, false);
?>

<div class="container">
        <section class="col col-lg-7">
                <h2>Edit Profile</h2>
                <?php if (!isset($_smarty_tpl->tpl_vars['username']->value)) {?>
                <p class="lead">
                    You are not authorized to view this page
                    <a href=<?php echo $_smarty_tpl->tpl_vars['login']->value;?>
>Login</a>
                    Not yet a member? 
                    <a href="<?php echo $_smarty_tpl->tpl_vars['signup']->value;?>
">Singup</a>
                </p> 
                <?php } else { ?>
                <form action="" method="post">
                        <div class="form-group">
                                <label for="emailField">Email Address</label>
                                <input type="email" class="form-control" name="email" value=<?php echo $_smarty_tpl->tpl_vars['email']->value;?>
 id="emailField" placeholder="Email">
                        </div>
                        <div class="form-group">
                          <label for="usernameField">Username</label>
                          <input type="text" class="form-control" name="username" value=<?php echo $_smarty_tpl->tpl_vars['username']->value;?>
 id="usernameField" placeholder="Username">
                        </div>
                        <input type="hidden" name="hidden_id" value="<?php echo $_smarty_tpl->tpl_vars['hidden_id']->value;?>
">
                        <button type="submit" class="btn btn-primary pull-right" name="updateProfileBtn">Update Profile</button>
                      </form>
        </section>
        <p><a href="<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
">Back</a></p>
        <?php }?>
    </div>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> <?php }
}
