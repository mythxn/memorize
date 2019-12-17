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


    // Setting Difficulty
    if (level === 1) {
        delay = 2000;
    } else if (level === 2) {
        delay = 1000;
    }

    // Play Game
    gamePlay(delay);
}

async function gamePlay(restPeriod) {

    correctWord = word_list[Math.floor(Math.random() * word_list.length)];

    wordDisplay.innerHTML = "";
    await sleep(250);
    wordDisplay.innerHTML = correctWord;
    await sleep(delay);
    wordDisplay.innerHTML = "";
    await sleep(250);
    wordDisplay.innerHTML = "Write it down!";

}

async function checkAns() {
    if (wordInput.value === correctWord) {
        wordDisplay.innerHTML = "Correct!";
        wordInput.value = "";
        await sleep(500);
        score++;
        scoreDisplay.innerText = score;
        gamePlay(delay);
    } else {
        wordDisplay.innerHTML = "Game Over!";
        wordInput.value = "";
    }
}

function sleep(ms) {
    return new Promise(resolve => setTimeout(resolve, ms));
}

