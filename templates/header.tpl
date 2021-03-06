<head>
        <meta charset="utf-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>{$title}</title>
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
                            <li><a href="{$index}">Home</a></li>
                            {if isset($username) || $valid}
                                <li><a href="{$profile}">My Profile</a></li>
                                <li><a href="{$logout}">Logout</a></li>
                            {else}  
                            <li><a href="#about">About</a></li>
                            <li><a href="{$login}">Login</a></li>
                            <li><a href="{$signup}">Sign Up</a></li>
                            <li><a href="#contact">Contact</a></li>
                        {/if}
                           
                        </ul>
                        </div><!--/.nav-collapse -->
                    </div>
                </nav>
