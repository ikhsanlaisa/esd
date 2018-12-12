let userScore = 0;
let compScore = 0;
const userScore_span = document.getElementById("user-score");
const compScore_span = document.getElementById("comp-score");
const scoreBoard_div = document.querySelector(".score-board");
const result_p = document.querySelector(".result > p");
const rock_div = document.getElementById("r");
const paper_div = document.getElementById("p");
const scissors_div = document.getElementById("s");
const smallUserWord = "user".fontsize(3).sup();
const smallCompWord = "comp".fontsize(3).sup();

function getcompChoice() {
    const choice = ['r', 'p', 's'];
    const randomNumber = (Math.floor(Math.random() * 3));
    return choice[randomNumber];
}

function convertToWord(letter) {
    if (letter === "r") return "Rock";
    if (letter === "p") return "Paper";
    return "Scissors";
}

function reloadpage() {
    setTimeout(()=> location.reload(), 1500);
}

function win(userChoice, compChoice) {
    const userChoice_div = document.getElementById(userChoice);
    userScore++;
    userScore_span.innerHTML = userScore;
    compScore_span.innerHTML = compScore;
    result_p.innerHTML = `${convertToWord(userChoice)}${smallUserWord} beats ${convertToWord(compChoice)}${smallCompWord}. You win! 🔥`;
    userChoice_div.classList.add('green-glow');
    setTimeout(() => userChoice_div.classList.remove('green-glow'), 1000);
    if (userScore >= 3){
        result_p.innerHTML = `You won! The game will restart!!!`;
        alert("Masukkan kata '/snake' pada url untuk ke soal berikutnya");
        reloadpage();
    }
}

function lose(userChoice, compChoice) {
    const userChoice_div = document.getElementById(userChoice);
    compScore++;
    userScore_span.innerHTML = userScore;
    compScore_span.innerHTML = compScore;
    result_p.innerHTML = `${convertToWord(userChoice)}${smallUserWord} loses to ${convertToWord(compChoice)}${smallCompWord}. You lost... 💩`;
    userChoice_div.classList.add('red-glow');
    setTimeout(() => userChoice_div.classList.remove('red-glow'), 1000);
    if (compScore >= 3){
        result_p.innerHTML = `You loses... the game will restart!!!`;
        reloadpage()

    }
}

function draw(userChoice, compChoice) {
    const userChoice_div = document.getElementById(userChoice);
    result_p.innerHTML = `${convertToWord(userChoice)}${smallUserWord} is equal to ${convertToWord(compChoice)}${smallCompWord}. It's a draw.`;
    userChoice_div.classList.add('gray-glow');
    setTimeout(() => userChoice_div.classList.remove('gray-glow'), 1000);
}

function game(userChoice) {
    const compChoice = getcompChoice();
    switch (userChoice + compChoice){
        case "rs":
        case "pr":
        case "sp":
            win(userChoice, compChoice);
            break;
        case "rp":
        case "ps":
        case "sr":
            lose(userChoice, compChoice);
            break;
        case "rr":
        case "pp":
        case "ss":
            draw(userChoice, compChoice);
            break;
    }
}

function main() {
    rock_div.addEventListener('click', () => game("r"));

    paper_div.addEventListener('click', () => game("p"));

    scissors_div.addEventListener('click', () => game("s"));
}

function tambahopsi(){
    $('#pertanyaanOpsi tr:last').after(
        '<tr>' +
        '<td>' + (++noOpsi) + '</td>' +
        '<td>' +
        '<input type="text" name="opsi[]" class="form-control" required>\n' +
        '</td>' +
        '<td>' +
        '<center>' +
        '<button title="Hapus data" id="removeOpsi" type="button" class="btn btn-xs btn-danger btn-round btn-dg-o"><i class="fa fa-close"></i></button>' +
        '</center>' +
        '</td>' +
        '</tr>'
    )
}

main();

