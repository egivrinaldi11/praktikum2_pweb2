<?php
$proses = isset($_POST['proses']) ? $_POST['proses'] : '';
$nama_siswa = isset($_POST['nama']) ? $_POST['nama'] : '';
$mata_kuliah = isset($_POST['matkul']) ? $_POST['matkul'] : '';
$nilai_uts = isset($_POST['nilai_uts']) ? $_POST['nilai_uts'] : '';
$nilai_uas = isset($_POST['nilai_uas']) ? $_POST['nilai_uas'] : '';
$nilai_tugas = isset($_POST['nilai_tugas']) ? $_POST['nilai_tugas'] : '';

// Menghitung nilai akhir dengan bobot presentase
$nilai_akhir = (0.3 * $nilai_uts) + (0.35 * $nilai_uas) + (0.35 * $nilai_tugas);

// Menentukan kondisi keterangan
if ($nilai_akhir > 55) {
    $keterangan = 'Lulus';
} else {
    $keterangan = 'Tidak Lulus';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Student Data</title>
</head>
<body>
    <div class="container mt-5">
        <h2>Data Mahasiswa</h2>
        <form method="POST" action="">
            <!-- ... (your form fields) ... -->

            <button type="submit" name="proses" value="proses" class="btn btn-primary">Proses</button>
        </form>
        <br>

        <table class="table">
            <tr>
                <th>Field</th>
                <th>Value</th>
            </tr>
            <tr>
                <td>Proses</td>
                <td><?php echo $proses; ?></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td><?php echo $nama_siswa; ?></td>
            </tr>
            <tr>
                <td>Mata Kuliah</td>
                <td><?php echo $mata_kuliah; ?></td>
            </tr>
            <tr>
                <td>Nilai UTS</td>
                <td><?php echo $nilai_uts; ?></td>
            </tr>
            <tr>
                <td>Nilai UAS</td>
                <td><?php echo $nilai_uas; ?></td>
            </tr>
            <tr>
                <td>Nilai Tugas Praktikum</td>
                <td><?php echo $nilai_tugas; ?></td>
            </tr>
            <tr>
                <td>Nilai Akhir</td>
                <td><?php echo $nilai_akhir; ?></td>
            </tr>
            <tr>
                <td>Keterangan</td>
                <td><?php echo $keterangan; ?></td>
            </tr>
        </table>
    </div>

    <!-- Bootstrap JS and Popper.js -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>