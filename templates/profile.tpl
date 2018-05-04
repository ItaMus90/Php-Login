{config_load file="test.conf" section="setup"}
{include file="header.tpl" title="Profile"}

<div class="container">
    
            <h1>Profile</h1>

            {if !isset($username)}
                <p class="lead">
                    You are not authorized to view this page
                    <a href={$login}>Login</a>
                    Not yet a member? 
                    <a href="{$signup}">Singup</a>
                </p> 
                {else}
                <section class="col col-lg-7">
                    <table class="table table-bordered table-condensed">
                        <tr>
                            <th style="width:20%">Username</th>
                            <td>{$usernameDB}</td>
                        </tr>
                        <tr>
                            <th>Email</th>
                            <td>{$email}</td>
                        </tr>
                        <tr>
                            <th>Date Joined</th>
                            <td>{$date_join}</td>
                        </tr>
                        <tr>
                            <th></th>
                            <td>
                                <a class="pull-right" href="{$edit_profile}">
                                    <span class="glyphicon glyphicon-edit"></span>
                                    Edit Profile
                                </a>
                            </td>
                        </tr>
                    </table>
                </section>
            {/if}
        
    </div><!-- /.container -->

{include file="footer.tpl"} 