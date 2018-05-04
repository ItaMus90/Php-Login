
{config_load file="test.conf" section="setup"}
{include file="header.tpl" title="User Authentication - Homepage"}
        
    <div class="container">
    
        <div class="flag">
            <h1>User Authentication System</h1>

            {if !isset($username)}
                <p class="lead">
                    You are currently not signin
                    <a href={$login}>Login</a>
                    Not yet a member? 
                    <a href="{$signup}">Singup</a>
                </p> 
                {else}
                <p class="lead">You are logged in as  <a href="{$logout}">Logout</a></p>
            {/if}
        </div>
        
    </div><!-- /.container -->

    {include file="footer.tpl"} 


