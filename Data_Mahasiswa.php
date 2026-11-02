<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 40px; background-color: #f4f6f8; }
        h2 { text-align: center; color: #333; }
        table { border-collapse: collapse; width: 70%; margin: 20px auto; background: #fff; }
        th, td { border: 1px solid #999; padding: 10px 14px; text-align: left; }
        th { background-color: #4389e4; color: #fff; text-align: center; }
        td.center { text-align: center; }
        tr:nth-child(even) { background-color: #f2f7ff; }
    </style>
</head>
<body>

<?php
$mahasiswa = [
    ["nama" => "Adriyan Sahpitran",    "kode_kelas" => "17.3A.03", "nim" => "17250049"],
    ["nama" => "Widya Putri Rahayu", "kode_kelas" => "17.3A.03", "nim" => "17250072"],
    ["nama" => "Ridho Firmansyah",   "kode_kelas" => "17.3A.03", "nim" => "17250199"],
    ["nama" => "Rangga Aji Pramudya",   "kode_kelas" => "17.3A.03", "nim" => "17250206"],
    ["nama" => "Fernando Hasudungan Siregar",  "kode_kelas" => "17.3A.03", "nim" => "17250232"],
    ["nama" => "Duta Arrasyid",    "kode_kelas" => "17.3A.03", "nim" => "17250278"],
    ["nama" => "Glen Justin Maringan Simarmata",    "kode_kelas" => "17.3A.03", "nim" => "17250323"],
    ["nama" => "Renal Ali Syahid",    "kode_kelas" => "17.3A.03", "nim" => "17250313"],
    ["nama" => "Arla Maulana Eza Nugraha",    "kode_kelas" => "17.3A.03", "nim" => "17250371"],
    ["nama" => "Kevin Nabil Noor Rahman",    "kode_kelas" => "17.3A.03", "nim" => "17250374"],
    ["nama" => "Ahmad Fauzan Rizki",    "kode_kelas" => "17.3A.03", "nim" => "17250400"],
    ["nama" => "Ahmad Abu Jihad Bilhaq",    "kode_kelas" => "17.3A.03", "nim" => "17250439"],
    ["nama" => "Intan Purnamasari",    "kode_kelas" => "17.3A.03", "nim" => "17250561"],
    ["nama" => "Abdillah",    "kode_kelas" => "17.3A.03", "nim" => "17250571"],
    ["nama" => "Sefti Jikas Mu’afari",    "kode_kelas" => "17.3A.03", "nim" => "17250513"],
    ["nama" => "Ali Muslih Alfauzan",    "kode_kelas" => "17.3A.03", "nim" => "17250654"],
];

// Judul halaman
echo "<h2>Daftar Data Mahasiswa</h2>";

// Membuat tabel
echo "<table>";
echo "<tr>";
echo "<th>No</th>";
echo "<th>Nama</th>";
echo "<th>Kode Kelas</th>";
echo "<th>NIM</th>";
echo "</tr>";

// Menampilkan isi array dengan perulangan foreach
$no = 1;
foreach ($mahasiswa as $mhs) {
    echo "<tr>";
    echo "<td class='center'>" . $no . "</td>";
    echo "<td>" . $mhs["nama"] . "</td>";
    echo "<td class='center'>" . $mhs["kode_kelas"] . "</td>";
    echo "<td class='center'>" . $mhs["nim"] . "</td>";
    echo "</tr>";
    $no++;
}

echo "</table>";

// Menampilkan jumlah data dengan fungsi count()
echo "<p style='text-align:center;'>Total mahasiswa: " . count($mahasiswa) . " orang</p>";
?>

</body>
</html>