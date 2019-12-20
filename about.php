<?php
include('common.php'); //include the php functions
outputHeader("About"); //output navbar and site logo
?>

<!--right div/page contents-->
<div class="w3-container w3-center w3-animate-opacity w3-animate-right" id="right">

    <section class="ins-container">
        <span id="ins-txt">1. The user selects a difficulty level and starts the game</span>
        <span id="ins-txt">2. The game displays words randomly from a local dictionary</span>
        <span id="ins-txt">3. The user has to memorise the word and and is given a chance to try to enter it</span>
        <span id="ins-txt">4. If the entered word is right, the game displays more words for the user to try to remember</span>
        <span id="ins-txt">5. The user enters the word until he or she makes a mistake</span>
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
