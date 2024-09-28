<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #ffe6f2;
            color: #333;
        }

        form {
            width: 300px;
            margin: 50px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
        }

        input[type="text"],
        select {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
            border: 2px solid #ff99cc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        button {
            width: 100%;
            padding: 10px;
            background-color: #ff66b2;
            border: none;
            color: white;
            font-size: 16px;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        button:hover {
            background-color: #ff3385;
        }

        h2 {
            text-align: center;
            color: #ff66b2;
        }
    </style>
</head>

<body>
    <form action="{{ route('user.store') }}" method="POST">
        @csrf
        <h2>Create User</h2>

        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama">

        <label for="npm">NPM:</label>
        <input type="text" id="npm" name="npm">

        <label for="kelas">Kelas:</label>
        <select name="kelas_id" id="kelas_id">
            @foreach ($kelas as $kelasItem)
            <option value="{{ $kelasItem->id }}">{{ $kelasItem->nama_kelas }}</option>
            @endforeach
        </select>

        <button type="submit">Submit</button>
    </form>
    
</body>

</html>