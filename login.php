<?php
include('common.php'); //include the php functions
outputHeader("Home"); //output navbar and site logo
?>

<!--right div/page contents-->
<div class="w3-container w3-center w3-animate-opacity w3-animate-right" id="right">

    <div class="login-container">
        <!--login box-->
        <form class="login" action="/action_page.php" method="post">
            <label for="uname"><b>Username</b></label>
            <input type="text" placeholder="Enter Username" name="uname" required>
            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="psw" required>
            <button type="submit">Login</button>
        </form>

        <!--register box-->
        <form class="register" action="/action_page.php" method="post">
            <label for="uname"><b>Username</b></label>
            <input type="text" placeholder="Enter Username" name="uname" required>
            <label for="uname"><b>Email</b></label>
            <input type="email" placeholder="Enter email" name="email" required>
            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="psw" required>
            <button type="submit">Register</button>
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
