<?php
	include('common.php'); //include the php functions
  outputHeader("Home"); //output navbar and site logo
?>

<!--right div/page contents-->
<div class="w3-container w3-center w3-animate-opacity w3-animate-right" id="right">

	<section class="ins-container">
		<span id="ins-txt">1. The user selects a difficulty level and starts the game</span>
		<span id="ins-txt">2. The game displays a sequence of words randomly from the dictionary based on selected difficulty</span>
		<span id="ins-txt">3. The user memorises the sequence of words displayed and is given a chance to try to enter it</span>
		<span id="ins-txt">4. If the entered sequence is right, the game adds more words to the end of the sequence and displays it again for the user</span>
		<span id="ins-txt">5. The user enters the sequence until it gets too long for the user to remember.</span>
		<span id="ins-txt">6. ALL THE BEST <br> LET'S GO CHAMP!</span>
	</section>
</div>

<!--left navbar-->
<div id="left">
	<?php
		outputBannerNavigation("About");
	?>
</div>

<!--page end-->
<?php
    outputFooter(); //output the footer
?>
