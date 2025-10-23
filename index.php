<?php 
    $pageTitle = "Anasayfa | Kökten AgroTech";
    include 'includes/head.php'; 
    include 'includes/header.php';
?>
<style>
.about-short-content .section-title {
    text-align: left;
    margin: 1px auto;
}
.about-short-image img {
    width: 90%;
    border-radius: 20px;
}
.about-short-image, .about-short-content {
    flex: 1;
}
.about-short.container {
    max-width: 1500px;      /* Konteynerin maksimum genişliği */
    display: flex;          /* Resim ve metni yan yana getir */
    align-items: center;    /* Dikey ortalama */
    gap: 40px;              /* Resim ve metin arası boşluk */
    flex-wrap: wrap;        /* Ekran küçülürse alt alta gelsin */
    padding: 0 20px;   
    border-radius: 20px ;     /* Kenarlardan iç boşluk */
}
</style>
<main>
    <section class="hero" style="background-image: url('assets/img/7c2fdf15-85d6-412e-b968-049c7d9c5ad0.png');">
        <div class="hero-overlay"></div>
        <div class="hero-content">
            <h1>Verimli Toprak İçin Modern Ekipman</h1>
            <p>Tarlada Fark Yaratan Güç!</p>
            <a href="urunler.php" class="btn btn-primary">Ürünlerimizi İnceleyin</a>
        </div>
    </section>

    <section class="featured-products container">
        <h2 class="section-title">Öne Çıkan Ürünler</h2>
        <div class="product-grid">
            <div class="product-card">
                <img src="assets/img/IMG-20251022-WA0005.jpg" alt="Tarım Römorku">
                <div class="product-info">
                    <h3>Araç Arkası Römork</h3>
                    <p>Dayanıklı ve yüksek taşıma kapasiteli römorklarımızla verimliliğinizi artırın.</p>
                    <a href="urunler.php#romorklar" class="btn btn-secondary">Detaylar</a>
                </div>
            </div>
            <div class="product-card">
                <img src="assets/img/IMG-20251022-WA0008.jpg" alt="Balya Makineleri">
                <div class="product-info">
                    <h3>Çift Merdaneli Tırmık</h3>
                    <p>Yüksek performanslı kürüm ile hasat sürecinizi kolaylaştırın.</p>
                    <a href="urunler.php#balya" class="btn btn-secondary">Detaylar</a>
                </div>
            </div>
            <div class="product-card">
                <img src="assets/img/IMG-20251022-WA0009.jpg" alt="Katı Yakıt Kazanları">
                <div class="product-info">
                    <h3>Yeni Sezon Ürünleri</h3>
                    <p>Teknolojiyle Tecrübeyi Buluşturduğumuz Yeni Ürünlerimize Göz Atın!</p>
                    <a href="urunler.php#kazanlar" class="btn btn-secondary">Detaylar</a>
                </div>
            </div>
        </div>
    </section>

    <section class="about-short container">
         <div class="about-short-image">
            <img src="assets/img/duster.jpg" alt="Kökten AgroTech Fabrika">
        </div>
        <div class="about-short-content">
            <h2 class="section-title">40 Yılı Aşkın Tecrübe</h2>
            <p>Kökten AgroTech olarak, kurulduğumuz günden bu yana kalite ve müşteri memnuniyetini en üst sırada tutuyoruz. Modern üretim tesislerimiz ve uzman ekibimizle sektörde fark yaratıyoruz.</p>
            <br>
            <a href="hakkimizda.php" class="btn btn-primary">Daha Fazlasını Keşfet</a>
        </div>
    </section>
    <br>
</main>
<?php include 'includes/footer.php'; ?>