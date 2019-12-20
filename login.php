<?php
include('common.php'); //include the php functions
outputHeader("Login"); //output navbar and site logo
?>

<!--right div/page contents-->
<div class="w3-container w3-center w3-animate-opacity w3-animate-right" id="right"">

<div class="login-container">
    <!--login box-->
    <div>
        <form action="login.php" class="login" onsubmit="return false">
            <label for="unamesignin"><b>Username</b>
                <input type="text" placeholder="Enter Username" id="unamesignin" required>
            </label>
            <label for="pswsignin"><b>Password</b>
                <input type="password" placeholder="Enter Password" id="pswsignin" required>
            </label>
            <button type="submit" onclick="login()">Login</button>
        </form>
    </div>

    <!--register box-->
    <div onsubmit="return false">
        <form class="register">
            <label for="unamesignup"><b>Username</b>
                <input type="text" placeholder="Enter Username" id="unamesignup" required>
            </label>
            <label for="emailsignup"><b>Email</b>
                <input type="email" placeholder="Enter Email" id="emailsignup" required>
            </label>
            <label for="pswsignup"><b>Password</b>
                <input type="password" placeholder="Enter Password" id="pswsignup" required>
            </label>
            <button type="submit" onclick="storeUser()">Register</button>
        </form>
    </div>
</div>

<!--logout button-->
<div class="difficulty-pill" style="width: 35%; height: 20%; margin-right: auto; margin-left: auto; cursor: pointer;"
     onclick="logout()">
    Click here to Logout!
</div>


</div>

<!--js import-->
<script src="js-code/game.js">
    window.onload = function checkLogin() {
        if (sessionStorage["loggedIn"] === 'True') {
            document.querySelector(".login-container").style.display = 'none';
        } else {
            document.querySelector(".login-container").style.display = 'grid';
        }
    };
</script>

<!--left navbar-->
<div id="left">
	<?php
	outputBannerNavigation("My Account");
	?>
</div>

<!--page end-->
<?php
outputFooter(); //output the footer
?>
