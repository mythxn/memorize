<?php
include('common.php'); //include the php functions
outputHeader("Home"); //output navbar and site logo
?>

<!--right div/page contents-->
<div class="w3-container w3-center w3-animate-opacity w3-animate-right" id="right">
    <article>
        <img id="illustrations" src="images/main.png" alt="a person using typing on a keyboard">

        <div class="tagline">
            "Do you really remember?" <br>
            The game is simple, you memorise the sequence, you write it down, you repeat until it's too long to
            remember!
        </div>
    </article>

    <!--copyright notice-->
    <footer>
        <span class="copyright">COPYRIGHT © 2019 Sequenz Inc, All rights reserved.</span>
    </footer>
</div>

<!--left navbar-->
<div id="left">
	<?php
	outputBannerNavigation("Home");
	?>
</div>

<!--page end-->
<?php
outputFooter(); //output the footer
?>
