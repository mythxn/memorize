<?php
	include('common.php'); //include the php functions
  outputHeader("Home"); //output navbar and site logo
?>

<!--right div/page contents-->
<div class="w3-container w3-center w3-animate-opacity w3-animate-right" id="right">
	<article>
		<img id="illustrations" src="images/leaderboard.png" alt="a fancy list">

		<!--temporary fake leaderboard-->
		<table id="leaderboard">
			<tbody>
				<tr>
					<th>Rank</th>
					<th>Username</th>
					<th>Points</th>
				</tr>
				<tr>
					<td>1</td>
					<td>lesterj_11</td>
					<td>420</td>
				</tr>
				<tr>
					<td>2</td>
					<td>johnwick</td>
					<td>360</td>
				</tr>
				<tr>
					<td>3</td>
					<td>poodpai</td>
					<td>69</td>
				</tr>
			</tbody>
		</table>
	</article>

</div>

<!--left navbar-->
<div id="left">
	<?php
		outputBannerNavigation("Leaderboard");
	?>
</div>

<!--page end-->
<?php
    outputFooter(); //output the footer
?>
