<div id="login_model">
    <div class="login_form">
        <div class="login_close">
            <h1>Login<span class="close" onclick="login_close()">x</span></h1>
        </div>
        <div class="main_form">
            <form name="login_f1" action="http://localhost/Travelx/LoginSignupModel/login_check.php" onsubmit="return login_validation()" method="POST">
                <input type="email" name="login_uid" id="login_uid" placeholder="Email"><br>
                <input type="password" name="login_psw" id="login_psw" placeholder="Password"><br>
                <input type="submit" value="Login" name="login_submit">
            </form>
        </div>
        <div class="login">
            <h4>Don't have an account? <span><button onclick="signup()">Signup</button></span></h4>
        </div>
    </div>
</div>