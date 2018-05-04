<?php
/* Smarty version 3.1.32, created on 2018-05-03 14:53:25
  from '/home/cryingabout/public_html/test-login/templates/profile.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5aeb22652e4555_36319048',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9bf98c0a63601afde549941683a2ab5610aa7f75' => 
    array (
      0 => '/home/cryingabout/public_html/test-login/templates/profile.tpl',
      1 => 1525300885,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5aeb22652e4555_36319048 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->configLoad->_loadConfigFile($_smarty_tpl, "test.conf", "setup", 0);
?>

<?php $_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('title'=>"Profile"), 0, false);
?>

<div class="container">
    
            <h1>Profile</h1>

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
                <section class="col col-lg-7">
                    <table class="table table-bordered table-condensed">
                        <tr>
                            <th style="width:20%">Username</th>
                            <td><?php echo $_smarty_tpl->tpl_vars['usernameDB']->value;?>
</td>
                        </tr>
                        <tr>
                            <th>Email</th>
                            <td><?php echo $_smarty_tpl->tpl_vars['email']->value;?>
</td>
                        </tr>
                        <tr>
                            <th>Date Joined</th>
                            <td><?php echo $_smarty_tpl->tpl_vars['date_join']->value;?>
</td>
                        </tr>
                        <tr>
                            <th></th>
                            <td>
                                <a class="pull-right" href="<?php echo $_smarty_tpl->tpl_vars['edit_profile']->value;?>
">
                                    <span class="glyphicon glyphicon-edit"></span>
                                    Edit Profile
                                </a>
                            </td>
                        </tr>
                    </table>
                </section>
            <?php }?>
        
    </div><!-- /.container -->

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?> <?php }
}
