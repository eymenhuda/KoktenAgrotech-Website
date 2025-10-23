<?php $currentPage = basename($_SERVER['SCRIPT_NAME']); ?>
<header class="main-header">
    <div class="container">
        <a href="index.php" class="logo-container">
            <img src="assets/img/logo.png" alt="Kökten Agrotech Logo" class="logo">
        </a>
        <nav class="main-nav">
            <ul>
                <li><a href="index.php" class="<?php echo ($currentPage == 'index.php') ? 'active' : ''; ?>">Anasayfa</a></li>
                <li><a href="hakkimizda.php" class="<?php echo ($currentPage == 'hakkimizda.php') ? 'active' : ''; ?>">Hakkımızda</a></li>
                <li><a href="urunler.php" class="<?php echo ($currentPage == 'urunler.php') ? 'active' : ''; ?>">Ürünler</a></li>
                <li><a href="iletisim.php" class="<?php echo ($currentPage == 'iletisim.php') ? 'active' : ''; ?>">İletişim</a></li>
            </ul>
        </nav>
		<!--
        <div class="header-contact">
            <i class="fas fa-phone"></i>
            <span>+90 000 000 00 00</span>
        </div>
		-->
    </div>
</header>
<link rel="stylesheet" href="assets/css/header_css.css">