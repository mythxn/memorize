<?php
include('common.php'); //include the php functions
outputHeader("Login"); //output navbar and site logo
?>

<!--right div/page contents-->
<div class="w3-container w3-center w3-animate-opacity w3-animate-right" id="right">

    <div class="login-container">
        <!--login box-->
        <form class="login" action="/action_page.php" method="post">
            <label for="uname"><b>Username</b>
                <input type="text" placeholder="Enter Username" name="uname" required>
            </label>
            <label for="psw"><b>Password</b>
                <input type="password" placeholder="Enter Password" name="psw" required>
            </label>
            <button type="submit">Login</button>
        </form>

        <!--register box-->
        <form class="register" action="/action_page.php" method="post">
            <label for="uname"><b>Username</b>
                <input type="text" placeholder="Enter Username" name="uname" required>
            </label>
            <label for="email"><b>Email</b>
                <input type="email" placeholder="Enter Email" name="email" required>
            </label>
            <label for="psw"><b>Password</b>
                <input type="password" placeholder="Enter Password" name="psw" required>
            </label>
            <button type="submit">Login</button>
        </form>
    </div>
</div>

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
