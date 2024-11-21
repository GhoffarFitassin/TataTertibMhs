<!DOCTYPE html>
<html lang="id">
<head>
  <!-- Design by foolishdeveloper.com -->
    <title>Login Dosen</title>
    <link rel="stylesheet" href="../css/login.css">
    <link rel="stylesheet" href="../css/global.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" />
    <script src="https://unpkg.com/feather-icons"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
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
            <h1>login dosen</h1>
        </div>
    <form action="" method="POST">
        <h3>Masuk</h3>
        <div class="user">
            <div class="NIM-button" onclick="redirectToPage('login_mahasiswa.html')">NIM</div>
            <div class="NIP-button-active" onclick="redirectToPage('login_dosen.html')">NIP</div>
          </div>
        <label for="username">NIP</label>
        <input type="text" placeholder="NIM" id="username">

        <label for="password">Kata Sandi</label>
        <input type="password" placeholder="Password" id="password">

        <button>Masuk</button>
    </form>
</div>
</body>
<script>
    function redirectToPage(page) {
        window.location.href = page;
    }
</script>
</html>
