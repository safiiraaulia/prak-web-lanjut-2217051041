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
        }

        .img-bx img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .content {
            margin-top: 20px;
        }

        h2 {
            font-size: 20px;
            color: #ff66b2; /* Warna teks pink */
            margin: 10px 0 5px;
        }

        h2 span {
            display: block;
            font-size: 14px;
            color: #999;
        }

        .detail {
            margin-top: 10px;
        }
    </style>

    <link rel="stylesheet" href="{{ asset('assets/style.css') }}">
    <script src="https://kit.fontawesome.com/66aa7c98b3.js" crossorigin="anonymous"></script>
</head>

<body>

    <div class="card">
        <div class="img-bx">
            <img src="https://cdn.idntimes.com/content-images/post/20240318/dphoto-shared-by-on-february-07-2024-tagging-at-boucheron-may-be-an-image-of-1-person-hair-top-and-text-8d8835275adc240963406ddee1a65a90_600x400.jpg" alt="Image description" />
        </div>
        <div class="content">
            <div class="detail">
                <h2><?= $nama ?><br /><span><?= $npm ?></span><br /><span><?= $nama_kelas ?? 'Kelas tidak ditemukan' ?></span></h2>
            </div>
        </div>
    </div>

</body>

</html>
