<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Favicons -->
        <link href="assets/img/icon/logo1.ico" rel="icon">
        <title>BACARAB | Game Huruf</title>

        <link rel="stylesheet" href="css/gameHuruf.css" />
        <script src="js/gameHuruf.js" defer></script>
    </head>
    <body>
        <div class="game">
            <div class="controls">
                <button>Mulai</button>
                <div class="stats">
                    <div class="moves">0 Gerakan</div>
                    <div class="timer">Waktu: 0 Detik</div>
                </div>
            </div>
            <div class="board-container">
                <div class="board" data-dimension="4"></div>
                <div class="win">You won!</div>
            </div>
        </div>
    </body>
</html>