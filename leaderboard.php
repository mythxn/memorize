<?php
include('common.php'); //include the php functions
outputHeader("Leaderboard"); //output navbar and site logo
?>

<script src="js-code/sorttable.js"></script>

<!--right div/page contents-->
<div class="w3-container w3-center w3-animate-opacity w3-animate-right" id="right">
    <article>
        <img id="illustrations" src="images/leaderboard.png" alt="a fancy list">

        <!--leaderboard-->
        <table class="sortable" id="leaderboard">
            <thead>
            <tr>
                <th class="sorttable_nosort">Username</th>
                <th>Points</th>
            </tr>
            </thead>
            <tbody>
            <tr>

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

            if (obj.username !== undefined && obj.points !== undefined) {
                let row = table.insertRow(1);
                let cell1 = row.insertCell(0);
                let cell2 = row.insertCell(1);

                cell1.innerHTML = obj.username;
                cell2.innerHTML = obj.points;
            }
        }

        // Auto-sort table on page load
        let myTH = document.getElementsByTagName("th")[1];
        sorttable.innerSortFunction.apply(myTH, []);
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
