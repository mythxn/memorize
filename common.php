<?php

//output page header and open body tag
function outputHeader($title)
{
	echo '<!DOCTYPE html>';
	echo '<html>';
	echo '<head>';
	echo '<title>' . $title . '</title>';
	echo '<!--linking external style sheets and fonts -->';
	echo '<link rel="stylesheet" type="text/css" href="stylesheets/main.css">';
	echo '<link href="https://fonts.googleapis.com/css?family=Open+Sans:700&display=swap" rel="stylesheet">';
	echo '<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">';

	echo '</head>';
	echo '<body>';
}

//output navigation-bar and make sure the selected page is highlighted in page
function outputBannerNavigation($pageName)
{
	//start header with page logo
	echo '<header>';
	echo '<svg id="logo" viewbox="0 0 100 20">';
	echo '	<defs>';
	echo '		<linearGradient id="gradient" x1="0" x2="0" y1="0" y2="1">';
	echo '			<stop offset="5%" stop-color="#ffffff" />';
	echo '			<stop offset="95%" stop-color="#ffffff" />';
	echo '		</linearGradient>';
	echo '		<pattern id="wave" x="0" y="0" width="120" height="20" patternUnits="userSpaceOnUse">';
	echo '			<path id="wavePath" d="M-40 9 Q-30 7 -20 9 T0 9 T20 9 T40 9 T60 9 T80 9 T100 9 T120 9 V20 H-40z" mask="url(#mask)" fill="url(#gradient)">';
	echo '				<animateTransform attributeName="transform" begin="0s" dur="1.5s" type="translate" from="0,0" to="40,0" repeatCount="indefinite" />';
	echo '			</path>';
	echo '		</pattern>';
	echo '	</defs>';
	echo '	<text text-anchor="middle" x="50" y="15" font-size="17" fill="url(#wave)" fill-opacity="1">MEMORIZE</text>';
	echo '	<text text-anchor="middle" x="50" y="15" font-size="17" fill="url(#gradient)" fill-opacity="0.5">MEMORIZE</text>';
	echo '</svg>';

	//nav-bar pages
	echo '<nav class="pages">';
	//array of pages to link to
	$linkNames = array("Home", "Leaderboard", "My Account", "Play Game", "About");
	$linkAddresses = array("index.php", "leaderboard.php", "login.php", "game.php", "about.php");

	//output navigation
	for ($x = 0; $x < count($linkNames); $x++) {
		echo '<a id="links"';
		if ($linkNames[$x] == $pageName) {
			echo 'class="selected" ';
		}
		echo 'href=' . $linkAddresses[$x] . '>' . $linkNames[$x] . '</a>';
	}

	//close navbar/header and prepare for body
	echo '</nav>';
	echo '</header>';
}

//output footer and closing body and html tag
function outputFooter()
{
	echo ' <!--copyright notice-->';
	echo '<footer>';
	echo '   <span class="copyright">COPYRIGHT © 2019 Memorize Inc, All rights reserved.</span>';
	echo '</footer>';
	echo '</body>';
	echo '</html>';
}
