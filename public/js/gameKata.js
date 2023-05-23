//----------------------- G O O D   L U C K -------------------------------//

// select all elements by id
const start = document.getElementById("start");
const quiz = document.getElementById("quiz");
const question = document.getElementById("question");
const qImg = document.getElementById("qImg");
const choiceA = document.getElementById("A");
const choiceB = document.getElementById("B");
const choiceC = document.getElementById("C");
const choiceD = document.getElementById("D");
const counter = document.getElementById("counter");
const progress = document.getElementById("progress");
const scoreDiv = document.getElementById("scoreContainer");

// Music
var mainMusic = new Audio();
mainMusic.src = "../assets/music/Alifbata.mp3";

// create questions
let questions = [
  {
    question: "Apa arti dari كِتَابٌ?",
    imgSrc: "../assets/img/gameKata/ThinkCat.gif",
    choiceA: "Kursi",
    choiceB: "Buku",
    choiceC: "Meja",
    choiceD: "Pensil",
    correct: "B",
  },
  {
    question: "Apa arti dari وَرَدَ?",
    imgSrc: "../assets/img/gameKata/flowers.gif",
    choiceA: "Bunga",
    choiceB: "Pohon",
    choiceC: "Kucing",
    choiceD: "gajah",
    correct: "A",
  },
  {
    question: "Apa bahasa arab-nya penggaris?",
    imgSrc: "../assets/img/gameKata/penggaris.gif",
    choiceA: "مِسْطَرَةٌ",
    choiceB: "قَلَمُ",
    choiceC: "صَابُوْن",
    choiceD: "مَلَفٌ",
    correct: "A",
  },
  {
    question: "Apa bahasa arab-nya pulpen?",
    imgSrc: "../assets/img/gameKata/pulpen.gif",
    choiceA: "ثَوْبٌ",
    choiceB: "زِيٌّ",
    choiceC: "قَلَمُ",
    choiceD: "بَيْتٌ",
    correct: "C",
  },
  {
    question: "Apa arti dari بَابٌ?",
    imgSrc: "../assets/img/gameKata/door.gif",
    choiceA: "Botol",
    choiceB: "Buku",
    choiceC: "Pintu",
    choiceD: "Pulpen",
    correct: "C",
  },
  {
    question: "Apa arti dari مَدْرَسَةٌ?",
    imgSrc: "../assets/img/gameKata/sekolah.gif",
    choiceA: "Handphone",
    choiceB: "Meja",
    choiceC: "Sekolah",
    choiceD: "Rumah",
    correct: "C",
  },
  {
    question: "Apa bahasa arab-nya baju?",
    imgSrc: "../assets/img/gameKata/baju.gif",
    choiceA: "ثَوْبٌ",
    choiceB: "زِيٌّ",
    choiceC: "قَمِيْصٌ",
    choiceD: "رِبَاطٌ",
    correct: "A",
  },
  {
    question: "Apa bahasa arab-nya kursi?",
    imgSrc: "../assets/img/gameKata/kursi.gif",
    choiceA: "كُرْسِيٌّ",
    choiceB: "مِفْتَاحٌ",
    choiceC: "زُجَاجٌ",
    choiceD: "غُرْفَةٌ",
    correct: "A",
  },
  {
    question: "Apa arti dari مِفْتَاحٌ?",
    imgSrc: "../assets/img/gameKata/key.gif",
    choiceA: "Kunci",
    choiceB: "Apel",
    choiceC: "Air",
    choiceD: "Dasi",
    correct: "A",
  },
  {
    question: "Apa arti dari غُرْفَةٌ?",
    imgSrc: "../assets/img/gameKata/kamar.gif",
    choiceA: "Laptop",
    choiceB: "Kamar",
    choiceC: "Ruang Kelas",
    choiceD: "Televisi",
    correct: "B",
  },
];

// Extra variables

const lastQuestion = questions.length - 1;
let runningQuestion = 0;
let count = 0;
const questionTime = 20; // default 20s

let TIMER;
let score = 0;

// render a question
function renderQuestion() {
  let q = questions[runningQuestion];

  question.innerHTML = "<p>" + q.question + "</p>";
  qImg.innerHTML = "<img src=" + q.imgSrc + ">";
  choiceA.innerHTML = q.choiceA;
  choiceB.innerHTML = q.choiceB;
  choiceC.innerHTML = q.choiceC;
  choiceD.innerHTML = q.choiceD;
}

start.addEventListener("click", startQuiz);

// start quiz
function startQuiz() {
  mainMusic.play();
  start.style.display = "none";
  renderQuestion();
  quiz.style.display = "block";
  renderProgress();
  renderCounter();
  TIMER = setInterval(renderCounter, 1000); // 1000ms = 1s
}

// render progress
function renderProgress() {
  for (let qIndex = 0; qIndex <= lastQuestion; qIndex++) {
    progress.innerHTML += "<div class='prog' id=" + qIndex + "></div>";
  }
}

// counter render

function renderCounter() {
  if (count <= questionTime) {
    counter.innerHTML = count;

    count++;
  } else {
    count = 0;
    // change progress color to red
    answerIsWrong();
    if (runningQuestion < lastQuestion) {
      runningQuestion++;
      renderQuestion();
    } else {
      // end the quiz and show the score
      clearInterval(TIMER);
      scoreRender();
    }
  }
}

// checkAnwer

function checkAnswer(answer) {
  if (answer == questions[runningQuestion].correct) {
    // answer is correct
    score++;
    // change progress color to green
    answerIsCorrect();
  } else {
    // answer is wrong
    // change progress color to red
    answerIsWrong();
  }
  count = 0;
  if (runningQuestion < lastQuestion) {
    runningQuestion++;
    renderQuestion();
  } else {
    // end the quiz and show the score
    clearInterval(TIMER);
    scoreRender();
  }
}

// answer is correct
function answerIsCorrect() {
  document.getElementById(runningQuestion).style.backgroundColor = "#0f0";
  var music = new Audio();
  music.src = "../assets/music/yeah.mp3";
  music.play();
}

// answer is Wrong
function answerIsWrong() {
  document.getElementById(runningQuestion).style.backgroundColor = "#f00";
  var music = new Audio();
  music.src = "../assets/music/Huh.mp3";
  music.play();
}

// score render
function scoreRender() {
  scoreDiv.style.display = "block";
  var music = new Audio();
  music.src = "../assets/music/GameOver.mp3";
  music.play();

  // calculate the amount of question percent answered by the user
  const scorePerCent = Math.round((100 * score) / questions.length);

  // choose the image based on the scorePerCent
  let img =
    scorePerCent >= 80
      ? "../assets/img/gameKata/5.png"
      : scorePerCent >= 60
      ? "../assets/img/gameKata/4.png"
      : scorePerCent >= 40
      ? "../assets/img/gameKata/3.png"
      : scorePerCent >= 20
      ? "../assets/img/gameKata/2.png"
      : "../assets/img/gameKata/1.png";

  scoreDiv.innerHTML = "<img src=" + img + ">";
  scoreDiv.innerHTML += "<p>" + scorePerCent + "%</p>";
  scoreDiv.innerHTML += "<button id='mainLagiButton' class='button button1 primary-button'>Main Lagi</button>";
  scoreDiv.innerHTML += "<button id='kembaliButton' class='button button2 primary-button'>Kembali</button>";

  // Menambahkan event listener untuk tombol "Main Lagi"
    const mainLagiButton = document.getElementById('mainLagiButton');
    mainLagiButton.addEventListener('click', () => {
        location.reload();
    });
  // Menambahkan event listener untuk tombol "Kembali"
  const kembaliButton = document.getElementById('kembaliButton');
  kembaliButton.addEventListener('click', () => {
      window.location.href = '/gameKata';
  });

  mainMusic.pause();
}

//////////////////////////////////////////////////////
var myVar;

function myLoader() {
  myVar = setTimeout(showPage, 5000);
}

function showPage() {
  document.getElementById("loader").style.display = "none";
}
