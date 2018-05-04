<?php
/* Smarty version 3.1.32, created on 2018-05-03 14:52:34
  from '/home/cryingabout/public_html/test-login/templates/header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5aeb22328b11f4_76759856',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7ee0a90c137370e84b31f9a86d3605ade1dc963b' => 
    array (
      0 => '/home/cryingabout/public_html/test-login/templates/header.tpl',
      1 => 1525300573,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5aeb22328b11f4_76759856 (Smarty_Internal_Template $_smarty_tpl) {
?><head>
        <meta charset="utf-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title>
        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/custom.css" rel="stylesheet">
    </head>
    <body>
            <nav class="navbar navbar-inverse navbar-fixed-top">
                    <div class="container">
                        <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#">User Authentication</a>
                        </div>
                        <div id="navbar" class="collapse navbar-collapse">
                        <ul class="nav navbar-nav">
                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['index']->value;?>
">Home</a></li>
                            <?php if (isset($_smarty_tpl->tpl_vars['username']->value) || $_smarty_tpl->tpl_vars['valid']->value) {?>
                                <li><a href="<?php echo $_smarty_tpl->tpl_vars['profile']->value;?>
">My Profile</a></li>
                                <li><a href="<?php echo $_smarty_tpl->tpl_vars['logout']->value;?>
">Logout</a></li>
                            <?php } else { ?>  
                            <li><a href="#about">About</a></li>
                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['login']->value;?>
">Login</a></li>
                            <li><a href="<?php echo $_smarty_tpl->tpl_vars['signup']->value;?>
">Sign Up</a></li>
                            <li><a href="#contact">Contact</a></li>
                        <?php }?>
                           
                        </ul>
                        </div><!--/.nav-collapse -->
                    </div>
                </nav>
<?php }
}
