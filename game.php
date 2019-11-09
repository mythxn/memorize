<?php
	include('common.php'); //include the php functions
  outputHeader("Home"); //output navbar and site logo
?>

<!--right div/page contents-->
<div class="w3-container w3-center w3-animate-opacity w3-animate-right" id="right">
	<article>
		<img id="illustrations" src="images/wip.png" alt="a man and woman working on a machine">

		<p class="tagline">
			WORK IN PROGRESS
		</p>
	</article>
</div>

<!--left navbar-->
<div id="left">
	<?php
		outputBannerNavigation("Play Game");
	?>
</div>

<!--page end-->
<?php
    outputFooter(); //output the footer
?>
