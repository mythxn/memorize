let word_list = ['photosynthesis', 'pronunciation', 'handkerchief', 'iogorrhea', 'chiaroscurist', 'pochemuchka', 'spaghetti', 'gobbledegook', 'voluntary', 'expressive', 'emotional', 'schlerenchyma', "chlorophyl"];
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

        // Saving Score
        for (let i = 0, len = localStorage.length; i < len; i++) {
            let pointArray = {};
            let points = score;

            let hf = JSON.parse(localStorage[sessionStorage['loggedInUsrUsername']]);
            if (hf.username === sessionStorage['loggedInUsrUsername'] && points > hf.points) {
                pointArray.points = score;
                pointArray.username = sessionStorage['loggedInUsrUsername'];
                pointArray.password = hf.password;

                localStorage[pointArray.username] = JSON.stringify(pointArray);
                localStorage.setItem("points", points);
                
            } else if (hf.points === undefined) {
                pointArray.points = score;
                pointArray.username = sessionStorage['loggedInUsrUsername'];
                pointArray.password = hf.password;

                localStorage[pointArray.username] = JSON.stringify(pointArray);

                localStorage.setItem("points", points);
            }
        }

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

function storeUser() {
    let usrObject = {};
    usrObject.username = document.getElementById("unamesignup").value;
    usrObject.email = document.getElementById("emailsignup").value;
    usrObject.password = document.getElementById("pswsignup").value;

    document.getElementById("unamesignup").value = "";
    document.getElementById("emailsignup").value = "";
    document.getElementById("pswsignup").value = "";

    localStorage[usrObject.username] = JSON.stringify(usrObject);
}

window.onload = function checkLogin() {
    if (sessionStorage["loggedIn"] === 'True') {
        document.querySelector(".login-container").style.display = 'none';
    } else {
        document.querySelector(".login-container").style.display = 'grid';
    }
};

function logout() {
    sessionStorage["loggedIn"] = false;
    document.querySelector(".login-container").style.display = 'grid';
}

function login() {
    let username = document.getElementById("unamesignin").value;
    if (localStorage[username] === undefined) {
        alert("Please create an account.");
    } else {
        let usrObj = JSON.parse(localStorage[username]);
        let password = document.getElementById("pswsignin").value;
        if (password === usrObj.password) {
            alert("You are now Signed In.");
            sessionStorage.loggedInUsrUsername = usrObj.username;
            window.location.href = 'index.php';
            sessionStorage["loggedIn"] = "True";
        } else {
            alert("Please check your credentials.");
        }
    }
}
