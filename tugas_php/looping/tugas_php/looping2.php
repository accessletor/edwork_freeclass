<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>looping tabel</title>
  <style>
    table {  
      width: 300px;
      text-align: center;
      margin: auto;
    }
    tr:nth-child(even) {
      background-color: #f2f2f2;
    }
    th {
      background-color: #4072e6;
      color: white;
    }
  </style>
</head>
<body>
  <?php
// Membuat tabel
  echo "<table border='1'>";
// Membuat baris untuk header
  echo "<tr><th>No</th><th>Nama</th><th>Kelas</th></tr>";
// Looping untuk baris
  for ($i = 1; $i <= 10; $i++) {
  // Membuat baris data
    echo "<tr>";
  // Mencetak nomor urut pada kolom pertama
    echo "<td>" . $i . "</td>";
  // Mencetak nama pada kolom kedua
    echo "<td>" . "Nama ke " . $i . "</td>";
  // Mencetak kelas pada kolom ketiga
    echo "<td>" . (11 - $i) . "</td>";
  // Menutup baris data
    echo "</tr>";
  }
// Menutup tabel
  echo "</table>";
  ?>
</body>
</html>