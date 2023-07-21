<div id="signup">
    <div class="signup_form">
        <div class="signup_close">
            <h1>Signup<span class="close" onclick="signup_close()">x</span></h1>
        </div>
        <div class="main_form">
            <form name="signup_f1" onsubmit="return signup_validation()" action="http://localhost/Travelx/LoginSignupModel/signup_check.php" method="POST">
                <input type="text" id="signup_fullname" name="signup_fullname" placeholder="Full Name"><br>
                <input type="text" id="signup_phone" name="signup_phone" placeholder="Phone Number"><br>
                <input type="email" name="signup_email" id="email" placeholder="Email"><br>
                <input type="password" name="signup_psw" id="signup_psw" placeholder="Password"><br>
                <input type="radio" id="signup_gender" name="signup_gender" value="male"> Male
                <input type="radio" id="signup_gender" name="signup_gender" value="female"> Female
                <input type="submit" value="Create Account" name="signup_submit">
            </form>
        </div>
    </div>
</div>