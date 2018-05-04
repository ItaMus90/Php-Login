{config_load file="test.conf" section="setup"}
{include file="header.tpl" title="Password Reset Page"}

    <div class="container">
            <section class="col col-lg-7">
                    <h2>Registration Form</h2><hr>
                    <div>
                        {if isset($result)}{$result}{/if}
                        {$errors}
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
            <p><a href="{$index}">Back</a></p>
        </div>
{include file="footer.tpl"} 