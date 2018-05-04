{config_load file="test.conf" section="setup"}
{include file="header.tpl" title="Edit Profile"}

<div class="container">
        <section class="col col-lg-7">
                <h2>Edit Profile</h2>
                {if !isset($username)}
                <p class="lead">
                    You are not authorized to view this page
                    <a href={$login}>Login</a>
                    Not yet a member? 
                    <a href="{$signup}">Singup</a>
                </p> 
                {else}
                <form action="" method="post">
                        <div class="form-group">
                                <label for="emailField">Email Address</label>
                                <input type="email" class="form-control" name="email" value={$email} id="emailField" placeholder="Email">
                        </div>
                        <div class="form-group">
                          <label for="usernameField">Username</label>
                          <input type="text" class="form-control" name="usernameDB" value={$usernameDB} id="usernameField" placeholder="Username">
                        </div>
                        <input type="hidden" name="hidden_id" value="{$id}">
                        <button type="submit" class="btn btn-primary pull-right" name="updateProfileBtn">Update Profile</button>
                      </form>
        </section>
        <p><a href="{$index}">Back</a></p>
        {/if}
    </div>

{include file="footer.tpl"} 