// temp_list = [];
//
// function startGame(lvl) {
//     console.log("Resetting Game");
//     score=0;
//     temp_list = [];
//
//     console.log("Setting difficulty level to "+level);
//
//     console.log("Starting game");
//     if(lvl === 1) {
//         easyGame();
//     } else if (lvl === 2) {
//         // hardGame();
//     }
// }
//
// function correctAns(lvl) {
//     if (lvl===1) {
//         temp_list.push(easy_list[getRandomInt(10)]);
//     } else if (lvl===2) {
//         temp_list.push(hard_list[getRandomInt(10)]);
//     }
// }
//
// function getRandomInt(max) {
//     return Math.floor(Math.random() * Math.floor(max));
// }
//
// function sleep(ms) {
//     return new Promise(resolve => setTimeout(resolve, ms));
// }
//
// async function easyGame() {
//     correctAns(1);
//     for (let i = 0; i < temp_list.length; i++) {
//         document.getElementById("word").innerHTML=temp_list[i];
//         await sleep(500);
//         document.getElementById("word").innerHTML="";
//         await sleep(500);
//         document.getElementById("word").innerHTML="Enter the Sequenz";
//     }
// }