<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile User</title>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #ffe6f2; /* Latar belakang pink */
            color: #333;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .card {
            width: 300px;
            background-color: #fff;
            border-radius: 12px;
            box-shadow: 0px 10px 15px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            text-align: center;
            padding: 20px;
            transition: transform 0.3s ease;
        }

        .card:hover {
            transform: scale(1.05); /* Efek saat hover */
        }

        .img-bx {
            position: relative;
            width: 100px;
            height: 100px;
            margin: 0 auto;
            border-radius: 50%;
            overflow: hidden;
            border: 4px solid #ff99cc; /* Border pink */
            margin-bottom: 20px; /* Jarak bawah untuk foto */
        }

        .img-bx img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        h1 {
            font-size: 24px;
            color: #ff66b2; /* Warna teks pink */
            margin: 10px 0;
        }

        .info {
            margin: 10px 0; /* Jarak antar elemen info */
        }

        .label {
            font-size: 14px;
            font-weight: bold;
            color: #ff66b2; /* Warna label */
        }

        .value {
            font-size: 16px;
            color: #555; /* Warna teks nilai */
        }
    </style>

    <link rel="stylesheet" href="{{ asset('assets/style.css') }}">
    <script src="https://kit.fontawesome.com/66aa7c98b3.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="card">
        <div class="img-bx">
            <img src="../{{ $user->foto }}" alt="Avatar">
        </div>
        <h1>Profil User</h1>

        <div class="info">
            <p class="label">Nama:</p>
            <p class="value">{{ $user->nama }}</p>
        </div>
        <div class="info">
            <p class="label">NPM:</p>
            <p class="value">{{ $user->npm }}</p>
        </div>
        <div class="info">
            <p class="label">Kelas:</p>
            <p class="value">{{ $user->nama_kelas ?? 'Kelas Tidak Ditemukan' }}</p>
        </div>
    </div>
</body>

</html>