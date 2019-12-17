let word_list = ['photosynthesis', 'pronunciation', 'handkerchief', 'iogorrhea', 'chiaroscurist', 'pochemuchka', 'spaghetti', 'gobbledegook'];
let delay = 0;
let correctWord = "";
let wordDisplay = document.getElementById("word");
let wordInput = document.getElementById("user-input");
let scoreDisplay = document.getElementById("scorenum");
let score = 0;

function startGame(level) {
    // Clearing Variables
    score = 0;
    scoreDisplay.innerText = score;
    wordDisplay.style.color = '#5ED4D6';


    // Setting Difficulty
    if (level === 1) {
        delay = 2500;
    } else if (level === 2) {
        delay = 1500;
    }

    // Play Game
    gamePlay(delay);
}

async function gamePlay(restPeriod) {

    correctWord = word_list[Math.floor(Math.random() * word_list.length)];

    wordDisplay.innerHTML = "";
    await sleep(250);
    showText(correctWord);
    await sleep(delay);
    wordDisplay.innerHTML = "";
    await sleep(250);
    wordDisplay.innerHTML = "Write it down!";

}

async function checkAns() {
    if (wordInput.value === correctWord) {
        wordDisplay.innerHTML = "Correct!";
        wordDisplay.style.color = 'lightgreen';
        wordInput.value = "";
        await sleep(500);
        wordDisplay.style.color = '#5ED4D6';
        score++;
        scoreDisplay.innerText = score;
        gamePlay(delay);
    } else {
        wordDisplay.innerHTML = "Game Over!";
        wordDisplay.style.color = 'palevioletred';
        wordInput.value = "";
    }
}

function sleep(ms) {
    return new Promise(resolve => setTimeout(resolve, ms));
}

function showText(string) {
    var str = string.split("");
    var el = document.getElementById('word');
    (function animate() {
        str.length > 0 ? el.innerHTML += str.shift() : clearTimeout(running);
        var running = setTimeout(animate, 60);
    })();
}

