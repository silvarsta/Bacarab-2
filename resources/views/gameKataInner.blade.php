<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="keywords" content="Quiz Game Online" />
    <meta name="description" content="A Friendly Game for developers." />
    <meta name="author" content="AhsanParadise" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Favicons -->
    <link href="assets/img/icon/logo1.ico" rel="icon">
    <title>BACARAB | Game Kata</title>

    <link rel="stylesheet" href="css/gameKata.css" />
</head>

<body onload="myLoader()" style="margin: 0;">
    <div id="loader">
        <p class="fade-in">
            <b>Selamat Datang di Quiz Kata Bahasa Arab</b><br /><br />
            Kamu memiliki waktu 20 detik untuk setiap pertanyaan. Semangatt...
            <br /><br />
            Loading....
        </p>
    </div>
    <div id="container">
        <button id="start">Mulai Quiz!</button>
        <div id="quiz" style="display: none;">
            <div id="question"></div>
            <div id="qImg"></div>
            <div id="choices">
                <button class="choice" id="A" onclick="checkAnswer('A')"></button>
                <button class="choice" id="B" onclick="checkAnswer('B')"></button>
                <button class="choice" id="C" onclick="checkAnswer('C')"></button>
                <button class="choice" id="D" onclick="checkAnswer('D')"></button>
            </div>
            <div id="timer">
                <div id="counter"></div>
            </div>
            <div id="progress"></div>
        </div>
        <div id="scoreContainer" style="display: none;"></div>
    </div>
    <footer>
        <!-- Footer di sini -->
    </footer>
    <script src="js/gameKata.js"></script>
</body>

</html>
