<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pelanggaran</title>
    <link rel="stylesheet" href="../css/global.css">
    <link rel="stylesheet" href="../css/perlanggaranPage.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">
</head>

<body>
    <div class="sidebar">
        <img class="logo" src="../img/logo copy.png" alt="logo">
        <div class="logo-separator"></div>
        <ul>
            <li><a href="homepage.php"><i class="fa-solid fa-house"></i></a></li>
            <li><a href="listTatib.php"><i class="fa-solid fa-book"></i></a></li>
            <li class="active"><a href="pelanggaranpage.php"><i class="fa-solid fa-hand"></i></i></a></li>
            <li><a href=""><i class="fa-solid fa-bell"></i></a></li>
        </ul>
    </div>

    <div class="content">
            <div class="header">
                <h1>Pelanggaran</h1>
            </div>
            <div class="profile">
                <p><strong>Nama :Ahmad Rusdi Ambarawa</strong></p>
                <p><strong>NIM : 2341010203</strong></p>
                <p><strong>Semester : 2</strong></p>
            </div>

            <h3>Tabel Pelanggaran</h3>
            <div class="table-container">
                <table>
                    <thead>
                        <tr>
                            <th>Pelanggar</th>
                            <th>Pelanggaran</th>
                            <th>Tingkat Pelanggaran</th>
                            <th>Dosen Pengampu</th>
                            <th>Tugas Khusus</th>
                            <th>Surat</th>
                            <th>Poin</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Ahmad Rusdi Ambarawa</td>
                            <td>Berkomunikasi dengan tidak sopan, baik tertulis atau tidak tertulis kepada mahasiswa, dosen, karyawan, atau orang lain</td>
                            <td>V</td>
                            <td>Dr. Wawan Agung S.pd</td>
                            <td>-</td>
                            <td>Surat Pernyataan tidak mengulangi lagi</td>
                            <td>2 Poin</td>
                            <td>On Progress</td>
                        </tr>
                    </tbody>
                </table>
                <div class="statement-button">
                <button>Kumpulkan</button>
                </div>
                
            </div>
    
            
            <div class="footer">
                <p>© Copyright 2024 web Tatib. All Rights Reserved.</p>
                <img class="footer-logo" src="../img/Logo name.png" alt="">
            </div>
        </div>
</body>
</html>