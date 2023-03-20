<!DOCTYPE html>
<html>
<head>
    <title>Kalkulator BMI</title>
</head>
<body>
    <h2>Kalkulator BMI</h2>
    <form action="" method="POST">
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama" required>
        <br><br>
        <label for="tinggi">Tinggi (cm):</label>
        <input type="number" id="tinggi" name="tinggi" min="1" max="300" required>
        <br><br>
        <label for="berat">Berat (kg):</label>
        <input type="number" id="berat" name="berat" min="1" max="500" required>
        <br><br>
        <input type="submit" value="Hitung">
    </form>

    <?php
    // cek apakah form telah disubmit
    if (isset($_POST['nama']) && isset($_POST['tinggi']) && isset($_POST['berat'])) {
        
        // ambil data dari form
        $nama = $_POST['nama'];
        $tinggi = $_POST['tinggi'] / 100; // konversi cm ke m
        $berat = $_POST['berat'];

        // hitung BMI
        $bmi = $berat / ($tinggi * $tinggi);

        // tentukan kategori BMI
        if ($bmi < 18.5) {
            $kategori = "kurus";
        } elseif ($bmi < 25) {
            $kategori = "sedang";
        } elseif ($bmi < 30) {
            $kategori = "gemuk";
        } else {
            $kategori = "obesitas";
        }

        // tampilkan hasil
        echo "<br><br>";
        echo "Halo, " . $nama . ", nilai BMI anda adalah " . round($bmi, 1) . ", Anda termasuk " . $kategori . ".";
    }
    ?>
</body>
</html>