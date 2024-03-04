<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 300px;
        }

        label {
            display: block;
            margin-bottom: 8px;
        }

        input, select {
            width: 100%;
            padding: 8px;
            margin-bottom: 16px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #4caf50;
            color: #fff;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
    <title>Form Nilai</title>
</head>
<body>

    <form method="POST" action="form_nilai.php">
        <label for="nama">Nama:</label>
        <input type="text" name="nama" id="nama" value="" size="30" />

        <label for="matkul">Mata Kuliah:</label>
        <select name="matkul" id="matkul">
            <option value="DDP">Dasar-Dasar Pemrograman</option>
            <option value="BDI">Basis Data I</option>
            <option value="WEB1">Pemrograman Web</option>
        </select>

        <label for="nilai_uts">Nilai UTS:</label>
        <input type="text" name="nilai_uts" id="nilai_uts" value="" size="6" />

        <label for="nilai_uas">Nilai UAS:</label>
        <input type="text" name="nilai_uas" id="nilai_uas" value="" size="6" />

        <label for="nilai_tugas">Nilai Tugas/Praktikum:</label>
        <input type="text" name="nilai_tugas" id="nilai_tugas" value="" size="6" />

        <input type="submit" value="Simpan" name="proses" />
    </form>

    

</body>
</html>