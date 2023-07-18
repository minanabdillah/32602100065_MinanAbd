<!DOCTYPE html>
<html>
<head>
    <title>BAB 3</title>
    <link rel="stylesheet" type="text/css" href="/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:400,500&display=swap">
</head>
<body>
    <header>
        <!-- Header Anda -->
        <h1>Lanang Shakti Prayoga</h1>
    </header>

    <div class="banner">
      <h1>Welcome to our Website!</h1>
      <p>Discover amazing products and services.</p>
    </div>

    <nav>
        <!-- Navigasi Anda -->
        <ul>
            <li><a href="/profile">Halaman Profil</a></li>
            <li><a href="/experience">Halaman Pengalaman</a></li>
        </ul>
    </nav>


    <main>
        <!-- Konten Utama akan dirender di sini -->
        <?= $this->renderSection('content') ?>
    </main>

    <footer>
        <!-- Footer Anda -->
        <!-- <div>dibuat oleh minan</div> -->
        <div class="description">Web Developer</div>
        <p class="about">Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
        <div class="icon">
            <i class="fas fa-heart"></i>
        </div>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"></script>
</body>
</html>