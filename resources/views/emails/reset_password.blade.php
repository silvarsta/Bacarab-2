

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reset Password</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }

        .container {
            max-width: 400px;
            margin: 0 auto;
            padding: 40px;
            text-align: center;
            background-color: #f5f5f5;
            border: 1px solid #ddd;
            border-radius: 4px;
        }

        h2 {
            font-size: 24px;
            margin-bottom: 20px;
        }

        p {
            font-size: 16px;
            margin-bottom: 20px;
        }

        .button-container {
            text-align: center;
            margin-bottom: 20px;
        }

        .button-container a {
            display: inline-block;
            padding: 10px 20px;
            background-color: #007bff;
            color: #fff;
            text-decoration: none;
            border-radius: 4px;
            word-wrap: break-word;
            max-width: 100%;
        }

        .link-container {
            text-align: center;
            margin-bottom: 20px;
            word-wrap: break-word;
            max-width: 100%;
        }

        .link-container a {
            text-decoration: none;
            color: #007bff;
            word-wrap: break-word;
            /* max-width: 100%; */
            max-width: 400px;
            padding: 40px;
            text-align: center;

        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Verifikasi Akun</h2>
        <p>Selamat datang di BACARAB!</p>
        <p>Silakan klik tombol di bawah ini untuk RESET password Anda:</p>
        <div class="button-container">
            <a href="{{ $resetUrl }}" target="_blank">Reset Password</a>
        </div>
        <p>Jika Anda tidak meminta reset password, Anda dapat mengabaikan email ini.</p>
        {{-- <div class="link-container">
            <a href="{{ route('verify', ['userId' => $userId, 'hash' => $hash]) }}">{{ route('verify', ['userId' => $userId, 'hash' => $hash]) }}</a>
        </div> --}}
    </div>
</body>
</html>
