<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="logo1.ico" rel="icon">

    <title>LOGIN GAGAL</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(135deg, #c850c0, #4158d0);
            background-size: cover;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }


        .container {
            text-align: center;
            font-family: 'Open Sans', sans-serif;
            margin-top: 150px;
        }

        h1 {
            color: #dfdfdf;
            font-size: 32px;
        }

        .btn {
            display: inline-block;
            background-color: #ff5e3a;
            color: white;
            padding: 10px 20px;
            font-size: 18px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s ease;
            text-decoration: none;
        }

        .btn:hover {
            background-color: #ff4025;
        }

        a {
            text-decoration: none;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Selamat anda sudah mempunyai akun, sekarang cek Email anda untuk melakukan verifikasi</h1>
        {{-- <p>Tidak mendapatkan email verifikasi? <a href="{{ route('resend') }}">tekan untuk kirim ulang</a></p> --}}
        <a href="https://mail.google.com" class="btn">Email</a>
    </div>
</body>
</html>