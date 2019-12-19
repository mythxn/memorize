<?php
include('common.php'); //include the php functions
outputHeader("Leaderboard"); //output navbar and site logo
?>

<!--right div/page contents-->
<div class="w3-container w3-center w3-animate-opacity w3-animate-right" id="right">
    <article>
        <img id="illustrations" src="images/leaderboard.png" alt="a fancy list">

        <!--temporary fake leaderboard-->
        <table id="leaderboard">
            <tbody>
            <tr>
                <th>Username</th>
                <th>Points</th>
            </tr>
            </tbody>
        </table>
    </article>

</div>

<script>
    window.onload = function rankings() {
        let table = document.getElementById("leaderboard");

        for (let i = 0, len = localStorage.length; i < len; i++) {
            let obj = JSON.parse(localStorage.getItem(localStorage.key(i)));

            let key = localStorage.key(i);
            let value = localStorage[key];

            if (obj.username != undefined && obj.points != undefined) {
                let row = table.insertRow(1);
                let cell1 = row.insertCell(0);
                let cell2 = row.insertCell(1);

                cell1.innerHTML = obj.username;
                cell2.innerHTML = obj.points;
            }
        }
    };
</script>

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
