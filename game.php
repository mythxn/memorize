<?php
include('common.php'); //include the php functions
outputHeader("Game"); //output navbar and site logo
?>

<!--right div/page contents-->
<div class="w3-container w3-center w3-animate-opacity w3-animate-right game" id="right">

    <div class="difficulty-sel">
        <div class="difficulty-pill" style="grid-area: easy" onclick="startGame(1)">
            EASY
        </div>
        <div class="difficulty-pill" style="grid-area: hard" onclick="startGame(2)">
            HARD
        </div>
    </div>

    <div class="game-box">
        <div class="score" style="grid-area: score">
            Score: <span id="scorenum">0</span>
        </div>
        <div class="word" style="grid-area: word">
            <span id="word">Choose Difficulty</span>
        </div>
        <div class="user-input" style="grid-area: userinput" onchange="checkAns()">
            <input type="text" id="user-input"
                   style="width: 60%; border: cadetblue solid 2px; border-radius: 30px; text-align: center;">
        </div>
    </div>

</div>

<!--left navbar-->
<div id="left">
	<?php
	outputBannerNavigation("Play Game");
	?>
</div>

<!--js import-->
<script src="js-code/game.js"></script>

<!--page end-->
<?php
outputFooter(); //output the footer
?>
