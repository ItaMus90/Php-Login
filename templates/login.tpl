{config_load file="test.conf" section="setup"}
{include file="header.tpl" title="Login Page"}
    <div class="container">
        <section class="col col-lg-7">
                <h2>Login Form</h2>
                <div>
                    {if isset($result)}{$result}{/if}
                    {$errors}
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
                        <a href="{$forgot_password}">Forgot Password?</a>
                        <button type="submit" class="btn btn-primary pull-right" name="loginBtn">Sign in</button>
                      </form>
        </section>
        <p><a href="{$index}">Back</a></p>
    </div>
{include file="footer.tpl"} 
