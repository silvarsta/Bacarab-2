var audio = new Audio('../assets/music/Alifbata.mp3');
var playing = false;
var score = 0;
var action;
var timeRemaining;
var correctAnswer;

function toArabicNumeral(num) {
    var arabicNumerals = ["٠", "١", "٢", "٣", "٤", "٥", "٦", "٧", "٨", "٩"];
    var arabicNumeralStr = "";
    var numStr = num.toString();

    for (var i = 0; i < numStr.length; i++) {
        var digit = parseInt(numStr[i]);
        arabicNumeralStr += arabicNumerals[digit];
    }

    return arabicNumeralStr;
}


// Tombol start atau reset
document.querySelector("#startreset").onclick = () => {
    // Jika play
    if (playing) {
        //reload page
        location.reload();
    }
    // Jika tidak play
    else {
        playing = true;
        score = 0;
        document.querySelector("#scorevalue").innerHTML = score;
        showElement("timeremaining");
        timeRemaining = 60; // default 60
        document.querySelector("#timeremainingvalue").innerHTML = timeRemaining;
        hideElement("gameOver");
        document.querySelector("#startreset").innerHTML = "Reset Game";
        startCountdown();
        generateQA();
        // Menambahkan kode untuk memulai musik
        audio.play();
    }
}

for (let i = 1; i < 5; i++) {
    //if we click on answer box
    document.querySelector("#box" + i).onclick = () => {
        if (playing) {
            if (document.querySelector("#box" + i).innerHTML == correctAnswer) {
                // tambah skor 1
                score++;
                // set value skor
                document.querySelector("#scorevalue").innerHTML = score;
                // menyembunyikan correct box dan wrong box
                hideElement("wrong");
                showElement("correct");
                setTimeout(() => {
                    hideElement("correct");
                }, 1000);

                generateQA();
            }

            else {
                //menampilkan correct box dan wrong box
                hideElement("correct");
                showElement("wrong");
                setTimeout(() => {
                    hideElement("wrong");
                }, 1000);
            }
        }
    }
}

function startCountdown() {
    action = setInterval(() => {
        // mengurangi waktu -1 sekon dalam loop
        timeRemaining -= 1;
        // menampilkan waktu yang tersisa dalam sekon
        document.querySelector("#timeremainingvalue").innerHTML = timeRemaining;
        // waktu habis
        if (timeRemaining == 0) {
            // menampilkan game over box
            showElement("gameOver");
            // menampilkan hasil akhir permainan
            document.querySelector("#gameOver").innerHTML = "<p>Game berakhir!</p><p>Skor kamu adalah: " + score + ".</p><hr><button class='button primary-button' id='kembaliButton'>Kembali</button>";
            //game over
            stopCountdown();
            // menyembunyikan waktu tersisa
            hideElement("timeremaining");
            // menyembunyikan correct box
            hideElement("correct");
            // menyembunyikan wrong box
            hideElement("wrong");
            audio.pause();
            playing = false;
            document.querySelector("#startreset").innerHTML = "Start Game";

            // Menambahkan event listener untuk tombol "Kembali"
            const kembaliButton = document.getElementById('kembaliButton');
            kembaliButton.addEventListener('click', () => {
                window.location.href = '/gameAngka';
            });
        }
    }, 1000);
}


function stopCountdown() {
    clearInterval(action);
}

function hideElement(Id) {
    document.querySelector("#" + Id).style.display = "none";
}

function showElement(Id) {
    document.querySelector("#" + Id).style.display = "block";
}

function generateQA() {
    // Random angka 1 sampai 3
    var x = 1 + Math.round(3 * Math.random());
    var y = 1 + Math.round(3 * Math.random());
    // membuat jawaban yang benar
    correctAnswer = toArabicNumeral(x + y);
    // membuat soal
    document.querySelector("#question").innerHTML = toArabicNumeral(x) + " + " + toArabicNumeral(y);
    // membuat posisi jawaban yang benar menjadi random
    var correctPosition = 1 + Math.round(3 * Math.random());
    document.querySelector("#box" + correctPosition).innerHTML = correctAnswer;

    var answers = [correctAnswer];

    // cek dan ganti nilai yang terduplikat
    for (let i = 1; i < 5; i++) {
        if (i != correctPosition) {
            var wrongAnswer;
            do {
                wrongAnswer = toArabicNumeral((1 + Math.round(3 * Math.random())) * (1 + Math.round(3 * Math.random())));
            } while ((answers.indexOf(wrongAnswer)) > -1)
            document.querySelector("#box" + i).innerHTML = wrongAnswer;
            answers.push(wrongAnswer)
        }
    }
}
